<style>
    @keyframes slidein {
        100% {
            top: 1000px;
            opacity: 10px;
        }

        100% {
            opacity: 1;
            top: 0px;
        }
    }

    @keyframes slideout {
        0% {
            top: 0;
            opacity: 0;
        }

        100% {
            top: -400px;
            opacity: 0;
        }
    }

    body {
        background: #eee;
        font-family: "Tahoma";
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    body #scene {
        display: flex;
        align-items: center;
        justify-content: left;
        width: 120vh;
        height: 50vh;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        overflow: hidden;
    }

    body #scene #left-zone {
        background: #fff;
        height: 75%;
        flex-grow: 0;
        display: flex;
        width: 350px;
        align-items: center;
        justify-content: left;
    }

    body #scene #left-zone .list {
        display: flex;
        list-style: none;
        align-content: stretch;
        flex-direction: column;
        flex-grow: 1;
        margin: 0;
        padding: 0;
    }

    body #scene #left-zone .list li.item input[type="radio"] {
        display: none;
    }

    body #scene #left-zone .list li.item input[type="radio"]~label {
        display: block;
        opacity: 0.5;
        height: 50px;
        text-align: center;
        line-height: 50px;
    }

    body #scene #left-zone .list li.item input[type="radio"]~label:first-letter {
        text-transform: uppercase;
    }

    body #scene #left-zone .list li.item input[type="radio"]~label:hover {
        opacity: 0.75;
        cursor: pointer;
    }

    body #scene #left-zone .list li.item input[type="radio"]~label.label_strawberry:before {
        content: " ";
        display: block;
        position: absolute;
        width: 50px;
        height: 50px;
        margin-left: 15px;
        background-image: url('https://d30y9cdsu7xlg0.cloudfront.net/png/83067-200.png');
        background-position: center;
        background-size: 75% 75%;
        background-repeat: no-repeat;
    }

    body #scene #left-zone .list li.item input[type="radio"]~label.label_banana:before {
        content: " ";
        display: block;
        position: absolute;
        width: 50px;
        height: 50px;
        margin-left: 15px;
        background-image: url('https://d30y9cdsu7xlg0.cloudfront.net/png/53209-200.png');
        background-position: center;
        background-size: 75% 75%;
        background-repeat: no-repeat;
    }

    body #scene #left-zone .list li.item input[type="radio"]~label.label_apple:before {
        content: " ";
        display: block;
        position: absolute;
        width: 50px;
        height: 50px;
        margin-left: 15px;
        background-image: url('https://d30y9cdsu7xlg0.cloudfront.net/png/14333-200.png');
        background-position: center;
        background-size: 75% 75%;
        background-repeat: no-repeat;
    }

    body #scene #left-zone .list li.item input[type="radio"]~label.label_orange:before {
        content: " ";
        display: block;
        position: absolute;
        width: 50px;
        height: 50px;
        margin-left: 15px;
        background-image: url('https://d30y9cdsu7xlg0.cloudfront.net/png/9636-200.png');
        background-position: center;
        background-size: 75% 75%;
        background-repeat: no-repeat;
    }

    body #scene #left-zone .list li.item input[type="radio"]~.content {
        position: absolute;
        left: 350px;
        top: -400px;
        width: 650px;
        height: 400px;
        animation-duration: 0.75s;
        animation-name: slideout;
        animation-timing-function: ease-out;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    body #scene #left-zone .list li.item input[type="radio"]~.content.content_strawberry .picto {
        height: 100px;
        width: 100px;
        background-image: url('https://d30y9cdsu7xlg0.cloudfront.net/png/83067-200.png');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    body #scene #left-zone .list li.item input[type="radio"]~.content.content_strawberry h1 {
        color: #d64541;
    }

    body #scene #left-zone .list li.item input[type="radio"]~.content.content_banana .picto {
        height: 100px;
        width: 100px;
        background-image: url('https://d30y9cdsu7xlg0.cloudfront.net/png/53209-200.png');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    body #scene #left-zone .list li.item input[type="radio"]~.content.content_banana h1 {
        color: #f5d76e;
    }

    body #scene #left-zone .list li.item input[type="radio"]~.content.content_apple .picto {
        height: 100px;
        width: 100px;
        background-image: url('https://d30y9cdsu7xlg0.cloudfront.net/png/14333-200.png');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    body #scene #left-zone .list li.item input[type="radio"]~.content.content_apple h1 {
        color: #00b16a;
    }

    body #scene #left-zone .list li.item input[type="radio"]~.content.content_orange .picto {
        height: 100px;
        width: 100px;
        background-image: url('https://d30y9cdsu7xlg0.cloudfront.net/png/9636-200.png');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    body #scene #left-zone .list li.item input[type="radio"]~.content.content_orange h1 {
        color: #f27935;
    }

    body #scene #left-zone .list li.item input[type="radio"]~.content h1:first-letter {
        text-transform: uppercase;
    }

    body #scene #left-zone .list li.item input[type="radio"]~.content p {
        max-width: 50%;
        text-align: center;
    }

    body #scene #left-zone .list li.item input[type="radio"]:checked~label {
        opacity: 1;
        animation: all 1s cubic-bezier(0.455, 0.03, 0.515, 0.955);
    }

    body #scene #left-zone .list li.item input[type="radio"]:checked~label.label_strawberry {
        color: #d64541;
        border-right: solid 4px #d64541;
    }

    body #scene #left-zone .list li.item input[type="radio"]:checked~label.label_banana {
        color: #f5d76e;
        border-right: solid 4px #f5d76e;
    }

    body #scene #left-zone .list li.item input[type="radio"]:checked~label.label_apple {
        color: #00b16a;
        border-right: solid 4px #00b16a;
    }

    body #scene #left-zone .list li.item input[type="radio"]:checked~label.label_orange {
        color: #f27935;
        border-right: solid 4px #f27935;
    }

    body #scene #left-zone .list li.item input[type="radio"]:checked~.content {
        animation-duration: 0.75s;
        animation-name: slidein;
        animation-fill-mode: forwards;
        animation-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955);
    }

    body #scene #middle-border {
        background-color: #eee;
        height: 75%;
        flex-grow: 1;
        max-width: 2px;
        z-index: 0;
    }

    body #scene #right-zone {
        background: #fff;
        height: 100%;
        flex-grow: 3;
    }
</style>
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

        <header class="site-header-two site-header-two__">
            <nav class="main-nav__two stricky">
                <div class="container">
                    <div class="main-nav__logo-box">
                        <a href="index.html">
                            <img src="assetts/images/logo-2-1.png" alt="">
                        </a>
                    </div><!-- /.main-nav__logo-box -->
                    <div class="main-nav__main-navigation">
                        <ul class=" main-nav__navigation-box">
                            <li>
                                <a href="index.html">Home</a>

                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                            <li class="dropdown">
                                <a href="services-1.html">Services</a>
                            </li>
                            <li class="dropdown">
                                <a href="portfolio-standard.html">Work</a>
                            </li>
                            <li class="dropdown">
                                <a href="#">Pages</a>
                            </li>


                            <li class="dropdown">
                                <a href="blog-standard.html">News</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div><!-- /.main-nav__main-navigation -->
                    <div class="main-nav__right">
                        <a href="#" class="side-menu__toggler"><span></span></a>
                    </div><!-- /.main-nav__right -->
                </div><!-- /.container -->
            </nav><!-- /.main-nav__one -->

        </header><!-- /.site-header-two -->

        <section class="banner-two">
            <br>
            <div class="container">
                <div class="row">
                    <div class="banner-two__content">
                        <div id="scene">
                            <div id="left-zone">
                                <ul class="list">
                                    <li class="item"><input type="radio"
                                            id="radio_The garden strawberry (or simply strawberry /ˈstrɔːbᵊri/; Fragaria × ananassa) is a widely grown hybrid species of the genus Fragaria (collectively known as the strawberries)"
                                            name="basic_carousel"
                                            value="The garden strawberry (or simply strawberry /ˈstrɔːbᵊri/; Fragaria × ananassa) is a widely grown hybrid species of the genus Fragaria (collectively known as the strawberries)"
                                            checked="checked" /><label class="label_strawberry"
                                            for="radio_The garden strawberry (or simply strawberry /ˈstrɔːbᵊri/; Fragaria × ananassa) is a widely grown hybrid species of the genus Fragaria (collectively known as the strawberries)">DOING
                                            MORE</label>
                                        <div class="content content_strawberry">
                                            <h1>DOING MORE</h1>
                                            <p>We’re a full-cycle web and mobile application development company
                                                creating solutions for mobiles, desktops, wearables, and TVs.</p>
                                        </div>
                                    </li>
                                    <li class="item"><input type="radio"
                                            id="radio_A banana is an edible fruit, botanically a berry, produced by several kinds of large herbaceous flowering plants in the genus Musa."
                                            name="basic_carousel"
                                            value="A banana is an edible fruit, botanically a berry, produced by several kinds of large herbaceous flowering plants in the genus Musa." /><label
                                            class="label_banana"
                                            for="radio_A banana is an edible fruit, botanically a berry, produced by several kinds of large herbaceous flowering plants in the genus Musa.">GET
                                            A BEAUTIFUL</label>
                                        <div class="content content_banana">
                                            <h1>GET A BEAUTIFUL</h1>
                                            <p>We craft fresh and intuitive interfaces meeting user preferences and
                                                modern guidelines. Wireframes and clickable prototypes get to test the
                                                design before moving further.</p>
                                        </div>
                                    </li>
                                    <li class="item"><input type="radio"
                                            id="radio_The apple tree (Malus domestica) is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus."
                                            name="basic_carousel"
                                            value="The apple tree (Malus domestica) is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus." /><label
                                            class="label_apple"
                                            for="radio_The apple tree (Malus domestica) is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus.">apple</label>
                                        <div class="content content_apple">
                                            <h1>SCALE YOUR</h1>
                                            <p>Want to accelerate the hiring process? 100+ qualified specialists are ready to join you at any moment and thousands more to fill a position in no time. No need for administrative and training expenses.</p>
                                        </div>
                                    </li>
                                    <li class="item"><input type="radio"
                                            id="radio_The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae."
                                            name="basic_carousel"
                                            value="The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae." /><label
                                            class="label_orange"
                                            for="radio_The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae.">orange</label>
                                        <div class="content content_orange">
                                            <h1>TAKE WEB</h1>
                                            <p>Our full-stack developers build accessible, performant, and secure solutions. We only use time-tested engineering patterns to reduce dev time and save your costs.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="middle-border"></div>
                            <div id="right-zone"></div>
                        </div>
                    </div><!-- /.banner-two__content -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.banner-two -->

        <section class="brand-one brand-one__home-two">
            <div class="container">
                <div class="block-title-two text-center">
                    <p>our clients</p>
                    <h3>We Have Many Others Partners <br> Our Global Clients Here</h3>
                </div><!-- /.block-title-two -->
                <div class="brand-one__carousel owl-carousel owl-theme thm__owl-carousel"
                    data-options='{"loop": true, "autoplay": true, "autoplayTimeout": 5000, "items": 6, "margin": 150, "smartSpeed": 700, "nav": false, "dots": false, "responsive": { "0": { "items": 2, "margin": 15 },"575": { "items": 3, "margin": 30 },"767": { "items": 3, "margin": 30 }, "991": { "items": 4, "margin": 30 }, "1199": { "items": 4, "margin": 75 }, "1200": { "items": 6 } }}'>
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-2.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-3.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-4.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-5.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-6.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-2.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-3.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-4.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-5.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-6.png" alt="">
                    </div><!-- /.item -->
                </div><!-- /.brand-one__carousel owl-carousel owl-theme thm__owl-carousel -->
            </div><!-- /.container -->
        </section><!-- /.brand-one -->

        <section class="cta-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 d-flex">
                        <div class="my-auto">
                            <div class="cta-three__image">
                                <img src="assetts/images/shapes/cta-3-1-shape.png" alt=""
                                    class="cta-three__image-shape">
                                <img src="assetts/images/resources/cta-3-1.jpg" alt="">
                            </div><!-- /.cta-three__image -->
                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-7 -->
                    <div class="col-lg-5">
                        <div class="cta-three__content">
                            <div class="block-title-two text-left">
                                <p>why choose us</p>
                                <h3>We Are Exclusive <br> Solution Agency</h3>
                            </div><!-- /.block-title-two -->
                            <div class="cta-three__box-wrap">
                                <div class="cta-three__box">
                                    <div class="cta-three__box-icon">
                                        <i class="far fa-tachometer"></i>
                                    </div><!-- /.cta-three__icon -->
                                    <div class="cta-three__box-content">
                                        <h3>Business Strategy</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor
                                            incididunt ut labore et </p>
                                    </div><!-- /.cta-three__box-content -->
                                </div><!-- /.cta-three__box -->
                                <div class="cta-three__box">
                                    <div class="cta-three__box-icon">
                                        <i class="far fa-star-of-david"></i>
                                    </div><!-- /.cta-three__icon -->
                                    <div class="cta-three__box-content">
                                        <h3>Improve Business Growth</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor
                                            incididunt ut labore et </p>
                                    </div><!-- /.cta-three__box-content -->
                                </div><!-- /.cta-three__box -->
                                <div class="cta-three__box">
                                    <div class="cta-three__box-icon">
                                        <i class="fa fa-desktop"></i>
                                    </div><!-- /.cta-three__icon -->
                                    <div class="cta-three__box-content">
                                        <h3>Marketing Yor Business</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor
                                            incididunt ut labore et </p>
                                    </div><!-- /.cta-three__box-content -->
                                </div><!-- /.cta-three__box -->
                            </div><!-- /.cta-three__box-wrap -->
                            <a href="#" class="thm-btn cta-three__btn">Get Started <i
                                    class="fa fa-angle-double-right"></i></a>
                            <!-- /.thm-btn cta-three__btn -->
                        </div><!-- /.cta-three__content -->
                    </div><!-- /.col-lg-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-three -->

        <section class="service-two" style="background-image: url(assetts/images/shapes/dotted-patter-1.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 d-flex">
                        <div class="my-auto">
                            <div class="service-two__block">
                                <div class="block-title-two text-left">
                                    <p>Our Services</p>
                                    <h3>We Provide Best <br>
                                        Services For Your <br>
                                        Business</h3>
                                </div><!-- /.block-title-two -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat. </p>
                                <a href="#" class="thm-btn">View All Services <i
                                        class="fa fa-angle-double-right"></i></a>
                                <!-- /.thm-btn -->
                            </div><!-- /.service-two__block -->
                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7">
                        <div class="service-two__box-wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="service-two__single js-tilt">
                                        <div class="service-two__single-image"
                                            style="background-image: url(assetts/images/backgrounds/service-bg-1-1.jpg);">
                                        </div>
                                        <!-- /.service-two__single-image -->
                                        <div class="service-two__single-inner">
                                            <i class="fal fa-hand-holding-usd"></i>
                                            <h3><a href="#">Finance & Insurance</a></h3>
                                            <p>Lorem ipsum dolor sit amet conse
                                                ctetur adipisicing elit sed do eiusmod tempor incididunt ut labore et
                                            </p>
                                            <a href="#" class="service-two__link"><i
                                                    class="fa fa-long-arrow-alt-right"></i></a>
                                            <!-- /.service-two__link -->
                                        </div><!-- /.service-two__single-inner -->
                                    </div><!-- /.service-two__single -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="service-two__single js-tilt">
                                        <div class="service-two__single-image"
                                            style="background-image: url(assetts/images/backgrounds/service-bg-1-1.jpg);">
                                        </div>
                                        <!-- /.service-two__single-image -->
                                        <div class="service-two__single-inner">
                                            <i class="fal fa-umbrella-beach"></i>
                                            <h3><a href="#">Investment Planning</a></h3>
                                            <p>Lorem ipsum dolor sit amet conse
                                                ctetur adipisicing elit sed do eiusmod tempor incididunt ut labore et
                                            </p>
                                            <a href="#" class="service-two__link"><i
                                                    class="fa fa-long-arrow-alt-right"></i></a>
                                            <!-- /.service-two__link -->
                                        </div><!-- /.service-two__single-inner -->
                                    </div><!-- /.service-two__single -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="service-two__single js-tilt">
                                        <div class="service-two__single-image"
                                            style="background-image: url(assetts/images/backgrounds/service-bg-1-1.jpg);">
                                        </div>
                                        <!-- /.service-two__single-image -->
                                        <div class="service-two__single-inner">
                                            <i class="fal fa-paper-plane"></i>
                                            <h3><a href="#">Market Positioning</a></h3>
                                            <p>Lorem ipsum dolor sit amet conse
                                                ctetur adipisicing elit sed do eiusmod tempor incididunt ut labore et
                                            </p>
                                            <a href="#" class="service-two__link"><i
                                                    class="fa fa-long-arrow-alt-right"></i></a>
                                            <!-- /.service-two__link -->
                                        </div><!-- /.service-two__single-inner -->
                                    </div><!-- /.service-two__single -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="service-two__single js-tilt">
                                        <div class="service-two__single-image"
                                            style="background-image: url(assetts/images/backgrounds/service-bg-1-1.jpg);">
                                        </div>
                                        <!-- /.service-two__single-image -->
                                        <div class="service-two__single-inner">
                                            <i class="fal fa-chart-network"></i>
                                            <h3><a href="#">Business Consulting</a></h3>
                                            <p>Lorem ipsum dolor sit amet conse
                                                ctetur adipisicing elit sed do eiusmod tempor incididunt ut labore et
                                            </p>
                                            <a href="#" class="service-two__link"><i
                                                    class="fa fa-long-arrow-alt-right"></i></a>
                                            <!-- /.service-two__link -->
                                        </div><!-- /.service-two__single-inner -->
                                    </div><!-- /.service-two__single -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.service-two__box-wrap -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-two -->

        <section class="funfact-one funfact-one__home-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="funfact-one__single">
                            <div class="funfact-one__icon">
                                <i class="far fa-user-alt"></i>
                            </div><!-- /.funfact-one__icon -->
                            <h3><span class="counter">2500</span><!-- /.counter -->+</h3>
                            <p>Project</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="funfact-one__single">
                            <div class="funfact-one__icon">
                                <i class="far fa-heart"></i>
                            </div><!-- /.funfact-one__icon -->
                            <h3><span class="counter">2960</span><!-- /.counter -->+</h3>
                            <p>Satisfied Clients</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="funfact-one__single">
                            <div class="funfact-one__icon">
                                <i class="far fa-cloud-download"></i>
                            </div><!-- /.funfact-one__icon -->
                            <h3><span class="counter">5620</span><!-- /.counter -->
                            </h3>
                            <p>Win Awards</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="funfact-one__single">
                            <div class="funfact-one__icon">
                                <i class="far fa-star"></i>
                            </div><!-- /.funfact-one__icon -->
                            <h3><span class="counter">365</span><!-- /.counter -->+</h3>
                            <p>Team Member</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.funfact-one -->

        <section class="video-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="video-one__box wow fadeInLeft" data-wow-duration="1500ms">
                            <img src="assetts/images/resources/video-1-1.jpg" alt="">
                            <a href="https://www.youtube.com/watch?v=Rw1JBhaoHBs" class="video-popup video-one__btn"><i
                                    class="fa fa-play"></i></a><!-- /.video-popup video-one__btn -->
                        </div><!-- /.video-one__box -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 d-flex">
                        <div class="my-auto">
                            <div class="video-one__content">
                                <div class="block-title-two text-left">
                                    <p>What we do</p>
                                    <h3>Investment Planning <br> Pays Best Interest.</h3>
                                </div><!-- /.block-title-two -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem
                                    por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                                <ul class="list-unstyled video-one__list">
                                    <li>
                                        <i class="far fa-check"></i>
                                        Smashing Book 6 Is Here New Frontiers In Web Design
                                    </li>
                                    <li>
                                        <i class="far fa-check"></i>
                                        Introduction To Animation And The iMessage App Store With Shruggie
                                    </li>
                                    <li>
                                        <i class="far fa-check"></i>
                                        Get Your Mobile Site Ready For The 2018 Holiday ways goods
                                    </li>
                                    <li>
                                        <i class="far fa-check"></i>
                                        Making Distributed Product Teams Work More Efficiently other
                                    </li>
                                </ul><!-- /.list-unstyled video-one__list -->
                                <a href="#" class="thm-btn">Read More <i class="fa fa-angle-double-right"></i></a>
                                <!-- /.thm-btn -->
                            </div><!-- /.video-one__content -->
                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.video-one -->

        <section class="cta-two" style="background-image: url(assetts/images/backgrounds/cta-bg-1-1.jpg);">
            <div class="container text-center">
                <h3>Our Business Advisors <br>
                    Always Help You</h3>
                <a href="#" class="thm-btn">Read More <i class="fa fa-angle-double-right"></i></a><!-- /.thm-btn -->
            </div><!-- /.container -->
        </section><!-- /.cta-two -->

        <section class="case-one">
            <div class="container">
                <div class="case-one__top">
                    <div class="block-title-two text-left">
                        <p>our project</p>
                        <h3>Recent Company <br> Case Studies</h3>
                    </div><!-- /.block-title-two -->
                    <div class="case-one__top-btn-block">
                        <a href="#" class="thm-btn">View All Cases <i class="fa fa-angle-double-right"></i></a>
                        <!-- /.thm-btn -->
                    </div><!-- /.case-one__top-btn-block -->
                </div><!-- /.case-one__top -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="case-one__single">
                            <div class="case-one__image">
                                <img src="assetts/images/case/case-1-1.jpg" alt="">
                            </div><!-- /.case-one__image -->
                            <div class="case-one__content">
                                <h3><a href="#">How To Improve <br> Business</a></h3>
                            </div><!-- /.case-one__content -->
                        </div><!-- /.case-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="case-one__single">
                            <div class="case-one__image">
                                <img src="assetts/images/case/case-1-2.jpg" alt="">
                            </div><!-- /.case-one__image -->
                            <div class="case-one__content">
                                <h3><a href="#">How To Improve <br> Business</a></h3>
                            </div><!-- /.case-one__content -->
                        </div><!-- /.case-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="case-one__single">
                            <div class="case-one__image">
                                <img src="assetts/images/case/case-1-3.jpg" alt="">
                            </div><!-- /.case-one__image -->
                            <div class="case-one__content">
                                <h3><a href="#">How To Improve <br> Business</a></h3>
                            </div><!-- /.case-one__content -->
                        </div><!-- /.case-one__single -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.case-one -->

        <section class="testimonials-two">
            <div class="container">
                <div class="block-title-two text-center">
                    <p>our testimonials</p>
                    <h3>What Our Client’s <br> Say About Us</h3>
                </div><!-- /.block-title-two -->
                <div class="testimonials-two__carousel owl-carousel thm__owl-carousel owl-theme"
                    data-options='{"loop": true, "margin": 30, "stagePadding": 0, "items": 3, "smartSpeed": 700, "autoplay": true, "autoplayTimeout": 7000, "nav": false, "dots": true, "responsive": { "0": { "items": 1, "stagePadding": 0 }, "1199": { "items": 2 }, "1200": { "items": 3 } }}'>
                    <div class="item">
                        <div class="testimonials-two__single">
                            <div class="testimonials-two__top">
                                <div class="testimonials-two__image">
                                    <img src="assetts/images/testimonials/testimonial-2-1.jpg" alt="">
                                </div><!-- /.testimonials-two__image -->
                                <div class="testimonials-two__top-content">
                                    <h3>Teresa Barber</h3>
                                    <span>CEO & Founder</span>
                                </div><!-- /.testimonials-two__top-content -->
                            </div><!-- /.testimonials-two__top -->
                            <div class="testimonials-two__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incid
                                    idunt ut labore et dolore magna aliqua. Ut enim ad minim venquis nostrud
                                    exercitation
                                    ullamco laboris nisi ut aliquip</p>
                            </div><!-- /.testimonials-two__content -->
                            <div class="testimonials-two__bottom">
                                <i class="far fa-quote-right testimonials-two__qoute-icon"></i>
                                <div class="testimonials-two__stars">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div><!-- /.testimonials-two__stars -->
                            </div><!-- /.testimonials-two__bottom -->
                        </div><!-- /.testimonials-two__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-two__single">
                            <div class="testimonials-two__top">
                                <div class="testimonials-two__image">
                                    <img src="assetts/images/testimonials/testimonial-2-2.jpg" alt="">
                                </div><!-- /.testimonials-two__image -->
                                <div class="testimonials-two__top-content">
                                    <h3>Peter Allen</h3>
                                    <span>CEO & Founder</span>
                                </div><!-- /.testimonials-two__top-content -->
                            </div><!-- /.testimonials-two__top -->
                            <div class="testimonials-two__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incid
                                    idunt ut labore et dolore magna aliqua. Ut enim ad minim venquis nostrud
                                    exercitation
                                    ullamco laboris nisi ut aliquip</p>
                            </div><!-- /.testimonials-two__content -->
                            <div class="testimonials-two__bottom">
                                <i class="far fa-quote-right testimonials-two__qoute-icon"></i>
                                <div class="testimonials-two__stars">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div><!-- /.testimonials-two__stars -->
                            </div><!-- /.testimonials-two__bottom -->
                        </div><!-- /.testimonials-two__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-two__single">
                            <div class="testimonials-two__top">
                                <div class="testimonials-two__image">
                                    <img src="assetts/images/testimonials/testimonial-2-3.jpg" alt="">
                                </div><!-- /.testimonials-two__image -->
                                <div class="testimonials-two__top-content">
                                    <h3>Rosetta Herrera</h3>
                                    <span>CEO & Founder</span>
                                </div><!-- /.testimonials-two__top-content -->
                            </div><!-- /.testimonials-two__top -->
                            <div class="testimonials-two__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incid
                                    idunt ut labore et dolore magna aliqua. Ut enim ad minim venquis nostrud
                                    exercitation
                                    ullamco laboris nisi ut aliquip</p>
                            </div><!-- /.testimonials-two__content -->
                            <div class="testimonials-two__bottom">
                                <i class="far fa-quote-right testimonials-two__qoute-icon"></i>
                                <div class="testimonials-two__stars">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div><!-- /.testimonials-two__stars -->
                            </div><!-- /.testimonials-two__bottom -->
                        </div><!-- /.testimonials-two__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-two__single">
                            <div class="testimonials-two__top">
                                <div class="testimonials-two__image">
                                    <img src="assetts/images/testimonials/testimonial-2-1.jpg" alt="">
                                </div><!-- /.testimonials-two__image -->
                                <div class="testimonials-two__top-content">
                                    <h3>Alejandro Cannon</h3>
                                    <span>CEO & Founder</span>
                                </div><!-- /.testimonials-two__top-content -->
                            </div><!-- /.testimonials-two__top -->
                            <div class="testimonials-two__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incid
                                    idunt ut labore et dolore magna aliqua. Ut enim ad minim venquis nostrud
                                    exercitation
                                    ullamco laboris nisi ut aliquip</p>
                            </div><!-- /.testimonials-two__content -->
                            <div class="testimonials-two__bottom">
                                <i class="far fa-quote-right testimonials-two__qoute-icon"></i>
                                <div class="testimonials-two__stars">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div><!-- /.testimonials-two__stars -->
                            </div><!-- /.testimonials-two__bottom -->
                        </div><!-- /.testimonials-two__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-two__single">
                            <div class="testimonials-two__top">
                                <div class="testimonials-two__image">
                                    <img src="assetts/images/testimonials/testimonial-2-2.jpg" alt="">
                                </div><!-- /.testimonials-two__image -->
                                <div class="testimonials-two__top-content">
                                    <h3>Addie Bass</h3>
                                    <span>CEO & Founder</span>
                                </div><!-- /.testimonials-two__top-content -->
                            </div><!-- /.testimonials-two__top -->
                            <div class="testimonials-two__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incid
                                    idunt ut labore et dolore magna aliqua. Ut enim ad minim venquis nostrud
                                    exercitation
                                    ullamco laboris nisi ut aliquip</p>
                            </div><!-- /.testimonials-two__content -->
                            <div class="testimonials-two__bottom">
                                <i class="far fa-quote-right testimonials-two__qoute-icon"></i>
                                <div class="testimonials-two__stars">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div><!-- /.testimonials-two__stars -->
                            </div><!-- /.testimonials-two__bottom -->
                        </div><!-- /.testimonials-two__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-two__single">
                            <div class="testimonials-two__top">
                                <div class="testimonials-two__image">
                                    <img src="assetts/images/testimonials/testimonial-2-3.jpg" alt="">
                                </div><!-- /.testimonials-two__image -->
                                <div class="testimonials-two__top-content">
                                    <h3>Emily Hale</h3>
                                    <span>CEO & Founder</span>
                                </div><!-- /.testimonials-two__top-content -->
                            </div><!-- /.testimonials-two__top -->
                            <div class="testimonials-two__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incid
                                    idunt ut labore et dolore magna aliqua. Ut enim ad minim venquis nostrud
                                    exercitation
                                    ullamco laboris nisi ut aliquip</p>
                            </div><!-- /.testimonials-two__content -->
                            <div class="testimonials-two__bottom">
                                <i class="far fa-quote-right testimonials-two__qoute-icon"></i>
                                <div class="testimonials-two__stars">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div><!-- /.testimonials-two__stars -->
                            </div><!-- /.testimonials-two__bottom -->
                        </div><!-- /.testimonials-two__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-two__single">
                            <div class="testimonials-two__top">
                                <div class="testimonials-two__image">
                                    <img src="assetts/images/testimonials/testimonial-2-1.jpg" alt="">
                                </div><!-- /.testimonials-two__image -->
                                <div class="testimonials-two__top-content">
                                    <h3>Leon Blake</h3>
                                    <span>CEO & Founder</span>
                                </div><!-- /.testimonials-two__top-content -->
                            </div><!-- /.testimonials-two__top -->
                            <div class="testimonials-two__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incid
                                    idunt ut labore et dolore magna aliqua. Ut enim ad minim venquis nostrud
                                    exercitation
                                    ullamco laboris nisi ut aliquip</p>
                            </div><!-- /.testimonials-two__content -->
                            <div class="testimonials-two__bottom">
                                <i class="far fa-quote-right testimonials-two__qoute-icon"></i>
                                <div class="testimonials-two__stars">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div><!-- /.testimonials-two__stars -->
                            </div><!-- /.testimonials-two__bottom -->
                        </div><!-- /.testimonials-two__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-two__single">
                            <div class="testimonials-two__top">
                                <div class="testimonials-two__image">
                                    <img src="assetts/images/testimonials/testimonial-2-2.jpg" alt="">
                                </div><!-- /.testimonials-two__image -->
                                <div class="testimonials-two__top-content">
                                    <h3>James Marsh</h3>
                                    <span>CEO & Founder</span>
                                </div><!-- /.testimonials-two__top-content -->
                            </div><!-- /.testimonials-two__top -->
                            <div class="testimonials-two__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incid
                                    idunt ut labore et dolore magna aliqua. Ut enim ad minim venquis nostrud
                                    exercitation
                                    ullamco laboris nisi ut aliquip</p>
                            </div><!-- /.testimonials-two__content -->
                            <div class="testimonials-two__bottom">
                                <i class="far fa-quote-right testimonials-two__qoute-icon"></i>
                                <div class="testimonials-two__stars">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div><!-- /.testimonials-two__stars -->
                            </div><!-- /.testimonials-two__bottom -->
                        </div><!-- /.testimonials-two__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-two__single">
                            <div class="testimonials-two__top">
                                <div class="testimonials-two__image">
                                    <img src="assetts/images/testimonials/testimonial-2-3.jpg" alt="">
                                </div><!-- /.testimonials-two__image -->
                                <div class="testimonials-two__top-content">
                                    <h3>Dean Gibbs</h3>
                                    <span>CEO & Founder</span>
                                </div><!-- /.testimonials-two__top-content -->
                            </div><!-- /.testimonials-two__top -->
                            <div class="testimonials-two__content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incid
                                    idunt ut labore et dolore magna aliqua. Ut enim ad minim venquis nostrud
                                    exercitation
                                    ullamco laboris nisi ut aliquip</p>
                            </div><!-- /.testimonials-two__content -->
                            <div class="testimonials-two__bottom">
                                <i class="far fa-quote-right testimonials-two__qoute-icon"></i>
                                <div class="testimonials-two__stars">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div><!-- /.testimonials-two__stars -->
                            </div><!-- /.testimonials-two__bottom -->
                        </div><!-- /.testimonials-two__single -->
                    </div><!-- /.item -->
                </div><!-- /.testimonials-two__carousel owl-carousel thm__owl-carousel owl-theme -->
            </div><!-- /.container -->
        </section><!-- /.testimonials-two -->

        <section class="pricing-one" style="background-image: url(assetts/images/shapes/dotted-patter-2.png);">
            <div class="container">
                <div class="pricing-one__block">
                    <div class="block-title-two text-left">
                        <p>get a quote</p>
                        <h3>Don't Hesitate To Contact <br> With Us Get A Call</h3>
                    </div><!-- /.block-title-two -->

                    <div class="pricing-one__btn-block">
                        <ul class="list-unstyled nav nav-tabs">
                            <li class="nav-item">
                                <a href="#monthly" class="nav-link active" data-toggle="tab">Monthly</a>
                            </li><!-- /.nav-item -->
                            <li class="nav-item">
                                <a href="#yearly" class="nav-link " data-toggle="tab">Yearly</a>
                            </li><!-- /.nav-item -->
                        </ul><!-- /.list-unstyled nav nav-tabs -->
                    </div><!-- /.pricing-one__btn-block -->
                </div><!-- /.pricing-one__block -->

                <div class="tab-content">
                    <div class="tab-pane show active  animated fadeInUp" id="monthly">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="pricing-one__single">
                                    <div class="pricing-one__inner">
                                        <img src="assetts/images/shapes/pricing-i-1-1.png" alt="">
                                        <div class="pricing-one__top">
                                            <h3>Startup</h3>
                                            <p><span>$</span>24.99</p>
                                        </div><!-- /.pricing-one__top -->
                                        <ul class="pricing-one__list list-unstyled">
                                            <li><i class="far fa-check"></i>50GB Bandwidth</li>
                                            <li><i class="far fa-check"></i>Business & Financ Analysing</li>
                                            <li><i class="far fa-check"></i>24 hour support</li>
                                            <li><i class="far fa-check"></i>Customer Managemet</li>
                                        </ul><!-- /.pricing-one__list list-unstyled -->
                                        <a href="#" class="thm-btn pricing-one__btn">Choose Plan <i
                                                class="fa fa-angle-double-right"></i></a>
                                        <!-- /.thm-btn pricing-one__btn -->
                                    </div><!-- /.pricing-one__inner -->
                                </div><!-- /.pricing-one__single -->
                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4">
                                <div class="pricing-one__single">
                                    <div class="pricing-one__inner">
                                        <span class="pricing-one__corner-ribbon">Best</span>
                                        <!-- /.pricing-one__corner-ribbon -->
                                        <img src="assetts/images/shapes/pricing-i-1-2.png" alt="">
                                        <div class="pricing-one__top">
                                            <h3>Regular</h3>
                                            <p><span>$</span>45.99</p>
                                        </div><!-- /.pricing-one__top -->
                                        <ul class="pricing-one__list list-unstyled">
                                            <li><i class="far fa-check"></i>50GB Bandwidth</li>
                                            <li><i class="far fa-check"></i>Business & Financ Analysing</li>
                                            <li><i class="far fa-check"></i>24 hour support</li>
                                            <li><i class="far fa-check"></i>Customer Managemet</li>
                                        </ul><!-- /.pricing-one__list list-unstyled -->
                                        <a href="#" class="thm-btn pricing-one__btn">Choose Plan <i
                                                class="fa fa-angle-double-right"></i></a>
                                        <!-- /.thm-btn pricing-one__btn -->
                                    </div><!-- /.pricing-one__inner -->
                                </div><!-- /.pricing-one__single -->
                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4">
                                <div class="pricing-one__single">
                                    <div class="pricing-one__inner">
                                        <img src="assetts/images/shapes/pricing-i-1-3.png" alt="">
                                        <div class="pricing-one__top">
                                            <h3>Premium</h3>
                                            <p><span>$</span>89.99</p>
                                        </div><!-- /.pricing-one__top -->
                                        <ul class="pricing-one__list list-unstyled">
                                            <li><i class="far fa-check"></i>50GB Bandwidth</li>
                                            <li><i class="far fa-check"></i>Business & Financ Analysing</li>
                                            <li><i class="far fa-check"></i>24 hour support</li>
                                            <li><i class="far fa-check"></i>Customer Managemet</li>
                                        </ul><!-- /.pricing-one__list list-unstyled -->
                                        <a href="#" class="thm-btn pricing-one__btn">Choose Plan <i
                                                class="fa fa-angle-double-right"></i></a>
                                        <!-- /.thm-btn pricing-one__btn -->
                                    </div><!-- /.pricing-one__inner -->
                                </div><!-- /.pricing-one__single -->
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->
                    </div><!-- /.tab-pane fade in active -->
                    <div class="tab-pane animated fadeInUp " id="yearly">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="pricing-one__single">
                                    <div class="pricing-one__inner">
                                        <img src="assetts/images/shapes/pricing-i-1-1.png" alt="">
                                        <div class="pricing-one__top">
                                            <h3>Startup</h3>
                                            <p><span>$</span>69.99</p>
                                        </div><!-- /.pricing-one__top -->
                                        <ul class="pricing-one__list list-unstyled">
                                            <li><i class="far fa-check"></i>50GB Bandwidth</li>
                                            <li><i class="far fa-check"></i>Business & Financ Analysing</li>
                                            <li><i class="far fa-check"></i>24 hour support</li>
                                            <li><i class="far fa-check"></i>Customer Managemet</li>
                                        </ul><!-- /.pricing-one__list list-unstyled -->
                                        <a href="#" class="thm-btn pricing-one__btn">Choose Plan <i
                                                class="fa fa-angle-double-right"></i></a>
                                        <!-- /.thm-btn pricing-one__btn -->
                                    </div><!-- /.pricing-one__inner -->
                                </div><!-- /.pricing-one__single -->
                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4">
                                <div class="pricing-one__single">
                                    <div class="pricing-one__inner">
                                        <span class="pricing-one__corner-ribbon">Best</span>
                                        <!-- /.pricing-one__corner-ribbon -->
                                        <img src="assetts/images/shapes/pricing-i-1-2.png" alt="">
                                        <div class="pricing-one__top">
                                            <h3>Regular</h3>
                                            <p><span>$</span>79.99</p>
                                        </div><!-- /.pricing-one__top -->
                                        <ul class="pricing-one__list list-unstyled">
                                            <li><i class="far fa-check"></i>50GB Bandwidth</li>
                                            <li><i class="far fa-check"></i>Business & Financ Analysing</li>
                                            <li><i class="far fa-check"></i>24 hour support</li>
                                            <li><i class="far fa-check"></i>Customer Managemet</li>
                                        </ul><!-- /.pricing-one__list list-unstyled -->
                                        <a href="#" class="thm-btn pricing-one__btn">Choose Plan <i
                                                class="fa fa-angle-double-right"></i></a>
                                        <!-- /.thm-btn pricing-one__btn -->
                                    </div><!-- /.pricing-one__inner -->
                                </div><!-- /.pricing-one__single -->
                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4">
                                <div class="pricing-one__single">
                                    <div class="pricing-one__inner">
                                        <img src="assetts/images/shapes/pricing-i-1-3.png" alt="">
                                        <div class="pricing-one__top">
                                            <h3>Premium</h3>
                                            <p><span>$</span>99.99</p>
                                        </div><!-- /.pricing-one__top -->
                                        <ul class="pricing-one__list list-unstyled">
                                            <li><i class="far fa-check"></i>50GB Bandwidth</li>
                                            <li><i class="far fa-check"></i>Business & Financ Analysing</li>
                                            <li><i class="far fa-check"></i>24 hour support</li>
                                            <li><i class="far fa-check"></i>Customer Managemet</li>
                                        </ul><!-- /.pricing-one__list list-unstyled -->
                                        <a href="#" class="thm-btn pricing-one__btn">Choose Plan <i
                                                class="fa fa-angle-double-right"></i></a>
                                        <!-- /.thm-btn pricing-one__btn -->
                                    </div><!-- /.pricing-one__inner -->
                                </div><!-- /.pricing-one__single -->
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->
                    </div><!-- /.tab-pane fade in active -->
                </div><!-- /.tab-content -->
            </div><!-- /.container -->
        </section><!-- /.pricing-one -->

        <section class="contact-one">
            <div class="container">
                <div class="block-title-two text-center">
                    <p>get a quote</p>
                    <h3>Don't Hesitate To Contact <br> With Us Get A Call</h3>
                </div><!-- /.block-title-two -->
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-one__box"
                            style="background-image: url(assetts/images/resources/contact-1-1.jpg);">
                            <div class="contact-one__box-inner">
                                <h3>Do You Have <br> Any Questions?</h3>
                                <p>But we ipsum dolor sit amet consectetur adeisicing elit, sed do eiusmod tncididunt ut
                                    labore
                                    et dolore magna aliqua</p>
                                <a href="#" class="thm-btn contact-one__box-btn">Contact Us <i
                                        class="fa fa-angle-double-right"></i></a><!-- /.thm-btn contact-one__box-btn -->
                            </div><!-- /.contact-one__box-inner -->
                        </div><!-- /.contact-one__box -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7 d-flex">
                        <div class="my-auto">
                            <form action="inc/sendemail.php" class="contact-form-validated contact-one__form">
                                <h3>Plase Fill Up The Form To Contact With Us</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco
                                </p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-one__input-group">
                                            <i class="contact-one__input-icon far fa-user"></i>
                                            <input type="text" name="name" placeholder="Your Full Name">
                                        </div><!-- /.contact-one__input-group -->
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="contact-one__input-group">
                                            <i class="contact-one__input-icon far fa-envelope"></i>
                                            <input type="text" name="email" placeholder="Your Email ">
                                        </div><!-- /.contact-one__input-group -->
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="contact-one__input-group">
                                            <select class="selectpicker" name="service">
                                                <option value="">Your Subject</option>
                                                <option value="#">Query For Pricing</option>
                                                <option value="">Query For Busniess</option>
                                            </select><!-- /.selectpicker -->
                                        </div><!-- /.contact-one__input-group -->
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="contact-one__input-group">
                                            <i class="contact-one__input-icon far fa-phone"></i>
                                            <input type="text" placeholder="Your Phone" name="phone">
                                        </div><!-- /.contact-one__input-group -->
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-12">
                                        <div class="contact-one__input-group">
                                            <i class="contact-one__input-icon far fa-pencil-alt"></i>
                                            <textarea placeholder="Write Message" name="message"></textarea>
                                        </div><!-- /.contact-one__input-group -->
                                    </div><!-- /.col-lg-12 -->
                                    <div class="col-lg-12">
                                        <button type="submit" class="thm-btn contact-one__form-btn">Send Message <i
                                                class="fa fa-angle-double-right"></i></button>
                                        <!-- /.thm-btn contact-one__form-btn -->
                                    </div><!-- /.col-lg-12 -->
                                </div><!-- /.row -->
                            </form><!-- /.contact-one__form -->
                            <div class="result"></div><!-- /.result -->
                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->

        <section class="brand-one brand-one__home-two">
            <div class="container">
                <div class="brand-one__carousel owl-carousel owl-theme thm__owl-carousel"
                    data-options='{"loop": true, "autoplay": true, "autoplayTimeout": 5000, "items": 6, "margin": 150, "smartSpeed": 700, "nav": false, "dots": false, "responsive": { "0": { "items": 2, "margin": 15 },"575": { "items": 3, "margin": 30 },"767": { "items": 3, "margin": 30 }, "991": { "items": 4, "margin": 30 }, "1199": { "items": 4, "margin": 75 }, "1200": { "items": 6 } }}'>
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-2.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-3.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-4.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-5.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-6.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-2.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-3.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-4.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-5.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assetts/images/brand/brand-2-6.png" alt="">
                    </div><!-- /.item -->
                </div><!-- /.brand-one__carousel owl-carousel owl-theme thm__owl-carousel -->
            </div><!-- /.container -->
        </section><!-- /.brand-one -->

        <section class="blog-two">
            <div class="container">
                <div class="block-title-two text-center">
                    <p>blog & news</p>
                    <h3>Our Latest Company <br> News & Blog</h3>
                </div><!-- /.block-title-two -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-two__single">
                            <h3><a href="blog-details.html">UX And HTML5 Let’s Help Users Fill In Your Mobile Form</a>
                            </h3>
                            <div class="blog-two__image">
                                <img src="assetts/images/blog/blog-2-1.jpg" alt="">
                            </div><!-- /.blog-two__image -->
                            <div class="blog-two__content">
                                <ul class="list-unstyled blog-two__meta">
                                    <li><a href="blog-details.html"><i class="far fa-user"></i> Admin</a></li>
                                    <li><a href="blog-details.html"><i class="far fa-comment-alt"></i> Comments (03)</a>
                                    </li>
                                </ul><!-- /.list-unstyled blog-two__meta -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
                                    incididunt ut
                                    labore </p>
                                <a href="blog-details.html" class="thm-btn blog-two__btn">Read More <i
                                        class="fa fa-angle-double-right"></i></a>
                                <!-- /.thm-btn -->
                            </div><!-- /.blog-two__content -->
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="blog-two__single">
                            <h3><a href="blog-details.html">UX And HTML5 Let’s Help Users Fill In Your Mobile Form</a>
                            </h3>
                            <div class="blog-two__image">
                                <img src="assetts/images/blog/blog-2-2.jpg" alt="">
                            </div><!-- /.blog-two__image -->
                            <div class="blog-two__content">
                                <ul class="list-unstyled blog-two__meta">
                                    <li><a href="blog-details.html"><i class="far fa-user"></i> Admin</a></li>
                                    <li><a href="blog-details.html"><i class="far fa-comment-alt"></i> Comments (03)</a>
                                    </li>
                                </ul><!-- /.list-unstyled blog-two__meta -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
                                    incididunt ut
                                    labore </p>
                                <a href="blog-details.html" class="thm-btn blog-two__btn">Read More <i
                                        class="fa fa-angle-double-right"></i></a>
                                <!-- /.thm-btn -->
                            </div><!-- /.blog-two__content -->
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="blog-two__single">
                            <h3><a href="blog-details.html">UX And HTML5 Let’s Help Users Fill In Your Mobile Form</a>
                            </h3>
                            <div class="blog-two__image">
                                <img src="assetts/images/blog/blog-2-3.jpg" alt="">
                            </div><!-- /.blog-two__image -->
                            <div class="blog-two__content">
                                <ul class="list-unstyled blog-two__meta">
                                    <li><a href="blog-details.html"><i class="far fa-user"></i> Admin</a></li>
                                    <li><a href="blog-details.html"><i class="far fa-comment-alt"></i> Comments (03)</a>
                                    </li>
                                </ul><!-- /.list-unstyled blog-two__meta -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor
                                    incididunt ut
                                    labore </p>
                                <a href="blog-details.html" class="thm-btn blog-two__btn">Read More <i
                                        class="fa fa-angle-double-right"></i></a>
                                <!-- /.thm-btn -->
                            </div><!-- /.blog-two__content -->
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-two -->

        <div class="site-footer-two">
            <img src="assetts/images/shapes/footer-shape-2-1.png" alt="" class="site-footer-two__shape-1">
            <img src="assetts/images/shapes/footer-shape-2-2.png" alt="" class="site-footer-two__shape-2">
            <div class="site-footer-two__upper">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6">
                            <div class="footer-widget footer-widget__about">
                                <a href="index.html">
                                    <img src="assetts/images/logo-2-2.png" alt="">
                                </a>
                                <p>But we must ipsum dolor sit amet con sectetur adipisicing elit sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                                <div class="footer-widget__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div><!-- /.footer-widget__social -->
                            </div><!-- /.footer-widget footer-widget__about -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6">
                            <div class="footer-widget footer-widget__post">
                                <h3 class="footer-widget__title">Recent News</h3><!-- /.footer-widget__title -->
                                <div class="footer-widget__post-wrap">
                                    <div class="footer-widget__post-single">
                                        <h3><a href="blog-details.html">Everything You Need Know About Alignment In
                                                Flexbox</a></h3>
                                        <div class="footer-widget__post-meta">
                                            <a href="#">By <span>Zekio Alex</span></a>
                                            <a href="#">Date <span>20 Dec 2019</span></a>
                                        </div><!-- /.footer-widget__post-meta -->
                                    </div><!-- /.footer-widget__post-single -->
                                    <div class="footer-widget__post-single">
                                        <h3><a href="blog-details.html">Web Performance For Third Party Scripts:
                                                Smashing Cone.</a></h3>
                                        <div class="footer-widget__post-meta">
                                            <a href="#">By <span>Zekio Alex</span></a>
                                            <a href="#">Date <span>20 Dec 2019</span></a>
                                        </div><!-- /.footer-widget__post-meta -->
                                    </div><!-- /.footer-widget__post-single -->
                                </div><!-- /.footer-widget__post-wrap -->
                            </div><!-- /.footer-widget footer-widget__post -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6">
                            <div class="footer-widget footer-widget__links">
                                <h3 class="footer-widget__title">Quick Links</h3><!-- /.footer-widget__title -->
                                <ul class="footer-widget__links-list list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">Setting & Privecy</a></li>
                                    <li><a href="#">Need a Job?</a></li>
                                    <li><a href="#">Latest Blog</a></li>
                                    <li><a href="#">Get a Quote</a></li>
                                </ul><!-- /.footer-widget__links-list -->
                            </div><!-- /.footer-widget footer-widget__post -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6">
                            <div class="footer-widget footer-widget__contact">
                                <h3 class="footer-widget__title">Newsletters</h3><!-- /.footer-widget__title -->
                                <p>Subscribe our newsletters to get more
                                    update and many more</p>
                                <form action="#" class="footer__mc-form">
                                    <input type="text" placeholder="Enter Your Email">
                                    <button type="submit"><i class="fa fa-long-arrow-alt-right"></i></button>
                                </form><!-- /.footer__mc-form -->
                                <ul class="footer-widget__contact-list list-unstyled">
                                    <li>
                                        <i class="far fa-envelope"></i>
                                        <a href="mailto:support@gmail.com">support@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="far fa-phone"></i>
                                        <a href="tel:+823-654-445-64">+823 654 445 64</a>
                                    </li>
                                </ul><!-- /.footer-widget__contact-list -->
                            </div><!-- /.footer-widget footer-widget__post -->
                        </div><!-- /.col-lg-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer-two__upper -->
            <div class="site-footer-two__bottom">
                <div class="container">
                    <p>Copy@2020 <a href="#">Bizkar</a>. All Right Reserved.</p>
                </div><!-- /.container -->
            </div><!-- /.site-footer-two__bottom -->
        </div><!-- /.site-footer-two -->
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
