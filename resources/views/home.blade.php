<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @extends('layouts.head')
    {{-- @yield('layouts.head') --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/iconLogo.png') }}">
    <link rel="stylesheet" href="{{ asset('styles/mainStyle.css') }}">

</head>

<style>
    body {
        /* background-image: linear-gradient( to bottom, transparent, #000000), url("../images/mainBackground.jpg"); */
        background-image: linear-gradient(to bottom, rgb(255, 255, 255), #b6abcf), url("../images/mainBackground.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        /* background-color: rgb(38, 125, 201); */
    }

    ::-webkit-scrollbar {
        width: 0px;
        background: transparent;
        /* make scrollbar transparent */
    }

</style>

<body class="antialiased">

    <nav style="position: fixed; top: 0; width: 100%; z-index: 10;"
        class="navbar navbar-expand-lg shadow-sm navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Car Rental Service</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-5">
                <li class="nav-item active pl-5">
                    <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pl-5">
                    <a href="{{ route('rent') }}" class="nav-link">Instant Rent</a>
                </li>
                <li class="nav-item pl-5">
                    <a href="{{ route('travel') }}" class="nav-link">Instant Travel Book</a>
                </li>
                <li class="nav-item pl-5">
                    <a href="{{ route('specialOffer') }}" class="nav-link">Special Offer</a>
                </li>
                <li class="nav-item pl-5">
                    @if (session()->has('LoggedUser'))

                        <a class="nav-link" href="{{ route('customerDashboard') }}">Rental Status</a>
                    @endif
                </li>
            </ul>

            {{-- <a class="btn btn-primary mr-3" href="{{ route('renterDashboard') }}">
                Renter
            </a> --}}

            @if (!session()->has('LoggedUser') && !session()->has('LoggedNID'))

                <a class="btn btn-primary mr-3" href="{{ route('login', 'home') }}">
                    Sign In
                </a>

                <a class="btn btn-primary mr-3" href="{{ route('register') }}">
                    Register
                </a>
            @elseif (session()->has('LoggedNID') && !session()->has('LoggedUser'))
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{ session('fname') }} {{ session('lname') }}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{ route('cus_settings') }}" class="dropdown-item" type="button">Profile Settings</a>
                    </div>
                </div>
                &nbsp&nbsp&nbsp
                <a class="btn btn-primary mr-3" href="{{ route('logout', '11') }}">
                    Log Out
                </a>
            @else

                {{-- <p class="p-1">Hi, {{ session('fname') }}</p>
                <p class="pr-3">{{ session('lname') }}</p> --}}
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{ session('fname') }} {{ session('lname') }}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        @if (session()->has('LoggedNID') && !session()->has('LoggedUser'))
                        <a href="{{ route('renter_settings') }}" class="dropdown-item" type="button">Profile
                            Settings</a>
                    @elseif(!session()->has('LoggedNID') && session()->has('LoggedUser'))
                        <a href="{{ route('cus_settings') }}" class="dropdown-item" type="button">Profile
                            Settings</a>
                        {{-- <button class="dropdown-item" type="button">View Vehicle Requests</button> --}}
                        <button class="dropdown-item" type="button"></button>
                    @endif
                    </div>
                </div>
                &nbsp&nbsp&nbsp
                <a class="btn btn-primary mr-3" href="{{ route('logout', '11') }}">
                    Log Out
                </a>
            @endif

            {{-- <a class = "navAttribute" href = "https://getbootstrap.com/docs/4.0/components/forms/"">Register</a> --}}
        </div>


    </nav>
    <br><br><br><br><br><br>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/Banners/banner1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/Banners/banner2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/Banners/banner3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div id="features" class="row">

        {{-- @for ($i = 0; $i < 10; $i++) --}}
        <div class="each_feature col-md-3">
            <img style="padding: 2.5%;" src="images/Rent-a-Car-Title.jpg">
            <br><br>
            <h3>Need To Hire a Car in Your City?</h3>
            <img style="width:25%" style="padding: 2.5%;" src="images/rentACar.png">
            <br><br>
            <h4>Renting car from us right away!</h4>
            <br>
            <a class="details btn btn-success" href="{{ route('rent') }}">Details</a>
        </div>

        <div class="each_feature col-md-3">
            <img style="padding: 2.5%;" src="images/Tourism Bangladesh-Title.jpg">
            <h3>Tourism in Bangladesh</h3>
            <img style="width:25%" style="padding: 2.5%;" src="images/travelAnywhere.jpg">
            <br>
            <h4>Don’t Spoil the Beauty of Your tours! Traveling is easy when you have right options on your plate.</h4>
            <br>
            <a class="details btn btn-success" href="{{ route('tourism') }}">Details</a>
        </div>

        <div class="each_feature col-md-3">
            <div class="card-body">
                <img style="padding: 2.5%;" src="images/earnWthYourCar-Title.jpeg">
                <h3>Earn with your car!</h3>
                <img style="width:25%" style="padding: 2.5%;" src="images/makeMoney-Logo.JPG">
                <br>
                <label>Rent your car with our service and get exciting bonuses!</label>
                <br>
            </div>
            <a class="details btn btn-success" href="{{ route('earn') }}">Details</a>
            <br>
            <br>    
        </div>


        {{-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br> --}}

        <div class="each_feature col-md-3">
            <img style="padding: 2.5%;" src="images/travelAnywhere-Title.jpg">

            <h3>Travel Anywhere</h3>
            <img style="width:20%" style="padding: 2.5%;" src="images/Tourism Bangladesh-Logo.jpg">
            <br>
            <h4>Renting car from us right away!</h4>
            <br>
            <a class="details btn btn-success" href="{{ route('travel') }}">Details</a>
        </div>


        <div class="each_feature col-md-3">
            <img style="padding: 2.5%;" src="images/specialOffer-Title.jpeg">
            <br><br>
            <h3>Car Rental Servce Special Offer!</h3>
            <h4>We are providing a limited offer. Make sure you check it out!</h4>
            <br><br>
            <br><br>
            <a class="details btn btn-success" href="{{ route('specialOffer') }}">Details</a>
            <br>
            <br>
        </div>

        {{-- @endfor --}}
    </div>
    <br><br><br><br>

    @extends('layouts.footer')
</body>

</html>
