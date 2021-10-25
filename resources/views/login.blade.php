<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/iconLogo.png') }}">
    @extends('layouts.head')
</head>

<body>
    <nav style="position: fixed; top: 0; width: 100%; z-index: 1;" class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Car Rental Service</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-5">
                <li class="nav-item active pl-5">
                    <a class="nav-link" href="{{ route('homes') }}">Home</a>
                </li>
                <li class="nav-item pl-5">
                    <a href="{{ route('rent') }}" class="nav-link">Instant Rent</a>
                </li>
                <li class="nav-item pl-5">
                    <a href="{{ route('travel') }}" class="nav-link">Instant Travel Book</a>
                </li>
                {{-- <li class="nav-item pl-5">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li> --}}
            </ul>


            @if (!session()->has('LoggedUser'))
                <a class="btn btn-primary mr-3" href="{{ route('register') }}">
                    Register
                </a>
            @else
                <a class="btn btn-primary mr-3" href="{{ route('logout', '11') }}">
                    Log Out
                </a>
            @endif
        </div>


    </nav>

    <br><br><br><br><br><br><br><br><br><br>


    <main class="login-form mt-5">
        <div class="cotainer">
            @if (session()->has('LoggedNID') && $redirect != 'homes')
                <p class="text-center font-weight-bold text-danger h4">You must log in as a customer to rent a car</p>
            @endif
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Log In</div>
                        <div class="card-body">
                            <form action="{{ route('loginPOST') }}" method="POST">
                                @csrf

                                <div class=" form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail
                                        Address/ Phone Number</label>
                                    <div class="col-md-6">
                                        @error('notVerified')
                                            <span class="text-danger text-center" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <input id="email" type="text"
                                            class="form-control @error('emailFail') is-invalid @enderror" name="email"
                                            value="@error('email') {{ $message }} @enderror" required
                                            autocomplete="email">
                                        <input type="hidden" name="redirect" value="{{ $redirect }}">
                                        @error('emailFail')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        {{-- <input type="hidde"> --}}
                                        <input id="password" type="password"
                                            class="form-control @error('passFail') is-invalid @enderror" name="password"
                                            required>

                                        @error('passFail')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <select name="userType"
                                            class="form-select mt-4 border @error('userType') border-danger @enderror"
                                            aria-label="Default select example">
                                            <option disabled selected>Select User Type</option>
                                            <option value="customer">Customer</option>
                                            <option value="car_owner">Car Owner/Renter</option>
                                            <option value="admin">Admin</option>

                                        </select>
                                        @error('userType')
                                            <br>
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>

                                {{-- <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary pl-3 pr-3">
                                        Login
                                    </button>
                                    {{-- <a href="#" class="btn btn-link">
                                        Forgot Your Password?
                                    </a> --}}
                                    <br><br><br>
                                    <p>Not a member yet?</p>
                                    <p><a class="text-primary" href="{{ route('register') }}">Register</a> now and
                                        book cars
                                        any time you want!.</p>

                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

    </main>
</body>

</html>
