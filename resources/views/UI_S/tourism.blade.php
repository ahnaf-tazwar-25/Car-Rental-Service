<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/iconLogo.png') }}">
    <title>Travel Anywhere</title>
    @extends('layouts.head')
</head>

<body>

    @section('logOut')
        <a class="btn btn-primary mr-3" href="{{ route('logout', 'tourism') }}">
        @endsection

        @section('logIn')
            <a class="btn btn-primary mr-3" href="{{ route('login', 'tourism') }}">
                Sign In
            </a>
        @endsection

        @section('logOut')
            <a class="btn btn-primary mr-3" href="{{ route('logout', '11') }}">
            @endsection

            @extends('layouts.nav')

            <br><br><br><br><br><br>




            <div class="card-deck ml-4 mr-4 mt-4 pt-4 mb-4 pb-4 col-md-11">
                <div class="card border-success">
                    <div class="card-header text-center">
                        <small class="text-muted font-weight-bold">Cox Bazar</small>
                    </div>
                    <img class="card-img-top" src="images/Tourism/CoxBazar.JPG" alt="Card image cap">
                    <div class="card-footer"></div>
                    <div class="card-body">
                        {{-- <h4 class="card-title h4">Cox Bazar</h5> --}}

                        <div class="row">
                            <div class="h5 col-md-6">Travel Platform</div>
                            <div class="h5 col-md-5">By Road</div>
                        </div>

                        <div class="row">
                            <div class="h5 col-md-6">Duration</div>
                            <div class="h5 col-md-5">4 - 6 Days</div>
                        </div>

                        <div class="row">
                            <div class="h5 col-md-6">List of Venues</div>
                        </div>
                        <div class="row">
                            <ul class="h6 col-md-6">
                                <li>&#9642; Himchari</li>
                                <li>&#9642; Inani Beach</li>
                                <li>&#9642; Maheskhali</li>
                                <li>&#9642; Ramu</li>
                            </ul>
                        </div>

                        <div class="row">
                            <div class="h5 col-md-6">Total Approximate <br> Journey Cost</div>
                            <div class="h5 col-md-5">৳ 2500+</div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('tourTo_value', 'cox_bazar') }}" class="btn btn-success w-100">Details</a>
                    </div>
                    {{-- <a href="{{ route('tourTo') }}" class="btn btn-success w-100">Details</a> --}}
                </div>
                <div class="card border-success">
                    <div class="card-header text-center">
                        <small class="text-muted font-weight-bold">Sajek</small>
                    </div>
                    <img class="card-img-top" src="images/Tourism/Sajek.jpg" alt="Card image cap">
                    <div class="card-footer"></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="h5 col-md-6">Travel Platform</div>
                            <div class="h5 col-md-5">By Road</div>
                        </div>

                        <div class="row mt-2">
                            <div class="h5 col-md-6">Duration</div>
                            <div class="h5 col-md-5">3 - 4 Days</div>
                        </div>

                        <div class="row mt-3">
                            <div class="h5 col-md-6">List of Venues</div>
                        </div>
                        <div class="row">
                            <ul class="h6 col-md-6">
                                <li>&#9642; Sajek Valley</li>
                                <li>&#9642; Sajek Megh Bilash Resort</li>
                            </ul>
                        </div>

                        <div class="row mt-5">
                            <div class="h5 col-md-6">Total Approximate <br> Journey Cost</div>
                            <div class="h5 col-md-5">৳ 3000+</div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('tourTo_value', 'sajek') }}" class="btn btn-success w-100">Details</a>
                    </div>
                </div>
                <div class="card border-success">
                    <div class="card-header text-center">
                        <small class="text-muted font-weight-bold">Bisnakandi</small>
                    </div>
                    <img class="card-img-top" src="images/Tourism/Bisnakandi.JPG" alt="Card image cap">
                    <div class="card-footer"></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="h5 col-md-6 mt-3">Travel Platform</div>
                            <div class="h5 col-md-5">By Road</div>
                        </div>

                        <div class="row mt-3">
                            <div class="h5 col-md-6">Duration</div>
                            <div class="h5 col-md-5">1 - 2 Days</div>
                        </div>

                        <div class="row mt-5">
                            <div class="h5 col-md-6">List of Venues</div>
                        </div>
                        <div class="row">
                            <ul class="h6 col-md-6">
                                <li>&#9642; Bisnakandi</li>
                            </ul>
                        </div>

                        <div class="row mt-4">
                            <div class="h5 col-md-6">Total Approximate <br> Journey Cost</div>
                            <div class="h5 col-md-5">৳ 4500+</div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="{{ route('tourTo_value', 'bisnakandi') }}" class="btn btn-success w-100">Details</a>
                    </div>
                </div>

            </div>

            <div class="card-deck ml-4 mr-4 mt-4 pt-4 mb-4 pb-4 col-md-11">
                <div class="card border-success">
                    <div class="card-header text-center">
                        <small class="text-muted font-weight-bold">Boga Lake</small>
                    </div>
                    <img class="card-img-top img-fluid" src="images/Tourism/Boga_Lake.JPG" alt="Card image cap">
                    <div class="card-footer"></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="h5 col-md-6 mt-3">Travel Platform</div>
                            <div class="h5 col-md-5">By Road</div>
                        </div>

                        <div class="row mt-5">
                            <div class="h5 col-md-6">Duration</div>
                            <div class="h5 col-md-5">2 - 3 Days</div>
                        </div>

                        <div class="row mt-4">
                            <div class="h5 col-md-6">List of Venues</div>
                        </div>
                        <div class="row">
                            <ul class="h6 col-md-6">
                                <li class="mt-2">&#9642; Boga Lake</li>
                                <li class="mt-2">&#9642; New Rumana Para (নতুন রুমানা পাড়া)</li>
                            </ul>
                        </div>

                        <div class="row mt-4">
                            <div class="h5 col-md-6 mt-3">Total Approximate <br> Journey Cost</div>
                            <div class="h5 col-md-5">৳ 4000+</div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <a href="{{ route('tourTo_value', 'boga_lake') }}" class="btn btn-success w-100">Details</a>

                    </div>
                </div>

                <div class="card border-success">
                    <div class="card-header text-center">
                        <small class="text-muted font-weight-bold">Potenga Beach</small>
                    </div>
                    <img class="img-fluid w-100" src="images/Tourism/patenga-sea-beach.jpg" alt="Card image cap">

                    <div class="card-footer"></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="h5 col-md-6">Travel Platform</div>
                            <div class="h5 col-md-5">By Road</div>
                        </div>

                        <div class="row mt-3">
                            <div class="h5 col-md-6">Duration</div>
                            <div class="h5 col-md-5">4 - 6 Days</div>
                        </div>

                        <div class="row mt-4">
                            <div class="h5 col-md-6">List of Venues</div>
                        </div>
                        <div class="row">
                            <ul class="h6 col-md-6">
                                <li>&#9642; Potenga Beach</li>
                                <li>&#9642; Neval Beach</li>
                            </ul>
                        </div>

                        <div class="row mt-2">
                            <div class="h5 col-md-6">Total Approximate <br> Journey Cost</div>
                            <div class="h5 col-md-5">৳ 1000+</div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="{{ route('tourTo_value', 'potenga_beach') }}"
                            class="btn btn-success w-100">Details</a>

                    </div>
                </div>

                <div style="background-color: rgb(214, 195, 162)" class="display-4 card border-success text-center">


                    <div style="margin-top: 65%; color: rgb(0, 146, 0)" class="font-weight-bold">
                        <p>New Tour Booking</p>
                        <p>...</p>
                        <p>Comming Soon!</p>
                    </div>
                    {{-- <div class="card-header text-center">
                        <small class="text-muted font-weight-bold">Nikli Hour</small>
                    </div>
                    <img class="img-fluid w-100" src="images/Tourism/patenga-sea-beach.jpg" alt="Card image cap">

                    <div class="card-footer"></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="h5 col-md-6">Travel Platform</div>
                            <div class="h5 col-md-5">By Road</div>
                        </div>

                        <div class="row">
                            <div class="h5 col-md-6">Duration</div>
                            <div class="h5 col-md-5">4 - 6 Days</div>
                        </div>

                        <div class="row">
                            <div class="h5 col-md-6">List of Venues</div>
                        </div>
                        <div class="row">
                            <ul class="h6 col-md-6">
                                <li>&#9642; Himchari</li>
                                <li>&#9642; Inani Beach</li>
                                <li>&#9642; Maheskhali</li>
                                <li>&#9642; Ramu</li>
                            </ul>
                        </div>

                        <div class="row">
                            <div class="h5 col-md-6">Total Approximate <br> Journey Cost</div>
                            <div class="h5 col-md-5">৳ 2500+</div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="{{ route('tourTo_value', 'potenga_beach') }}" class="btn btn-success w-100">Details</a>
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div> --}}
                </div>

                {{-- <div class="card border-success">
                    <div class="card-header text-center">
                        <small class="text-muted font-weight-bold">Ratargul Swamp Forest</small>
                    </div>
                    <img class="card-img-top img-fluid" src="images/Tourism/Ratargul_Swamp_Forest.jpg"
                        alt="Card image cap">

                    <div class="card-footer"></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="h5 col-md-6">Travel Platform</div>
                            <div class="h5 col-md-5">By Road</div>
                        </div>

                        <div class="row">
                            <div class="h5 col-md-6">Duration</div>
                            <div class="h5 col-md-5">4 - 6 Days</div>
                        </div>

                        <div class="row">
                            <div class="h5 col-md-6">List of Venues</div>
                        </div>
                        <div class="row">
                            <ul class="h6 col-md-6">
                                <li>&#9642; Himchari</li>
                                <li>&#9642; Inani Beach</li>
                                <li>&#9642; Maheskhali</li>
                                <li>&#9642; Ramu</li>
                            </ul>
                        </div>

                        <div class="row">
                            <div class="h5 col-md-6">Total Approximate <br> Journey Cost</div>
                            <div class="h5 col-md-5">৳ 2500+</div>
                        </div>

                    </div>
                    <a href="#" role="button" class="btn btn-success w-100" data-toggle="modal">Details</a>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>

                    </div>
                </div> --}}
            </div>


            @extends('layouts.footer')
</body>

</html>
