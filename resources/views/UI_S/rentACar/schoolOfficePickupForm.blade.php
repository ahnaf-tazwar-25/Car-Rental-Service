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
    ::-webkit-scrollbar {
        width: 0px;
        background: transparent;
        /* make scrollbar transparent */
    }

</style>

<body>
    @section('logOut')
        <a class="btn btn-primary mr-3" href="{{ route('logout', 'rent') }}">
        @endsection

        @extends('layouts.nav')
        <br><br><br>
        {{-- <h1>This is hourly Rent</h1>
    <h1>{{ $city }}</h1> --}}

        <div id="booking" class="section">
            <div class="section-center">
                <div class="ml-5 pl-5">
                    <div class="d-flex justify-content-between">
                        <div class="col-md-4">
                            <br><br><br><br><br><br>
                            <br><br><br><br><br><br>
                            <div class="booking-cta">
                                <h1 class="text-white">Make a car reservation</h1><br>
                                <p class="text-white">
                                    Please fill up the form with all the information to book a car for office/ school
                                    pickup for a whole month starting from the day you want to start. Some of the fileds
                                    have been filled up for you
                                    with your account details.
                                </p>
                                <br>
                                <p class="text-white">You can change the regular pickup address anytime you want!</p>
                            </div>
                        </div>
                        <div class="pl-5 col-md-8 col-md-offset-1">
                            <div class="booking-form">
                                <div class="booking-cta">
                                    <h1 class="form-header text-center text-success">Rent For school/office pickup</h1>
                                </div>
                                <br><br>
                                <form action="{{ route('schoolOffice') }}" method="POST">
                                    @csrf

                                    <input type="hidden" name="cancelRedirect" value="rent">
                                    <input type="hidden" name="redirector" value="schoolOfficePickupForm">
                                    <input type="hidden" name="rentType" value="school_office">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="name" value="{{ $fname . ' ' . $lname }}" type="hidden">

                                                <input value="{{ $fname . ' ' . $lname }}" class="form-control"
                                                    type="text" disabled>
                                                <span class="form-label">Name</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="contact" value="{{ $number }}" class="form-control"
                                                    type="text" required>
                                                <span class="form-label">Phone</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="email" value="{{ $email }}" type="hidden">
                                                <input value="{{ $email }}" class="form-control" disabled>
                                                <span class="form-label">Email</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input id="txtDate" name="date" class="form-control" type="date"
                                                    required>
                                                <span class="form-label">Starting Date</span>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="address" class="form-control" type="text">
                                            <span class="form-label">Regular PickUp Address</span>
                                        </div>
                                    </div> --}}
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input name="address" value="{{ old('address') }}"
                                                    class="form-control" type="text" required>
                                                <span class="form-label">Pickup Address</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input name="schoolName" value="{{ old('schoolName') }}"
                                                    class="form-control" type="text" required>
                                                <span class="form-label">School/Office Name</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input name="schoolAddress" value="{{ old('schoolAddress') }}"
                                                    class="form-control" type="text" required>
                                                <span class="form-label">School/Office Address</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <span class="form-label">School/Office Starting Time:</span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-6 ml-5">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <select name="startingHour" class="form-control">
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
                                                        </select>
                                                        <span class="form-label">Hour</span>

                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <select name="startingMin" class="form-control">
                                                            <option disabled selected></option>
                                                            <option>00</option>
                                                            <option>15</option>
                                                            <option>20</option>
                                                            <option>25</option>
                                                            <option>30</option>
                                                            <option>35</option>
                                                            <option>40</option>
                                                            <option>45</option>
                                                            <option>50</option>
                                                            <option>55</option>
                                                        </select>
                                                        <span class="form-label">Min</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <select name="startingMeridiem" class="form-control">
                                                            <option selected disabled></option>
                                                            <option>AM</option>
                                                            <option>PM</option>
                                                        </select>
                                                        <span class="form-label">AM/PM</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <span class="form-label">School/Office Ending Time:</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row">
                                                &nbsp;
                                                <div class="col-sm-3 ml-5">
                                                    <div class="form-group">
                                                        <select name="endingHour" class="form-control">
                                                            <option selected disabled></option>
                                                            <option>12</option>
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
                                                        </select>
                                                        <span class="form-label">Hour</span>

                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <select name="endingMin" class="form-control">
                                                            <option disabled selected></option>
                                                            <option>15</option>
                                                            <option>20</option>
                                                            <option>25</option>
                                                            <option>30</option>
                                                            <option>35</option>
                                                            <option>40</option>
                                                            <option>45</option>
                                                            <option>50</option>
                                                            <option>55</option>
                                                        </select>
                                                        <span class="form-label">Min</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <select name="endingMeridiem" class="form-control">
                                                            {{-- <option selected disabled></option> --}}
                                                            <option disabled>AM</option>
                                                            <option selected>PM</option>
                                                        </select>
                                                        <span class="form-label">AM/PM</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
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
                                                <span class="form-label">City</span>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
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
                                                <span class="select-arrow"></span>
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
