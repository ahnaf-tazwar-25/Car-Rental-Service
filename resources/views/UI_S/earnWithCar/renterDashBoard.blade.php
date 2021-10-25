<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.head')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/iconLogo.png') }}">

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

    #wellcome {
        font-weight: bold;
        color: rgb(0, 73, 18);
    }

</style>

<body class="antialiased">
    @section('logOut')
        <a class="btn btn-primary mr-3" href="{{ route('logout', '11') }}">
        @endsection


        @extends('layouts.navRenter')
        {{-- @extends('layouts.sections') --}}

        <br><br><br><br>
        <h1 class="h1 display-1 text-center">Welcome {{ session('fname') }} {{ session('lname') }}</h1>

        <div class="container overwrite w-75 shadow-lg p-3 mb-5 bg-body">
            <ul class="nav nav-tabs h5" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#request"
                        type="button" role="tab" aria-controls="home" aria-selected="true">Rent Request</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                        type="button" role="tab" aria-controls="home" aria-selected="true">Rented Cars</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">Verification
                        Pending</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                        type="button" role="tab" aria-controls="contact" aria-selected="false">Add Car</button>
                </li>
            </ul>


            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="request" role="tabpanel" aria-labelledby="home-tab">
                    {{-- {{dd($requests)}} --}}
                    @if (empty($requests[0]))

                        <p class="h1 text-success text-center mt-5 font-weight-bold">No request currently</p>
                    @else
                        <table class="table table-hover">
                            <thead class="font-weight-bold">
                                <tr>
                                    <th scope="col">SL No.</th>
                                    <th class="text-center" scope="col">Car</th>
                                    <th class="text-center" scope="col">Customer Details</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($requests as $index => $request)
                                    <tr>

                                        <th style="width: 1%;">{{ $index + 1 }}</th>
                                        <td class="col-md-2 text-center">

                                            {{-- <img src="{{asset('"/car_pics/" . $car->no_plate . "jpg"')}}"
                                            class="w-50"> --}}
                                            <img src="/car_pics/{{ $request->booking_id2 }}.jpg"
                                                class="w-50">
                                            <p class="font-weight-bold">No. Plate</p>
                                            <p>{{ explode('_', $request->booking_id2)[0] }}</p>
                                            <p>{{ explode('_', $request->booking_id2)[1] }}</p>

                                        </td>

                                        <td class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-6 font-weight-bold">
                                                    Name:
                                                </div>
                                                <div class="col-md-6">
                                                    <p>
                                                        {{ DB::table('customers')->select()->where('email', $request->cus_email)->get()[0]->fname }}
                                                        {{ DB::table('customers')->select()->where('email', $request->cus_email)->get()[0]->lname }}
                                                    </p>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 font-weight-bold">
                                                    Contact Number:
                                                </div>
                                                <div class="col-md-6">
                                                    {{ DB::table('customers')->select()->where('email', $request->cus_email)->get()[0]->contact_number }}
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 font-weight-bold">
                                                    Pickup Date-Time:
                                                </div>
                                                <div class="col-md-6">
                                                    {{ DB::table('rents')->select()->where('booking_id2', $request->booking_id2)->get()[0]->pickup_date }}
                                                    <br>
                                                    {{ DB::table('rents')->select()->where('booking_id2', $request->booking_id2)->get()[0]->pickup_time }}
                                                    {{-- {{ explode('_', $car->no_plate)[1] }} --}}
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 font-weight-bold">
                                                    Pickup Address:
                                                </div>
                                                <div class="col-md-6">
                                                    {{ DB::table('rents')->select()->where('booking_id2', $request->booking_id2)->get()[0]->pickup_address }}
                                                </div>
                                            </div>
                                        </td>

                                        @if ($request->active == 0)

                                            <td class="col-md-1 font-weight-bold text-primary">Pending</td>
                                        @elseif ($request->active != 3 && $request->active != 0)
                                            <td class="col-md-1 font-weight-bold text-success">Accepted</td>
                                        @else
                                            <td class="col-md-1 font-weight-bold text-success">Completed</td>
                                        @endif
                                        <td class="col-md-1">

                                            @if ($request->active == 0)

                                                <a href="{{ route('acceptReq', $request->cus_email . ':' . $request->booking_id2) }}"
                                                    class="btn btn-primary">Accept</a>
                                            @elseif ($request->active != 3 && $request->active != 0)

                                                <p>Please call customer to <span class="text-danger"> cancel</span>
                                                    request</p>
                                                <a href="{{ route('completeReq', $request->cus_email . ':' . $request->booking_id2) }}"
                                                    class="btn btn-success mt-3">Complete</a>

                                            @else
                                                <p class="col-md-1 font-weight-bold text-info"> No Action Required </p>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                    @endif
                </div>
                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <table class="table table-hover">
                        <thead class="font-weight-bold">
                            <tr>
                                <th scope="col">#</th>
                                <th class="text-center" scope="col">Car</th>
                                <th scope="col">Details</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cars as $index => $car)
                                <tr>

                                    <th class="col-sm-1" scope="row">{{ $index + 1 }}</th>
                                    <td class="col-md-3 text-center">

                                        {{-- <img src="{{asset('"/car_pics/" . $car->no_plate . "jpg"')}}"
                                            class="w-50"> --}}
                                        <img src="/car_pics/{{ $car->no_plate }}.jpg" class="w-50">

                                    </td>
                                    <td class="col-md-3">
                                        <div class="row">
                                            <div class="col-md-6 font-weight-bold">
                                                Manufacturer Name:
                                            </div>
                                            <div class="col-md-6">
                                                {{ $car->mafacture_name }}
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6 font-weight-bold">
                                                Model:
                                            </div>
                                            <div class="col-md-6">
                                                {{ $car->model }}
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6 font-weight-bold">
                                                Registration No.:
                                            </div>
                                            <div class="col-md-6">
                                                {{ explode('_', $car->no_plate)[0] }}
                                                <br>
                                                {{ explode('_', $car->no_plate)[1] }}
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6 font-weight-bold">
                                                Passenger Sits:
                                            </div>
                                            <div class="col-md-6">
                                                {{ $car->total_passenger_sits }}
                                            </div>
                                        </div>
                                    </td>
                                    @if ($car->available_to == null && $car->available_to != 'inActive')

                                        <td class="col-md-1 font-weight-bold text-primary">Active</td>
                                    @elseif($car->available_to == 'inActive')
                                        <td class="col-md-1 font-weight-bold text-danger">Inactive</td>
                                    @else
                                        <td class="col-md-1 font-weight-bold text-info">Rented</td>
                                    @endif

                                    <td class="col-md-1">
                                        @if ($car->available_to != null && $car->available_to == 'inActive')
                                            <a href="{{ route('activeCar', $car->no_plate) }}"
                                                class="btn btn-success">Active</a>
                                        @elseif ($car->available_to != null && $car->available_to != 'inActive')
                                            <a href="#" class="btn btn-danger disabled">Inactive</a>
                                        @else
                                            <a href="{{ route('inactiveActive', $car->no_plate) }}"
                                                class="btn btn-danger">Inactive</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br><br><br><br><br>
                    <br>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <table class="table table-hover">
                        <thead class="font-weight-bold">
                            <tr>
                                <th scope="col">#</th>
                                <th class="text-center" scope="col">Car</th>
                                <th scope="col">Details</th>
                                <th class="text-center" scope="col">Registration No.</th>
                                <th class="text-center" scope="col">Registered to <br> (Car Owner's NID)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inactives as $index => $inactive)
                                <tr>
                                    <th class="col-sm-1" scope="row">{{ $index }}</th>
                                    <td class="col-md-2 text-center">
                                        <img src="/car_pics/{{ $inactive->no_plate }}.jpg" class="w-50">

                                    </td>
                                    <td class="col-md-2">
                                        <div class="row">
                                            <div class="col-md-6 font-weight-bold">
                                                Manufacturer Name:
                                            </div>
                                            <div class="col-md-6">
                                                {{ $inactive->mafacture_name }}
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6 font-weight-bold">
                                                Model:
                                            </div>
                                            <div class="col-md-6">
                                                {{ $inactive->model }}
                                            </div>
                                        </div>
                                        <br>

                                    </td>
                                    <td class="col-md-2">
                                        <div class="row text-center">
                                            <div class="col-md-12">
                                                {{ explode('_', $inactive->no_plate)[0] }}
                                                <br>
                                                {{ explode('_', $inactive->no_plate)[1] }}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="col-md-2">
                                        <div class="row text-center">
                                            <div class="col-md-12 h5">
                                                {{ $inactive->reg_to }}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>




                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <form class="p-5 mb-5 border mt-5 text-center" enctype="multipart/form-data"
                        action="{{ route('insertCar') }}" method="POST">
                        @csrf
                        <div class="row mt-4">
                            <div class="col-6">
                                <input class="p-3 w-75" type="file" name="img" accept="image/*" required>
                            </div>
                            <div class="col-6">
                                <label>National Identification Number:</label>
                                <br>
                                <input class="p-3 w-75 border" type="text" value="{{ session('LoggedNID') }}"
                                    disabled>
                                <input class="p-3 w-75 border" type="hidden" name="nID"
                                    value="{{ session('LoggedNID') }}">
                            </div>

                        </div>

                        <div class="row mt-5">
                            <div class="col-6">
                                <input class="p-3 w-75 border" name="mfName" type="text"
                                    placeholder="Manufacturer Name" required>
                            </div>
                            <div class="col-6">
                                <input class="p-3 w-75 border" name="mdName" type="text" placeholder="Model Name"
                                    required>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-6">
                                <input class="p-3 w-75 border" name="sit" type="number"
                                    placeholder="Passenger Sit Caparcity" max="14" required>
                            </div>
                            <div class="col-6">
                                <input class="p-3 w-75 border" name="color" type="text" placeholder="Color" required>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-6">
                                <select name="carType" class="p-3 w-75 border" required>
                                    <option selected disabled>Select Car Type</option>
                                    <option>Private Car</option>
                                    <option>Microbus</option>
                                </select>
                            </div>

                        </div>
                        <div class="h4 mt-5 pt-5">Car No. Plate Details</div>
                        <div class="row mt-4">
                            <div class="col-6">
                                <select name="plateCityName" class="p-3 w-75 border" required>
                                    <option selected>Dhaka Metro</option>
                                    <option>Chatta Metro</option>
                                    <option>Rajshahi Metro</option>
                                    <option>Cox Bazar</option>
                                    <option>Sylhet</option>
                                    <option>Nawga</option>
                                    <option>Norshindi</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select name="plateName" class="p-3 w-75 text-center border" required>
                                    <option>অ</option>
                                    <option>ই</option>
                                    <option>উ</option>
                                    <option>এ</option>
                                    <option>ক</option>
                                    <option>খ</option>
                                    <option selected>গ</option>
                                    <option>ঘ</option>
                                    <option>ঙ</option>
                                    <option>চ</option>
                                    <option>ছ</option>
                                    <option>জ</option>
                                    <option>ঝ</option>
                                    <option>ত</option>
                                    <option>থ</option>
                                    <option>ঢ</option>
                                    <option>ড</option>
                                    <option>ট</option>
                                    <option>ঠ</option>
                                    <option>দ</option>
                                    <option>ধ</option>
                                    <option>ন</option>
                                    <option>প</option>
                                    <option>ফ</option>
                                    <option>ব</option>
                                    <option>ভ</option>
                                    <option>ম</option>
                                    <option>য</option>
                                    <option>র</option>
                                    <option>ল</option>
                                    <option>শ</option>
                                    <option>স</option>
                                    <option>হ</option>
                                </select>
                            </div>

                        </div>
                        <div class="row mt-4">
                            <div class="col-6">
                                <select name="plateRegNumber" class="p-3 w-75 text-center border" required>
                                    <option>০১</option>
                                    <option>০২</option>
                                    <option>০৩</option>
                                    <option>০৪</option>
                                    <option>০৫</option>
                                    <option>০৬</option>
                                    <option>০৭</option>
                                    <option>০৮</option>
                                    <option>০৯</option>
                                    <option>১০</option>
                                    <option selected>১১</option>
                                    <option>১২</option>
                                    <option>১৩</option>
                                    <option>১৪</option>
                                    <option>১৫</option>
                                    <option>১৬</option>
                                    <option>১৭</option>
                                    <option>১৮</option>
                                    <option>১৯</option>
                                    <option>২০</option>
                                    <option>২১</option>
                                    <option>২২</option>
                                    <option>২৩</option>
                                    <option>২৪</option>
                                    <option>২৫</option>
                                    <option>২৬</option>
                                    <option>২৭</option>
                                    <option>২৮</option>
                                    <option>২৯</option>
                                    <option>৩০</option>
                                    <option>৩১</option>
                                    <option>৩২</option>
                                    <option>৩৩</option>
                                    <option>৩৪</option>
                                    <option>৩৫</option>
                                    <option>৩৬</option>
                                    <option>৩৭</option>
                                    <option>৩৮</option>
                                    <option>৩৯</option>
                                    <option>৪০</option>
                                    <option>৪১</option>
                                    <option>৪২</option>
                                    <option>৪৩</option>
                                    <option>৪৪</option>
                                    <option>৪৫</option>
                                    <option>৪৬</option>
                                    <option>৪৭</option>
                                    <option>৪৮</option>
                                    <option>৪৯</option>
                                    <option>৫০</option>
                                    <option>৫১</option>
                                    <option>৫২</option>
                                    <option>৫৩</option>
                                    <option>৫৪</option>
                                    <option>৫৫</option>
                                    <option>৫৬</option>
                                    <option>৫৭</option>
                                    <option>৫৮</option>
                                    <option>৫৯</option>
                                    <option>৬০</option>
                                    <option>৬১</option>
                                    <option>৬২</option>
                                    <option>৬৩ </option>
                                    <option>৬৪</option>
                                    <option>৬৫</option>
                                    <option>৬৬</option>
                                    <option>৬৭</option>
                                    <option>৬৮</option>
                                    <option>৬৯</option>
                                    <option>৭০</option>
                                    <option>৭১</option>
                                    <option>৭২</option>
                                    <option>৭৩</option>
                                    <option>৭৪</option>
                                    <option>৭৫</option>
                                    <option>৭৬</option>
                                    <option>৭৭</option>
                                    <option>৭৮</option>
                                    <option>৭৯</option>
                                    <option>৮০</option>
                                    <option>৮১</option>
                                    <option>৮২</option>
                                    <option>৮৩</option>
                                    <option>৮৪</option>
                                    <option>৮৫</option>
                                    <option>৮৬</option>
                                    <option>৮৭</option>
                                    <option>৮৮</option>
                                    <option>৮৯</option>
                                    <option>৯০</option>
                                    <option>৯১</option>
                                    <option>৯২</option>
                                    <option>৯৩</option>
                                    <option>৯৪</option>
                                    <option>৯৫</option>
                                    <option>৯৬</option>
                                    <option>৯৭ </option>
                                    <option>৯৮</option>
                                    <option>৯৯ </option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select name="plateVehicleNumber1" class="col-sm-2 h-100 text-center border" required>
                                    <option selected>০</option>
                                    <option>১</option>
                                    <option>২</option>
                                    <option>৩</option>
                                    <option>৪</option>
                                    <option>৫</option>
                                    <option>৬</option>
                                    <option>৭</option>
                                    <option>৮</option>
                                    <option>৯</option>
                                </select>

                                <select name="plateVehicleNumber2" class="col-sm-2 h-100 text-center border" required>
                                    <option selected>০</option>
                                    <option>১</option>
                                    <option>২</option>
                                    <option>৩</option>
                                    <option>৪</option>
                                    <option>৫</option>
                                    <option>৬</option>
                                    <option>৭</option>
                                    <option>৮</option>
                                    <option>৯</option>
                                </select>

                                <select name="plateVehicleNumber3" class="col-sm-2 h-100 text-center border" required>
                                    <option selected>০</option>
                                    <option>১</option>
                                    <option>২</option>
                                    <option>৩</option>
                                    <option>৪</option>
                                    <option>৫</option>
                                    <option>৬</option>
                                    <option>৭</option>
                                    <option>৮</option>
                                    <option>৯</option>
                                </select>

                                <select name="plateVehicleNumber4" class="col-sm-2 h-100 text-center border" required>
                                    <option selected>০</option>
                                    <option>১</option>
                                    <option>২</option>
                                    <option>৩</option>
                                    <option>৪</option>
                                    <option>৫</option>
                                    <option>৬</option>
                                    <option>৭</option>
                                    <option>৮</option>
                                    <option>৯</option>
                                </select>
                            </div>
                        </div>
                        <br><br>
                        <div class="ml-5 mt-4 pl-3 float-left">
                            <input name="agree" type="checkbox" id="cb1" required>
                            <label for="cb1"> I agree that all the information above is true and varified.</label>
                        </div>
                        <div class="row mt-4bg-successs">
                            <input type="submit" style="margin-top:10vh;" class="w-50 btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <br><br><br><br>
        @if (session()->has('done'))

            <script>
                alert('Your Records has been saved successfully!');
                {{ session()->pull('done') }}
            </script>
        @endif
        {{-- <p class="credit">Developed by <a href="http://www.designtheway.com" target="_blank">Design the way</a></p> --}}

</body>

</html>



{{-- <select name="plateName" class="p-3 w-75 text-center border" required>
    <option>অ</option>
    <option>ই</option>
    <option>উ</option>
    <option>এ</option>
    <option>ক</option>
    <option>খ</option>
    <option selected>গ</option>
    <option>ঘ</option>
    <option>ঙ</option>
    <option>চ</option>
    <option>ছ</option>
    <option>জ</option>
    <option>ঝ</option>
    <option>ত</option>
    <option>থ</option>
    <option>ঢ</option>
    <option>ড</option>
    <option>ট</option>
    <option>ঠ</option>
    <option>দ</option>
    <option>ধ</option>
    <option>ন</option>
    <option>প</option>
    <option>ফ</option>
    <option>ব</option>
    <option>ভ</option>
    <option>ম</option>
    <option>য</option>
    <option>র</option>
    <option>ল</option>
    <option>শ</option>
    <option>স</option>
    <option>হ</option>
</select> --}}
