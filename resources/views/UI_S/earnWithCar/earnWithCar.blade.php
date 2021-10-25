<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Rental Service</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/iconLogo.png') }}">
    @extends('layouts.head')

</head>

<body>
    @section('logOut')
        <a class="btn btn-primary mr-3" href="{{ route('logout', '11') }}">
        @endsection

        @section('logIn')
            <a class="btn btn-primary mr-3" href="{{ route('login', 'earn') }}">
                Sign In
            </a>
        @endsection

        @extends('layouts.nav')
        <br><br><br><br><br><br>

        <h1 class="display-4 text-center text-success pb-5 m-5 mb-5">MAKE MONEY FROM YOUR CAR</h1>
        
        <div class="container ml-4 pb-5 mb-5">
            <p class="font-weight-bold"><strong> Rent your car by us when you aren't using it and earn more than you
                    imagine.We get hundreds
                    of
                    thousands of people searching with us each year for good value car hire.</strong></p>
            <img class="pt-4 mt-4" src="images/EarnWithCar/steps.jpg" alt="">
            <p class="font-weight-bold"><strong>How it works</strong></p> <br>
            <ul>
                <li>1. Listing your car is 100% FREE and there are no membership fees.</li>
                <li>2. It’s your car, so you approve when it’s rented and who rents it.</li>
                <li>3. Renters are screened by verifying NID and mobile number before bookings are confirmed.</li>
                <li>4. We also check renters’ bank details to ensure that only trusted people can rent your car.</li>
                {{-- <li>GPS tracker can be fitted to your car for extra peace of mind.</li> --}}

            </ul>
            <a href="{{ route('renterRegistration') }}" class="btn btn-success mt-5 w-25">Register Now!</a>
            {{-- @if (!session()->has('LoggedUser'))
            <a href="{{ route('renterRegistration') }}" class="btn btn-success mt-5 w-25">Register Now!</a>
        @else
            <a href="{{ route('loadRenterRegistration') }}"
                class="btn btn-success mt-5 w-25">Register Now!</a>
        @endif --}}

        </div>
        @extends('layouts.footer')
</body>

</html>
