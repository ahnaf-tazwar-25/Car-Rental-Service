<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/iconLogo.png') }}">
    <title>Car Rental Service</title>
    @extends('layouts.head')
    <link rel="stylesheet" href="{{ asset('styles/cards.css') }}">
</head>


<body>
    @section('logOut')
        <a class="btn btn-primary mr-3" href="{{ route('logout', 'rent') }}">
        @endsection

        @extends('layouts.nav')
        <br><br><br><br><br><br>

        {{-- {{$request->name}}<br>
    {{$request->contact}}<br>
    {{$request->email}}<br>
    {{$request->address}}
    {{$request->date}}
    {{$request->rent_duration}}<br>
    {{$request->hour}}<br>
    {{$request->min}}<br>
    {{$request->meridiem}}<br>
    {{$request->city}} --}}


        {{-- <h1 class="mt-4 h1 text-center text-uppercase text-success font-weight-bold">Select Cars {{dd(session('form'))}}</h1> --}}
        <h1 class="mt-4 h1 text-center text-uppercase text-success font-weight-bold">Select Cars</h1>


        <div id="features">
            @foreach ($types as $i => $type)
                <h1 class="h2 text-center text-primary ">{{ $type->type }}</h1>
                <div class="row">
                    @foreach ($cars as $i => $car)
                        {{-- <p>{{dd((int)$car->total_passenger_sits)}}</p> --}}
                        @if ((int) session('form')['sit'] <= (int) $car->total_passenger_sits && $car->available_to == null)
                            @if ($car->type === $type->type)
                                <div class="each_feature col-md-3">
                                    <img style="padding: 2.5%;" style="position:absolute; left:50px; top:20px; "
                                        src="/car_pics/{{ $car->no_plate }}.jpg">
                                    {{-- <img src="/car_pics/{{ $request->booking_id2 }}.jpg" --}}
                                    {{-- class="w-50"> --}}
                                    <h3>Passenger Sits: {{ $car->total_passenger_sits }}</h3>
                                    <br>
                                    <label>{{ $car->mafacture_name . ' ' . $car->model }}</label>
                                    <br><br>
                                    <br><br>
                                    <a href="#modalCenter{{ $i }}" role="button" class="btn btn-success w-100"
                                        data-toggle="modal">Click to see details</a>
                                </div>
                            @endif
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>


        @foreach ($cars as $i => $car)


            <div id="modalCenter{{ $i }}" class="modal fade" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ $car->mafacture_name . ' ' . $car->model }}</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">

                            <img src="/car_pics/{{ $car->no_plate }}.jpg" class="d-block w-100">
                            {{-- <img style="padding: 2.5%;" style="position:absolute; left:50px; top:20px; "
                                        src="/car_pics/{{ $car->no_plate }}.jpg"> --}}
                            {{-- <div id="carouselExampleIndicators{{ $i }}" class="carousel slide"
                            data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators{{ $i }}" data-slide-to="0"
                                    class="active"></li>
                                <li data-target="#carouselExampleIndicators{{ $i }}" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators{{ $i }}" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('images/earnWthYourCar-Title.jpeg') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/earnWthYourCar-Title.jpeg') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/earnWthYourCar-Title.jpeg') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's
                                    content.</p>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators{{ $i }}"
                                role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators{{ $i }}"
                                role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div> --}}
                        </div>

                        {{-- <button type="button" class="p-4 btn-primary">Book Now!</button> --}}
                        <div class="row mt-3 ml-3">
                            <div class="col-md-6 font-weight-bold">
                                Manufacturer Name:
                            </div>
                            <div class="col-md-6">
                                {{ $car->mafacture_name }}
                            </div>
                        </div>
                        <div class="row mt-3 ml-3">
                            <div class="col-md-6 font-weight-bold">
                                Model Name:
                            </div>
                            <div class="col-md-6">
                                {{ $car->model }}
                            </div>
                        </div>
                        <div class="row mt-3 ml-3">
                            <div class="col-md-6 font-weight-bold">
                                Car Type:
                            </div>
                            <div class="col-md-6">
                                {{ $car->type }}
                            </div>
                        </div>
                        <div class="row mt-3 ml-3">
                            <div class="col-md-6 font-weight-bold">
                                Color:
                            </div>
                            <div class="col-md-6">
                                {{ $car->color }}
                            </div>
                        </div>
                        <div class="row mt-3 ml-3">
                            <div class="col-md-6 font-weight-bold">
                                Passenger Sits:
                            </div>
                            <div class="col-md-6">
                                {{ $car->total_passenger_sits }}
                            </div>
                        </div>
                        <div class="row mt-3 ml-3">
                            <div class="col-md-6 font-weight-bold">
                                No. Plate:
                            </div>
                            <div class="col-md-6">
                                {{ explode('_', $car->no_plate)[0] }}

                                <p class="mt-1 mb-2">{{ explode('_', $car->no_plate)[1] }}</p>
                            </div>
                        </div>
                        <form action="{{ route('confirm_book') }}" method="POST">
                            @csrf
                            {{-- <input type="hidden" name="req[]" value="{{ $request}}"> --}}
                            <input type="hidden" name="address" value="{{ $address }}">
                            <input type="hidden" name="carNoPlate" value="{{ $car->no_plate }}">
                            <input type="hidden" name="carRegTo" value="{{ $car->reg_to }}">
                            <button type="submit" class="p-4 w-100 btn-primary text-decoration-none text-center">
                                Book Now</button>
                        </form>

                        <button type="button" class="p-3 btn-secondary bg-danger" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        @endforeach

        @extends('layouts.footer')
</body>

</html>
{{-- <!-- Modal HTML -->
    <div id="modalCenter" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal Alignment Demo</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">


                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/earnWthYourCar-Title.jpeg') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/earnWthYourCar-Title.jpeg') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/earnWthYourCar-Title.jpeg') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's
                                content.</p>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">OK, Got it!</button>
                </div>
            </div>
        </div>
    </div> --}}



{{-- id
    
    
    nID
    carReg
    
    
    fName
    lName
    password
    email
    contact_number
    address
    city
    zip
    terms
    is_active --}}
