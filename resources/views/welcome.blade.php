<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo', 'Pagina Oficial') | Intratechnology</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assetts/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assetts/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assetts/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assetts/images/favicons/site.webmanifest">

    <!-- plugin scripts -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assetts/css/gilroy-extrabold.css">
    <link rel="stylesheet" href="assetts/css/gilroy-light.css">
    <link rel="stylesheet" href="assetts/css/gilroy-semibold.css">
    <link rel="stylesheet" href="assetts/css/gilroy-bold.css">

    <link rel="stylesheet" href="assetts/css/animate.min.css">
    <link rel="stylesheet" href="assetts/css/bootstrap.min.css">
    <link rel="stylesheet" href="assetts/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assetts/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assetts/css/magnific-popup.css">
    <link rel="stylesheet" href="assetts/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assetts/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assetts/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assetts/css/bootstrap-datepicker.min.css">



    <!-- template styles -->
    <link rel="stylesheet" href="assetts/css/style.css">
    <link rel="stylesheet" href="assetts/css/responsive.css">




    <link rel="stylesheet" href="assetts/assettscss/color-2.css">



</head>

<body>
    <div class="preloader">
        <img src="assetts/images/loader-2.png" class="preloader__image" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">
        <div class="service-two" style="background-image: url(assetts/images/shapes/dotted-patter-1.png); padding-top:50px; background-color:gray; ">
            @include('includes.nav')
        </div>

        @include('includes.header')


        @include('includes.footer')
    </div><!-- /.page-wrapper -->


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <div class="side-menu__block">


        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">
            <div class="side-menu__top justify-content-end">

                <a href="#" class="side-menu__toggler side-menu__close-btn"><img
                        src="assetts/images/shapes/close-1-1.png" alt=""></a>
            </div><!-- /.side-menu__top -->


            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>
            <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
            <div class="side-menu__content">
                <p>Lorem Ipsum is simply dummy text the printing and setting industry. Lorm Ipsum has been the
                    industry's stanard dummy text ever. </p>
                <p><a href="mailto:needhelp@bizkar.com">needhelp@bizkar.com</a> <br> <a href="tel:888-999-0000">888 999
                        0000</a></p>
                <div class="side-menu__social">
                    <a class="fab fa-facebook-f" href="#"></a>
                    <a class="fab fa-twitter" href="#"></a>
                    <a class="fab fa-instagram" href="#"></a>
                    <a class="fab fa-pinterest-p" href="#"></a>
                </div>
            </div><!-- /.side-menu__content -->
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->



    <div class="search-popup" style="display: none;">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- /.search-popup__inner -->
    </div><!-- /.search-popup -->


    <script src="assetts/js/jquery.min.js"></script>
    <script src="assetts/js/bootstrap.bundle.min.js"></script>
    <script src="assetts/js/owl.carousel.min.js"></script>
    <script src="assetts/js/waypoints.min.js"></script>
    <script src="assetts/js/jquery.counterup.min.js"></script>
    <script src="assetts/js/TweenMax.min.js"></script>
    <script src="assetts/js/wow.js"></script>
    <script src="assetts/js/jquery.magnific-popup.min.js"></script>
    <script src="assetts/js/jquery.ajaxchimp.min.js"></script>
    <script src="assetts/js/jquery.validate.min.js"></script>
    <script src="assetts/js/bootstrap-select.min.js"></script>
    <script src="assetts/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assetts/js/bootstrap-datepicker.min.js"></script>
    <script src="assetts/js/isotope.js"></script>
    <script src="assetts/js/tilt.jquery.min.js"></script>

    <!-- template scripts -->
    <script src="assetts/js/theme.js"></script>
</body>

</html>
