<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/iconLogo.png') }}">
    <title>Car Rental Service</title>
    @extends('layouts.head')
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('styles/booking.css') }}">


</head>
<style>
    ::-webkit-scrollbar {
        width: 0px;
        background: transparent;
        /* make scrollbar transparent */
    }

</style>

<body>
    @section('logOut')
        <a class="btn btn-primary mr-3" href="{{ route('logout', '11') }}">
        @endsection
        @extends('layouts.nav')
        <br><br><br>
        {{-- <h1>This is hourly Rent</h1>
    <h1>{{ $city }}</h1> --}}

        <section class="payment-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2>Confim Book</h2>
                    <p>Please recheck all the necessary information that you have given and click on "Book Now!" to
                        confirm you car rental booking.</p>
                    {{-- <p>{{dd(session('form'))}}</p> --}}
                </div>
                <form action="{{ route($commonField['action']) }}" method="POST">
                    @csrf
                    <input type="hidden" name="carNoPlate" value="{{ $carNoPlate }}">
                    <input type="hidden" name="carRegTo" value="{{ $carRegTo }}">

                    {{-- <input type="hidden" name="commonField[]" value="{{$commonField}}">
                    <input type="hidden" name="uncommonAttributes[]" value="{{$uncommonAttributes}}"> --}}

                    {{-- <input type="hidden" name="commonField" value="Ma Durga"> --}}
                    <div class="products">
                        <h3 class="title text-center text-success">Book Confirmation</h3>

                        @foreach ($commonField as $index => $item)
                            {{-- <p class="item-description">Email</p> --}}
                            {{-- && $item != $commonField['Time'] --}}
                            @if ($item != $commonField['redirect'] && $item != $commonField['rentType'] && $item != null
                             && $item != $commonField['action']  && $item != $commonField['redirect2'])
                                <div class="item mb-4">
                                    <p class="item-description text-primary">{{ str_replace("_"," ",$index) }}</p>
                                    <p class="item-name">{{ $item }}</p>
                                </div>
                            @endif
                            <input type="hidden" name="commonField[]" value="{{ $item }}">
                        @endforeach

                        <div class="total"></div>


                        @if ($cancelRedirect === 'tourism')

                            <p class="item-description mb-3">Resorts</p>
                        @endif

                        @foreach ($uncommonAttributes as $index => $item)
                            {{-- @if ($item != $commonField['redirect']) --}}
                            <div class="item mb-4">
                                @if ($cancelRedirect != 'tourism')

                                    <p class="item-description">{{ str_replace('_', ' ', $index) }}</p>
                                    <input type="hidden" name="uncommonAttributes['{{ $index }}']"
                                        value="{{ $item }}">
                                    <p class="item-name">{{ $item }}</p>
                                @else
                                    <input type="hidden" name="uncommonAttributes['{{ $index }}']"
                                        value="{{ $item }}">
                                    <p class="item-name">{{ $item }}</p>
                                @endif
                            </div>
                            {{-- @endif --}}
                        @endforeach

                    </div>

                    <div class="card-details">
                        <h3 class="title"></h3>
                        <div class="row justify-content-center">
                            <div class="form-group col-sm-12">
                                <button type="submit" class="btn btn-primary btn-block">Book now!</button>
                            </div>
                        </div>
                    </div>

                    <div class="total"></div>

                    <div class="row justify-content-center">
                        <a href="{{ route($cancelRedirect) }}" type="button"
                            class="btn text-white font-weight-bold col-md-4 m-3 bg-danger">
                            Cancel Book</a>

                        @if ($cancelRedirect != 'tourism')

                            <a href="{{ route($commonField['redirect2'], $commonField['redirect']) }}" type="button"
                                class="btn text-white font-weight-bold col-md-4 m-3 bg-success">
                                Edit</a>
                        @endif
                    </div>
                </form>
            </div>
        </section>

</body>

</html>


{{-- <div class="item">
                <span class="price">$200</span>
                <p class="item-description">Full Name</p>
                <p class="item-name">Ahnaf Tazwar</p>
              </div> --}}

{{-- <p class="item-name">{{$commonField['redirect']}}</p> --}}


{{-- <div class="row text-center">
                @foreach ($commonField as $index => $item)
                  @if ($item != $commonField['redirect'])
                    <div class="col-md-6 mb-4">
                      <p class="item-description">{{$index}}</p>  
                      <p class="item-name">{{$item}}</p>
                    </div>
                  @endif
                @endforeach
            </div> --}}
