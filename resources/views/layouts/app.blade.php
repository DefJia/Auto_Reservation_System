<?php
    $name = Auth::user()->name;
    $is_vip = DB::table('users')->where('name', $name)->value('is_vip');
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="resources/jquery.min.js"></script>
    <script src="resources/popper.min.js"></script>
    <script src="resources/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="resources/font.family.css" rel="stylesheet" type="text/css">
    <link href="css/new.css" rel="stylesheet" type="text/css">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
@else
    <li class="nav-item">
        <a id="test" class="nav-link " role="button" href="{{route('home')}}">
            {{__('提交申请')}}
        </a>
    </li>
    <li class="nav-item">
        <a id="test" class="nav-link " role="button" href="{{route('log')}}">
            {{__('抢票记录')}}
        </a>
    </li>

@if($is_vip)
        <li class="nav-item">
            <a id="test" class="nav-link " role="button" href="{{route('privilege')}}">
                {{__('会员特权')}}
            </a>
        </li>
@endif

    <li class="nav-item">
        <a id="test" class="nav-link " role="button" href="{{route('setting')}}">
            {{__('个人设置')}}
        </a>
    </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
                    </ul>
                </div>
            </div>
        </nav>
<!--
    公告
-->
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
