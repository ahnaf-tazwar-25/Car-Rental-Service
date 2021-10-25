<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @yield('layouts.head') --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/iconLogo.png') }}">
    @extends('layouts.head')
    <link rel="stylesheet" href="{{ asset('styles/cards.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('styles/specialOffer.css') }}"> --}}

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> --}}

</head>

<style>
    body {
        /* background-image: linear-gradient( to bottom, transparent, #000000), url("../images/mainBackground.jpg"); */
        background-image: linear-gradient(to bottom, rgb(204, 255, 193), #000000), url("../images/mainBackground.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        /* background-color: rgb(38, 125, 201); */
    }

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
        <br><br><br><br><br><br>

        <h1 class="display-4 text-center font-weight-bold pb-5 m-5 mb-5">Car Rental Servce Special Offer!
        </h1>


        <div id="features">
           
            <div class="row">
                <div class="each_feature col-md-3">
                    <img style="padding: 2.5%;" style="position:absolute; left:50px; top:20px; "
                        src="{{ asset('images/SpecialOffer/pujaOffer.jpg') }}">
                    <h3>Special Discount on one-way travel!</h3>
                    <br>
                    <label>Upto <strong class="font-weight-bold">15%</strong> discount <br> on this upcoming durga puja 2021</label>
                    <br><br>
                    <a href="{{route('pujaOffer')}}" class="btn btn-success w-100">Details</a>
                </div>
            </div>
        </div>

        <br><br><br><br><br><br>
        <br><br><br><br><br><br>
        @extends('layouts.footer')
</body>

</html>


{{-- <h1 class="h1">This is the heading of H1</h1>

    <div id="post_datas" class="ml-2 bg-success">
        <button id="load_more_button" class="ml-3 mt-4 mb-5 btn btn-primary">Load</button>
    </div>
    <select id="load_more_buttons" class="example">
        <option value="One"> One</option>
        <option value="Two">Two</option>
        <option value="Three">Three</option>
        <option value="Four">Four</option>
        <option value="Five">Five</option>
    </select>

    <select id="post_datas2">
        {{ csrf_field() }}
    </select>

    <div class="container box">
        <h3 align="center">Load More Data in Laravel using Ajax</h3><br />
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Post Data</h3>
            </div>
            <div class="panel-body">
                
                <div id="post_data"></div>
            </div>
        </div>
        <br />
        <br />
    </div>


    <script>
        $(document).ready(function() {

            var department = $('input[name="_token"]').val();
            // var departments = '@gmail';
            // alert(department);

            // load_data('', _token);

            function load_data(id = "asd", _token) {
                $.ajax({
                    // alert("asdasd");
                    url: "{{ route('test') }}",
                    method: "POST",
                    data: {
                        id: id,
                        _token: _token
                    },
                    success: function(data) {
                        document.getElementById("post_datas2").innerHTML = data;
                    }
                })
            }


            $(document).on('change', '#load_more_buttons', function() {
                var id = $(this).data('id');
                $('#load_more_button').html('<b>Loading...</b>');
                var e = document.getElementById("load_more_buttons");
                var strUser = e.options[e.selectedIndex].text;
                load_data(strUser, department);
                
                setTimeout(function() {
                    $('#load_more_button').html('<b>Load More</b>');
                }, 500);

            });

        });
    </script> --}}
