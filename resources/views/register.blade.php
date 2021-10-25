<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.head')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/iconLogo.png') }}">
</head>
<style>
    body {
        background-image: url("http://127.0.0.1:8000/images/mainBackground2.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .register {
        background-color: wheat;
        padding: 1%;
        border: 3px solid white;
        border-radius: 3%;
        width: 50%;
        margin-top: 18%;
        margin-left: 25%;
    }

</style>

<body class="antialiased">
    <nav style="position: fixed; top: 0; width: 100%; z-index: 1;"
        class="navbar navbar-expand-lg navbar-light bg-light border border-shadow">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="{{ route('homes') }}">Car Rental Service</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-5 ">
                <li class="nav-item pl-5">
                    <a class="nav-link" href="{{ asset('/') }}">Home</a>
                </li>
                <li class="nav-item pl-5">
                    <a href="{{ route('rent') }}" class="nav-link">Instant Rent</a>
                </li>
                <li class="nav-item pl-5">
                    <a href="{{ route('travel') }}" class="nav-link">Instant Travel Book</a>
                </li>
                
            </ul>
            {{-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> --}}

            <a class="btn btn-primary mr-3" href="{{ route('login', 'home') }}">
                Sign In
            </a>

            <a class="btn btn-primary mr-3" href="{{ route('register') }}">
                {{-- <a href="#"> --}}
                Register
            </a>

            {{-- <a class = "navAttribute" href = "https://getbootstrap.com/docs/4.0/components/forms/"">Register</a> --}}
        </div>
    </nav>




    <div class="register">
        <form class="mt-lg-2" method="POST" action="{{ route('register') }}">
            @csrf
            @error('exist')
                <p class="h4 mt-5 text-center text-danger"> {{ $message }}</p>
            @enderror
            @error('existContact')
                <p class="h4 mt-5 text-center text-danger"> {{ $message }}</p>
            @enderror
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstName">First Name</label>
                    <input type="text" name="firstName" class="form-control" id="firstName"
                        placeholder="Enter your First Name" value="{{ old('firstName') }}" required>

                </div>
                <div class="form-group col-md-6">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" class="form-control" id="lastName"
                        placeholder="Enter your Last Name" value="{{ old('lastName') }}" required>

                </div>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email"
                    class="form-control @error('email') font-weight-bold text-danger @enderror" id="email"
                    placeholder="Email" value="{{ old('email') }}" required>
                @error('email')
                    <p class="text-danger font-weight-bold">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 @error('password') font-weight-bold text-danger @enderror">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                        required>
                    @error('password')
                        <p class="text-danger font-weight-bold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group col-md-6 @error('password') font-weight-bold text-danger @enderror">
                    <label for="password_confirmation">Re - Emter Password</label>
                    <input type="password" name="password_confirmation" class="form-control"
                        id="password_confirmation" placeholder="Password" required>
                    @error('password')
                        <p class="text-danger font-weight-bold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St"
                    value="{{ old('address') }}" required>

            </div>

            <div class="form-row">

                <div class="form-group col-md-4">
                    <label @error('city') class="text-danger font-weight-bold" @enderror for="city">City</label>
                    <select name="city" id="city" class="form-control">
                        <option selected disabled>Choose City</option>
                        <option>Dhaka</option>
                        <option>Chattagram</option>
                        <option>Rajshahi</option>
                        <option>Sylhet</option>
                        <option>Khulna</option>
                        <option>Barisal</option>
                        <option>Cox's Bazar</option>
                        <option>Comilla</option>
                    </select>
                    @error('city')
                        <p class="text-danger font-weight-bold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="zip">Zip/Postal code</label>
                    <input name="zip" type="text" minlength="4" maxlength="4" class="form-control" id="zip"
                        value="{{ old('zip') }}" required><br>
                </div>
                <div class="form-group col-md-4">
                    <label for="contact" @error('contact') class="text-danger font-weight-bold" @enderror>Contact
                        Number</label>
                    <input name="contact" type="text" class="form-control" id="contact"
                        value="{{ old('contact') }}" required>
                    @error('contact')
                        <p class="text-danger font-weight-bold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-check form-check-inline form-group">
                    <input class="form-check-input" name="terms" type="checkbox" id="flexCheckDefault" required>
                    <label class="form-check-label" for="flexCheckDefault">
                        By checking this I accept the <a href="http://127.0.0.1:8000/document____s/terms_conditions.pdf">terms</a> and condition given by this service.
                    </label>
                </div>
            </div>
            <div align="right">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>

    {{-- <div class="register">
        <form class="mt-lg-2" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fname">Name</label>
                    <input type="text" name="fname" class="form-control" id="fname"
                        placeholder="Enter your First Name" value="{{ old('fname') }}" required>

                </div>
                <div class="form-group col-md-6">
                    <label for="lname">Username</label>
                    <input type="text" name="lname" class="form-control" id="lname"
                        placeholder="Enter your Last Name" value="{{ old('lname') }}" required>

                </div>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                    value="{{ old('email') }}">
                @error('email')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 @error('password') text-danger @enderror">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    @error('password')
                        <p class="text-danger fw-bold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group col-md-6 @error('password') text-danger @enderror">
                    <label for="password_confirmation">Re - Emter Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"
                        placeholder="Password">
                    @error('password')
                        <p class="text-danger fw-bold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
                <div class="form-group ">
                    <button align="right" type="submit" class="btn btn-primary">Sign in</button>
                </div>

        </form>
    </div> --}}
</body>

</html>
