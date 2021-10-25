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
            <a class="btn btn-primary mr-3" href="{{ route('login', ':tourTo_value:cox_bazar') }}">
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
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>

                </ol>
                <div class="carousel-inner">
                    <!--<div class="carousel-item active">
                        <img class="d-block w-100" src="/images/Tourism/CoxBazar.JPG" alt="First slide">
                        {{-- <img class="img-fluid d-block" src="/images/Tourism/CoxBazar.JPG" alt="First slide"> --}}
                    </div> -->
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/images/Tourism/Sajek.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Sajek/sajek2.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Sajek/sajek4.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Sajek/sajek5.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Sajek/sajek3.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Sajek/sajek6.jpg" alt="Third slide">
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

            <h1 class="display-4 text-center font-weight-bold mb-4">Sajek</h1>
            <p class="blockquote card-text pb-4">Sajek Valley is one of the popular tourist
                spots in Bangladesh situated among the hills of the Kasalong range of mountains in Sajek union,
                Baghaichhari Upazila in Rangamati District.The valley is 2,000 feet (610 m) above sea level.
                Sajek valley is known as the Queen of Hills & Roof of Rangamati
                the edge. The marvelous sight of the sunset behind the blue waves of the sea is truly breathtaking.
                <br><br>
                The name of Sajek Valley came from the Sajek River that originates from Karnafuli river. The Sajek river
                works as a border between Bangladesh and India. It is a union located in the north of Chittagong Hill
                Tracts. It's under Baghaichori Upazila in Rangamati hill district, it is situated 67 kilometres (42 mi)
                north-east from Khagrachhari town and 95 kilometres (59 mi) north from Rangamati city. The border of
                Bangladesh and Mizoram of India is 8 kilometres (5.0 mi) east from Sajek. Sajek valley is known for its
                natural environment and is surrounded by mountains, dense forest, and grassland hill tracks. Many small
                rivers flow through the mountains among which the Kachalong and the Machalong are notable. On the way to
                Sajek valley, one has to cross the Mayni range and the Mayni river. The road to Sajek has high peaks and
                falls.
                <br><br>
                It is a tourist attraction, is a small beautiful town on the hills which is very much famous as an
                all-weather tourist spot. It is one of most beautiful place in Bangladesh. You try to stay minimum one
                night because the sunrise and sunset times are the most beautiful times.If you stay there, it will give
                the opportunity to enjoy these wonderful times from the top of the world which is above 1800 feet from
                sea level.

                It is beautiful in all seasons; locals are mostly from Tripura and Lusai tribes. Few Chakma also lives
                there. It is a union under Baghaicchari upazilla of Rangamati District. It is 67 km toward North-east
                from Khagrachhari and 95 km toward North-west from Rangamati city.

                If you drive 8 km, you will find the border with India.People consider this area as a natural paradise
                of Chittagong Hill Tracks. Earlier nobody explored this place. Recently there is a rush of tourists here
                and explored a lot.

                Green Cape Mountains, mysticism, and heavenly peace always surround this area. All around the year
                tourists visit and become enchanted with the beauty of this which is amazing. Its location is in the
                green hills of Kasalong range of mountains offering visitors the serene and exotic beauty of nature.
            </p>
            <br><br><br>
            <div class="text-center">
                @if (session()->has('LoggedUser'))
                    <a href="{{ route('tourTo', 'Sajek') }}" style="text-decoration: none;"
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
                <h1 class="h1 font-weight-bold text-center">Beautiful Green Hilly Road</h1>
                <div class="row">
                    <div class="col-md-4">
                        <img class="mt-5 img-fluid" src="{{ asset('images/Tourism/Sajek/Sajek-Valley-car.jpg') }}"
                            alt="">
                    </div>
                    <div class="col-md-8">
                        <br>
                        <P class="my-3 mt-4 pt-3 h4">A journey to Sajek Valley tour will offer you a lot of tourist
                            attractions that will be a journey through a heavenly place. First of all, you will have to
                            pass sky touching mountains with dense forest, extensive grasslands.
                            Passing such miles and miles of hilly tracks offers tourists heavenly experience. When you
                            pass Mayni range, you will find River Mayni and River Kasalong harmonizing the green and
                            blue together.
                            <br><br>
                            Driving in the ups and downs of the road will give you to feel that you are very close to
                            touching the sky and sometimes you are going to fall on the valley. It will be a matter of
                            great feelings.

                            When you move on to this valley from Khagrachari, you will see the scenery that takes your
                            breath away, the view of the flight over dramatic mountains, hilly forests, valleys, rivers,
                            cottages of the Tribal communities and lakes.
                            <br><br>
                            You can enjoy your tour while you are traveling you can see pilgrimage centers, sanctuaries,
                            and parks; hill resorts. The whole area offers a huge excitement. On your journey towards
                            the East, you will see high hills, gorges, rivers and make you feel excited.

                            You will be dreamy and will feel like moving through paradise. From here you can gather
                            experience and knowledge about the nature of tribal people, small townships like Dighinala
                            and Baghaiha
                        </P>
                    </div>
                </div>
            </div>

            <div class="mt-5 pt-5">
                <h1 class="h1 font-weight-bold text-center">Konglakpara Trekking</h1>
                <div class="row">
                    <div class="col-md-8">
                        <br>
                        <P class="my-3 mt-4 pt-3 h4">Konglakpara is one the most tourist attraction near sajek valley.
                            If you want to see this beauty. you must go to this place in the morning or evening. For
                            reaching this place, you should start journey From Ruilui para .Only trekking is the way to
                            reach this place, It take about 50 minute.
                            <br><br>
                            From here you can see full sajek valley view very nicely.You can also see Indian border from
                            here.You will fell that the cloud is under in your leg. It is situated above 1800 feet from
                            the normal see level.
                            <br><br>
                            Any beginner person who do not have e trekking experience in the past easily can reach this
                            place. Before start journey you should collect e bamboo stick, it will support you very
                            much.
                            <br><br>
                            Many people do not know that there have a nice waterfall.The trekking distance of Sikam
                            Toisa Water Fall is about 45-50 Minute from the sajek main point .Another name of this
                            waterfall is Pidam Toisa fall / komlok waterfall.
                            <br><br>
                            For gong to this place ,you will see a hill hiking road beside Helipad to Ruilui para.This
                            hiking road is not so easy,so overweight people & beginner should not go there,because it
                            will difficult for them.But if you love trekking & love to take challenge you must go their
                            for seeing this waterfall hidden beauty.

                        </P>
                    </div>
                    <div class="col-md-4">
                        <img class="mt-5 img-fluid" src="{{ asset('images/Tourism/Sajek/Konglak-Para.jpg') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="mt-5 pt-5">
                <h1 class="h1 font-weight-bold text-center">Meghalaya Resort</h1>
                <div class="row">
                    <div class="col-md-4">
                        <img class="mt-5 img-fluid"
                            src="{{ asset('images/Tourism/Sajek/Sajek-Valley-Rangamati.jpg') }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <br>
                        <P class="my-3 mt-4 pt-3 h4">Another mentionable one is Meghalaya. You can book your
                            accommodation before you travel. There are numerous new and upcoming hotels and Food/
                            Restaurants where you will not have to be worried about your breakfast, lunch, and dinner.

                            You can easily have your foods after placing an order before hand. Bar-B-Q is the most
                            common offer of all the hotel here. You can find some coffee and tea stalls for snacks.
                            <br><br>

                            It has some nice army resorts which are charming and safe. But pre-booking is needed. There
                            are two beautiful and mind-blowing resorts in the valley they are “Runmoy Resort” and “Sajek
                            Resort”. You will have the best possible facilities like the capital city in the most remote
                            area of the country.
                            <br><br>
                            Army owns hotel Runmoy and Sajek resort, and you will get at least a 4- star accommodation.
                            Megh Machang is a more primitive fashioned modern hotel. You will get the best view and a
                            more adventurous feel.
                        </P>
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
