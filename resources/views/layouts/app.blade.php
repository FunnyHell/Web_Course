<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('storage').'/css/styles.css'}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    @push('scripts')
        <script src="/storage/scripts/script.js"></script>
    @endpush
    @stack('scripts')
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Home
            </a>

            <div class="navbar" id="navbarSupportedContent">

                <!-- Right Side Of Navbar -->
                <ul class="navbar-navigation ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item navigation-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <div style="display: flex">
                            <a href="/home" class="dropdown-item" style="margin-right: 7px">Profile</a>
                            <div aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <hr>
    <main class="py-4">
        @yield('content')
    </main>
    <footer>
        <hr>
        <div class="col">
            <div class="row footer-a" id="left-part">
                <b>Git:</b> <a href="https://github.com/FunnyHell/Web_Course"><span>link to this project</span></a> <a
                    href="https://github.com/FunnyHell">Profile</a></p>
            </div>
            <div class="row" id="right-part">
                <span class="fun"></span>
                <i>VT-19 Omelianenko Serhii</i>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
