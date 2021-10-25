<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class linkerController extends Controller
{
    //Front page load

    public function loadRentACar()
    {
        return view('UI_S.rentACar.rentACar');
    }

    public function loadtravelAnywhere()
    {
        return view('UI_S.travelAnywhere');
    }

    public function loadEarn()
    {

        return view('UI_S.earnWithCar.earnWithCar');
    }

    public function loadTourism()
    {
        return view('UI_S.tourism');
    }

    public function loadSpecialOffer()
    {
        return view('UI_S.specialOffer');
    }

    public function loadSettings()
    {

        $user = Customer::where('email', '=', session('LoggedUser'))->first();
        $data = ['LoggedUserInfo' => $user];

        return view('accSettings', $data);
    }

    public function loadEditSettings()
    {

        $user = Customer::where('email', '=', session('LoggedUser'))->first();
        $data = ['LoggedUserInfo' => $user];
        
        return view('editAccSettings', $data);
    }
    /*
    public function loadRenterRegistrationWithValue()
    {
        $email = session('LoggedUser');
        $user = Customer::where('email', '=', $email)->first();
        // $data = ['user' => $user];
        $data = [
            'fname' => $user->fname, 'lname' => $user->lname, 'email' => $user->email, 'address' => $user->address, 'city' => $user->city,
            'zip' => $user->zip, 'contact_number' => $user->contact_number
        ];
        return view('UI_S.earnWithCar.renterRegister', $data);
    }
*/
    public function loadRenterRegistration()
    {
        if (session()->has('LoggedUser')) {
            $email = session('LoggedUser');
            $user = Customer::where('email', '=', $email)->first();
            // $data = ['user' => $user];
            $data = [
                'fname' => $user->fname, 'lname' => $user->lname, 'email' => $user->email, 'address' => $user->address, 'city' => $user->city,
                'zip' => $user->zip, 'contact_number' => $user->contact_number
            ];
            return view('UI_S.earnWithCar.renterRegister', $data);
        } else {
            return view('UI_S.earnWithCar.renterRegister');
        }
    }
}
