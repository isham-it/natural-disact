<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../../fonts/icomoon/style.css">

    <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>DIS'ACT</title>
</head>

<body>


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap">
        <div class="site-navbar-top">
            <div class="container py-3">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="d-flex mr-auto">
                            <a href="https://www.google.com/intl/fr/gmail/about/" class="d-flex align-items-center mr-4">
                                <span class="icon-envelope mr-2"></span>
                                <span class="d-none d-md-inline-block">disact.project@gmail.com</span>
                            </a>
                            <a href="#" class="d-flex align-items-center mr-auto">
                                <span class="icon-phone mr-2"></span>
                                <span class="d-none d-md-inline-block">+352 234 456 891</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="mr-auto">
                            <a href="https://twitter.com/?lang=fr" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                            <a href="https://fr-fr.facebook.com/" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                            <a href="https://www.linkedin.com/home/?originalSubdomain=lu" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                            <a href="https://www.instagram.com/" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-navbar site-navbar-target js-sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-2">

                        <div id="logo_div">
                            <img id="logo" src="img/logo.png" alt="logo">
                            <h1 class="my-0 site-logo"><a href="{{ url('home') }}"> <span
                                        id="logo_span">DIS'ACT</span> </a></h1>
                        </div>

                    </div>
                    <div class="col-10">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                        class="site-menu-toggle js-menu-toggle text-white"><span
                                            class="icon-menu h3"></span></a></div>

                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                    <li class="active"><a href="{{ url('home') }}"
                                            class="nav-link">Home</a></li>

                                    <li class="has-children">
                                        <a href="#" class="nav-link">Services</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="{{ url('offers') }}" class="nav-link">Help offers</a>
                                            </li>
                                            <li><a href="{{ url('asks') }}" class="nav-link">Help requests</a>
                                            </li>
                                            <li><a href="{{ url('accords') }}" class="nav-link">Successes</a>
                                            </li>
                                            <!-- <li class="has-children">
                          <a href="#">More Links</a>
                          <ul class="dropdown">
                            <li><a href="#">Menu One</a></li>
                            <li><a href="#">Menu Two</a></li>
                            <li><a href="#">Menu Three</a></li>
                          </ul>
                        </li> -->
                                        </ul>
                                    </li>


                                    <li class="has-children">
                                        <a href="#" class="nav-link">User</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="{{ url('login') }}" class="nav-link">Log In</a></li>
                                            <li><a href="{{ url('logout') }}" class="nav-link">Log Out</a></li>
                                            <li><a href="{{ url('register') }}" class="nav-link">Register</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li><a href="{{ url('events') }}" class="nav-link">Events</a></li>
                                    <li><a href="{{ url('weather') }}" class="nav-link">Weather</a></li>
                                    <li><a href="{{ url('about') }}" class="nav-link">About</a></li>
                                    <li><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--style="background-image: url('img/hero_3.jpg');"-->
    <div class="hero"></div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../../js/jquery-3.3.1.min.js"></script> -->

    <script src="../js/popper.min.js"></script>
    <!-- <script src="js/popper.min.js"></script>
    <script src="../../js/popper.min.js"></script> -->

    <script src="../js/bootstrap.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script> -->

    <script src="js/jquery.sticky.js"></script>
    <!-- <script src="../js/jquery.sticky.js"></script>
    <script src="../../js/jquery.sticky.js"></script> -->

    <!-- DON'T DECLARE REPEATEDLY!!!! -->
    <script src="js/main.js"></script>
    <!-- <script src="../js/main.js"></script>
    <script src="../../js/main.js"></script> -->
</body>

</html>
