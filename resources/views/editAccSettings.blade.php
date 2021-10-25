<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Rental Service</title>
    @extends('layouts.head')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/iconLogo.png') }}">

</head>
<style>
    input[type="file"] {
        opacity: 0.1;

    }

</style>

<body>
    @section('logOut')
        <a class="btn btn-primary mr-3" href="{{ route('logout', '11') }}">
        @endsection

        @section('logIn')
            <a class="btn btn-primary mr-3" href="{{ route('login', 'travel') }}">
                Sign In
            </a>
        @endsection
        @extends('layouts.nav')
        <br><br><br><br><br><br>
        <br><br><br><br><br><br>

        <div class="container">
            <ol class="breadcrumb">
            </ol>
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                        class="rounded-circle p-1 bg-white" width="150">
                                    <div class="mt-3 h5">
                                        <h4>John Doe</h4>

                                    </div>
                                </div>
                                <hr class="my-4">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <form action="
                        {{ route('cus_editSettings') }}
                        " method="POST">
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">First Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            @if (session()->has('LoggedUser'))
                                                <input type="text" name="fname" class="form-control"
                                                    value="{{ $LoggedUserInfo->fname }}">
                                            @elseif(session()->has('LoggedNID'))
                                                <input type="text" name="fname" class="form-control"
                                                    value="{{ $LoggedUserInfo->fName }}">
                                            @endif

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Last Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            @if (session()->has('LoggedUser'))
                                                <input type="text" name="lname" class="form-control"
                                                    value="{{ $LoggedUserInfo->lname }}">
                                            @elseif(session()->has('LoggedNID'))
                                                <input type="text" name="fname" class="form-control"
                                                    value="{{ $LoggedUserInfo->lName }}">
                                            @endif
                                        </div>
                                    </div>
                                    {{-- <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="email" class="form-control" value="{{$LoggedUserInfo->email}}">
                                    </div>
                                </div> --}}
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Phone</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="contact_number" class="form-control"
                                                value="{{ $LoggedUserInfo->contact_number }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Address</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="address" class="form-control"
                                                value="{{ $LoggedUserInfo->address }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 mt-3 text-secondary">
                                            @if (session()->has('LoggedUser'))

                                                <input type="submit" href="{{ route('cus_editSettings') }}"
                                                    class="btn btn-primary px-4" value="Save Changes">
                                                &nbsp;
                                                <a type="button" href="{{ route('customerDashboard') }}"
                                                    class="btn ml-5 btn-danger px-5">Cancel</a>

                                            @elseif(session()->has('LoggedNID'))

                                                <a type="button" href="{{ route('renter_editSettings') }}"
                                                    class="btn btn-primary px-4">Save Changes</a>
                                                &nbsp;
                                                <a type="button" href="{{ route('renterDashboard') }}"
                                                    class="btn ml-5 btn-danger px-5">Cancel</a>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <ol class="breadcrumb">
            </ol>
        </div>
        <br><br><br><br><br><br>
        <br><br><br><br><br><br>
        <br><br><br><br><br><br>
        @extends('layouts.footer')
</body>

</html>
