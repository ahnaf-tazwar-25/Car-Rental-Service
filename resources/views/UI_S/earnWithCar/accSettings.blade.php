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

    body {
        background-image: linear-gradient(to bottom, rgb(255, 255, 255), #0099ff), url("../images/mainBackground.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    ::-webkit-scrollbar {
        width: 0px;
        color: #6ac3ff;
        background: transparent;
        /* make scrollbar transparent */
    }

</style>

<body>
    @section('logOut')
        <a class="btn btn-primary mr-3" href="{{ route('logout', '11') }}">
        @endsection


        @extends('layouts.navRenter')

        <div style="margin-top: 16%;" class="container">
            <div class="main-body">
                {{-- <ol class="breadcrumb">
                </ol> --}}

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
                                <p class="h5 text-center">Customer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="row">
                                <div class="col-sm-12 mr-3">
                                    <a style="margin-left: 84%;"
                                        class="btn btn-success shadow-sm mt-2 rounded pl-4 pr-4" target="__blank"
                                        href="{{ route('renterEditSettings') }}">Edit</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        Kenneth Valdez
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        fip@jukmuh.al
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        (239) 816-9029
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Mobile</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        (320) 380-4539
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        Bay Area, San Francisco, CA
                                    </div>
                                </div>
                                <hr>
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
        {{-- @extends('layouts.footer') --}}
</body>

</html>
