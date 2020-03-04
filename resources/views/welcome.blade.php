<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link type="text/css" href="css/app.css" rel="stylesheet">
        <meta name="csrf_token" content="{{csrf_token()}}">
        <!-- Styles -->
        <style>
            html, body {
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <div id="app"> 
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

                <div class="content">
                    <div class="title m-b-md">                    
                        <ul>
                            <li><router-link to="/">Home</router-link></li>
                            <li><router-link to="/signup">Register</router-link></li>                    
                            <li><router-link to="/login">Login</router-link></li>
                        </ul>
                        <!-- <example-component></example-component> -->
                    </div>
                    
                </div>
            </div>
            <router-view></router-view>            
        </div>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
  
</html>
