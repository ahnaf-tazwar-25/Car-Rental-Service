<?php

namespace App\Http\Controllers;

use App\Models\rent;
use App\Models\booking;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tourismController extends Controller
{
    //
    public function loadTourForm($redirect)
    {
        // $tourSubSpot = '';
        $user = Customer::where('email', '=', session('LoggedUser'))->first();
        // $userInfo = ['nothing' => null];
        if ($redirect == "Cox Bazar") {
            $redirect = "Cox's Bazar";
            $tourSubSpot = ['Inani Beach', 'Himchari', 'Maheskhali', 'Ramu'];

            $userInfo = [
                'fname' => $user->fname, 'lname' => $user->lname, 'contact' => $user->contact_number, 'email' => $user->email,
                'tourLocation' => $redirect, 'tourSubSpot' => $tourSubSpot, 'redirect2' => 'Cox Bazar', 'imgLink' => 'http://127.0.0.1:8000/images/Tourism/CoxBazar.JPG'
            ];
        } elseif ($redirect == "Sajek") {
            //
            $userInfo = [
                'fname' => $user->fname, 'lname' => $user->lname, 'contact' => $user->contact_number, 'email' => $user->email,
                'tourLocation' => $redirect, 'redirect2' => 'sajek', 'imgLink' => 'http://127.0.0.1:8000/images/Tourism/Sajek.jpg'
            ];
        } elseif ($redirect == "Bisnakandi") {
            //
            $userInfo = [
                'fname' => $user->fname, 'lname' => $user->lname, 'contact' => $user->contact_number, 'email' => $user->email,
                'tourLocation' => $redirect, 'redirect2' => 'bisnakandi', 'imgLink' => 'http://127.0.0.1:8000/images/Tourism/Bisnakandi.JPG'
            ];
        } elseif ($redirect == "Potenga_beach") {
            //
            $userInfo = [
                'fname' => $user->fname, 'lname' => $user->lname, 'contact' => $user->contact_number, 'email' => $user->email,
                'tourLocation' => $redirect, 'redirect2' => 'potenga_beach', 'imgLink' => 'http://127.0.0.1:8000/images/Tourism/patenga-sea-beach.jpg'
            ];
        } elseif ($redirect == "Boga Lake") {
            //
            $userInfo = [
                'fname' => $user->fname, 'lname' => $user->lname, 'contact' => $user->contact_number, 'email' => $user->email,
                'tourLocation' => $redirect, 'redirect2' => 'boga_lake', 'imgLink' => 'http://127.0.0.1:8000/images/Tourism/Boga_Lake.JPG'
            ];
        }
        // dd($userInfo);

        return view('UI_S.tourism.bookTourForm', $userInfo);
    }

    public function loadTourInfoPage($redirect)
    {
        $redirect = "UI_S.tourism." . $redirect;
        return view($redirect);
    }


    public function chooseCar(Request $request)
    {
        $cars = DB::table('cars')
            ->where('isVerified', true)
            ->get();
        $carTypes = DB::table('cars')
            ->select('type')
            ->distinct()
            ->get();


        session()->put('form', $request->all());

        // dd($request->all());
        return view('UI_S.tourism.chooseCarTourism', ['cars' => $cars, 'types' => $carTypes, 'address' => $request->all()['address']]);
    }



    public function bookTour(Request $request)
    {
        $req = session('form');

        $resorts = isset($req['resorts']) ? $req['resorts'] : null;

        // dd($resorts);
        // dd($request->sit);
        // dd($request->all());


        $commonField = [
            'Name' => $req['name'], 'Email' => $req['email'], 'Contact' => $req['phone_number'], 'Pickup_Date' => $req['date'],
            'Address' => $request->address, 'City' => $req['city'], 'redirect' => $req['redirect2'], 'redirect2' => 'tourTo',
            'Passenger Sits' => $request->sit, 'rentType' => 'Tourism', 'action' => 'book_confirm_tourism'
        ];
        // dd($commonField);
        // return redirect()->back();
        // dd($request->all());
        return view('UI_S.confirm_booking', ['commonField' => $commonField, 'uncommonAttributes' => $resorts, 'cancelRedirect' => 'tourism', 'carNoPlate' => $request->carNoPlate, 'carRegTo' => $request->carRegTo]);
    }
    public function enrolTour(Request $request)
    {

        $req = $request->all();

        // dd($req);
        // dd($req);

        $booking = new booking;
        $booking->booking_id1 = session('LoggedUser');
        $booking->booking_id2 = $request->carNoPlate;
        $booking->cus_email =  session('LoggedUser');
        $booking->renter_NID = $request->carRegTo;
        $booking->car_no_plate = $request->carNoPlate;
        // $booking->price = $booking_id;
        $booking->active = false;

        $booking->price = 9000;
        if ($req['commonField'][5] === 'Sajek') {
            $booking->price = 12000;
        } elseif ($req['commonField'][5] === 'Cox Bazar') {
            $booking->price = 10000;
        } elseif ($req['commonField'][5] === 'Potenga_beach') {
            $booking->price = 7000;
        } elseif ($req['commonField'][5] === 'Boga Lake') {
            $booking->price = 12000;
        } elseif ($req['commonField'][5] === 'Bisnakandi') {
            $booking->price = 5000;
        }

        
        $rent = new rent;
        $rent->booking_id1 = session('LoggedUser');
        $rent->booking_id2 = $request->carNoPlate;
        $rent->pickup_time = date('Y-m-d');
        $rent->pickup_date = $req['commonField'][3];
        $rent->pickup_address = $req['commonField'][4];
        $rent->pickup_city = $req['commonField'][5];
        $rent->tour_to = $req['commonField'][6];
        $rent->rent_type = 'Tourism';
        
        $str = '';
        foreach ($req['uncommonAttributes'] as $key => $value) {
            $str .= $value . ':';
            // echo $value;
        }

        $rent->tour_sub_addresses = $str;
        
        $rent-> save();
        $booking->save();
        // dd('All Done!');

        return redirect()->route('customerDashboard')->with('done', 'Done!');

        // return view('UI_S.confirm_booking', ['commonField' => $commonField, 'uncommonAttributes' => $resorts, 'cancelRedirect' => 'tourism', 'carNoPlate' => $request->carNoPlate, 'carRegTo' => $request->carRegTo]);
    }
}



/*
"name" => "Puja Bhowmik"
  "email" => "1730791@iub.edu.bd"
  "phone_number" => "01711012127"
  "date" => "2021-09-22"
  "city" => "Rajshahi"
  "address" => "dsfsdfdsf"




 elseif ($redirect == "Nilgiri Mountains") {
            $tourSubSpot = ['Mukurthi Peak', 'Ooty Lake', 'Avalanche Lake', 'Rangaswamy Peak', 'Doddapett Peak'];

            $userInfo = [
                'fname' => $user->fname, 'lname' => $user->lname, 'contact' => $user->contact_number, 'email' => $user->email,
                'tourLocation' => $redirect, 'tourSubSpot' => $tourSubSpot
            ];
        }

*/
