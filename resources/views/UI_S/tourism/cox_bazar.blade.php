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
                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>

                </ol>
                <div class="carousel-inner">
                    <!--<div class="carousel-item active">
                        <img class="d-block w-100" src="/images/Tourism/CoxBazar.JPG" alt="First slide">
                        {{-- <img class="img-fluid d-block" src="/images/Tourism/CoxBazar.JPG" alt="First slide"> --}}
                    </div> -->
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/images/Tourism/CoxBazar.JPG" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Cox_Bazar/photo2.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Cox_Bazar/inani-beach_2.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Cox_Bazar/pxl-20210220-035005895.jpg"
                            alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Cox_Bazar/img-17v9qk-largejpg.jpg"
                            alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Cox_Bazar/inani-beach-sea-beach.jpg"
                            alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Cox_Bazar/radiant-fish-world.jpg"
                            alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Cox_Bazar/sunset-at-inani-beach.jpg"
                            alt="Third slide">
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

        <section class="p-6 m-6 pb-5 mb-5">

            <h1 class="display-4 text-center font-weight-bold mb-4">Cox's Bazar</h1>
            <p class="blockquote card-text pb-4">Cox’s Bazar sea beach is the world’s longest unbroken clean sandy
                beach. It is about
                120 km long. It naturally attracts many tourists from different corner of the earth due to its
                smooth
                and spongy carpeting of silvery sand sloping smoothly into the crystal clear water of the Bay of
                Bengal.
                Cox’s Bazar is renowned for its tranquil nature with the magnificent green trees and attractive
                hills on
                one side and the appealing waves on the other. The Sea beach is perfect for bathing, and swimming
                around
                the edge. The marvelous sight of the sunset behind the blue waves of the sea is truly breathtaking.
                <br><br>
                Cox’s Bazar is considered as the tourist capital of Bangladesh and was named after Captain Cox, who
                was
                an administrator at British period. Besides the Cox’s Bazaar splendid beach, tourists may visit
                Laboni,
                Inani, Kutubdia, Ramu, Himchhari, Moheshkhali, Sonadia,Ukhiya, and Teknaf for enjoying their natural
                magnificence, their lovely beaches and an understanding of tribal life and culture. Furthermore,
                Patenga
                and Parki in Chittagong division.
                <br><br>
                There are abundant shops in the Hotel Motel Zone serving to Bangladeshi and foreign tourists.
                Exclusive
                things made of sea shells and dead corals are very popular and also sold by many vendors on the
                beach.
                We discourage you to buy those things because its ruining our natural beauty of the sea. You can
                also
                poke around the Burmese Market where you will find local beauty products, hand made textile and
                bed-sheets among many other things. There are bundles of restaurants along Sea Beach Road and in the
                Hotel Motel Zone, where most are serving Bangladeshi foods.
            </p>
            <br><br><br>
            <div class="text-center">
                @if (session()->has('LoggedUser'))
                    <a href="{{ route('tourTo', 'Cox Bazar') }}" style="text-decoration: none;" class="mt-4 pt-4 btns h1">Book
                        Now!</a>
                @else
                    {{-- <a href="{{ route('login', 'tourTo_value', 'cox_bazar') }}" style="text-decoration: none;"
                        class="mt-4 pt-4 btns h1">Book Now!</a> --}}
                    <a href="{{ route('login', ':tourTo_value:cox_bazar') }}" style="text-decoration: none;"
                        class="mt-4 pt-4 btns h1">Book Now!</a>
            </div>

            

            @endif
            <div class="mt-5 pt-5">
                <h1 class="h1 font-weight-bold text-center">INANI BEACH</h1>
                <div class="row">
                    <div class="col-md-4">
                        <img class="mt-5 img-fluid"
                            src="{{ asset('images/Tourism/Cox_Bazar/inani_beach_dexcription.jpg') }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <br>
                        <P class="my-3 mt-4 pt-3 h4">Inani Beach (also Enani Beach) is a sea beach in Ukhia Upazila of
                            Cox’s Bazar District, about 18 kilometers long. It has a nice view and has lots of coral
                            stones. These coral stones take on a green shade during the summer & in the rainy season.
                            <br><br>
                            It is a very beautiful beach known for its rock and coral boulders. The Hills can be seen
                            from one side and sea on the other which makes it really impressive. The view of sunrise and
                            sunset of this beach are very memorable. The blue water and the lines of stones is the main
                            source of attraction for the tourists. The clean blue & shark free water is ideal for
                            bathing and swimming without any fear.
                            <br><br>
                            The water stored in between stones contain small sea-fish, crabs, snail, and many more.
                            These will keep you busy for all day long. Most tourists choose this place for its silent
                            nature and eccentric environment. Inani beach is famous for its crystal clear water at the
                            beach. Finally, don’t forget to enjoy the sunset at the beach. Try to stay until the sun
                            goes down.
                        </P>
                    </div>
                </div>
            </div>

            <div class="mt-5 pt-5">
                <h1 class="h1 font-weight-bold text-center">MARINE DRIVE</h1>
                <div class="row">
                    <div class="col-md-8">
                        <br>
                        <P class="my-3 mt-4 pt-3 h4">A 230-kilometer marine drive, to be constructed from Mirsarai in
                            Chattogram to Teknaf in Cox's Bazar as a priority project of Prime Minister Sheikh Hasina,
                            will connect to the existing 80-kilometer Cox's Bazar-Teknaf Marine Drive to form the
                            longest marine drive in the world.
                            <br><br>
                            This drive extends mainly from Inani beach to Teknaf. With hills on one side and the roaring
                            sea on the other, the drive will take you to another world. This drive is by far the best
                            long drive route in Bangladesh with sea on one side and the hills on the other side.Driving
                            along Marine Drive is like driving along any beach front road. Except that a lot of the
                            time, there are no views of the beach and there is no place to pull over. The drive does
                            give access to the beaches and hotels along the various beaches of Cox's Bazar, but there is
                            nothing distinguishing about it.
                            <br><br>
                            Smooth and Green road ever in Bangladesh. A great sea view all over 80 km of road site.
                            really enjoyable.
                        </P>
                    </div>
                    <div class="col-md-4">
                        <img class="mt-5 img-fluid" src="{{ asset('images/Tourism/Cox_Bazar/marine-drive1.jpg') }}"
                            alt="">
                    </div>
                </div>
            </div>

            <div class="mt-5 pt-5">
                <h1 class="h1 font-weight-bold text-center">HIMCHORI</h1>
                <div class="row">
                    <div class="col-md-4">
                        <img class="mt-5 img-fluid" src="{{ asset('images/Tourism/Cox_Bazar/himchori.jpg') }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <br>
                        <P class="my-3 mt-4 pt-3 h4">Hsimchari Waterfall is a natural miracle located in a small
                            national
                            park near in Cox'sbazar, 12 km south of Cox’s Bazar Town and 6 km from the Kalatali beach.
                            The trip to the waterfalls will be unforgettable due to amazing scenery and unique local
                            nature. The waterfall itself is also a rare scene to enjoy. This place is wonderful for a
                            picnic with family or friends, sunbathing and relaxing. The waterfall can be seen best from
                            the neighboring small hill.
                            <br><br>

                            The scenic waves, the serene surroundings; one can’t help but wonder how nature can be so
                            beautiful and calming at the same time. It is but a marvel and privilege to be able to stand
                            in front of that vast expanse of water and take in the alluring view in front of the eyes.
                            They say, “Beauty lies in the eyes of the beholder,” but what they don’t say is, sometimes
                            the sight in front of you turns out to be so marvellous that even the cynic starts to
                            believe in better things.
                            <br><br>
                            Himchori National Park is a marvel where you can have an aerial view of Himchori Beach. All
                            you have to do is climb around a hundred or so steps and you are good to go. Although the
                            mountains in Himchori are extensively covered with shrubbery, you will definitely be
                            mesmerized by the view from the top.
                        </P>
                    </div>
                </div>
            </div>


            <div class="mt-5 pt-5">
                <h1 class="h1 font-weight-bold text-center">RADIANT FIST WORLD</h1>
                <div class="row">
                    <div class="col-md-8">
                        <P class="my-3 mt-4 pt-3 h4">Radiant Fist World is Bangladesh's first sea aquarium that is
                            located in Cox's Bazar. If you take a visit in here, you will be witnessed live sea fish,
                            sea creatures around you. There are about 100 different types of fishes and water creatures
                            such as rupchanda, crab, piranha, turtle, piranha, starfish, jellyfish and many more. There
                            is also a fish museum that will introduce you to the world under the sea.
                            <br><br>
                            If you want to eat something inside the fish world, there is a live fish resturant from
                            where you can get taste of the dishes of the sea fishes and sea foods. Thai, Chinese,
                            Arabian, Fast food and Bangeli foods are availble only for you. You can also have sweets and
                            bakery items there. You can also get Bar-B-Q too!
                            <br><br>
                            It will take up to two hours to take the journey of this aquarium. THere are also 3D and 9D
                            movie theaters, live fish resturant, mini zoo, kids game zone, souvenir shop, party center,
                            prayer room etc.
                        </P>
                    </div>
                    <div class="col-md-4">
                        <img class="mt-5 img-fluid" src="{{ asset('images/Tourism/Cox_Bazar/RadiantFist.jpg') }}"
                            alt="">
                    </div>
                </div>
            </div>

            <div class="mt-5 pt-5">
                <h1 class="h1 font-weight-bold text-center">MERMAID BEACH RESORT</h1>
                <div class="row">
                    <div class="col-md-4">
                        <img class="mt-5 img-fluid" src="{{ asset('images/Tourism/Cox_Bazar/mermaidBridge.jpg') }}"
                            alt="">
                    </div>
                    <div class="col-md-8">
                        <P class="my-3 mt-4 pt-3 h4">Radiant Fist World is Bangladesh's first sea aquarium that is
                            located in Cox's Bazar. If you take a visit in here, you will be witnessed live sea fish,
                            sea creatures around you. There are about 100 different types of fishes and water creatures
                            such as rupchanda, crab, piranha, turtle, piranha, starfish, jellyfish and many more. There
                            is also a fish museum that will introduce you to the world under the sea.
                            <br><br>
                            If you want to eat something inside the fish world, there is a live fish resturant from
                            where you can get taste of the dishes of the sea fishes and sea foods. Thai, Chinese,
                            Arabian, Fast food and Bangeli foods are availble only for you. You can also have sweets and
                            bakery items there. You can also get Bar-B-Q too!
                            <br><br>
                            It will take up to two hours to take the journey of this aquarium. THere are also 3D and 9D
                            movie theaters, live fish resturant, mini zoo, kids game zone, souvenir shop, party center,
                            prayer room etc.
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
