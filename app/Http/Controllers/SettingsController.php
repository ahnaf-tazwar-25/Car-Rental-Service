<?php

namespace App\Http\Controllers;

use App\Models\CarOwners;
use App\Models\Customer;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    //
    public function loadPassChange()
    {
        //
        if (session()->has('LoggedUser')) {

            $user = Customer::where('email', '=', session('LoggedUser'))->first();
        } elseif (session()->has('LoggedNID')) {

            $user = CarOwners::where('nID', '=', session('LoggedNID'))->first();
        } else {
            return redirect()->route('homes');
        }


        $data = ['LoggedUserInfo' => $user];
        // dd('loadSettings');
        return view('passChange', $data);
    }




    public function loadCustomerSettings()
    {
        //
        $user = Customer::where('email', '=', session('LoggedUser'))->first();
        $data = ['LoggedUserInfo' => $user];
        // dd('loadSettings');
        return view('accSettings', $data);
    }

    public function editCustomerSettings()
    {
        //
        $user = Customer::where('email', '=', session('LoggedUser'))->first();
        $data = ['LoggedUserInfo' => $user];
        // dd('Customer_loadEditSettings');
        return view('editAccSettings', $data);
    }

    public function editCustomerConfirm(Request $request)
    {
        //
        Customer::where('email',  session('LoggedUser'))
            ->update(['lname' => $request->lname]);

        $user = Customer::where('email', '=', session('LoggedUser'))->first();
        $data = ['LoggedUserInfo' => $user];

        return view('accSettings', $data);
    }





    public function passwordCustomerConfirm(Request $request)
    {
        //

        $this->validate($request, [
            'password' => 'required|confirmed',
        ]);



        if (session()->has('LoggedUser')) {
            $user = Customer::where('email', '=', session('LoggedUser'))->first();
            if ($user->password != $request->old_password) {
                //
                return redirect()->back()->withErrors(['passOld' => 'Password does not match!']);
            } else {


                Customer::where('email',  session('LoggedUser'))
                    ->update(['password' => $request->password]);

            }
        } elseif (session()->has('LoggedNID')) {

            $user = CarOwners::where('nID', '=', session('LoggedNID'))->first();

            if ($user->password != $request->old_password) {
                //
                return redirect()->back()->withErrors(['passOld' => 'Password does not match!']);
            } else {

                CarOwners::where('nID',  session('LoggedNID'))
                    ->update(['password' => $request->password]);
            }
        }


        $data = ['LoggedUserInfo' => $user];

        return view('accSettings', $data);
    }






    public function loadRenterSettings()
    {
        //
        $user = CarOwners::where('nID', '=', session('LoggedNID'))->first();
        $data = ['LoggedUserInfo' => $user];
        // dd('Renter_loadSettings');
        // dd($data);
        return view('accSettings', $data);
    }

    public function editRenterSettings()
    {
        //
        $user = CarOwners::where('nID', '=', session('LoggedNID'))->first();
        $data = ['LoggedUserInfo' => $user];

        return view('editAccSettings', $data);
    }
}
