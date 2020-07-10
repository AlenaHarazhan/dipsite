<!DOCTYPE HTML>
<html>
    <head>
        <title>My site</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/vertical_rhythm.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/main2.css" type="text/css" media="all" />
        @stack('styles')


        <![if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link href="https://fonts.googleapis.com/css2?family=Lexend+Tera&family=Paytone+One&family=Piedra&family=Sigmar+One&display=swap" rel="stylesheet">
        <script src="js/index.js"></script>
        <script src="js/jq.js"></script>
        <script src="js/gsap.js"></script>


    </head>

    <body>
        <div id = "wrap">
            <header>
                <div class="top">
                    <div class="logo"><h2>Alena Harazhan, Illustrator</h2></div>
                    <nav>
                        <ul>
                            <li class="list"><a href="html/about2.html" class="class-for-22px">About</a></li>
                            <li class="list"><a href="html/contacts2.html" class="class-for-22px">Contacts</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- nav content -->

                <div id ="slideshow">

                </div>
                <!-- slide-show -->

            </header>
            <div id = "namegallery">Gallery</div>

            <hr class="hr-shelf">

            <section class="main">
                <ul class="ch1-grid">
                    <li>
                        <div class="ch1-item ch1-img-1">
                            <div class="ch1-info">
                                <h3>Characters</h3>
                                <p>
                                    <a href="html/characters.html">Look at</a></p>
                                </div>
                            </div>
                        </li>
                        <!-- characters content -->
                        <li>
                            <div class="ch1-item ch1-img-2">
                                <div class="ch1-info">
                                    <h3>Illustrations</h3>
                                    <p>
                                        <a href="html/illustrations.html">Look at</a></p>
                                    </div>
                                </div>
                            </li>
                            <!-- Illustrations content -->
                            <li>
                                <div class="ch1-item ch1-img-3">
                                    <div class="ch1-info">
                                        <h3>Logos</h3>
                                        <p>
                                            <a href="html/logos.html">Look at</a></p>
                                        </div>
                                    </div>
                                </li>
                                <!-- logos content -->
                                <li>
                                    <div class="ch2-item ch2-img-1">
                                        <div class="ch2-info">
                                            <h3>Icons</h3>
                                            <p>
                                                <a href="html/logos.html">Look at</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Icons content -->
                                    <li>
                                        <div class="ch2-item ch2-img-2">
                                            <div class="ch2-info">
                                                <h3>Colorings</h3>
                                                <p>
                                                    <a href="html/colorings.html">Look at</a></p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- colorings content -->
                                    <li>
                                        <div class="ch2-item ch2-img-3">
                                            <div class="ch2-info">
                                                <h3>Sets</h3>
                                                <p>
                                                    <a href="html/sets.html">Look at</a></p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- sets content -->
                                    <li>
                                        <div class="ch3-item ch3-img-1">
                                            <div class="ch3-info">
                                                <h3>Animation</h3>
                                                <p>
                                                    <a href="html/animation.html">Look at</a></p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- animation content -->
                                    <li>
                                        <div class="ch3-item ch3-img-2">
                                            <div class="ch3-info">
                                                <h3>Patterns</h3>
                                                <p>
                                                    <a href="html/patterns.html">Look at</a></p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- patterns content -->
                                    <li>
                                        <div class="ch3-item ch3-img-3">
                                            <div class="ch3-info">
                                                <h3>Gamedev</h3>
                                                <p>
                                                    <a href="html/gamedev.html">Look at</a></p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- gamedev content -->
                                </ul>
                            </section>

    <div id = "up"><a href="#" onclick="return up()"><img src="images/up.png"></a></div>



        <footer>

            <div id = "phone" class="class-for-14px"><p>+375(29)5591800</p></div>
            <div id = "mail" class="class-for-14px"><p>habasy@gmail.com</p></div>
            <div id = "telega" class="class-for-14px"><p>Alena Harazhan</p></div>
            <div id = "skype" class="class-for-14px"><p>kotolol</p></div>
            <div class="footer"> <div class="container">
                <p>All rights reserved
                <a href="html/about2.html">Alena Harazhan</a>
                &copy; 2020 </p>
            </div>
        </footer>
    </div>
<!-- footer content -->
@stack('scripts')
</body>
