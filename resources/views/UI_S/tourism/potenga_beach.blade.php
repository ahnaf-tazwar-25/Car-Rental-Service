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
            <a class="btn btn-primary mr-3" href="{{ route('login', ':tourTo_value:nilgiri_mountains') }}">
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
                        <img class="d-block w-100" src="/images/Tourism/Potenga_Beach/1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Potenga_Beach/3.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Potenga_Beach/2.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Potenga_Beach/4.jpg" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/images/Tourism/Potenga_Beach/5.jpg" alt="Fifth slide">
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

        <section style="padding: 8vh;" class="p-6 m-6 pb-5 mb-5 text-justify">

            <h1 class="display-4 text-center font-weight-bold mb-4">Potenga Sea Beach</h1>
            <p class="blockquote card-text pb-4 ">Patenga is a popular tourist spot. The beach is very close to the
                Bangladesh Naval Academy of the Bangladesh Navy and Shah Amanat International Airport. Its width is
                narrow and swimming in the seas is not recommended. Part of the seashore is built-up with concrete
                walls, and large blocks of stones have been laid to prevent erosion. During the 1990s, a host of
                restaurants and kiosks sprouted out around the beach area. Lighting of the area has enhanced the
                security aspect of visiting at night.Nowadays, alcohol peddling is very common at the beach. Vendors
                from the city sell their ice creams, cold drinks and food to the hundreds of tourists who come to
                Patenga Beach. According to the local people, Patenga is the best place for delicious, mouth-watering
                street food at very low costs. One of the popular dishes of the food stands is the fried, spicy mud crab
                served with a small plate full of falafel, garnished with cucumber and onion. The beach has a wonderful
                cool atmosphere even at the evening, and people come to enjoy the soothing breeze. The beach is lined
                with massive shady palm trees and fishing boats. It also has an array of speed boats for visitors. The
                beach, however, is quite sandy, with a few rocky patches.Most visitors come to Patenga Beach as it is
                known for having some of the most stunning sunsets and sunrises in Bangladesh.
                <br><br>
                Stroll along the flat bay of Patenga Beach, scattered with large chunks of concrete to deter erosion and
                lined sporadically with small huts or trees. Many street vendors sell ice creams and drinks but don't
                miss the chance to taste the area's speciality-- fried spicy mud crab served with falafel and
                vegetables. The beach is mostly enjoyed by locals who come to sit on the concrete slabs and pass the
                time looking out to the sea, as swimming is not recommended here. Visit in the evening for a vibrant
                atmosphere, and the chance to see beautiful sunsets and sunrises spreading across the horizon-- known as
                the best in Bangladesh. Put Patenga Beach and other Chittagong City attractions into our Chittagong City
                trip itinerary site, and watch your holiday take shape.
                <br><br>
                As part of the sea shore a concrete walls can be seen along the shore. Also large blocks of stones have
                been laid out to prevent erosion. During 1990s lots of restaurants and kiosks have been developed around
                the beach area. Lighting of the beach area has enhanced the security aspect of night visit. People
                visiting this beautiful place usually wake up early to witness the stunning sunrise. For watching
                sunset, Patenga is a beautiful sea beach close to Chittagong city. It is near the beginning of the
                Karnaphuli River. Nature lovers come here to enjoy the beautiful scenario of the Bay of Bengal and get
                away from busy city life. Patenga is a popular tourist spot. The beach is very close to Bangladesh Naval
                Academy of Bangladesh Navy, and Shah Amanat International Airport. The width of the beach is narrow and
                swimming is not recommended in the seas here.
                <br><br>
                You can view both types of natural beauty. You can enjoy river cruise on the Karnaphuli River, or a boat
                trip onto the ocean waves. You may make your kitty shopping from the beach side market also. You can buy
                lots of interesting Burmese things, jewelry items etc. Water drives are also present for you to enjoy.
                <br><br>
                The width of Patenga beach is not very wide and swimming in the sea here is risky. Concrete walls and
                large boulders have been laid along the beach to prevent erosion. A number of restaurants and food shops
                have sprung up around the beach in the nineties. The arrangement of lights on the beach has ensured the
                safety of the tourists traveling at night. Vendors from the city sell their ice cream, soft drinks and
                food to tourists arriving at Patenga Beach. According to locals, Patenga is the best place for delicious
                food at very low cost. One of the popular dishes at the food stands is fried, spicy mud earthen crab.
                Serve with a small plate garnished with chopped cucumbers and onions. In the evening the beach has a
                nice cool atmosphere and people come to enjoy this calm air. The scratching of the waves at high tide is
                like a spectacular sight. Rows and rows of small and large ships waiting for the port of Chittagong
                bring a difference to the environment here. Patenga has the opportunity to take a speed-boat ride around
                the sea. There are sea bikes and horses for sightseeing. There is a Burmese market for shopping.

            </p>
            <br><br><br>
            <div class="text-center">
                @if (session()->has('LoggedUser'))
                    <a href="{{ route('tourTo', 'Potenga_beach') }}" style="text-decoration: none;"
                        class="mt-4 pt-4 btns h1">Book
                        Now!</a>
                @else
                    {{-- <a href="{{ route('login', 'tourTo_value', 'cox_bazar') }}" style="text-decoration: none;"
                        class="mt-4 pt-4 btns h1">Book Now!</a> --}}
                    <a href="{{ route('login', ':tourTo_value:potenga_beach') }}" style="text-decoration: none;"
                        class="mt-4 pt-4 btns h1">Book Now!</a>
            </div>



            @endif
            <div class="mt-5 pt-5">
                <h1 class="h1 font-weight-bold text-center">পতেঙ্গা সমুদ্র সৈকত</h1>
                <div class="row">
                    <div class="col-md-4">
                        <img class="mt-5 img-fluid" src="{{ asset('/images/Tourism/Potenga_Beach/3.jpg') }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <br>
                        <P class="my-3 mt-4 pt-3 h4 text-justify">From Chittagong City Outer Ring road it is only a
                            30-foot-wide
                            walkway. Then you will be welcomed with a variety of flowers all around you. Then there are
                            thousands of seats to sit. After so much enjoyment you can walk on the beach, touch the
                            saltwater of the sea.
                            <br><br>
                            It is easy to reach and the popularity of tourists is increasing day by day. In addition,
                            there are also several plans that are being implemented to make the beach more attractive.
                            Now to build a modern and world-class tourist center on the 5 km length Patenga beach is
                            underway. The spectacular decoration has already caught the eyes of everyone.
                            <br><br>
                            you can visit many places including Rangamati Hanging Bridge, Shuvolong Jhorna, Rangamati
                            City and many more. There is a way of kayaking in the river Karnaphuli near Kaptai. If you
                            want to enjoy the ride of the cable car, you have to go Sheikh Russel Ecopark.
                        </P>
                    </div>
                </div>
            </div>

            <div class="mt-5 pt-5">
                <h1 class="h1 font-weight-bold">Sunset At Potenga</h1>
                <div class="row">
                    <div class="col-md-8">
                        <br>
                        <P class="my-3 mt-4 pt-3 h4 text-left">The view of the sunrise or sunset at Patenga, at the
                            mouth of the Karnaphuli river and the sea, is very beautiful. Especially in the afternoon,
                            watching the sunset from here and the evening time is so enjoying. There are rows of small
                            vessels for the port of Chittagong that makes a difference in this environment than any
                            other beaches. In Patenga, riding on the speedboat and moving around the sea creates a great
                            moment. There are sea bikes and horses for hiking along the coast. Buying from the Burmese
                            Market will give you a memory for the future. At the same time, there is delicious street
                            food to eat everywhere.
                            <br><br>
                            Near Patenga Beach there are Shah Amanat International Airport, Bangladesh Navy Base,
                            Chittagong Port Jetty, and Butterfly Park. As these places are very near, you can also visit
                            those places. The Patenga beach in Chittagong district is really a great place to spend a
                            good time with friends or family.
                            <br><br>
                            If you want you can visit Patenga from Dhaka in a one day tour. In that case, you will have
                            to leave by night with out rental car. After reaching Chittagong in the morning, go to Patenga
                            first. Come back Chittagong in the afternoon and take your dinner. Then come back to Dhaka
                            by the same car that you rented from us.
                            <br><br>

                        </P>
                    </div>
                    <div class="col-md-4 mt-4">
                        <img class="mt-5 img-fluid"
                            src="{{ asset('/images/Tourism/Potenga_Beach/Patenga-Sea-Beach-2.jpg') }}" alt="">
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
