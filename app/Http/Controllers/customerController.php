<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class customerController extends Controller
{
    //
    public function index()
    {
        //
        $bookings = booking::where('booking_id1', '=', session('LoggedUser'))->get();


        $requests1 = DB::table('bookings')
            ->where('booking_id1', session('LoggedUser'))
            ->where('active', '!=', 3)
            ->get();

        $requests2 = DB::table('bookings')
            ->where('booking_id1', session('LoggedUser'))
            ->where('active', 3)
            ->get();



        $data1 = ['bookings' => $requests1];
        $data2 = ['bookings2' => $requests2];
        // dd($data2);
        // dd($rents->pickup_address);
        /*foreach ($rents as $key => $value) {
            $asd = $value['booking_id'];
            echo  explode('#', $asd)[0]. '<br>'. '<br>'. '<br>';
        }*/
        // return view('UI_S.customer.customerDashboard', ['rents' => $data]);
        return view('UI_S.customer.customerDashboard', $data1, $data2);
    }



    public function cancelReq($no_plate)
    {
        //

        //    dd($no_plate);

        DB::table('bookings')
            ->where('booking_id1', session('LoggedUser'))
            ->where('booking_id2',  $no_plate)
            ->delete();



        return redirect()->back();
    }
}
