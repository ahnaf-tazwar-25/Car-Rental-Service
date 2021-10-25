<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarOwners;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {

        // dd('Start');
        $rentersRequest = CarOwners::where('is_active', '=', false)->get();


        $cars = Car::where('isVerified', '=', false)->get();

        $data1 = ['rentersReq' => $rentersRequest];
        $data2 = ['cars' => $cars];

        return view('UI_S.admin.adminDashBoard', $data1, $data2);
    }


    public function verifyRenter($value)
    {
    //    dd($value);
        CarOwners::where('email', $value)
            ->update(['is_active' => true]);


        return redirect()->back();
    }



 

    public function verifyCar($value)
    {

        // dd($value);

        Car::where('no_plate', $value)
            ->update(['isVerified' => true]);

        return redirect()->back();
    }





}
