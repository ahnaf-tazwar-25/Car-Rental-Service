<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.head')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/iconLogo.png') }}">
    <link rel="stylesheet" href="{{ asset('styles/carRenterForm.css') }}">
</head>
<style>
    body {
        font-family: 'Montserrat', sans-serif;
        background-image: url('../images/carRenter-handshake.jpg');
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

<body class="antialiased" onload="window.scrollTo(0,document.body.scrollHeight)">
    @section('logOut')
        <a class="btn btn-primary mr-3" href="{{ route('logout', 'renterRegistration') }}">
        @endsection

        @section('logIn')
            <a class="btn btn-primary mr-3" href="{{ route('login', 'renterRegistration') }}">
                Sign In
            </a>
        @endsection

        @extends('layouts.nav')


        <div class="form_wrapper" style="width: 35rem;">
            <div class="form_container ml-2 pl-1">
                <div class="title_container" style="color: rgb(109, 86, 24);">
                    <h2>Become a car shareholder now!</h2>
                </div>
                {{-- @error('nID')
                    <div class="title_container" style="color: rgb(255, 0, 0);">
                        <h2>{{ $message }}</h2>
                    </div>
                @enderror --}}
                <div class="row clearfix">
                    <div class="">
                        <form action=" {{ route('renterRegistration') }}"
                        method="POST">
                        @csrf
                        @if (session('LoggedUser'))
                            <input name="email" type="hidden" value="{{ $email }}">
                            <input name="fname" type="hidden" value="{{ $fname }}">
                            <input name="lname" type="hidden" value="{{ $lname }}">
                            <input name="address" type="hidden" value="{{ $address }}">
                            <input name="city" type="hidden" value="{{ $city }}">
                            <input name="zip" type="hidden" value="{{ $zip }}">
                            <input name="isCustomer" type="hidden" value="YES">

                            {{-- <input name="contact_number" type="hidden" value="{{ $contact_number }}"> --}}
                        @endif


                        @error('nID')
                            <span class="text-danger" role="alert">
                                <strong>Invalid National Identification Number</strong>
                            </span>
                        @enderror
                        @error('nIDExists')
                            <span class="text-danger" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <div class="input_field @error('nID') form_wrappers @enderror"> <span><i aria-hidden="true"
                                    class="fa fa-envelope"></i></span>
                            <input type="text" name="nID" placeholder="National Identification Number"
                                value="{{ old('nID') }}" required />
                        </div>

                        @error('email')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="input_field @error('email') form_wrappers @enderror"> <span><i aria-hidden="true"
                                    class="fa fa-envelope"></i></span>
                            @if (session('LoggedUser'))
                                <label>Email</label>
                            @endif
                            <input type="email" value="@if (session('LoggedUser')) {{ $email }} @else {{ old('email') }} @endif" name="email" placeholder="Email"
                                required @if (session('LoggedUser'))disabled @endif />
                        </div>
                        @if (!session('LoggedUser'))
                            @error('password')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="input_field @error('password') form_wrappers @enderror"> <span><i
                                        aria-hidden="true" class="fa fa-lock"></i></span>
                                <input type="password" name="password" placeholder="Password" required />
                            </div>
                            @error('password')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="input_field @error('password') form_wrappers @enderror"> <span><i
                                        aria-hidden="true" class="fa fa-lock"></i></span>
                                <input type="password" name="password_confirmation" placeholder="Re-type Password"
                                    required />
                            </div>
                        @endif
                        <div class="row clearfix">
                            <div class="col_half">
                                {{-- @error('fname')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                                <div class="input_field">
                                    <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                    @if (session('LoggedUser'))
                                        <label>Fist Name</label>
                                    @endif
                                    <input type="text" name="fname" value="@if (session('LoggedUser')) {{ $fname }} @endif"
                                        placeholder="First Name" @if (session('LoggedUser'))disabled @endif required />
                                </div>
                            </div>
                            <div class="col_half">
                                {{-- @error('lname')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                                <div class="input_field">
                                    <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                    @if (session('LoggedUser'))
                                        <label>Last Name</label>
                                    @endif
                                    <input type="text" name="lname" value="@if (session('LoggedUser')) {{ $lname }} @endif"
                                        placeholder="Last Name" @if (session('LoggedUser'))disabled @endif required />
                                </div>
                            </div>
                        </div>


                        <div class="input_field">
                            <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                            @if (session('LoggedUser'))
                                <label>Address</label>
                            @endif
                            <input type="text" name="address" value="@if (session('LoggedUser')) {{ $address }} @endif" placeholder="Address"
                                required @if (session('LoggedUser'))disabled @endif />
                        </div>


                        <div class="row clearfix">
                            <div class="col_half">
                                @error('zip')
                                    <span class="invisible" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="input_field select_option">
                                    <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                    @if (session('LoggedUser'))
                                        <label>City Name</label>
                                    @endif
                                    <select name="city" class="pl-4" @if (session('LoggedUser')) disabled @endif>
                                        @if (session('LoggedUser'))
                                            <option selected>&nbsp {{ $city }}</option>

                                        @else
                                            <option selected disabled>&nbsp Select city</option>
                                        @endif
                                        <option>&nbsp Dhaka</option>
                                        <option>&nbsp Chattagram</option>
                                        <option>&nbsp Rajshahi</option>
                                        <option>&nbsp Sylhet</option>
                                        <option>&nbsp Khulna</option>
                                        <option>&nbsp Barisal</option>
                                        <option>&nbsp Cox's Bazar</option>
                                        <option>&nbsp Comilla</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col_half">
                                @error('zip')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="input_field @error('zip') form_wrappers @enderror"> <span><i
                                            aria-hidden="true" class="fa fa-user"></i></span>
                                    @if (session('LoggedUser'))
                                        <label>Zip/Postal Code</label>
                                    @endif
                                    <input type="text" name="zip" value="@if (session('LoggedUser')) {{ $zip }} @endif"
                                        placeholder="Zip/Postal Code" required @if (session('LoggedUser'))disabled
                                    @endif/>
                                </div>
                            </div>
                        </div>
                        @error('contact')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="input_field @error('contact') form_wrappers @enderror">
                            <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                            @if (session('LoggedUser'))
                                <label>Phone Number</label>
                            @endif
                            <input type="text" name="contact" value="@if (session('LoggedUser')) {{ $contact_number }} @endif"
                                placeholder="Phone Number" required />
                        </div>
                        <br><br>
                        {{-- <label>
                            <p class="h5">Enter your car's registraion number(Number Plate)</p>
                        </label>
                        <div class="input_field select_option mt-3">
                            <select name="plateCityName" class="col-md-5" id="carReg" required>
                                <option selected>Dhaka Metro</option>
                                <option>Chatta Metro</option>
                                <option>Rajshahi Metro</option>
                                <option>Cox Bazar</option>
                                <option>Sylhet</option>
                                <option>Nawga</option>
                                <option>Norshindi</option>
                            </select>
                            &nbsp-&nbsp
                            <select name="plateRegLetter" class="col-md-2" required>
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

                        <div class="input_field select_option">

                            <select name="plateRegNumber" class="col-sm-2 " required>
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
                            &nbsp-&nbsp
                            <select name="plateVehicleNumber1" class="col-sm-2 " required>
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

                            <select name="plateVehicleNumber2" class="col-sm-2 " required>
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

                            <select name="plateVehicleNumber3" class="col-sm-2 " required>
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

                            <select name="plateVehicleNumber4" class="col-sm-2 " required>
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

                        <div class="input_field select_option">
                            <span><i aria-hidden="true" class="fa fa-user"></i></span>
                            <select name="passenger_sits" class="pl-4">
                                <option selected disabled>&nbsp Total Passenger Sit</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                            </select>
                        </div> --}}
                        {{-- <br><br> --}}
                        <div class="input_field checkbox_option">
                            <input name="terms" type="checkbox" id="cb1" required>
                            <label class="h1" for="cb1"> I agree with <a href="">terms</a> and
                                conditions</label>
                        </div>
                        <div class="input_field checkbox_option">
                            <input name="news" type="checkbox" id="cb2">
                            <label for="cb2">I want to receive the newsletter</label>
                        </div>
                        <br>
                        <input class="button" type="submit" value="Register" />
                        </form>
                    </div>
                </div>
            </div>
        </div>





        <script>
            // window.scrollTo(0,document.body.scrollHeight);
            // $('html,body').animate({scrollTop: document.body.scrollHeight},"fast");


            /*function scrollEnd() {
                window.scrollTo(0, document.body.scrollHeight);
            }*/
        </script>
        {{-- <p class="credit">Developed by <a href="http://www.designtheway.com" target="_blank">Design the way</a></p> --}}
</body>

</html>

{{-- <div class="register">
    <form class="mt-lg-2" method="POST" action="{{ route('registerRenter') }}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="nID">National Identification Number</label>
                <input type="text" name="nID" class="form-control" id="nID"
                    placeholder="National Identification Number" value="{{ old('nID') }}" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="carReg">Car Registration Number (Number Plate)</label><br><br>
                <select name="plateCityName" class="p-1" id="carReg" required>
                    <option selected>Dhaka Metro</option>
                    <option>Chatta Metro</option>
                    <option>Rajshahi Metro</option>
                    <option>Cox Bazar</option>
                    <option>Sylhet</option>
                    <option>Nawga</option>
                    <option>Norshindi</option>
                </select>
                -
                <select name="plateRegLetter" class="col-md-1 p-1" required>
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

                <select name="plateRegNumber" class="ml-5 col-md-1 p-1" required>
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
                    <option>১০</option>
                    <option>১১</option>
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
                -
                <select name="plateVehicleNumber1" class="p-1 col-md-1" required>
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

                <select name="plateVehicleNumber2" class="p-1 col-md-1" required>
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

                <select name="plateVehicleNumber3" class="p-1 col-md-1" required>
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

                <select name="plateVehicleNumber4" class="p-1 col-md-1" required>
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
        @if (!session()->has('LoggedUser'))
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstName">First Name</label>
                    <input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name"
                        value="{{ old('firstName') }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name"
                        value="{{ old('lastName') }}" required>

                </div>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email"
                    class="form-control @error('email') font-weight-bold text-danger @enderror" id="email"
                    placeholder="username@gmail.com" value="{{ old('email') }}" required>
                @error('email')
                    <p class="text-danger font-weight-bold">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 @error('password') font-weight-bold text-danger @enderror">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                        required>
                    @error('password')
                        <p class="text-danger font-weight-bold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group col-md-6 @error('password') font-weight-bold text-danger @enderror">
                    <label for="password_confirmation">Re - Emter Password</label>
                    <input type="password" name="password_confirmation" class="form-control"
                        id="password_confirmation" placeholder="Re-Enter Password" required>
                    @error('password')
                        <p class="text-danger font-weight-bold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St"
                    value="{{ old('address') }}" required>

            </div>

            <div class="form-row">

                <div class="form-group col-md-4">
                    <label @error('city') class="text-danger font-weight-bold" @enderror for="city">City</label>
                    <select name="city" id="city" class="form-control">
                        <option selected disabled>Choose City</option>
                        <option>Dhaka</option>
                        <option>Chattagram</option>
                        <option>Rajshahi</option>
                        <option>Sylhet</option>
                        <option>Khulna</option>
                        <option>Barisal</option>
                        <option>Cox's Bazar</option>
                        <option>Comilla</option>
                    </select>
                    @error('city')
                        <p class="text-danger font-weight-bold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="zip">Zip/Postal code</label>
                    <input name="zip" type="text" minlength="4" maxlength="4" class="form-control" id="zip"
                        value="{{ old('zip') }}" required><br>
                </div>
                <div class="form-group col-md-4">
                    <label for="contact" @error('contact') class="text-danger font-weight-bold" @enderror>Contact
                        Number</label>
                    <input name="contact" type="text" class="form-control" id="contact"
                        value="{{ old('contact') }}" required>
                    @error('contact')
                        <p class="text-danger font-weight-bold">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-check form-check-inline form-group">
                    <input class="form-check-input" name="terms" type="checkbox" id="flexCheckDefault" required>
                    <label class="form-check-label" for="flexCheckDefault">
                        By checking this I accept the terms and condition given by this service.
                    </label>
                </div>
            </div>
            <div align="right">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        @else
            

            <p>Name: {{ $fname }} {{ $lname }}</p>
            <p>Email: {{ $email }}</p>
            <p>Address: {{ $address }}</p>
            <p>City: {{ $city }}</p>
            <p>Zip/Postal Code: {{ $zip }}</p>
            
        @endif
    </form> --}}
