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

        <h1 class="display-4 font-weight-bold">ONE-WAY CAR RENTAL - QUICK AND EASY</h1>
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
                <a href="{{ route('travel_to', 'one_way_travel') }}" class="mt-5 btn p-3 btn-primary">
                    <span class="h5 font-weight-bold">Book One Way
                        Car Rental</span> </a>
            @else
                <a href="{{ route('login', 'travel') }}" class="mt-5 btn p-3 btn-primary"> <span
                        class="h5 font-weight-bold">Book One Way
                        Car Rental</span> </a>
            @endif
        </div>

        <br><br><br><br><br><br>
        <h1 class="display-4 font-weight-bold">UP-DOWN CAR RENTAL - BACK-TO-BACK JOURNEY</h1>
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
                <a href="{{ route('travel_to', 'back_to_back_travel') }}" class="mt-5 btn p-3 btn-primary">
                    <span class="h5 font-weight-bold">Book Up-Down
                        Car Rental</span> </a>
            @else
                <a href="{{ route('login', 'travel') }}" class="mt-5 btn p-3 btn-primary"> <span
                        class="h5 font-weight-bold">Book Up-Down
                        Car Rental</span> </a>
            @endif
        </div>
        <br><br><br><br><br><br>

        <div class="mt-5 pt-5">
            <h1 class="h1 font-weight-bold text-center">THE BENEFITS OF RENTING A CAR ONE-WAY</h1>
            <div class="row">
                <div class="col">
                    <img class="mt-5" src="{{ asset('images/dhaka-chattagram.jpg') }}" alt="">
                </div>
                <div class="col">
                    <br>
                    <h1 class="my-3 mt-2 pt-3 h4 font-weight-bold">A one way rental has many advantages that can open up
                        your travel possibilites. Some examples of the benefits of a one way car rental from SIXT
                        include:
                    </h1>
                    <ul class="my-3 pt-4 row">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                        </svg>
                        <p> <strong class="font-weight-bold"> Relocating </strong> to a new city</p>
                    </ul>
                    <ul class="my-4 pt-2 row">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                        </svg>
                        <p> <strong class="font-weight-bold"> Cancelled flight </strong>or last minute flights are too
                            expensive</p>
                    </ul>
                    <ul class="my-4 pt-2 row">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                        </svg>
                        <p>Cross city <strong class="font-weight-bold"> road trips</strong> accross the entire country
                        </p>
                    </ul>
                    <ul class="my-4 pt-2 row">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                        </svg>
                        <p>Extended <strong class="font-weight-bold"> travels</strong> or vacations</p>
                    </ul>
                </div>
            </div>
        </div>
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