<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>stimpack-world-cup</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                background-image: url("https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=74be18f074e19e06a51221f0f09969df&auto=format&fit=crop&w=1352&q=80");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;                
                color: #98A148;
                font-family: 'Raleway', sans-serif;
                font-weight: 900;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {                
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                padding: 20px 20px 20px 20px;
                text-align: center;
                margin-top: 100px;
                background: rgba(0,0,0,0.5);
                width: 50%;
                height: auto;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 5px;
            }

            h2 {
                margin-top: 5px;
                margin-bottom: 5px;
            }

            button {
                border-radius: 5px;
            }

            hr {
                color: rgba(0,0,0,0.5);
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                        WDWC '18
                </div>
                <h2>Web Dev World Cup 2018 - sponsored by stimpack.io</h2>
                <p>Gloryious titles - cash prizes - certificates - live stream - multiple categories</p>
                <hr noshade>
                <h2>Speed Coding</h2>
                <p>A spec for a simple web app will be released at 12:00 CET 1/10/2018</p>
                <p>Your mission is to implement the app and supply a fixed url for the WDWC judge bot to test</p>
                
                <h2>Creative mashup</h2>
                <p>Given a theme you will provide a beutiful app</p>
                <p>Your mission is to implement the app and supply a fixed url for the WDWC judge bot to harvest</p>

                <h2>Most funny, useless or interesting app</h2>
                <p>Submit anything you deem funny</p>
                <p>bla bla bla</p>                

                <button> Im in </button> <button> No. </button>

                
            </div>
        </div>
    </body>
</html>
