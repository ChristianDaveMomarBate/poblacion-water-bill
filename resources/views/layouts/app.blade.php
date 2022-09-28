<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/website-favicon/logo.png') }}">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        video.bg-video {
            position: fixed;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            transform: translateX(-50%) translateY(-50%);
            z-index: 0;
        }

        .masthead {
            position: relative;
            overflow: hidden;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .masthead:before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.612);
        }

        .masthead .masthead-content {
            position: relative;
            max-width: 52rem;
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        .masthead .masthead-content h1,
        .masthead .masthead-content .h1 {
            font-size: 2.5rem;
        }

        .masthead .masthead-content p {
            font-size: 1.2rem;
        }

        .masthead .masthead-content p strong {
            font-weight: 700;
        }

        .masthead .masthead-content .input-group-newsletter input {
            height: auto;
            width: 100%;
            font-size: 1rem;
            padding: 1rem;
        }

        .masthead .masthead-content .input-group-newsletter button {
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: calc(1rem + 2px);
        }

        .lh-1 {
            line-height: 1 !important;
        }

        @media (min-width: 992px) {
            .masthead {
                height: 100%;
                width: 75vw;
                min-height: 0;
                padding-bottom: 0;
            }

            .masthead:before {
                transform: skewX(-9deg);
                transform-origin: top right;
            }

            .masthead .masthead-content {
                padding-top: 0;
                padding-bottom: 0;
                padding-left: 2rem;
                padding-right: 9rem;
            }

            .masthead .masthead-content h1,
            .masthead .masthead-content .h1 {
                font-size: 3.5rem;
            }

            .masthead .masthead-content p {
                font-size: 1.3rem;
            }
        }

        @media (min-width: 1200px) {
            .masthead {
                width: 65vw;
            }
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    BACUAG WATER DISTRICT
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto"></ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('login') ? 'active' : '' }}"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('register') ? 'active' : '' }}"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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

        <main>
            @yield('content')
        </main>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
