<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Recipes') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
      integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M"
      crossorigin="anonymous"
    />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column">
    <div id="page-content">
        {{-- Navbar --}}
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="40" height="40" viewBox="0 0 512.000000 512.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path d="M2436 5110 c-128 -23 -273 -93 -364 -175 l-60 -54 -80 29 c-179 65
                    -379 76 -557 31 -107 -28 -255 -102 -312 -156 -39 -38 -45 -48 -38 -72 19 -76
                    69 -82 164 -18 137 90 236 119 416 119 148 0 216 -14 334 -69 40 -19 83 -35
                    96 -35 15 0 50 26 103 79 90 90 184 142 299 166 133 28 260 12 390 -51 56 -27
                    96 -56 155 -115 53 -53 88 -79 103 -79 13 0 56 16 96 35 194 91 418 98 615 19
                    198 -79 324 -220 355 -398 31 -180 -83 -384 -274 -491 -38 -21 -73 -48 -79
                    -61 -8 -17 -4 -130 13 -419 l24 -395 -30 -5 c-67 -11 -490 -35 -785 -46 -333
                    -12 -860 -7 -1210 12 -246 13 -518 34 -523 40 -2 2 8 181 21 397 18 287 22
                    400 14 417 -6 13 -38 38 -72 56 -96 51 -193 147 -235 232 -44 90 -60 183 -46
                    263 17 89 14 121 -11 138 -30 21 -81 20 -101 -1 -38 -43 -54 -187 -33 -301 29
                    -162 141 -325 292 -424 l64 -43 -5 -70 c-20 -255 -45 -731 -45 -867 l0 -161
                    -59 -54 c-38 -34 -70 -75 -88 -111 -25 -50 -28 -68 -28 -152 0 -81 4 -103 25
                    -145 36 -74 101 -138 173 -171 58 -27 71 -29 224 -32 l163 -4 54 -82 c105
                    -157 245 -285 415 -379 l76 -42 -46 -6 c-64 -9 -99 -30 -177 -103 -43 -41 -99
                    -80 -158 -110 -187 -96 -324 -254 -389 -449 -37 -112 -44 -190 -45 -485 l0
                    -263 25 -24 24 -25 1241 0 1241 0 24 25 25 24 0 263 c-1 295 -8 373 -45 485
                    -65 195 -202 353 -389 449 -59 30 -115 69 -158 110 -78 73 -113 94 -177 103
                    l-46 6 76 42 c170 94 310 222 415 379 l54 82 163 4 c153 3 166 5 224 32 72 33
                    137 97 173 171 21 42 25 64 25 145 0 84 -3 102 -28 152 -18 36 -50 77 -88 111
                    l-59 54 0 161 c0 136 -25 612 -45 867 l-5 70 64 43 c149 98 264 263 291 419
                    18 99 18 132 0 217 -65 306 -362 531 -731 553 -127 7 -239 -9 -363 -53 l-94
                    -33 -61 55 c-66 60 -205 135 -296 160 -67 18 -247 26 -314 14z m-376 -2310
                    c408 -16 836 -11 1373 16 l137 7 0 -190 c0 -221 -14 -322 -64 -454 -54 -144
                    -118 -241 -236 -359 -194 -194 -397 -284 -666 -297 -294 -14 -563 93 -769 305
                    -84 88 -136 163 -191 277 -74 157 -86 216 -91 484 l-5 234 138 -7 c77 -4 245
                    -11 374 -16z m-666 -327 c18 -150 30 -215 51 -282 l24 -73 -114 4 c-104 4
                    -117 7 -161 34 -92 57 -117 154 -66 255 36 72 104 109 198 109 l63 0 5 -47z
                    m2517 20 c45 -23 59 -37 82 -82 50 -101 25 -198 -67 -255 -44 -27 -57 -30
                    -161 -34 l-114 -4 24 73 c21 67 33 132 51 282 l5 47 63 0 c48 0 75 -6 117 -27z
                    m-1564 -1109 c115 -22 311 -22 426 0 48 9 94 19 102 22 8 4 15 2 15 -3 0 -4
                    -48 -35 -107 -67 l-108 -59 -110 -2 -110 -1 -112 60 c-62 34 -113 65 -113 69
                    0 5 7 7 15 3 8 -3 54 -13 102 -22z m-421 -294 l99 -45 -84 -5 c-76 -5 -86 -8
                    -108 -34 l-24 -28 3 -320 3 -320 24 -19 c32 -26 67 -24 96 6 l25 24 0 266 0
                    265 199 0 199 0 -5 -42 c-2 -24 -10 -126 -18 -227 -19 -250 -18 -251 134 -251
                    l87 0 69 -51 c91 -66 121 -79 155 -67 55 19 55 29 21 354 -17 164 -30 298 -28
                    299 3 3 464 215 502 231 27 11 35 10 90 -19 90 -48 213 -174 258 -267 64 -128
                    69 -158 74 -437 l5 -253 -1141 0 -1141 0 0 218 c1 264 12 339 70 459 34 70 58
                    103 124 168 70 69 187 150 207 142 3 -1 51 -22 105 -47z"/>
                    <path d="M2010 2663 c-35 -13 -50 -37 -50 -80 0 -82 75 -116 128 -57 36 41 24
                    111 -25 133 -26 12 -30 12 -53 4z"/>
                    <path d="M3054 2659 c-46 -23 -57 -93 -21 -133 52 -59 127 -25 127 57 0 64
                    -54 102 -106 76z"/>
                    <path d="M2351 2459 c-91 -18 -181 -102 -212 -198 -27 -84 -96 -113 -204 -84
                    -63 17 -65 17 -92 -3 -20 -15 -29 -31 -31 -58 -5 -54 46 -155 107 -215 146
                    -142 345 -144 569 -5 l73 46 62 -40 c80 -52 167 -88 251 -103 166 -31 333 57
                    407 215 38 81 37 129 -4 160 -27 20 -29 20 -92 3 -108 -29 -177 0 -204 84 -53
                    165 -238 249 -394 178 -21 -9 -33 -9 -64 3 -52 21 -120 28 -172 17z"/>
                    <path d="M2062 717 c-29 -31 -28 -72 3 -102 31 -32 69 -32 102 1 20 20 24 31
                    19 57 -12 64 -82 88 -124 44z"/>
                    <path d="M2955 715 c-39 -38 -32 -86 16 -111 76 -39 148 56 86 114 -31 29 -72
                    28 -102 -3z"/>
                    <path d="M2062 397 c-29 -31 -28 -72 3 -102 38 -39 86 -32 110 16 21 39 19 56
                    -10 84 -31 32 -74 33 -103 2z"/>
                    <path d="M2955 395 c-39 -38 -32 -86 16 -111 76 -39 148 56 86 114 -31 29 -72
                    28 -102 -3z"/>
                    </g>
                    </svg>
                    EasyRecipes
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="{{ url('/recipes') }}" class="nav-link">
                                <i class="fas fa-hamburger"></i> Recipes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/recipes/create') }}" class="nav-link">
                                <i class="fas fa-pizza-slice"></i> Add Recipe
                            </a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">
                                         <i class="fas fa-sign-in-alt"></i> {{ __('Login') }}
                                    </a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">
                                        <i class="fas fa-user-plus"></i> {{ __('Register') }}
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="far fa-user"></i> {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/profile') }}">
                                        <i class="fas fa-user"></i> Profile
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
            @yield('content')
        </main>
        @extends('layouts.footer')
    </div>
</body>
</html>
