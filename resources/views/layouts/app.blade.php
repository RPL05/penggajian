<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        <div id="app">
            <div class="container-fluid">
                <div class="row">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                        <div class="sidebar-sticky pt-3">
                            <div class="d-flex">
                                <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 48 48" height="35px" id="Layer_1" version="1.1" fill="#FFF" viewBox="0 0 48 48" width="35px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path clip-rule="evenodd" d="M43,40H5c-2.209,0-4-1.791-4-4V12c0-2.209,1.791-4,4-4h38c2.209,0,4,1.791,4,4v24  C47,38.209,45.209,40,43,40z M3,21h42v-4H3V21z M45,12c0-1.104-0.896-2-2-2H5c-1.104,0-2,0.896-2,2v3h42V12z M45,23H3v13  c0,1.104,0.896,2,2,2h38c1.104,0,2-0.896,2-2V23z M26,29h-4c-0.553,0-1-0.447-1-1c0-0.552,0.447-1,1-1h4c0.553,0,1,0.448,1,1  C27,28.553,26.553,29,26,29z M17,29H8c-0.553,0-1-0.447-1-1c0-0.552,0.447-1,1-1h9c0.553,0,1,0.448,1,1C18,28.553,17.553,29,17,29z   M8,32h6c0.553,0,1,0.448,1,1c0,0.553-0.447,1-1,1H8c-0.553,0-1-0.447-1-1C7,32.448,7.447,32,8,32z" fill-rule="evenodd"/></svg>
                                <h3 class="text-light py-1 px-1">PAYMENT</h3>
                            </div>
                            <ul class="nav flex-column py-4">
                                <li class="nav-item">
                                    <a href="{{ route('penggajian.home.form-index') }}" class="nav-link text-light">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('data.employees.index') }}" class="nav-link text-light">Employees</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('data.type.index') }}" class="nav-link text-light">Type</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('data.price.index') }}" class="nav-link text-light">Price</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('data.payment.index') }}" class="nav-link text-light">Payment</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('create.sms') }}" class="nav-link text-light">{{ __('SMS' )}}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('create.email') }}" class="nav-link text-light">{{ __('EMAIL' )}}</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <div class="col-md-10 px-1">
                        <div aria-label="breadcrumb">
                            <ul class="breadcrumb bg-white">
                                <li class="breadcrumb-item">
                                    <h5 class="text-dark pt-2">
                                        Aplikasi Penggajian Karyawan
                                    </h5>
                                </li>
                                <li class="ml-auto">
                                    @auth()
                                        @can('view_users')
                                            <li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
                                                <a class="nav-link text-dark" href="{{ route('users.index') }}">
                                                    Users
                                                </a>
                                            </li>
                                        @endcan

                                        @can('view_posts')
                                            <li class="nav-item {{ Request::is('posts*') ? 'active' : '' }}">
                                                <a class="nav-link text-dark" href="{{ route('posts.index') }}">
                                                    Posts
                                                </a>
                                            </li>
                                        @endcan
                                    @endauth
                                    @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    @can('view_roles')
                                        <li class="nav-item {{ Request::is('roles*') ? 'active' : '' }}">
                                            <a class="nav-link text-dark" href="{{ route('roles.index') }}">
                                                Roles
                                            </a>
                                        </li>
                                    @endcan
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ auth()->user()->name }}
                                            <span class="badge badge-warning ">{{ auth()->user()->roles->first()->name }}</span>
                                            <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                                </li>
                            </ul>
                        </div>
                        <main class="py-4">
                            <div class="container">
                                <div id="flash-msg">
                                    @include('flash::message')
                                </div>
                            @yield('content')
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
