<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Rental Service</title>
    @extends('layouts.head')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/iconLogo.png') }}">

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
            {{-- <ol class="breadcrumb">
            </ol> --}}
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                        class="rounded-circle p-1 bg-white" width="150">
                                    <div class="mt-3 h5">
                                        <h4>John Doe</h4>

                                    </div>
                                </div>
                                <hr class="my-4">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="John Doe">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="john@example.com">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="(239) 816-9029">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Mobile</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="(320) 380-4539">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="Bay Area, San Francisco, CA">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        {{-- <input type="button" class="btn btn-primary px-4" value="Save Changes"> --}}
                                        <a type="button" href="{{ route('settings') }}"
                                            class="btn btn-primary px-4">Save Changes</a>
                                        <a type="button" href="{{ route('renterSettings') }}"
                                            class="btn btn-danger px-4">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <ol class="breadcrumb">
            </ol>
        </div>
    
        {{-- @extends('layouts.footer') --}}
</body>

</html>
