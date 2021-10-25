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
    body {
        /* background-image: linear-gradient( to bottom, transparent, #000000), url("../images/mainBackground.jpg"); */
        background-image: linear-gradient(to bottom, rgb(255, 255, 255), #b6abcf), url("../images/mainBackground.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        /* background-color: rgb(38, 125, 201); */
    }

    .tourBanner {
        /* background-image: linear-gradient( to bottom, transparent, #000000), url("../images/mainBackground.jpg"); */
        background-image: linear-gradient(to bottom, rgb(255, 255, 255), rgb(123, 123, 123));
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        /* background-color: rgb(38, 125, 201); */
    }

    .btns {
        padding: 10px 20px;
        background-color: rgb(128, 129, 199);
        color: #f1f1f1;
        border-radius: 1vh;
        transition: .5s;
        padding: 3vh;
        padding-left: 5vh;
        padding-right: 5vh;
        /* margin-left: 43%; */


    }

    .btns:hover,
    .btns:focus {
        border: 2px solid rgb(137, 123, 255);
        background-color: #d0dcff;
        color: rgb(0, 6, 95);
    }

</style>

<body>

    @section('logOut')
        <a class="btn btn-primary mr-3" href="{{ route('logout', '11') }}">
        @endsection

        @section('logIn')
            <a class="btn btn-primary mr-3" href="{{ route('login', ':tourTo_value:boga_lake') }}">
                Sign In
            </a>

        @endsection
        @extends('layouts.nav')

        <br><br><br><br><br><br>

        <div class="row text-center tourBanner">
            <div style="margin-left: 25%;" id="carouselExampleIndicators" class="carousel slide col-md-6"
                data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>

                </ol>
                <div class="carousel-inner">
                    <!--<div class="carousel-item active">
                        <img class="d-block w-100" src="/images/Tourism/CoxBazar.JPG" alt="First slide">
                        {{-- <img class="img-fluid d-block" src="/images/Tourism/CoxBazar.JPG" alt="First slide"> --}}
                    </div> -->
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/images/Tourism/Boga_Lake/boga-lake--1159922887.jpg"
                            alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Boga_Lake/2017-12-04.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Boga_Lake/IMG_20181116_123849-EFFECTS.jpg"
                            alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Boga_Lake/GOPR0254.jpg" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Boga_Lake/20160115_170903.jpg"
                            alt="Fifth slide">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <section style="padding: 8vh;" class="p-6 m-6 pb-5 mb-5">

            <h1 class="display-4 text-center font-weight-bold mb-4">Bogakain Lake</h1>
            <p class="blockquote card-text pb-4">Boga Lake is the most beautiful natural lake in Bangladesh. It is also
                known as Bagakain Lake or Baga Lake. Boga lake is 18 kilometer away from Ruma Sadar Upozilla in
                Bandarban. The area of this lake is about 15 acres. It is about 3000 feet above sea level. The color of
                water of this lake is blue and very nice. There are many mythological stories behind the creation of
                this lake. There are many tourists make their way to Boga lake every year, specially in the winter
                season. Small tribe community like Bawm, Khumi have localities besides the Boga lake. In the rainy
                season, it is quite difficult to stroll beside the boga lake. The road from Ruma to Boga lake is still
                under construction. There waiting lots of pleasure and delight for you at Boga lake. You will definitely
                be amazed looking at the big rocks lying in and out of the Boga lake. You can have a camp fire beside
                the lake, that will be unbelievable and mind-blowing memory in your life.

                <br><br>
                Nature lovers always feel a thirst inside for beauty, thrill and enchantment. And the holy nature has
                bestowed Bangladesh with an overwhelming and unparallel creature which is publicly known as Boga Lake.
                Bogalake is considered as a source of wonder, unlimited beauty and adventure for the nature`s lovers and
                travelers. So Boga Lake is waiting with its unique beauty for those adventurous travelers who just not
                only want to satisfy their eyes with artificial and tedious natural beauties but also want to fill their
                heart with eternal joy and thrill to innovate their restless mind. And it has emerged like a holy duty
                of the travelers and tourists to visit the Boga Lake as soon as possible to highlight the beauty with
                thrill.
                <br><br>
                Anthropologists define Boga lake as 2000 year old hill enclaved natural lake of Bandarban,Bangladesh.
                Boga lake is accompanied with deep bamboo bushes from its three sides wich are bounded by mountain
                peaks. Again, Boga lake is recognized as the highest natural lake of Bangladesh which is approximately
                1500 ft above the sea level. Boga lake has a rectangular shap either funnel shape. But some experts
                argue that the Boga lake is about (3000-3700) fts above the sea levels indeed. The lake is supposed to
                be 38 meter deep. There remains a small spring beside the Boga lake which is called Bagachhara ( 153m
                deep). Boga lake is a closed lake and to drain out water there is no outlet. basically Bagachhara is the
                fundamental source of water along with surface drainage, rain water and seepage of spring, soft and
                small rocks of different shapes have almost covered Boga lake surface
                <br><br>
                Bogalake is the highest natural lake of Bangladesh situated at Bandarban, Chittagong. Boga lake attracts
                the nature lovers in such a magnetic way that no other place of beauty can dare to be the alternative of
                Boga lake. Nature has created this Bogalake with its kind attention which results in a legendary reserve
                of water on the hilltop to attract the tourists, travelers and nature lovers not only from the local
                inhabitants of Bandarban but also people from all over Bangladesh and even of the whole world.
                <br><br>
                The origin of the name Boga lake is derived from some domestic mythological stories. The word Boga is
                derived from the local word Baga which means a dragon or fire. Actually some super natural stories flame
                the fire about the lake being the accommodation of an ancient dragon indeed and that concludes the story
                of the identification of Boga lake

            </p>
            <br><br><br>
            <div class="text-center">
                @if (session()->has('LoggedUser'))
                    <a href="{{ route('tourTo', 'Boga Lake') }}" style="text-decoration: none;"
                        class="mt-4 pt-4 btns h1">Book
                        Now!</a>
                @else
                    {{-- <a href="{{ route('login', 'tourTo_value', 'cox_bazar') }}" style="text-decoration: none;"
                        class="mt-4 pt-4 btns h1">Book Now!</a> --}}
                    <a href="{{ route('login', ':tourTo_value:sajek') }}" style="text-decoration: none;"
                        class="mt-4 pt-4 btns h1">Book Now!</a>
            </div>



            @endif
            <div class="mt-5 pt-5">
                <h1 class="h1 font-weight-bold text-center">Perfect Time To Visit Boga Lake</h1>
                <div class="row">
                    <div class="col-md-4">
                        <img class="mt-5 img-fluid"
                            src="{{ asset('/images/Tourism/Boga_Lake/Boga-Lake-2-768x512.jpg') }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <br>
                        <P class="my-3 mt-4 pt-3 h4">It is very difficult to travel to Boga lake in the rainy season, so
                            it is convenient to go here in winter. Still, many of the tourists come to Boga Lake
                            regularly to enjoy the beauty. The road from Bandarban to Bagalake is not very good in
                            conditions due to hilly areas. The beauty of this path will surely attract you but will need
                            more energy to reach the destination. Anyway, the beauty of Boga Lake will remove all the
                            hardship in your journey.


                            <br><br>
                            The mother nature lovers can see the around of the lake with a boat. If you want to see the
                            beauty of the lake from the top of the hills, you can visit Lake Paradise picnic spot. There
                            is also a chance to travel by the lake riding on a boat or pedal boat.
                            <br><br>
                            you can visit many places including Rangamati Hanging Bridge, Shuvolong Jhorna, Rangamati
                            City and many more. There is a way of kayaking in the river Karnaphuli near Kaptai. If you
                            want to enjoy the ride of the cable car, you have to go Sheikh Russel Ecopark.
                        </P>
                    </div>
                </div>
            </div>

            <div class="mt-5 pt-5">
                <h1 class="h1 font-weight-bold text-center">Bandarban To Boga Lake</h1>
                <div class="row">
                    <div class="col-md-8">
                        <br>
                        <P class="my-3 mt-4 pt-3 h4">If you want to go to Boga lake from Bandarban city, you have to go
                            to Ruma Bazar first. It is 48 KM from Bandarban to Ruma Bazar. You can go Bandarban to Ruma
                            Bazar by Bus, Chander Gari or Jeep. If you want to go by bus, you have to go to Ruma Bus
                            Stand. After every 1 hour, the bus leaves for Ruma. It will cost BDT 120 and will take
                            nearly 3 hours. If you go with a group, it will be perfect to go to Ruma Bazar by Jeep or
                            Chander Gari. It can carry 10 to 15 persons easily. It takes BDT 3000 to 4000 for reaching
                            Ruma Bazar. It will need 2 hours.
                            <br><br>
                            After reaching Ruma Bazar, you have to hire a guide from the Ruma Bazar Guide Association.
                            Must be remembered, taking one guide is mandatory. From the registered guide, you can fix
                            one. Now you have to take permission from Army Camp of Ruma Bazar. You will need to submit
                            your identity card for getting permission. The guide will help you to get the pass. Another
                            key point, you will not get permission from the Army camp after 4 PM.
                            <br><br>
                            It 17 KM from Ruma Bazar to Boga Lake. You will get Chander Gari and Jeep to reach Boga
                            Lake. Take the help of your guide. According to your needs, he will manage everything. It
                            will need BDT 1800 to 2000 for going to Boga Lake. If you are in a small group, you will get
                            the shared Jeep/Chander Gari from 8 AM to 4 PM. It will need BDT 100 to go Ruma to Boga Lake
                            <br><br>

                        </P>
                    </div>
                    <div class="col-md-4 mt-4">
                        <img class="mt-5 img-fluid" src="{{ asset('/images/Tourism/Boga_Lake/Boga-Lake.jpg') }}"
                            alt="">
                    </div>
                </div>
            </div>

            <div class="mt-5 pt-5">
                <h1 class="h1 font-weight-bold text-center">Combined Tour</h1>
                <div class="row">
                    <div class="col-md-4 mt-4">
                        <img class="mt-5 img-fluid"
                            src="{{ asset('/images/Tourism/Boga_Lake/Trekking-to-Boga-Lake.jpg') }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <br>
                        <P class="my-3 mt-4 pt-3 h4">There is a small village of Bawm tribe located by the lake. The
                            road from Ruma to Boga Lake is still under construction,[citation needed][when?] which is
                            accessible by trucks and SUVs only in the dry season. The lake attracts tourists because of
                            its scenery but it is inaccessible by any other means of transport. Local administration and
                            the Army bars the tourists from hiking through the canyons and hills. The only way to travel
                            to Boga Lake in the summer is by hiking the same under-construction road.
                            <br><br>
                            The Army camp placed by the lake prevents tourists from bathing in the lake due to the risk
                            of drowning. The lake is full of underwater kelp-like vegetation that entangle unsuspecting
                            swimmers.
                            <br><br>
                            There are around 35 cottages located in the Boga Lake para. Before entering Boga Lake,
                            tourists need to get permission from the army camp situated there. There is also a church
                            for the local people. Most of the Bawm people are Christian. The area also serves as a
                            transit camp for tourists who intend to travel further east, namely to Keokradong.
                    </div>
                </div>
            </div>



            <!-- This is for FAQ -->
            <br><br><br><br><br><br>

            <a class="btn btn-light shadow-sm w-100 text-left p-3" id="headingOne" data-toggle="collapse"
                href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                Which of your branches can I rent a car one-way?
            </a>
            <br>
            <div class="collapse" id="collapseExample1">
                <div class="card card-body bg-light">
                    One-way car rentals are definitely possible and are usually allowed between all our branches
                    in the country. Certain restrictions and fees apply depending on where you plan on picking up and
                    dropping
                    off your vehicle.
                </div>
            </div>
            <br>
            <a class="btn btn-light shadow-sm w-100 text-left p-3" id="headingOne" data-toggle="collapse"
                href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Can I drive my one-way vehicle anywhere in the US?
            </a>
            <br>
            <div class="collapse" id="collapseExample2">
                <div class="card card-body bg-light">
                    If you have a reservation for a one-way rental where the vehicle is returned in a state other than
                    the
                    state of pick-up, the usual territorial restrictions do not apply. The vehicle may only be used in
                    the
                    continental United States and can be driven through any state.
                    <br>
                    <br>
                    In Hawaii, one-way rentals and rides outside Hawaii are not permitted.

                    For more information about one-way restrictions, please see the rental information.
                </div>
            </div>
            <br>
            <a class="btn btn-light shadow-sm w-100 text-left p-3" id="headingOne" data-toggle="collapse"
                href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                Is there a one-way fee?
            </a>
            <br>
            <div class="collapse" id="collapseExample3">
                <div class="card card-body bg-light">
                    A one-way fee sometimes applies when you pick up a vehicle at one location and return the vehicle at
                    another. The one-way fee varies depending on the locations and time of the year. If you have to pay
                    a
                    fee, it will be disclosed at the time of reservation and so please use our booking tool to calculate
                    the
                    fotal price of your planned trip.

                    One way rentals within our Florida, California and Nevada locations are free of charge on selected
                    routes. Please check our terms and conditions as restrictions do apply to this offer.
                </div>
            </div>
        </section>



        </div>
        @extends('layouts.footer')
</body>

</html>
