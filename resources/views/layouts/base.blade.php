<!DOCTYPE HTML>
<html>
    <head>
        <title>My site</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="{{asset('styles/reset.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('styles/vertical-rhythm.css')}}" type="text/css" media="all" />
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
            <script src="{{asset('script/lib/gsap.js')}}"></script>
            <script src="{{asset('script/lib/jq.js')}}"></script>
            <script src="{{asset('script/index.js')}}"></script>
            <script src="{{asset('https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js')}}"></script>
            <script src="{{asset('https://yastatic.net/share2/share.js')}}"></script>
        @stack('scripts')
        </head>
        <body>
            <div id="wrap">
                <header>
                    <div class="top">
                        <div class="logo">
                            <a href="{{asset('/')}}" class="class-for-22px">Alena Harazhan, Illustrator</a>
                        </div>
                        <nav>
                         <ul class="menu-main">
                                <!-- <li><a href="{{asset('/')}}" class="class-for-22px">Main</a></li> -->
                                @foreach($v_pages as $one)
                                @if($one->url==$v_page)
                                <li>{{$one->name}}</li>
                                @else
                                <li><a href="{{asset($one->url)}}" class="class-for-22px">{{$one->name}}</a></li>
                                @endif
                                @endforeach
                            </ul>
                        </nav>
                    </div>

                </header>
                <hr class="hr-shelf">


                @yield('content')
                <footer>
                    <div id="share">
                        <div class="ya-share2"
                            data-services="vkontakte,facebook,odnoklassniki,twitter,linkedin,lj,viber,whatsapp,skype,telegram"data-size="s">
                        </div>
                    </div>
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
