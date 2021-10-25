<?php

namespace App\Http\Controllers;

use App\Models\rent;
use App\Models\booking;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;



class bookingController extends Controller
{
    //

    public function beforeBookEnrolled(Request $request)
    {

        // $cancelRedirect = '';
        // dd(Cookie::get('asd'));
        // dd($request->cookie('qwe'));
        $req = session('form');


        // dd('$req');

     

        // dd($str);

        $str2 = '';
        foreach ($req as $key => $value) {
            // $str2 = explode('=', $str[$i]);

            if ($key === 'name') {
                $name = $value;
                $name = Str::replaceArray('+', [' '], $name);
            } elseif ($key === 'email') {
                $email = $value;
                $email = Str::replaceArray('%40', ['@'], $email);
            } elseif ($key === 'contact') {
                $contact = $value;
            } elseif ($key === 'address') {
                $address = $value;
            } elseif ($key === 'hour') {
                $hour = $value;
            } elseif ($key === 'min') {
                $min = $value;
            } elseif ($key === 'meridiem') {
                $meridiem = $value;
            } elseif ($key === 'city') {
                $city = $value;
            } elseif ($key === 'redirector') {
                $redirect = $value;
            } elseif ($key === 'cancelRedirect') {
                $cancelRedirect = $value;
                // dd($cancelRedirect);
            } elseif ($key === 'sit') {
                $sit = $value;
                // dd($cancelRedirect);
            } elseif ($key === 'rentType') {
                $type = $value;
                // dd($cancelRedirect);
            }
        }
        // dd($request);


        if ($redirect != 'schoolOfficePickupForm') {
            $time = $hour . ':' . $min . ' ' . $meridiem;
        } else {
            $time = null;
        }
        $commonField = [
            'Name' => $name, 'Email' => $email, 'Contact' => $contact, 'Address' => $request['address'],
            'Time' => $time, 'City' => $city, 'redirect' => $redirect, 'redirect2' => 'rent_a_car_redirector', 'Passenger Sits' => $sit, 'rentType' => $type,
            'action' => 'book_confirm_rent_car'
        ];
        // dd($commonField);

        foreach ($req as $key => $value) {
            // $str2 = explode('=', $str[$i]);

            if ($key === 'date') {
                $date = $value;
            } elseif ($key === 'rent_duration') {
                $rent_duration = $value;
            } elseif ($key === 'date') {
                $txtDate = $value;
            } elseif ($key === 'airport') {
                $airport = $value;
            } elseif ($key === 'schoolName') {
                $schoolName = $value;
            } elseif ($key === 'schoolAddress') {
                $schoolAddress = $value;
            } elseif ($key === 'startingHour') {
                $startingHour = $value;
            } elseif ($key === 'startingMin') {
                $startingMin = $value;
            } elseif ($key === 'startingMeridiem') {
                $startingMeridiem = $value;
            } elseif ($key === 'endingHour') {
                $endingHour = $value;
            } elseif ($key === 'endingMin') {
                $endingMin = $value;
            } elseif ($key === 'endingMeridiem') {
                $endingMeridiem = $value;
            }
        }




        if ($redirect === 'hourlyRentForm') {

            $uncommonAttributes = ['Pickup_Date' => $date, 'Rent_Duration(Hours)' => $rent_duration, 'Pickup_Time' => $time];
        } elseif ($redirect === 'airportTransferForm') {

            $uncommonAttributes = ['Pickup_Date' => $date, 'airport_name' => $airport];
        } elseif ($redirect === 'monthlyCarForm') {

            $uncommonAttributes = ['Pickup_Date' => $date];
        } elseif ($redirect === 'wholeDayForm') {

            $uncommonAttributes = ['Pickup_Date' => $date];
        } elseif ($redirect === 'schoolOfficePickupForm') {

            $uncommonAttributes = [
                'Pickup_Date' => $date, 'school_name' => $schoolName, 'school_address' => $schoolAddress, 'starting_hour' => $startingHour, 'starting_min' => $startingMin,
                'starting_meridiem' => $startingMeridiem, 'ending_hour' => $endingHour, 'ending_min' => $endingMin, 'ending_meridiem' => $endingMeridiem
            ];
        } elseif ($redirect === 'weddingRentForm') {
            //
            $uncommonAttributes = ['Pickup_Date' => $date];
        }

        // $carNoPlate = []
        // dd($uncommonAttributes);
        return view('UI_S.confirm_booking', ['commonField' => $commonField, 'uncommonAttributes' => $uncommonAttributes, 'cancelRedirect' => $cancelRedirect, 'carNoPlate' => $request->carNoPlate, 'carRegTo' => $request->carRegTo]);
    }




    public function rentCar(Request $request)
    {
        // $booking_id1 = session('LoggedUser'); $request->carNoPlate;
        // $booking_id2 =  $request->carNoPlate;


        // dd($request->commonField);
        // $uncommonAttributes = ['Pickup_Date1' => 'This is working1', 'Pickup_Date2' => 'This is working2', 'Pickup_Date3' => 'This is working3'];
        // $request->$uncommonAttributes->implode('product', ', ');



        // dd(implode("::", $request->uncommonAttributes));
        
        $booking = new booking;
        $booking->booking_id1 = session('LoggedUser');
        $booking->booking_id2 = $request->carNoPlate;
        $booking->cus_email = $request->commonField[1];
        $booking->renter_NID = $request->carRegTo;
        $booking->car_no_plate = $request->carNoPlate;
        // $booking->price = $booking_id;
        $booking->active = false;

        // dd($request->commonField[6]);
        $rent = new rent;
        $rent->booking_id1 = session('LoggedUser');
        $rent->booking_id2 = $request->carNoPlate;
        $rent->pickup_time = ($request->commonField[4] != null ? $request->commonField[4] :
        $request->uncommonAttributes["'starting_hour'"] . ':' . $request->uncommonAttributes["'starting_min'"] . ' ' . $request->uncommonAttributes["'starting_meridiem'"]);
        $rent->pickup_date = $request->uncommonAttributes["'Pickup_Date'"];
        $rent->pickup_address = $request->commonField[3];
        $rent->pickup_city = $request->commonField[5];
        

        $type = $request->commonField[9];
        if ($type == 'hourly') {
            $rent->rent_type = 'Hourly';
            $rent->rent_duration = $request->uncommonAttributes["'Rent_Duration(Hours)'"];
            $booking->price = strval($request->uncommonAttributes["'Rent_Duration(Hours)'"]) * 500;
            // dd($rent);
            // echo "<script> alert('Your rent request has been successfully sent.😊')</script>";
        } elseif ($type == 'airport') {
            // dd('asdasd');
            $rent->rent_type = 'Airport Transfer';
            $booking->price = 2000;
        } elseif ($type == 'whole_day') {
            $rent->rent_type = 'Whole Day';
            $booking->price = 10000;
        } elseif ($type == 'monthly') {
            $rent->rent_type = 'Monthly';
            if ($request->commonField[8] > 4) {
                $booking->price = 20000;
            } else {
                $booking->price = 10000;
            }
        } elseif ($type == 'school_office') {
            $rent->rent_type = 'School/Office';
            $rent->s_o_name = $request->uncommonAttributes["'school_name'"];
            $rent->s_o_address = $request->uncommonAttributes["'school_address'"];
            $s_time =  $request->uncommonAttributes["'starting_hour'"] . ':' . $request->uncommonAttributes["'starting_min'"] . ' ' . $request->uncommonAttributes["'starting_meridiem'"];
            $rent->s_o_sarting_time = $s_time;
            $e_time =  $request->uncommonAttributes["'ending_hour'"] . ':' . $request->uncommonAttributes["'ending_min'"] . ' ' . $request->uncommonAttributes["'ending_meridiem'"];
            $rent->s_o_ending_time = $e_time;
            if ($request->commonField[8] > 4) {
                $booking->price = 10000;
            } else {
                $booking->price = 5000;
            }
        } elseif ($type == 'wedding') {
            $rent->rent_type = 'Wedding';
            if ($request->commonField[8] > 4) {
                $booking->price = 8000;
            } else {
                $booking->price = 3000;
            }
        }
        // echo 'All Done';

        $rent->save();
        $booking->save();

        session()->pull('form');
        return redirect()->route('rent')->with('done', 'Done!');
        
        // return view('UI_S.rentACar.rentACar', ['done' => true]);
    }
}


/*
<input type="hidden" name="rentType" value="hourly">
<input type="hidden" name="rentType" value="airport">
<input type="hidden" name="rentType" value="whole_day">
<input type="hidden" name="rentType" value="monthly">
<input type="hidden" name="rentType" value="school_office">
<input type="hidden" name="rentType" value="wedding">
*/
