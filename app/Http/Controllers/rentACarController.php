<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;

class rentACarController extends Controller
{
    //
    public function rentACarToPageLoader($redirect)
    {
        $user = Customer::where('email', '=', session('LoggedUser'))->first();

        $redirect = "UI_S.rentACar." . $redirect;
        // return view($redirect)->with('city', $user->city);
        // return view($redirect, ['city' => $user->city, 'number' => $user->contact_number, 'fname' => $user->fname, 'lname' => $user->lname]);
        return view($redirect, [
            'city' => $user->city, 'number' => $user->contact_number, 'fname' => $user->fname, 'lname' => $user->lname,
            'email' => $user->email, 'city' => $user->city
        ]);
    }

    public  function carChooser(Request $request)
    {
        //    dd($request->all());
        // Storage::makeDirectory("asd");
        // $directory = File::makeDirectory("asd", true, true);
        // $directory = File::makeDirectory("asd");
        $cars = DB::table('cars')
            ->where('isVerified', true)
            ->get();

        $carTypes = DB::table('cars')
            ->select('type')
            ->distinct()
            ->get();


        // dd($carTypes);
        $data = ['request', $request->all()];
        session()->put('form', $request->all());


        // dd($carTypes);
        // if (!File::exists("asd")) {
        //     $directory = File::makeDirectory("asd");
        // }
        // Storage::putFile('public',"asd");
        // dd($request->all());
        // $response = new Response("Hello World");
        // $response->withCookie(cookie('name', $data, 5));
        // $asd = Cookie::make('qwe', 'valueasd', 1);

        // return $asd;
        // return $response;
        // return Cookie::get('name');

        // dd($request->cookie('name'));


        // dd(Cookie::get('value'));




        // $response->withCookie(Cookie::make('name', 'value', 5));

        return view('UI_S.rentACar.chooseCar', ['cars' => $cars, 'types' => $carTypes, 'address' => $request->all()['address']]);
        // return view('UI_S.rentACar.chooseCar', ['request', $data], [ 'cars' => $cars, 'types' => $carTypes, 'address' => $request->all()['address']]);
    }

    public function load_data(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('customers')->get();
            $output = '';
            foreach ($data as $perData) {
                $output .= '<p>' . $perData->email . '</p>';
                $output .= '<p>' . $request->id . '</p>';
            }
            echo $output;
        }
    }

    public function load_doctorList(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('customers')->get();
            $output = '';
            // dd($request);
            if ($request->id === 'Three') {

                foreach ($data as $perData) {
                    // if ($request->email == $perData->email) {
                    $output .= '<option>' . $perData->fname . '</option>';
                    $output .= '<option>' . $perData->email . '</option>';
                    // }
                }
            } else {
                $output = '<option>Nothing to Display</option>';
            }
            echo $output;
        }
    }
}
