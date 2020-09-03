<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name') )</title>
{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}

<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{--                    {{ config('app.name', 'Laravel') }}--}}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNavAltMarkup"
                                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-item nav-link text-light {{ Request::path() == '/' ? 'active' : '' }}"
                                   href="{{url('/')}}">Home <span
                                        class="sr-only">(current)</span></a>
                                <a class="nav-item nav-link text-light {{ Request::path() == '/user' ? 'active' : '' }}"
                                   href="{{url('/user')}}">Users</a>
                                <a class="nav-item nav-link text-light {{ Request::path() == '/companies' ? 'active' : '' }}"
                                   href="{{url('/companies')}}">Companies</a>
                                <a class="nav-item nav-link text-light {{ Request::path() == '/excel' ? 'active' : '' }}"
                                   href="{{url('/excel')}}">Excel</a>
                                <a class="nav-item nav-link text-light {{ Request::path() == '/customers' ? 'active' : '' }}"
                                   href="{{url('/customers')}}">Customers</a>
                                <a class="nav-item nav-link text-light {{ Request::path() == '/tags' ? 'active' : '' }}"
                                   href="{{url('/tags')}}">Tags</a>
                                <a class="nav-item nav-link text-light {{ Request::path() == '/post' ? 'active' : '' }}"
                                   href="{{url('/post')}}">Post</a>
                                <a class="nav-item nav-link text-light {{ Request::path() == '/resizeImage' ? 'active' : '' }}"
                                   href="{{url('/resizeImage')}}">Resize Image</a>
                                <a class="nav-item nav-link text-light {{ Request::path() == '/contact' ? 'active' : '' }}"
                                   href="{{url('/contact-us')}}">Contact
                                    Us</a>
                                <a class="nav-item nav-link text-light {{ Request::path() == '/about' ? 'active' : '' }}"
                                   href="{{url('/about')}}">About
                                    Us</a>
                            </div>
                        </div>
                    </nav>

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="container">

            @if(session()->has('message'))
                <div class="alert alert-info" role="alert">
                    <strong>Success</strong> {{ session()->get('message') }}
                </div>
            @endif

            @yield('content')

        </div>
    </main>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalCenterTitle"><h3>COVID-19 Updates</h3></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        TEAM Consultancy UK is committed to the welfare of its clients and staff during this difficult
                        and challenging time.
                        As the Coronavirus situation continues to evolve, our thoughts go out to all who have been
                        impacted or infected. We hope you are safe and well. We are taking all the necessary precautions
                        and closely monitoring Government guidance and will take any steps recommended to minimise
                        disruption.
                        Our mission is to ensure our services continue as normal. We have prepared business continuity
                        plans and following Government advice we are in the process of enabling our employees to work
                        from home where they can.
                        We are not arranging any more one to one consultation in our Bangladesh regional offices (Sylhet
                        and Moulvibazar) including our head office in Birmingham, United Kingdom until further notice.
                        However, we will remain accessible to you 24/7 via emails, Skype and our Facebook live chatroom.
                        If you need any assistance, please contact one of our members of staff who will be happy to
                        assist you with your queries.
                        As the spread of Covid-19 increases, please be assured that we are doing everything possible to
                        continue to provide all vital services for our clients in regards to their higher education
                        matters in the UK.
                        Please stay at home and maintain personal hygiene as instructed by health authorities.
                        Once again, we would like to thank you all for your continuous support.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<script>
    $(document).ready(function () {

        var date = new Date().toISOString().slice(0, 10);

        var value = sessionStorage.getItem('modalKey');

        if (value == '') {
            sessionStorage.setItem('modalKey', date);
        } else {
            if (value != date) {
                sessionStorage.setItem('modalKey', date);
                $("#exampleModal").modal('show');
            }
        }

    });
</script>

@yield('scripts')

</body>
</html>
