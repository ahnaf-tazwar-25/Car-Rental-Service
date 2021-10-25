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

    #wellcome{
        font-weight: bold;
        color: rgb(0, 73, 18);
    }

</style>

<body>
    @section('logOut')
        <a class="btn btn-primary mr-3" href="{{ route('logout', '11') }}">
        @endsection
        @extends('layouts.nav')
        <br><br><br>

        <p id="wellcome" class="display-1 mt-5 text-center">Welcome, {{ session('fname') }} {{ session('lname') }}</p>

        <div class="container overwrite w-75 shadow-lg p-3 mb-5 bg-body">
            <ul class="nav nav-tabs h5" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#request"
                        type="button" role="tab" aria-controls="home" aria-selected="true">Rent Requests</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                        type="button" role="tab" aria-controls="home" aria-selected="true">Rent History</button>
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
                    @if (empty($bookings[0]))

                        <p class="h1 text-success text-center mt-1 font-weight-bold pt-5">Currently no request has been
                            found</p>
                    @else


                        <table class="table table-bordered">
                            <thead class="font-weight-bold">
                                <tr>
                                    <th scope="col">#</th>
                                    <th class="text-center" scope="col">Car</th>
                                    <th scope="col">Details</th>
                                    <th scope="col">Rent Fair</th>
                                    <th scope="col">Rent Type</th>
                                    <th class="text-center" scope="col">Registration No.</th>
                                    <th class="text-center" scope="col">Status</th>
                                    <th class="text-center" scope="col">Action</th>
                                    {{-- <th scope="col"></th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings->all() as $key => $item)
                                    <tr>
                                        <th style="width: 1%;" scope="row">{{ $key + 1 }}</th>
                                        <td class="col-md-3 text-center">
                                            <img src="/car_pics/{{ $item->booking_id2 }}.jpg" class="w-50">

                                        </td>
                                        <td class="col-md-3">
                                            {{-- <tr> --}}

                                            <div class="row">
                                                <div class="col-md-6 font-weight-bold">
                                                    Manufacturer Name:
                                                </div>
                                                <div class="col-md-6">
                                                    {{ DB::table('cars')->select()->where('no_plate', $item->booking_id2)->get()[0]->mafacture_name }}
                                                </div>
                                            </div>
                                            {{-- </tr> --}}
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 font-weight-bold">
                                                    Model:
                                                </div>
                                                <div class="col-md-6">
                                                    {{ DB::table('cars')->select()->where('no_plate', $item->booking_id2)->get()[0]->model }}
                                                </div>
                                            </div>
                                            <br>

                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 font-weight-bold">
                                                    Passenger Sits:
                                                </div>
                                                <div class="col-md-6">
                                                    {{ DB::table('cars')->select()->where('no_plate', $item->booking_id2)->get()[0]->total_passenger_sits }}
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="text-center">
                                                <p>{{ $item->price }}</p>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="text-center">
                                                <p>
                                                    {{ DB::table('rents')->select()->where('booking_id2', $item->booking_id2)->get()[0]->rent_type }}
                                                </p>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="text-center">
                                                @if ($item->active)
                                                    {{ DB::table('cars')->select()->where('no_plate', $item->booking_id2)->get()[0]->no_plate }}
                                                @else
                                                    <span class="badge badge-primary">Request Pending</span>
                                                @endif
                                                {{-- {{ explode(':', $car->no_plate)[0] }} --}}
                                                <br>
                                                {{-- {{ explode(':', $car->no_plate)[1] }} --}}


                                            </div>
                                        </td>
                                        {{-- @if ($car->isVerified) --}}

                                        <td class="col-md-1 text-center font-weight-bold text-primary">Active</td>
                                        {{-- @else --}}
                                        <td class="col-md-1 text-center font-weight-bold text-primary">
                                            <a href="{{ route('cancelReq', $item->booking_id2) }}"
                                                class="btn btn-danger">Cancel</a>
                                        </td>
                                        {{-- @endif --}}
                                        {{-- <td class="col-md-1"><button class="btn btn-danger">Inactive</button></td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>

                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <table class="table table-bordered">
                        <thead class="font-weight-bold">
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th class="text-center" scope="col">Car</th>
                                <th scope="col">Details</th>
                                <th scope="col">Rent Fair</th>
                                <th scope="col">Rent Type</th>
                                <th scope="col">Registration No.</th>
                                <th class="text-center" scope="col">Condition</th>

                                {{-- <th scope="col"></th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{ dd(count($rents->all())) }} --}}
                            @foreach ($bookings2->all() as $key => $item)
                                {{-- {{dd($item->booking_id2) }} --}}
                                <tr>
                                    <th style="width: 1%;" scope="row">{{ $key + 1 }}</th>
                                    <td class="col-md-3 text-center">
                                        <img src="/car_pics/{{ $item->booking_id2 }}.jpg" class="w-50">

                                    </td>
                                    <td class="col-md-3">
                                        {{-- <tr> --}}

                                        <div class="row">
                                            <div class="col-md-6 font-weight-bold">
                                                Manufacturer Name:
                                            </div>
                                            <div class="col-md-6">
                                                {{-- Toyota --}}
                                                {{ DB::table('cars')->select()->where('no_plate', $item->booking_id2)->get()[0]->mafacture_name }}
                                            </div>
                                        </div>
                                        {{-- </tr> --}}
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6 font-weight-bold">
                                                Model:
                                            </div>
                                            <div class="col-md-6">
                                                {{ DB::table('cars')->select()->where('no_plate', $item->booking_id2)->get()[0]->model }}
                                            </div>
                                        </div>
                                        <br>

                                        <br>
                                        <div class="row">
                                            <div class="col-md-6 font-weight-bold">
                                                Passenger Sits:
                                            </div>
                                            <div class="col-md-6">
                                                {{ DB::table('cars')->select()->where('no_plate', $item->booking_id2)->get()[0]->total_passenger_sits }}
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <p>{{ $item->price }}</p>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="text-center">
                                            <p>
                                                {{ DB::table('rents')->select()->where('booking_id2', $item->booking_id2)->get()[0]->rent_type }}
                                            </p>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="text-center">

                                            @if ($item->active)
                                                {{ DB::table('cars')->select()->where('no_plate', $item->booking_id2)->get()[0]->no_plate }}
                                            @else
                                                <span class="badge badge-primary">Request Pending</span>
                                            @endif

                                        </div>
                                    </td>
                                    {{-- @if ($car->isVerified) --}}

                                    <td class="text-center">
                                        @if ($item->active)
                                            <span class="badge badge-success"> Completed</span>
                                        @else
                                            <span class="badge badge-primary">Pending</span>
                                        @endif
                                    </td>
                                    {{-- @else --}}

                                    {{-- @endif --}}
                                    {{-- <td class="col-md-1"><button class="btn btn-danger">Inactive</button></td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                {{-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <p>This is 3</p>
                </div> --}}




                {{-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <p>This is 4</p>
                </div> --}}
            </div>
        </div>


        @if (session()->has('done'))
            <script>
                alert('Your car rent request has been successful! 😍');
            </script>
        @endif
        {{-- @extends('layouts.footer'); --}}
</body>

</html>
