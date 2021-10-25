<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CarOwners;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        // dd($request->has('terms'));
        // dd('It is working');
        //  dd($request->only('email', 'password'));
        $user = Customer::where('email', '=', $request->email)->first();
        if(!empty($user)){
            // dd('Working');
            return redirect('register')->withErrors(['exist' => 'Email already exists!']);
        }

        $this->validate($request, [
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
            'address' => 'required|max:255',
            'city' => 'required|max:15',
            'zip' => 'required|max:4',
            'contact' => 'required|max:11|regex:/(01)[0-9]{9}/',
        ]);

        $user = Customer::where('contact_number', '=', $request->contact)->first();
        if(!empty($user)){
            // dd('Working');
            return redirect('register')->withErrors(['existContact' => 'Contact Number already exists!']);
        }

        $new_customer = new Customer;
        $new_customer->fname = $request->firstName;
        $new_customer->lname = $request->lastName;
        $new_customer->email = $request->email;
        $new_customer->contact_number = $request->contact;
        // $new_customer->password = Hash::make($request->password);
        $new_customer->password = $request->password;
        $new_customer->address = $request->address;
        $new_customer->city = $request->city;
        $new_customer->zip = $request->zip;
        $new_customer->terms = $request->has('terms');


        $save = $new_customer->save();

        $creds = $request->only('email', 'password');

        if ($save) {
            return redirect()->route('homes')->with("success", "You have been registered!");
        } else {
            return redirect()->route('register')->with("fail", "Somthing terrible went wrong 😢!");
        }
    }


    public function storeRenter(Request $request)
    {
        // dd($request);
        $user = CarOwners::where('nID', '=', $request->nID)->first();
        $user2 = CarOwners::where('email', '=', $request->email)->first();
        if(!empty($user)){
            // dd('Working');
            return back()->withErrors(['nIDExists' => 'NID card number already exists!']);
        }
        if(!empty($user2)){
            // dd('Working');
            return back()->withErrors(['email' => 'Email account already exists!']);
        }
        if (isset($request->isCustomer)) {
            $this->validate($request, [
                'nID' => 'required|integer|digits_between:10,10',
                'contact' => 'required|max:11|regex:/(01)[0-9]{9}/',
                // 'news' => 'nullable',
            ]);
        } else {
            $this->validate($request, [
                'nID' => 'required|integer|digits_between:10,10',
                'email' => 'required|email|max:255',
                'password' => 'required|confirmed',
                'fname' => 'required|max:255',
                'lname' => 'required|max:255',
                'address' => 'required|max:255',
                'city' => 'required|max:15',
                'zip' => 'required|integer|digits_between:4,4',
                'contact' => 'required|max:11|regex:/(01)[0-9]{9}/',
                // 'plateCityName' => 'required|min:5|max:20',
                // 'plateRegLetter' => 'required|min:1|max:10',
                // 'plateRegNumber' => 'required|min:2|max:20',
                // 'plateVehicleNumber1' => 'required|min:1|max:10',
                // 'plateVehicleNumber2' => 'required|min:1|max:10',
                // 'plateVehicleNumber3' => 'required|min:1|max:10',
                // 'plateVehicleNumber4' => 'required|min:1|max:10',
                'terms' => 'required',
                // 'news' => 'nullable',
            ]);
        }
        $user = Customer::where('email', '=', $request->email)->first();
        // dd($user->password);
        $new_car_owner = new CarOwners;
        $new_car_owner->nID = $request->nID;
        $new_car_owner->fName = $request->fname;
        $new_car_owner->lName = $request->lname;
        $new_car_owner->password = $user->password;
        $new_car_owner->email = $request->email;
        $new_car_owner->contact_number = $request->contact;
        // $new_customer->password = Hash::make($request->password);
        $new_car_owner->address = $request->address;
        $new_car_owner->city = $request->city;
        $new_car_owner->zip = $request->zip;
        $new_car_owner->terms = $request->has('terms');
        $new_car_owner->is_active = false;

        if (CarOwners::where('nID', '=', $request->nID)->first()) {
            return redirect()->route('renterRegistration')->withErrors(['nID' => 'NID number already exists']);
        } elseif (CarOwners::where('email', '=', $request->email)->first()) {
            return redirect()->route('renterRegistration')->withErrors(['email' => 'User Email already exists']);
        } else {
            $save = $new_car_owner->save();
            
            // dd(session('LoggedUser').'::'.session('LoggedNID'));
            if ($save) {
                return redirect()->route('homes');
            } else {
                return redirect()->route('renterRegistration')->withErrors(['fail' => 'Somthing terrible went wrong 😢!']);
            }
            
        }

       

        // $creds = $request->only('email', 'password');

        
    }

    public function loadLogin($reSend)
    {

        if ($reSend == 'home') {
            $reSend = 'homes';
            $data = ['redirect' => $reSend];
        } else {
            $data = ['redirect' => $reSend];
        }
        return view('login', $data);
    }

    public function login(Request $request)
    {
        if ($request->userType == null) {
            return back()->withErrors(['userType' => 'Please Select a user type.', 'email' => $request->email]);
        }

        if (is_numeric($request->get('email'))) {
            if ($request->userType === 'customer') {
                $user = Customer::where('contact_number', '=', $request->email)->first();
            } elseif ($request->userType === 'car_owner') {
                $user = CarOwners::where('contact_number', '=', $request->email)->first();
            }
            elseif($request->email == '1731462' && $request->password == '1731462'){
                session()->put('admin', '1731462');
                return redirect()->route('admin');
            }
            // $user = Customer::where('contact_number', '=', $request->email)->first();
        } else {
            if ($request->userType === 'customer') {
                session()->pull('LoggedNID');
                $user = Customer::where('email', '=', $request->email)->first();
            } elseif ($request->userType === 'car_owner') {
                $user = CarOwners::where('email', '=', $request->email)->first();
            }
        }
        /*
        elseif (Customer::where('email', '=', $request->email)->first()) {
            $user = Customer::where('email', '=', $request->email)->first();
        } elseif (CarOwners::where('email', '=', $request->email)->first()) {
            $user = CarOwners::where('email', '=', $request->email)->first();
        }
        */
        if (isset($user)) {
            // if (Hash::check($user->password == $request->password)){
            if ($user->password == $request->password) {
                //

                if ($request->userType === 'car_owner') {
                    if($user->is_active == 0){
                        // dd('Working');
                        return back()->withErrors(['notVerified' => 'Your renter account has not been verified yet.',
                        'emailFail' => 'Unvarified email.']);
                    }
                    $request->session()->put('LoggedNID', $user->nID);
                    $request->session()->put('fname', $user->fName);
                    $request->session()->put('lname', $user->lName);
                    // dd(session('LoggedUser').'::'.session('LoggedNID'));
                    return redirect()->route('renterDashboard');
                }

                $request->session()->put('LoggedUser', $user->email);
                $request->session()->put('fname', $user->fname);
                $request->session()->put('lname', $user->lname);

                if ($request->redirect[0] == ":") {
                    $redirect = explode(':', $request->redirect);
                    // dd('There was an error on Line No.:98 on registerController :(');
                    return redirect()->route($redirect[1], $redirect[2]);
                }

                return redirect()->route($request->redirect);
            } else {
                return back()->withErrors(['passFail' => 'Password is incorrect.', 'email' => $request->email]);
            }
        } else {
            return back()->withErrors(['emailFail' => 'The following Email is not registered to car rental service!', 'email' => $request->email]);
        }
    }


    public function loadUserInfo()
    {
        $user = Customer::where('email', '=', session('LoggedUser'))->first();
        $data = ['LoggedUserInfo' => $user];
        return view('/');
    }

    public function logout($redirect)
    {
        // dd("Entered");

        session()->pull('LoggedUser');
        session()->pull('fname');
        session()->pull('lname');
        session()->pull('LoggedNID');
        session()->pull('admin');

        if ($redirect == '11') {
            return redirect()->back();
        } else {
            return redirect()->route($redirect);
        }

        /*if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            session()->pull('fname');
            session()->pull('lname');
            if ($redirect == '11') {
                return redirect()->back();
            } else {

                return redirect()->route($redirect);
            }
        } else {
            return redirect('/');
        }*/
    }
}
