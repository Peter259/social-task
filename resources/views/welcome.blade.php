<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Social Task</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="shortcut icon" href="{{ url('img/favicon.ico') }}" />
        <link rel="bookmark icon" href="{{ url('img/favicon.ico') }}" />

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            body {
                background-image: url('img/users-icon.png');
                background-repeat: no-repeat;
                background-position: center 70px;
                background-size: 300px 300px;
            }

            div.title.m-b-md {
                color: #1E90FF;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
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
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 5px 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .welcome .links a:hover {
                color: #11508d;
                background-color: #e8f0ff;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height welcome">
{{--
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
--}}
            <div class="content">
                <div class="title m-b-md">
                    Social Task
                </div>

                <div class="links">
                    <a href="{{ url('/home') }}">Home</a>
                    @if (isLoggedIn())
                        <a href="{{ url('/logout') }}">Logout</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                    <a href="https://github.com/Peter259/social-task">Source</a>
                </div>
            </div>
        </div>
    </body>
</html>
