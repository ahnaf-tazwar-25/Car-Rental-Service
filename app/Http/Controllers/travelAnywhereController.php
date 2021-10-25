<?php

namespace App\Http\Controllers;

use App\Models\rent;
use App\Models\booking;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class travelAnywhereController extends Controller
{
    //
    public function travelBooker($bookType)
    {
        if (session()->has('LoggedUser')) {
            $user = Customer::where('email', '=', session('LoggedUser'))->first();
            if ($bookType == 'one_way_travel') {
                $bookType = 'One Way Travel';
                $data = [
                    'travelType' => 'One Way', 'city' => $user->city, 'number' => $user->contact_number, 'fname' => $user->fname, 'lname' => $user->lname,
                    'email' => $user->email, 'city' => $user->city, 'bookType' => $bookType, 'imgLink' => 'http://127.0.0.1:8000/images/dhaka-chattagram.jpg'
                ];
                // return view('UI_S.travelAnywhere.travelForm', $data);
            } else {
                $bookType = 'Up-Down Travel';
                $data = [
                    'travelType' => 'Back To Back', 'city' => $user->city, 'number' => $user->contact_number, 'fname' => $user->fname, 'lname' => $user->lname,
                    'email' => $user->email, 'city' => $user->city, 'bookType' => $bookType, 'imgLink' => 'http://127.0.0.1:8000/images/dhaka-chattagram.jpg'
                ];
                // return view('UI_S.travelAnywhere.travelForm');
            }
            return view('UI_S.travelAnywhere.travelForm', $data);
        }
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

        // dd($request->all());
        session()->put('form', $request->all());

        // dd($request->all());
        return view('UI_S.travelAnywhere.chooseCarTravel', ['cars' => $cars, 'types' => $carTypes, 'address' => $request->all()['address']]);
    }


    public function confirmForm(Request $request)
    {
        $req = session('form');

        // dd($req);

        // dd($request->all());
        $time = $req['hour'] . ':' . $req['min'] . ' ' . $req['meridiem'];
        $commonField = [
            'Name' => $req['name'], 'Email' => $req['email'], 'Contact' => $req['phone_number'], 'Pickup_Date' => $req['date'],
            'Address' => $request->address, 'City' => $req['city'], 'redirect' => $req['redirect2'], 'redirect2' => 'tourTo',
            'Passenger Sits' => $req['sit'], 'rentType' => 'Travel', 'action' => 'travel_to_book', 'Pickup Time' => $time
        ];

        $travelType = ['Book Type' => $req['travelType'], 'To City' => $req['toCity']];
        return view('UI_S.confirm_booking', ['commonField' => $commonField, 'uncommonAttributes' => $travelType, 'cancelRedirect' => 'travel', 'carNoPlate' => $request->carNoPlate, 'carRegTo' => $request->carRegTo]);
    }

    public function bookTravel(Request $request)
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

        if($req['uncommonAttributes']["'Book Type'"] == 'Up-Down Travel'){
            $booking->price = 6000;
        }
        else{
            if(session()->has('puja')){

                $booking->price = 2500 * 0.25;
            }
            else{
                
                $booking->price = 2500;
            }
        }


        $rent = new rent;
        $rent->booking_id1 = session('LoggedUser');
        $rent->booking_id2 = $request->carNoPlate;
        $rent->pickup_time = $req['commonField'][11];
        $rent->pickup_date = $req['commonField'][3];
        $rent->pickup_address = $req['commonField'][4];
        $rent->pickup_city = $req['commonField'][5];
        // $rent->tour_to = $req['commonField'][6];
        $rent->rent_type = $req['uncommonAttributes']["'Book Type'"];
        $rent->tour_des_addresses = $req['uncommonAttributes']["'To City'"];

        // dd($booking);
        // dd($rent);
        $booking->save(); 
        $rent->save();
        session()->pull('puja');
        return redirect()->route('customerDashboard')->with('done', 'Done!');
    }
}


/*

  "name" => "Ahnaf Tazwar"
  "email" => "1731462@iub.edu.bd"
  "contact" => "01825084388"
  "sit" => "4"
  "date" => "2021-09-24"
  "airport" => "Hazrat Shahjalal International Airport"
  "hour" => "9"
  "min" => "25"
  "meridiem" => "AM"
  "city" => "Rajshahi"
  "address" => "asdasd"

*/