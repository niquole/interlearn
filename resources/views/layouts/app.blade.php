<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>InterLearn</title>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- import CSS -->
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <!-- import JavaScript -->
    <script src="https://unpkg.com/element-ui/lib/index.js"></script>
    
    <!-- favicon -->
    
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon//apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon//apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon//apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon//apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon//apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon//apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon//apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon//apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon//apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <!-- end of favicon -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md  shadow-sm">
            <div class="container">
                <a class="navbar-brand " href="{{ url('/lessons') }}">
                    <!-- {{ config('app.name', 'InterLearn') }} -->
                    <img src="https://i.ibb.co/zXTvSQw/logo.png" alt="" id="logo" class="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a  class="nav-link" href="{{ route('login') }}">                                    
                                <button class="create" >{{ __('Create') }}!</button></a>
                            </li>
                            @endif
                            
                            @if (Route::has('login'))
                            
                            <li class="nav-item" >
                                <a  class="nav-link"  href="{{ route('login') }}">
                                    <button class="login-link">{{ __('Login') }}</button></a>
                                </li>
                                @endif
                                @else
                                <span class="createspan">Create:</span>
                                <li class="nav-item">
                                    <a  class="nav-link" href="/create-lesson">           
                                        <button class="create_lesson" >{{ __('Lesson') }}!</button></a>
                                        
                                    </li>
                                    <a  class="" href="/create-quiz">  
                                        
                                        <button class="create_quiz" >{{ __('Quiz') }}!</button></a>
                                        
                                    </li>
                                    <li class="nav-item dropdown" id="dropdown-arrow">
                                        <a id="navbarDropdown"  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <span id="current-user">
                                                {{ Auth::user()->name }}
                                            </span>
                                        </a>
                                        
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" >
                                            <a class="dropdown-item"  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <span id="logout">
                                                {{ __('Logout') }}
                                                
                                            </span>
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
            </div>
        </body>
        </html>
        