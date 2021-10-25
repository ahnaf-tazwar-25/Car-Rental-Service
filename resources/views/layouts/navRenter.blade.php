<nav style="position: fixed; top: 0; width: 100%; z-index: 10;"
        class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="{{route('homes')}}">Car Rental Service</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-5">
                <li class="nav-item pl-5">
                    <a class="nav-link" href="{{route('homes')}}">Home</a>
                </li>
                <li class="nav-item pl-5">
                    <a class="nav-link active" href="{{ route('renterDashboard') }}">Dashboard</a>
                </li>
                {{-- <li class="nav-item pl-5">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li> --}}
            </ul>


            @if (session()->has('LoggedNID'))

                {{-- <p class="p-1">Hi, {{ session('fname') }}</p>
                <p class="pr-3">{{ session('lname') }}</p> --}}
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{ session('fname') }} {{ session('lname') }}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{route('renterSettings')}}" class="dropdown-item" type="button">Profile Settings</a>
                        
                    </div>
                </div>
                &nbsp&nbsp&nbsp
                @yield('logOut')
                    Log Out
                </a>
            @endif
        </div>


    </nav>
    