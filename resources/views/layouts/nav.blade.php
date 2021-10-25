<nav style="position: fixed; top: 0; width: 100%; z-index: 10;"
    class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="{{ route('homes') }}">Car Rental Service</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-5">
            <li class="nav-item pl-5">
                <a class="nav-link" href="{{ route('homes') }}">Home <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item pl-5">
                <a href="{{ route('rent') }}" class="nav-link">Instant Rent</a>
            </li>
            <li class="nav-item pl-5">
                <a href="{{ route('travel') }}" class="nav-link">Instant Travel Book</a>
            </li>
            <li class="nav-item pl-5">
                <a href="{{ route('specialOffer') }}" class="nav-link">Special Offer</a>
            </li>
            <li class="nav-item pl-5">
                @if (session()->has('LoggedUser'))

                    <a class="nav-link" href="{{ route('customerDashboard') }}">Rental Status</a>
                @endif
            </li>
        </ul>


        @if (!session()->has('LoggedUser') && !session()->has('LoggedNID'))

            <a class="btn btn-primary mr-3" href="{{ route('login', 'home') }}">
                Sign In
            </a>

            <a class="btn btn-primary mr-3" href="{{ route('register') }}">
                Register
            </a>
        @elseif (session()->has('LoggedNID') && !session()->has('LoggedUser'))
            {{-- <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{ session('fname') }} {{ session('lname') }}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{ route('settings') }}" class="dropdown-item" type="button">Profile Settings</a>
                        <button class="dropdown-item" type="button">View Vehicle Requests</button>
                       
                    </div>
                </div>
                &nbsp&nbsp&nbsp --}}
            <a class="btn btn-primary mr-3" href="{{ route('logout', '11') }}">
                Log Out
            </a>
        @else

            {{-- <p class="p-1">Hi, {{ session('fname') }}</p>
                <p class="pr-3">{{ session('lname') }}</p> --}}
            <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    {{ session('fname') }} {{ session('lname') }}
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    @if (session()->has('LoggedNID') && !session()->has('LoggedUser'))
                        <a href="{{ route('renter_settings') }}" class="dropdown-item" type="button">Profile
                            Settings</a>
                    @elseif(!session()->has('LoggedNID') && session()->has('LoggedUser'))
                        <a href="{{ route('cus_settings') }}" class="dropdown-item" type="button">Profile
                            Settings</a>
                        {{-- <button class="dropdown-item" type="button">View Vehicle Requests</button> --}}
                        <button class="dropdown-item" type="button"></button>
                    @endif
                </div>
            </div>
            &nbsp&nbsp&nbsp
            @yield('logOut')
            Log Out
            </a>
        @endif
    </div>


</nav>
{{-- @if (!session()->has('LoggedUser') && !session()->has('LoggedNID'))

                <a class="btn btn-primary mr-3" href="{{ route('login', 'home') }}">
                    Sign In
                </a>

                <a class="btn btn-primary mr-3" href="{{ route('register') }}">
                    Register
                </a>
            @elseif (session()->has('LoggedNID') && !session()->has('LoggedUser'))
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{ session('fname') }} {{ session('lname') }}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{ route('settings') }}" class="dropdown-item" type="button">Settings</a>
                        <button class="dropdown-item" type="button">View Vehicle Requests</button>
                        <button class="dropdown-item" type="button"></button>
                    </div>
                </div>
                &nbsp&nbsp&nbsp
                <a class="btn btn-primary mr-3" href="{{ route('logout', '11') }}">
                    Log Out
                </a> --}}
