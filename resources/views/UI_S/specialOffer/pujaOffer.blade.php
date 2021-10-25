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
        <a class="btn btn-primary mr-3" href="{{ route('login', 'travel') }}">
        Sign In
        </a>
    @endsection
    @extends('layouts.nav')
    <br><br><br><br><br><br>

    <section class="pb-5 m-5 mb-5">

        <h1 class="display-4 font-weight-bold">This is offer for puja</h1>
        <p class="mt-5 pr-5 h5">Car Rental Service offers great rates on one-way car rentals at most of the cities of
            Bangladesh. With our quick and esay process,
            you have the freedom to pick up a car in one city and return it at another of out location in another city.
            Our one-way rental
            deals
            are great for <strong class="font-weight-bold"> relocating, road trip adventures</strong>, or for multiple
            city <strong class="font-weight-bold"> business trips</strong>. No matter what your
            need
            is, you can count on the car rental services provided by us to make your one-way drive possible.

        </p>
        <div class="text-center">
            @if (session()->has('LoggedUser'))
                <a href="{{ route('pujaOfferEnrol') }}" class="mt-5 btn p-3 btn-primary">
                    <span class="h5 font-weight-bold p-3">Book Now!</span> </a>
            @else
                <a href="{{ route('login', 'pujaOffer') }}" class="mt-5 btn p-3 btn-primary"> <span
                        class="h5 font-weight-bold p-3">Book Now!</span> </a>
            @endif
        </div>

        <br><br><br><br><br><br>
        

        
        <br><br><br><br><br><br>

        <a class="btn btn-light shadow-sm w-100 text-left p-3" id="headingOne" data-toggle="collapse"
            href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
            Which of your branches can I rent a car one-way?
        </a>
        <br>
        <div class="collapse" id="collapseExample1">
            <div class="card card-body bg-light">
                One-way car rentals are definitely possible and are usually allowed between all our branches
                in the country. Certain restrictions and fees apply depending on where you plan on picking up and
                dropping
                off your vehicle.
            </div>
        </div>
        <br>
        <a class="btn btn-light shadow-sm w-100 text-left p-3" id="headingOne" data-toggle="collapse"
            href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
            Can I drive my one-way vehicle anywhere in the US?
        </a>
        <br>
        <div class="collapse" id="collapseExample2">
            <div class="card card-body bg-light">
                If you have a reservation for a one-way rental where the vehicle is returned in a state other than the
                state of pick-up, the usual territorial restrictions do not apply. The vehicle may only be used in the
                continental United States and can be driven through any state.
                <br>
                <br>
                In Hawaii, one-way rentals and rides outside Hawaii are not permitted.

                For more information about one-way restrictions, please see the rental information.
            </div>
        </div>
        <br>
        <a class="btn btn-light shadow-sm w-100 text-left p-3" id="headingOne" data-toggle="collapse"
            href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
            Is there a one-way fee?
        </a>
        <br>
        <div class="collapse" id="collapseExample3">
            <div class="card card-body bg-light">
                A one-way fee sometimes applies when you pick up a vehicle at one location and return the vehicle at
                another. The one-way fee varies depending on the locations and time of the year. If you have to pay a
                fee, it will be disclosed at the time of reservation and so please use our booking tool to calculate the
                fotal price of your planned trip.

                One way rentals within our Florida, California and Nevada locations are free of charge on selected
                routes. Please check our terms and conditions as restrictions do apply to this offer.
            </div>
        </div>
    </section>



    </div>
    @extends('layouts.footer')
</body>

</html>


{{-- 
target="blank" to onen link in new tab
 --}}