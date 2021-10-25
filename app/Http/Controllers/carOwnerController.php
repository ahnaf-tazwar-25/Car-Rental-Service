<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\Car;
use App\Models\CarOwners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class carOwnerController extends Controller
{
    //
    public function index()
    {
        // session()->pull('LoggedNID');
        // session()->put('LoggedNID', '17314621202');

        /*
        if (session()->has('LoggedUser')) {
            echo('This is logged user: '.session('LoggedUser')).'<br>';
        }
        if (session()->has('fname')) {
            echo('This is fname: '.session('fname')).'<br>';
        }
        if (session()->has('lname')) {
            echo('This is lname: '.session('lname')).'<br>';
        }
        if (session()->has('LoggedNID')) {
            echo('This is LoggedNID: '.session('LoggedNID')).'<br>';
        }*/
        // $user = Car::where('reg_to', '=', session('LoggedNID'))->get();
        $cars = DB::table('cars')
            ->where('reg_to', session('LoggedNID'))
            ->where('isVerified', true)
            ->get();


        $inactives = DB::table('cars')
            ->where('reg_to', session('LoggedNID'))
            ->where('isVerified', false)
            ->get();

        $requests = DB::table('bookings')
            ->where('renter_NID', session('LoggedNID'))
            ->get();


        $data = ['cars' => $cars, 'inactives' => $inactives, 'requests' => $requests];
        return view('UI_S.earnWithCar.renterDashBoard', $data);
        // return view('home');
    }

    public function loadSettings()
    {
        $user = CarOwners::where('nID', '=', session('LoggedNID'))->first();

        // $user = Customer::where('email', '=', session('LoggedUser'))->first();
        $data = ['LoggedUserInfo' => $user];

        return view('accSettings', $data);
    }

    public function loadEditSettings()
    {

        $user = CarOwners::where('nID', '=', session('LoggedNID'))->first();

        $data = ['LoggedUserInfo' => $user];

        return view('UI_S.earnWithCar.editAccSettings', $data);
    }

    public function insertCar(Request $request)
    {
        // ddd($request);
        $this->validate($request, [
            'mfName' => 'required|max:20',
            'mdName' => 'required|max:20',
            'sit' => 'required|integer|digits_between:1,14',
            'color' => 'required|max:10',
            'plateCityName' => 'required|max:50',
            'plateRegNumber' => 'required|max:2',
            'plateVehicleNumber1' => 'required|max:2',
            'plateVehicleNumber2' => 'required|max:2',
            'plateVehicleNumber3' => 'required|max:2',
            'plateVehicleNumber4' => 'required|max:2',
            'agree' => 'required',
        ]);

        $plateDigit = $request->plateVehicleNumber1 . $request->plateVehicleNumber2 . $request->plateVehicleNumber3 . $request->plateVehicleNumber4;
        $no_plate = $request->plateCityName . '-' . $request->plateName . '_' . $request->plateRegNumber . '-' . $plateDigit;

        $new_car = new Car;
        $new_car->img = $request->img->getClientOriginalName();
        $new_car->no_plate = $no_plate;
        $new_car->reg_to = $request->nID;
        $new_car->color = $request->color;
        $new_car->type = $request->carType;
        $new_car->total_passenger_sits = $request->sit;
        $new_car->mafacture_name = $request->mfName;
        $new_car->model = $request->mdName;
        $new_car->isVerified = false;

        $name =  $no_plate . '.' . $request->img->extension();
        $request->img->move(public_path('car_pics'), $name);

        $new_car->save();


        session()->put('done', 'Done');
        return redirect()->back();
    }



    public function activeCar($value)
    {
        // dd($value);

        Car::where('no_plate', $value)
            ->update(['available_to' => null]);

        return redirect()->back();
    }

    public function inactiveCar($value)
    {
        // dd($value);

        Car::where('no_plate', $value)
            ->update(['available_to' => 'inActive']);


        return redirect()->back();
    }



    public function acceptRequest($value)
    {
        $data = explode(':', $value);
        // dd($data);


        booking::where('booking_id1', $data[0])
            ->where('booking_id2', $data[1])
            ->update(['active' => 1]);

        $email = booking::where('booking_id1', '=', $data[0])->first();
        $email = $email->cus_email;

        // dd($email);

        Car::where('no_plate', $data[1])
            ->update(['available_to' => $email]);


        return redirect()->back();
    }

    public function completeRequest($value)
    {
        // dd('asdasd');
        $data = explode(':', $value);
        // dd($data);


        booking::where('booking_id1', $data[0])
            ->where('booking_id2', $data[1])
            ->update(['active' => 3]);

        // dd($email);

        Car::where('no_plate', $data[1])
            ->update(['available_to' => null]);


        return redirect()->back();
    }
}
