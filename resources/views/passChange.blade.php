<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/iconLogo.png') }}">
    @extends('layouts.head')
</head>

<body>


    <br><br><br><br><br><br><br><br><br><br>


    <main class="login-form mt-5">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Log In</div>
                        <div class="card-body">
                            <form action="{{ route('passChange') }}" method="POST">
                                @csrf


                                <div class="form-group row">
                                    <label for="password1" class="col-md-4 col-form-label text-md-right">Enter old
                                        Password</label>
                                    <div class="col-md-6">
                                        {{-- <input type="hidde"> --}}
                                        <input id="password1" type="password"
                                            class="form-control @error('passOld') is-invalid @enderror"
                                            name="old_password" required>

                                        @error('passOld')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror



                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password2" class="col-md-4 col-form-label text-md-right">Enter New
                                        Password</label>
                                    <div class="col-md-6">
                                        {{-- <input type="hidde"> --}}
                                        <input id="password2" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror




                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password3" class="col-md-4 col-form-label text-md-right">Re - enter New
                                        Password</label>
                                    <div class="col-md-6">
                                        {{-- <input type="hidde"> --}}
                                        <input id="password3" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password_confirmation" required>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror



                                    </div>
                                </div>

                                {{-- <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary pl-3 pr-3  px-5">
                                        Change
                                    </button>

                                    @if (session()->has('LoggedUser'))

                                        <a type="button" href="{{ route('customerDashboard') }}"
                                            class="btn ml-5 btn-danger px-5">Cancel</a>
                                    @elseif(session()->has('LoggedNID'))

                                        <a type="button" href="{{ route('renterDashboard') }}"
                                            class="btn ml-5 btn-danger px-5">Cancel</a>

                                    @endif



                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

    </main>
</body>

</html>
