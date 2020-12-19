<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href={{ asset('/img/ferrero.gif') }}>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>gamiFerrero</title> <!-- {{ config('app.name', 'Laravel') }} -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my.css') }}" rel="stylesheet">
    <style>
        body {
            position: relative;
        }

        /* scrollSpy sections */
        div.col-sm-7 div.section {
            height: auto;
            font-size: 15px;
            margin-bottom: 150px;
            border: 2px solid black;
            /*border-radius: 5px;*/
        }

        /* scrollSpy navbar left fixed */
        ul.nav-pills {
            top: 70px;
            position: fixed;
            border: 2px solid rgb(100, 100, 100);
            border-radius: 5px;
        }

        ul.nav-pills > li > a{
            font-size: 18px;
            color: #fff;
        }

        .nav-pills > li.active > a{
            background: rgb(178, 144, 54);
        }

        .nav-pills > li.active > a:hover{
            background: rgb(178, 144, 54);
        }

        .nav-pills > li > a:hover{
            background: rgb(219, 183, 121);
        }
        
        /* scrollSpy section text */
        #section1, #section2, #section3, #section4, #section5, #section6, #section7, #section8, #section9, #section10 {
            color: #fff;
            background: linear-gradient(to left, rgb(255, 213, 88), #f8b500);
            border-radius: 5px;
            padding-left: 6px;
            padding-right: 6px;
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 500;
            src: local('Raleway SemiBold'), local('Raleway-SemiBold'), url(https://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwPIsWqhPAMif.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* Border for drop picture */
        #div1 {
            width: 150px;
            height: 150px;
            padding: 10px;
            border: 1px solid #aaaaaa;
        }

        /*
        #section2 {color: #fff; background-color: rgb(178, 144, 54); border-radius: 10px;}
        #section3 {color: #fff; background-color: rgb(178, 144, 54); border-radius: 10px;}
        */
        
        @media screen and (max-width: 810px) {
            #section1, #section2, #section3, #section41, #section42  {
                margin-left: 150px;
            }
        }
    </style>

    <!-- Drag and drop script -->
    <script>
        //ev.setAttribute("draggable", "false");
        
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
            ev.target.firstChild.setAttribute("draggable", "false");
            
            if(ev.target.className == data){
                ev.target.style.border = "thick solid #0000FF";
                document.getElementById("imgPoints").value++;
            }
        }
    </script>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
    <div id="app">
        <nav class="navbar navbar-inverse"> <!-- class="navbar navbar-default navbar-static-top" -->
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image {{ config('app.name', 'Laravel') }} -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <div class="container-fluid">
                            gamiFerrero <img src="/img/ferrero.gif" alt="Ferrero icon" width="25"></img>
                        </div>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                        @guest
                        @else
                        <li><a class="nav-button" href="/home">Home</a></li>
                        <li><a class="nav-button" href="/profile">Profile</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                Leaderboards <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/leaderboards/individual">
                                        Individual
                                    </a>
                                </li>

                                <li>
                                    <a href="/leaderboards/department">
                                        Department
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-button" href="{{ route('login') }}">Login</a></li>
                            <li><a class="nav-button" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/home">
                                            Home
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/profile">
                                            Profile
                                        </a>
                                    </li>

                                    <li class="divider"></li>

                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
