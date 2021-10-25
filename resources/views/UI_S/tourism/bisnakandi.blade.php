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
            <a class="btn btn-primary mr-3" href="{{ route('login', ':tourTo_value:bisanakandi') }}">
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

                </ol>
                <div class="carousel-inner">
                    <!--<div class="carousel-item active">
                        <img class="d-block w-100" src="/images/Tourism/CoxBazar.JPG" alt="First slide">
                        {{-- <img class="img-fluid d-block" src="/images/Tourism/CoxBazar.JPG" alt="First slide"> --}}
                    </div> -->
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/images/Tourism/Bisnakandi/1.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Bisnakandi/2.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Bisnakandi/3.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Bisnakandi/4.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Bisnakandi/5.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Bisnakandi/6.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Bisnakandi/7.jpg" alt="Third slide">
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

            <h1 class="display-4 text-center font-weight-bold mb-4">Bisnakandi</h1>
            <p class="blockquote card-text pb-4">Sylhet’s Goainghat Upazila is filled with mountains, fountains, and
                greenery. The Upazila has the border with India. The beauty of the places fills the attractions of the
                tourist. The rocky river, forest, tea orchard in the hills overwhelm the mind! Tourists come to see the
                beauty of Sylhet’s diversity. At the festival like Eid, these tourist centers are crowded.

                As like Jaflong, Bisnakandi is a place where the river is filled with the stone. It makes the
                surrounding enchanting. However, due to the uncontrolled stone lifting, the beauty of Jaflong is on the
                verge of destruction today, but the Bisnakandi retains its youth. Many of the steps of the Khasia Hills
                on the Bangladesh-India border have come from one side to the other, and the hills have the highest
                springs of Meghalaya in India. The main attraction of the Bisnakandi to the tourists is the transparent
                water stream that flows over the rocks and the whirlwind of white clouds over the mountains. At first,
                you will feel like a stone bed, and the calmness that you get in the clear water will bring you the
                peace of mind again and again. It is as though the mountains, rivers, fountains, and rocks have laid the
                natural bedding in Bisnakandi.
                <br><br>
                You can travel to Bisnakandi at any time. However, the monsoon is an ideal time to travel to Bisnakandi.
                Due to the abundant water flow around, the true beauty of the Bisnakandi can be seen at this time. At
                other times of the year, there are occasional difficulties in traveling due to the stone lifting.
                <br><br>
                You can choose Sylhet city to stay due to the low cost/time of returning back from Bisnakandi. You can
                stay at Hotel Hill Town, Gulshan, Dargah Gate, Surma, Kayakabad, etc. as per your need and capability.
                Apart from this, there are many standard rest houses for rent in the Lala Bazar area and at Darga Road
                Where you can get different rooms for BDT 500 to 1000. It completely depends on the member and their
                choice.
                <br><br>
                There are some temporary food hotels in Bisnakandi. In those hotels, it would cost Tk. 120 to Tk. 140 to
                eat unlimited rice, pulses with a vegetable. In addition, you can buy some dry food, water, and other
                essential items. You will also find a special type of local Khichuri from the Ghani Mia Hotel at Haddar
                Bazaar. Besides, there are various quality restaurants in Sylhet city, where you will get everything you
                need. You will get Pansi, Pach Bhai or Palki restaurants in Sylhet’s Zindabazar area. You can eat local
                foods of your choice at affordable prices, and it is also very popular to find many types of dishes that
                are available in these restaurants.
            </p>
            <br><br><br>
            <div class="text-center">
                @if (session()->has('LoggedUser'))
                    <a href="{{ route('tourTo', 'Bisnakandi') }}" style="text-decoration: none;"
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
                <h1 class="h1 font-weight-bold text-center">Why Bichanakandi Is Famous For Tourist Place?</h1>
                <div class="row">
                    <div class="col-md-4">
                        <img class="mt-5 img-fluid" src="{{ asset('/images/Tourism/Bisnakandi/ex1.jpg') }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <br>
                        <P class="my-3 mt-4 pt-3 h4">Bichanakandi, the new tourist destination at the boundary of Sylhet
                            division, is all about waterfalls and collection of stones, pebbles in the crystal-clear
                            river water. At the lap of sky-hugging mountains lies this bouquet of nature’s incredible
                            picturesque beauty.

                            All the ranges of the Khasi mountain meet at a point here.There you can get the excellent
                            view of a high fall. Alongside this scenic spot drifts, the see through cool water flow of
                            mountain river Piyain. This river, gushing down the mountain, brings tons of boulders with
                            it.
                            <br><br>
                            It is in this water you get to see the collection of rocks of various size and color. These
                            stones are collected to be mined. During the monsoon, the area becomes greener than ever.
                            The mountain, forest, and the waterfalls all become alive to declare nature’s generous
                            endowment. Bichanakandi Sylhet is the cradle in a true nature lover’s paradise.
                            <br><br>

                        </P>
                    </div>
                </div>
            </div>

            <div class="mt-5 pt-5">
                <h1 class="h1 font-weight-bold text-center">The Beauty Of Bichanakandi</h1>
                <div class="row">
                    <div class="col-md-8">
                        <br>
                        <P class="my-3 mt-4 pt-3 h4">At the Bangladesh- India border is this place of immaculate beauty.
                            A stone quarry, this village has about 3000 inhabitants that are mostly working in the stone
                            business. Location of the village is in the Rustampur Union of Gowainghat Upozilla of Sylhet
                            District.
                            <br><br>
                            Nestled between the Meghalaya hills and the plain land of Sylhet, Gowainghat is a beautiful
                            place. Among one of the developed cities of Southeast Asia, Sylhet city has a distinctly
                            different culture of its own.
                            <br><br>
                            Their colloquial language including their Bengali language is mixed with other for example,
                            Arabic, Farsi, Hindi, Urdu languages. A very rich and interesting history belongs to this
                            district.Local overlords used to rule this land before the Muslims conquered it.
                            <br><br>
                            During 1303, from Yemen came to a great Saint named Hazrat Shah Jalal along with a company
                            of 360 supporters and overpowered the ruling King at that time. The aboriginals of the
                            different tribe live in harmony in the hilly region of Sylhet division. Visitors can observe
                            their lifestyle governed by long-standing cultures, rituals, traditions and customs.
                            <br><br>

                        </P>
                    </div>
                    <div class="col-md-4 mt-4">
                        <img class="mt-5 img-fluid" src="{{ asset('/images/Tourism/Bisnakandi/ex2.jpg') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="mt-5 pt-5">
                <h1 class="h1 font-weight-bold text-center">Combined Tour</h1>
                <div class="row">
                    <div class="col-md-4 mt-4">
                        <img class="mt-5 img-fluid" src="{{ asset('/images/Tourism/Bisnakandi/ex3.jpg') }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <br>
                        <P class="my-3 mt-4 pt-3 h4">You can also plan your travel including several adjacent
                            attractions along with Bichanakandi. A rough idea can be it will take three days to complete
                            starting from morning till evening. Your travel will also encompass destinations like Lala
                            Khal, Ratargul, Pangthumai, Jaflong around Sylhet city. It is better to be in a group, per
                            person costing will be approximately BDT 4900 which is equivalent to USD 58.
                            <br><br>
                            Lal Khal is another tourist attraction famous for the mountain, tea garden and the flowing
                            water that remains green.
                            <br><br>
                            Ratargul is the only freshwater swamp in Bangladesh is a real beauty. It is a completely
                            different world
                            of breathtaking scenery which cannot be completely explained. Words only cannot justify the
                            magnetic pull you will feel the more you plunge inside the wetland..
                            <br><br>
                            A small near border village, Pangthumai, which is  full of soothing eye greenery. From the village, you can get a
                            great view of waterfall gushing down the mountain. Sorry to say this magnificent cascade
                            falls in India before getting all too excited.
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
