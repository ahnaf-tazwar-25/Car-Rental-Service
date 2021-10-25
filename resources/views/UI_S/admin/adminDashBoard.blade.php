<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/iconLogo.png') }}">
    <title>Car Rental Service</title>
    @extends('layouts.head')
    {{-- <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script> --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/dashboard.css') }}" rel="stylesheet">


</head>
<style>
    body {
        background-image: linear-gradient(to bottom, rgb(255, 255, 255), #0099ff), url("../images/mainBackground.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    ::-webkit-scrollbar {
        width: 0px;
        background: transparent;
        /* make scrollbar transparent */
    }

</style>

<body>

    <nav style="position: fixed; top: 0; width: 100%; z-index: 10;"
        class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <label class="navbar-brand">Car Rental Service</label>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-5">
                
            </ul>




            <div class="btn-group">
               
                <div class="dropdown-menu dropdown-menu-right">
                    
                </div>
            </div>
            &nbsp;
            &nbsp;
            <a class="btn btn-primary mr-3" href="{{ route('logout', '11') }}">
                Log Out
            </a>


            {{-- <p class="p-1">Hi, {{ session('fname') }}</p>
                <p class="pr-3">{{ session('lname') }}</p> --}}
            

        </div>


    </nav>
    

    <br><br><br>
    <br><br><br>
    <p id="wellcome" class="display-1 mt-5 text-center">Welcome, Ahnaf Tazwar (Admin)</p>
    <div class="container overwrite w-75 shadow-lg p-3 mb-5 bg-body">
        <ul class="nav nav-tabs h5" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#request"
                    type="button" role="tab" aria-controls="home" aria-selected="true">Renter Requests</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                    role="tab" aria-controls="home" aria-selected="true">Car Enrol Requests</button>
            </li>
            {{-- <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">Verification
                        Pending</button>
                </li> --}}
            {{-- <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                        type="button" role="tab" aria-controls="contact" aria-selected="false">Add Car</button>
                </li> --}}
        </ul>


        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="request" role="tabpanel" aria-labelledby="home-tab">
                
                <table class="table table-bordered">
                    <thead class="font-weight-bold">
                        <tr>
                            <th scope="col">#</th>
                            <th class="text-center" scope="col">National Identification Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Action</th>
                            {{-- <th scope="col"></th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rentersReq as $key => $item)


                            <tr>
                                <th style="width: 1%;" scope="row">{{ $key + 1 }}</th>

                                <td class="col-md-3 text-center">
                                    {{ DB::table('car_owners')->select()->where('email', $item->email)->get()[0]->nID }}

                                </td>
                                <td class="col-md-3">
                                    {{-- <tr> --}}
                                    <div class="row">
                                        &nbsp;
                                        {{ $email = DB::table('car_owners')->select()->where('email', $item->email)->get()[0]->email }}
                                    </div>
                                </td>

                                <td>
                                    <div class="text-center">
                                        {{ DB::table('car_owners')->select()->where('email', $item->email)->get()[0]->fName }}
                                        {{ DB::table('car_owners')->select()->where('email', $item->email)->get()[0]->lName }}
                                    </div>
                                </td>

                                <td>
                                    <div class="text-center">
                                        <a href="{{ route('verifyRenter' ,$email)}}" class="btn btn-info">Verify</a>
                                        &nbsp;

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
            </div>

            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">

                <table class="table table-bordered">
                    <thead class="font-weight-bold">
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th class="text-center" scope="col">Car</th>
                            <th scope="col">Car Registration No.</th>
                            <th scope="col">Registered To</th>
                            <th scope="col">Action</th>

                           
                        </tr>
                    </thead>
                    <tbody>
                       

            
                        @foreach ($cars as $key => $item)
                            <tr>
                                <th style="width: 1%;" scope="row">{{ $key + 1 }}</th>
                                <td class="col-md-3 text-center">
                                    {{-- <img src="https://cdn.pixabay.com/photo/2018/05/22/18/16/auto-3422072_960_720.jpg"
                                        class="w-50"> --}}
                                        <img src="/car_pics/{{ $item->no_plate }}.jpg" class="w-50">

                                </td>
                                <td class="col-md-3 text-center">
                             
                                    {{-- {{ explode('_',DB::table('cars')->select()->where('no_plate', $item->no_plate)->get()[0]->reg_to)}} --}}
                                    {{ $no_plate1 = explode('_',DB::table('cars')->select()->where('no_plate', $item->no_plate)->get()[0]->no_plate)[0] }}
                                    <br>
                                    {{ $no_plate2 = explode('_',DB::table('cars')->select()->where('no_plate', $item->no_plate)->get()[0]->no_plate)[1] }}
                                </td>
                                <td>
                                    <div class="text-center">

                                        {{ DB::table('cars')->select()->where('no_plate', $item->no_plate)->get()[0]->reg_to }}

                                    </div>
                                </td>

                                <td>
                                    <div class="text-center">
                                        <p>
                                        <div class="text-center">
                                            <a href="{{ route('verifyCar', $no_plate1 . '_' . $no_plate2) }}" class="btn btn-info">Verify</a>
                                            &nbsp;
                                          
                                        </div>
                                        </p>
                                    </div>
                                </td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


           
        </div>
    </div>


    @if (session()->has('done'))
        <script>
            alert('Your car rent request has been successful! 😍');
        </script>
    @endif

</body>

</html>
