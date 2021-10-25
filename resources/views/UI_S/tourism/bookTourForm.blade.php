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
    <link rel="stylesheet" href="{{ asset('styles/houlyCarRent.css') }}">


</head>
<style>
    body {
        font-family: 'Montserrat', sans-serif;
        background-image: url({{$imgLink}});
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

    @section('logOut')
        <a class="btn btn-primary mr-3" href="{{ route('logout', 'tourism') }}">
        @endsection

        @extends('layouts.nav')
        <br><br><br>
        {{-- <h1>This is hourly Rent</h1>
    <h1>{{ $city }}</h1> --}}

        <div id="booking" class="section ">
            <div class="section-center">
                <div class="ml-5 pl-5">
                    <div class="d-flex justify-content-between row">
                        <div class="col-md-4">
                            <div class="booking-cta">
                                <h1 class="text-white">Make a car reservation</h1><br>
                                <p class="text-white">
                                    Please fill up the form with all the information to book a car houly. Some of the
                                    fileds
                                    have been filled up for you
                                    with your account details. <br>
                                    {{-- @php
                                        $v = 21;
                                        $a = ['asd1', 'asd2', 'asd3', 'asd4'];
                                        $r = isset($v) ? 'Yes' : 'No';
                                        echo $r;
                                        print_r($a);
                                    @endphp --}}
                                </p>
                                <br>
                                <p class="text-white">Note: If you want to cancel your booking(s), please cancel it
                                    at
                                    least before 8 hours
                                    from your pickup time. Cancelling after 8 hours more than 3 times will result to pay
                                    extra fine.</p>
                            </div>
                        </div>
                        <div class="pl-5 col-md-8 col-md-offset-1">
                            <div class="booking-form">
                                <div class="booking-cta">
                                    <h1 class="form-header text-center text-success">Tour to <br> {{ $tourLocation }}
                                    </h1>
                                </div>
                                <br><br>
                                <form action="{{ route('bookTour') }}" method="POST">
                                    @csrf
                                    <input name="name" value="{{ $fname . ' ' . $lname }}" type="text" hidden>
                                    <input name="email" value="{{ $email }}" type="text" hidden>
                                    <input name="tourLocation" value="{{ $tourLocation }}" type="text" hidden>
                                    <input name="redirect2" value="{{ $redirect2 }}" type="text" hidden>
                                    {{-- <input name="phone" value="{{$phone}}" type="text" hidden> --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ $fname . ' ' . $lname }}" class="form-control"
                                                    type="text" disabled>
                                                <span class="form-label">Name</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="phone_number" value="{{ $contact }}"
                                                    class="form-control" type="text" required>
                                                <span class="form-label">Phone</span>
                                                @error('phone_number')
                                                    <p class="text-danger font-weight-bold">
                                                        {{ $message }}
                                                    </p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="{{ $email }}" class="form-control" type="email"
                                                    disabled>
                                                <span class="form-label">Email</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input id="txtDate" name="date" class="form-control" type="date"
                                                    required>
                                                <span class="form-label">Pickup Date</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="city" class="form-control" required>
                                                    <option selected disabled></option>
                                                    <option>Dhaka</option>
                                                    <option>Chattagram</option>
                                                    <option>Rajshahi</option>
                                                    <option>Sylhet</option>
                                                    <option>Barishal</option>
                                                    <option>Khulna</option>
                                                    <option>Barisal</option>
                                                    <option>Cox's Bazar</option>
                                                    <option>Comilla</option>
                                                </select>
                                                <span class="form-label">Pickup City</span>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="address" class="form-control" type="text" required>
                                                <span class="form-label">PickUp Address</span>
                                            </div>
                                        </div>
                                    </div>

                                    @isset($tourSubSpot)

                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <h1 class="h4 font-weight-bold text-success">Select Resort(s)</h1>
                                            </div>
                                            <div class="col-md-12 mt-1">
                                                <div class="form-group form-check-inline">
                                                    @foreach ($tourSubSpot as $t)
                                                        <input class="form-check-input" name="resorts[]"
                                                            value="{{ $t }}" type="checkbox" value=""
                                                            id="{{ $t }}">
                                                        <label class="form-check-label pr-2" for="{{ $t }}">
                                                            {{ $t }} </label>
                                                    @endforeach
                                                </div>
                                                {{-- <div class="form-group form-check-inline">
                                                    <input class="form-check-input" name="resorts[]" value="Inani Beach"
                                                        type="checkbox" value="" id="innani">
                                                    <label class="form-check-label pr-2" for="innani">
                                                        {{ $tourSubSpot[0] }} </label>

                                                    <input class="form-check-input" name="resorts[]" value="Himchari"
                                                        type="checkbox" value="" id="himchari">
                                                    <label class="form-check-label pr-2" for="himchari">
                                                        {{ $tourSubSpot[1] }}</label>

                                                    <input class="form-check-input" name="resorts[]" value="Maheskhali"
                                                        type="checkbox" value="" id="maheskhali">
                                                    <label class="form-check-label pr-2" for="maheskhali">
                                                        {{ $tourSubSpot[2] }}
                                                    </label>

                                                    <input class="form-check-input" name="resorts[]" value="Ramu"
                                                        type="checkbox" value="" id="ramu">
                                                    <label class="form-check-label pr-2" for="ramu"> {{ $tourSubSpot[3] }}
                                                    </label>
                                                </div> --}}
                                            </div>
                                        </div>
                                    @endisset

                                    {{-- <div class="row mt-3">
                                        <div class="col-sm-6">
                                            <label for="hotel" class="h5">Please keep it blank if you have
                                                already booked your desired hotel</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <select id="hotel" name="city" class="form-control input-not-empty"
                                                    required>
                                                    <option selected disabled></option>
                                                    <option>Prime Park Hotel</option>
                                                    <option>Ocean Paradise Hotel & Resort</option>
                                                    <option>Hotel Beach Park</option>
                                                    <option>Grace Cox Smart Hotel</option>
                                                    <option>Heritage Hotel</option>
                                                    <option>Long Beach Hotel</option>
                                                    <option>Comilla</option>
                                                </select>
                                                <span class="form-label">Hotels</span>
                                            </div>
                                        </div>

                                    </div> --}}
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <select name="sit" class="form-control" required>
                                                    <option selected disabled></option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                    <option>13</option>
                                                    <option>14</option>
                                                </select>
                                                <span class="form-label">Passenger Sit</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-12">
                                            <div class="form-check-inline form-group col-md-12">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="tourTermsCheck" required>
                                                <label class="form-check-label" for="tourTermsCheck">
                                                    I accept the <a href="http://127.0.0.1:8000/document____s/terms_conditions.pdf">terms</a> and conditions for the entre
                                                    tour.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="form-btn">
                                        <button type="submit" class="submit-btn">Book Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('.form-control').each(function() {
                floatedLabel($(this));
            });

            $('.form-control').on('input', function() {
                floatedLabel($(this));
            });

            function floatedLabel(input) {
                var $field = input.closest('.form-group');
                if (input.val()) {
                    $field.addClass('input-not-empty');
                } else {
                    $field.removeClass('input-not-empty');
                }
            }

            $(function() {
                var dtToday = new Date();

                var month = dtToday.getMonth() + 1;
                var day = dtToday.getDate() + 1;
                var year = dtToday.getFullYear();
                if (month < 10)
                    month = '0' + month.toString();
                if (day < 10)
                    day = '0' + day.toString();

                var maxDate = year + '-' + month + '-' + day;
                // alert(maxDate);
                $('#txtDate').attr('min', maxDate);
            });
        </script>
</body>

</html>
