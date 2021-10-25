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
<style>
    input[type="file"] {
        opacity: 0.1;

    }

</style>

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
        <br><br><br><br><br><br>

        <div class="container">
            <div class="main-body">
                <ol class="breadcrumb">
                </ol>

                <!-- Breadcrumb -->
                {{-- <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav> --}}
                <!-- /Breadcrumb -->

                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <div class="profile-img  ">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                            class="rounded-circle" width="150">
                                    </div>
                                    <div class="mt-3">
                                        <h4 class="h5">John Doe</h4>
                                        {{-- <p class="text-secondary mb-1">Full Stack Developer</p>
                                    <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                    <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-outline-primary">Message</button> --}}
                                    </div>
                                </div>
                                <hr class="my-4">
                                @if (session()->has('LoggedUser'))
                                    <p class="h5 text-center">Customer</p>
                                @elseif(session()->has('LoggedNID'))
                                    <p class="h5 text-center">Renter</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="row">
                                <div class="col-sm-12 mr-3">
                                    @if (session()->has('LoggedUser'))

                                        <a style="margin-left: 84%;"
                                            class="btn btn-success shadow-sm mt-2 rounded pl-4 pr-4" {{-- target="__blank" --}}
                                            href="{{ route('cus_editSettings') }}">Edit</a>

                                    @elseif(session()->has('LoggedNID'))

                                        <a style="margin-left: 84%;"
                                            class="btn btn-success shadow-sm mt-2 rounded pl-4 pr-4" {{-- target="__blank" --}}
                                            href="{{ route('renter_editSettings') }}">Edit</a>

                                    @endif

                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        @if (session()->has('LoggedUser'))
                                            {{ $LoggedUserInfo->fname . ' ' . $LoggedUserInfo->lname }}
                                        @elseif(session()->has('LoggedNID'))
                                            {{ $LoggedUserInfo->fName . ' ' . $LoggedUserInfo->lName }}
                                        @endif
                                    </div>
                                </div>
                                <hr>
                                {{-- <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$LoggedUserInfo->email}}
                                    </div>
                                </div> --}}

                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Contact Number</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $LoggedUserInfo->contact_number }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Password</h6>
                                    </div>
                                    <div class="col-sm-6 text-secondary">
                                        *************
                                    </div>
                                    <div class="float-left text-secondary">
                                        <a href="{{ route('passChange') }}">Change Password</a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $LoggedUserInfo->address }}
                                    </div>
                                </div>

                                {{-- <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-info " target="__blank"
                                        href="{{route('editSettings')}}">Edit</a>
                                </div>
                            </div> --}}
                            </div>
                        </div>

                    </div>
                </div>
                <ol class="breadcrumb">
                </ol>

            </div>
        </div>
        <br><br><br><br><br><br>
        <br><br><br><br><br><br>
        <br><br><br><br><br><br>
        @extends('layouts.footer')
</body>

</html>
