<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    //

    public function loadOffer_puja()
    {
        //
        // dd('asdasd');

        return view('UI_S.specialOffer.pujaOffer');
    }

    public function loadOffer_puja_book()
    {
        //
        // dd('asdasd');
        session()->put('puja', '0.15');

        $bookType = 'One Way Travel';
        $user = Customer::where('email', '=', session('LoggedUser'))->first();
        $data = [
            'travelType' => 'One Way', 'city' => $user->city, 'number' => $user->contact_number, 'fname' => $user->fname, 'lname' => $user->lname,
            'email' => $user->email, 'city' => $user->city, 'bookType' => $bookType , 'imgLink' => 'http://127.0.0.1:8000/images/SpecialOffer/pujaOffer.jpg'
        ];

        return view('UI_S.specialOffer.pujaOffTravelForm', $data);
        // return redirect()->route('travel_to', 'one_way_travel');
    }
}
