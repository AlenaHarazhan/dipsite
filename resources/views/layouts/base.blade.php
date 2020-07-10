<!DOCTYPE HTML>
<html>
    <head>
        <title>My site</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="styles/reset.css" type="text/css" media="all" />
        <link rel="stylesheet" href="styles/vertical-rhythm.css" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('styles/main.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('styles/pages/index.css')}}" type="text/css" media="all" />
        @stack('styles')
        <link
            href="https://fonts.googleapis.com/css2?family=Lexend+Tera&family=Paytone+One&family=Piedra&family=Sigmar+One&display=swap"
            rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
            <!--[if lt IE 9]-->
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <!--[endif]-->
            <script src="script/lib/gsap.js"></script>
            <script src="script/lib/jq.js"></script>
            <script src="script/index.js"></script>
        </head>
        <body>
            <div id="wrap">
                <header>
                    <div class="top">
                        <div class="logo">
                            <h2>Alena Harazhan, Illustrator</h2>
                        </div>
                        <ul>
                                <li><a href="{{asset('/')}}" class="class-for-22px">Main</a></li>
                                @foreach($v_pages as $one)
                                @if($one->url==$v_page)
                                <li>{{$one->name}}</li>
                                @else
                                <li><a href="{{asset($one->url)}}" class="class-for-22px">{{$one->name}}</a></li>
                                @endif
                                @endforeach
                            </ul>

                    </div>

                </header>
                <hr class="hr-shelf">
                @yield('content')
                <footer>
                    <hr class="hr-shelf">
                    <div id="cr">
                        <p>All rights reserved
                            <a href="about.html">Alena Harazhan</a>
                        &copy; 2020 </p>
                    </div>
                </footer>
            </div>
            <!-- footer content -->
        </body>
