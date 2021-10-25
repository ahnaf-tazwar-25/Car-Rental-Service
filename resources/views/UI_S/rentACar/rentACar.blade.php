<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/iconLogo.png') }}">
    <title>Car Rental Service</title>
    @extends('layouts.head')

</head>

<body>

    @section('logOut')
        <a class="btn btn-primary mr-3" href="{{ route('logout', 'rent') }}">
        @endsection

        @section('logIn')
            <a class="btn btn-primary mr-3" href="{{ route('login', 'rent') }}">
                Sign In
            </a>
        @endsection

        {{-- @section('logOut')
    <a class="btn btn-primary mr-3" href="{{ route('logout', '11') }}">
    @endsection --}}

        @extends('layouts.nav')

        {{-- <nav style="position: fixed; top: 0; width: 100%; z-index: 10;"
        class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="{{ route('homes') }}">Car Rental Service</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-5">
                <li class="nav-item pl-5">
                    <a class="nav-link" href="{{ route('homes') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>


            @if (!session()->has('LoggedUser'))

            <a class="btn btn-primary mr-3" href="{{ route('login', 'rent') }}">
                    Sign In
                </a>
                <a class="btn btn-primary mr-3" href="{{ route('register') }}">
                    Register
                </a>
            @else

                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{ session('fname') }} {{ session('lname') }}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{ route('settings') }}" class="dropdown-item" type="button">Settings</a>
                        <button class="dropdown-item" type="button">View Vehicle Requests</button>
                        <button class="dropdown-item" type="button"></button>
                    </div>
                </div>
                &nbsp&nbsp&nbsp
                <a class="btn btn-primary mr-3" href="{{ route('logout') }}">
                    Log Out
                </a>
            @endif
        </div>
    </nav> --}}


        <br><br><br><br><br><br>
        <div class="card-deck p-4 ml-4">

            <div class="card m-5">
                <img src="images/RentACar/hourlyRent.jpg" alt="a snow-capped mountain range" />
                <h1 class="card-header blockquote shadow-sm mb-2">Hourly Car Rental</h1>
                <div class="card-body">
                    <p class=" card-text pb-4">
                        ৳ 1000+ <br>
                        Sedan Car/Microbus<br>
                        Flexible 4 to 10 Hours Service<br><br>
                        Including Fuel Cost
                    </p>

                    @if (session()->has('LoggedUser'))
                        <a href="{{ route('rent_a_car_redirector', 'hourlyRentForm') }}"
                            class="btn btn-secondary w-25">Rent</a>

                    @else
                        <a href="{{ route('login', 'rent') }}" class="btn btn-secondary w-25">Rent</a>
                    @endif



                </div>
            </div>

            <div class="card m-5" >
                <img src="images/RentACar/airport-transfer.jpg" alt="a snow-capped mountain range" />
                <h1 class="card-header blockquote shadow-sm mb-2">Airport Transfer</h1>
                <div class="card-body">
                    <br><br><br><br><br><br>
                    <br><br><br><br><br><br>
                    <p class=" card-text pb-4">৳ 1200+<br>
                        Sedan Car/Microbus<br><br><br>
                        Travel from and to Any Airport in Bangladesh.
                    </p>
                    <br><br><br>
                    @if (session()->has('LoggedUser'))
                        <a href="{{ route('rent_a_car_redirector', 'airportTransferForm') }}"
                            class="btn btn-secondary w-25">Rent</a>

                    @else
                        <a href="{{ route('login', 'rent') }}" class="btn btn-secondary w-25">Rent</a>
                    @endif
                </div>
            </div>

            <div class="card m-5" >
                <img src="images/RentACar/wholeDay.png" alt="a snow-capped mountain range" />
                <h1 class="card-header blockquote shadow-sm mb-2">Rent a Car For a whole Day</h1>
                <div class="card-body">
                    <br><br><br><br>
                    
                    <p class=" card-text pb-4">
                        ৳ 5000+ <br><br>
                        Sedan Car/Microbus<br><br>
                        Various Type of Cars<br><br>
                        No Mileage Limit<br><br>
                        No Hidden Cost
                    </p>
                    <br><br>
                    @if (session()->has('LoggedUser'))
                        <a href="{{ route('rent_a_car_redirector', 'wholeDayForm') }}"
                            class="btn btn-secondary w-25">Rent</a>

                    @else
                        <a href="{{ route('login', 'rent') }}" class="btn btn-secondary w-25">Rent</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-deck p-4 ml-4">

            <div class="card m-5">
                <img src="images/RentACar/monthly-car-rental.jpg" alt="a snow-capped mountain range" />
                <h1 class="card-header blockquote shadow-sm mb-2">Monthly Car Rental</h1>
                <div class="card-body">
                    <p class=" card-text mb-5 pt-2 pb-5">
                        Our Multi-Month Program is available on a wide range of vehicles.
                    </p>
                    @if (session()->has('LoggedUser'))
                        <a href="{{ route('rent_a_car_redirector', 'monthlyCarForm') }}"
                            class="btn btn-secondary w-25">Rent</a>

                    @else
                        <a href="{{ route('login', 'rent') }}" class="btn btn-secondary w-25">Rent</a>
                    @endif
                </div>
            </div>

            <div class="card m-5" >
                <img src="images/RentACar/office_school.jpg" alt="a snow-capped mountain range" />
                <h1 class="card-header blockquote shadow-sm mb-2">Office/School pickup and drop</h1>
                <div class="card-body">
                    <br><br>
                    <p class=" card-text pb-4">
                        ৳ 8500 <br>
                        Car/Microbus<br><br>
                        This rate is for
                        26 Working Days/Person
                        Shared Ride Basis</p>
                        <br>
                    @if (session()->has('LoggedUser'))
                        <a href="{{ route('rent_a_car_redirector', 'schoolOfficePickupForm') }}"
                            class="btn btn-secondary w-25">Rent</a>

                    @else
                        <a href="{{ route('login', 'rent') }}" class="btn btn-secondary w-25">Rent</a>
                    @endif
                </div>
            </div>

            <div class="card m-5" >
                <img src="images/RentACar/Wedding-car-rental.jpg" alt="a snow-capped mountain range" />
                <h1 class="card-header blockquote shadow-sm mb-2">Rent Cars for Wedding</h1>
                <div class="card-body">
                    <p class=" card-text pb-4">
                        ৳ 4000+ <br><br>
                        Car/Microbus<br>
                        This rate is for
                        hiring withing the city range <br><br>
                        Excluding Fuel Cost</p>
                    @if (session()->has('LoggedUser'))
                        <a href="{{ route('rent_a_car_redirector', 'weddingRentForm') }}"
                            class="btn btn-secondary w-25">Rent</a>

                    @else
                        <a href="{{ route('login', 'rent') }}" class="btn btn-secondary w-25">Rent</a>
                    @endif
                </div>
            </div>
        </div>
        @extends('layouts.footer')
        @if (session()->has('done'))
            <script>
                alert('Your rent request has been successfully sent.😊')
            </script>
            {{ session()->pull('done') }}

        @endif



</body>

</html>
