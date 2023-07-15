{{-- @extends('layouts.app')
@section('content') --}}

<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

        <!-- Site Metas -->
        <title>Food Funday Restaurant - One page HTML Responsive</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Site Icons -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Site CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="assets/css/style.css">
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

        <!-- color -->
        <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

        <!-- Modernizer -->



        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        @livewireStyles
    </head>


<body>
    @extends('layouts.app')

    @section('content')

  <div id="banner" class="banner full-screen-mode parallax">
    <div class="container pr">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="banner-static">
                <div class="banner-text">
                    <div class="banner-cell">
                        <h1>Order food online for <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Friends:Family:Officemates" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                        <!-- <h2>Accidental appearances </h2> -->
                         <p>Welcome to my website I am excited for you to try the best food in the world</p>
                        <!-- <div class="book-btn">
                            <a href="#reservation" class="table-btn hvr-underline-from-center">Book my Table</a>
                        </div> -->
                        <!-- <a href="#about">
                            <div class="mouse"></div>
                        </a> -->
                    </div>
                    <!-- end banner-cell -->
                </div>
                <!-- end banner-text -->
            </div>
            <!-- end banner-static -->
        </div>
        <!-- end col -->
    </div>
    <!-- end container -->
</div>
<!-- end banner -->

<div id="about" class="about-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title"> About Us </h2>
                    <h3>Welcome to my kitchen</h3>
                    <p>welcome  everyone, my name is Salsabil This is a project for me and my mother </p>

                    <p>  invite you to embark on a delightful journey through the art of cooking. With my cooking project, I aim to share my passion for flavors, textures, and creativity with fellow food enthusiasts. From tantalizing appetizers to delectable main courses and mouthwatering desserts, I offer a wide array of recipes that are guaranteed to awaken your taste buds and inspire your inner chef. </p>

                    <p> Each recipe is meticulously crafted, incorporating both traditional and innovative techniques, to deliver unforgettable dining experiences. </p>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="about-images">
                        <img class="about-main" src="images/about-main.jpg" alt="About Main Image">
                        <img class="about-inset" src="images/about-inset.jpg" alt="About Inset Image">
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>

<div class="special-menu pad-top-100 parallax">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title color-white text-center"> Our Discounts for this week </h2>
                    <h5 class="title-caption text-center"> Enjoy this week's meal offers, a unique and delicious experience </h5>
                </div>
                <div class="special-box">
                    <div id="owl-demo">
                        <div class="item item-type-zoom">
                            <a href="#" class="item-hover">
                                <div class="item-info">
                                    <div class="headline">
                                        SALMON STEAK
                                        <div class="line"></div>
                                        <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua. Ut enim ad minim venia.</div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-img">
                                <img src="images/special-menu-1.jpg" alt="sp-menu">
                            </div>
                        </div>
                        <div class="item item-type-zoom">
                            <a href="#" class="item-hover">
                                <div class="item-info">
                                    <div class="headline">
                                        ITALIAN PIZZA
                                        <div class="line"></div>
                                        <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua. Ut enim ad minim venia.</div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-img">
                                <img src="images/special-menu-2.jpg" alt="sp-menu">
                            </div>
                        </div>
                        <div class="item item-type-zoom">
                            <a href="#" class="item-hover">
                                <div class="item-info">
                                    <div class="headline">
                                        VEG. ROLL
                                        <div class="line"></div>
                                        <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua. Ut enim ad minim venia.</div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-img">
                                <img src="images/special-menu-3.jpg" alt="sp-menu">
                            </div>
                        </div>
                        <div class="item item-type-zoom">
                            <a href="#" class="item-hover">
                                <div class="item-info">
                                    <div class="headline">
                                        SALMON STEAK
                                        <div class="line"></div>
                                        <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua. Ut enim ad minim venia.</div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-img">
                                <img src="images/special-menu-1.jpg" alt="sp-menu">
                            </div>
                        </div>
                        <div class="item item-type-zoom">
                            <a href="#" class="item-hover">
                                <div class="item-info">
                                    <div class="headline">
                                        VEG. ROLL
                                        <div class="line"></div>
                                        <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua. Ut enim ad minim venia.</div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-img">
                                <img src="images/special-menu-2.jpg" alt="sp-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end special-box -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end special-menu -->

<div id="menu" class="menu-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title text-center">
                    Our Menu
                </h2>
                    <p class="title-caption text-center">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                </div>
                <div class="tab-menu">
                    <div class="slider slider-nav">
                        <div class="tab-title-menu">
                            <h2>STARTERS</h2>
                            <p> <i class="flaticon-canape"></i> </p>
                        </div>
                        <div class="tab-title-menu">
                            <h2>MAIN DISHES</h2>
                            <p> <i class="flaticon-dinner"></i> </p>
                        </div>
                        <div class="tab-title-menu">
                            <h2>DESERTS</h2>
                            <p> <i class="flaticon-desert"></i> </p>
                        </div>
                        <div class="tab-title-menu">
                            <h2>DRINKS</h2>
                            <p> <i class="flaticon-coffee"></i> </p>
                        </div>
                    </div>
                     <div class="slider slider-single">
                        <div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="images/menu-item-thumbnail-01.jpg" alt="" class="img-responsive">
                                    <div>
                                        <h3>GARLIC BREAD</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                        </p>
                                    </div>
                                    <span class="offer-price">$8.5</span>
                                </div>
                            </div>
                            <!-- end col -->
                             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="images/menu-item-thumbnail-02.jpg" alt="" class="img-responsive">
                                    <div>
                                        <h3>MIXED SALAD</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                        </p>
                                    </div>
                                    <span class="offer-price">$25</span>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="images/menu-item-thumbnail-03.jpg" alt="" class="img-responsive">
                                    <div>
                                        <h3>BBQ CHICKEN WINGS</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                        </p>
                                    </div>
                                    <span class="offer-price">$10</span>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="images/menu-item-thumbnail-04.jpg" alt="" class="img-responsive">
                                    <div>
                                        <h3>MEAT FEAST PIZZA</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                        </p>
                                    </div>
                                    <span class="offer-price">$5</span>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="images/menu-item-thumbnail-05.jpg" alt="" class="img-responsive">
                                    <div>
                                        <h3>CHICKEN TIKKA MASALA</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                        </p>
                                    </div>
                                    <span class="offer-price">$15</span>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="images/menu-item-thumbnail-06.jpg" alt="" class="img-responsive">
                                    <div>
                                        <h3>SPICY MEATBALLS</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                        </p>
                                    </div>
                                    <span class="offer-price">$6.5</span>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="images/menu-item-thumbnail-07.jpg" alt="" class="img-responsive">
                                    <div>
                                        <h3>CHOCOLATE FUDGECAKE</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                        </p>
                                    </div>
                                    <span class="offer-price">$4.5</span>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="images/menu-item-thumbnail-08.jpg" alt="" class="img-responsive">
                                    <div>
                                        <h3>CHICKEN TIKKA MASALA</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                        </p>
                                    </div>
                                    <span class="offer-price">$9.5</span>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="images/menu-item-thumbnail-09.jpg" alt="" class="img-responsive">
                                    <div>
                                        <h3>CHICKEN TIKKA MASALA</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                        </p>
                                    </div>
                                    <span class="offer-price">$10</span>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="images/menu-item-thumbnail-10.jpg" alt="" class="img-responsive">
                                    <div>
                                        <h3>MEAT FEAST PIZZA</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                        </p>
                                    </div>
                                    <span class="offer-price">$12.5</span>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="images/menu-item-thumbnail-09.jpg" alt="" class="img-responsive">
                                    <div>
                                        <h3>CHICKEN TIKKA MASALA</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                        </p>
                                    </div>
                                    <span class="offer-price">$9.5</span>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="offer-item">
                                    <img src="images/menu-item-thumbnail-08.jpg" alt="" class="img-responsive">
                                    <div>
                                        <h3>CHICKEN TIKKA MASALA</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                        </p>
                                    </div>
                                    <span class="offer-price">$5.5</span>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                    </div> -->
                </div>
                <!-- end tab-menu -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end menu -->

  <!-- <div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title text-center">
                    Our Team
                </h2>
                    <p class="title-caption text-center">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                </div>
                <div class="team-box">

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="sf-team">
                                <div class="thumb">
                                    <a href="#"><img src="images/staff-01.jpg" alt=""></a>
                                </div>
                                <div class="text-col">
                                    <h3>John Doggett</h3>
                                    <p>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.</p>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      end col -->
                        <!-- <div class="col-md-4 col-sm-6">
                            <div class="sf-team">
                                <div class="thumb">
                                    <a href="#"><img src="images/staff-02.jpg" alt=""></a>
                                </div>
                                <div class="text-col">
                                    <h3>Jeffrey Spender</h3>
                                    <p>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.</p>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                        <!-- end col -->
                        <!-- <div class="col-md-4 col-sm-6">
                            <div class="sf-team">
                                <div class="thumb">
                                    <a href="#"><img src="images/staff-03.jpg" alt=""></a>
                                </div>
                                <div class="text-col">
                                    <h3>Monica Reyes</h3>
                                    <p>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.</p>
                                    <ul class="team-social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- end team-box -->

            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
{{-- </div> --}}
<!-- end team-main -->

<div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title text-center">
                    Our Gallery
                </h2>
                    <p class="title-caption text-center">There are many variations of passages of Lorem Ipsum available </p>
                </div>
                <div class="gal-container clearfix">
                    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                        <div class="box">
                            <a href="#" data-toggle="modal" data-target="#1">
                                <img src="images/gallery_01.jpg" alt="" />
                            </a>
                            <div class="modal fade" id="1" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="images/gallery_01.jpg" alt="" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the 1 one on my Gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                            <a href="#" data-toggle="modal" data-target="#2">
                                <img src="images/gallery_02.jpg" alt="" />
                            </a>
                            <div class="modal fade" id="2" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="images/gallery_02.jpg" alt="" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the 2 one on my Gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                            <a href="#" data-toggle="modal" data-target="#3">
                                <img src="images/gallery_03.jpg" alt="" />
                            </a>
                            <div class="modal fade" id="3" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="images/gallery_03.jpg" alt="" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the 3 one on my Gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                            <a href="#" data-toggle="modal" data-target="#4">
                                <img src="images/gallery_04.jpg" alt="" />
                            </a>
                            <div class="modal fade" id="4" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="images/gallery_04.jpg" alt="" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the 4 one on my Gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                            <a href="#" data-toggle="modal" data-target="#5">
                                <img src="images/rice.jpg" alt="" />
                            </a>
                            <div class="modal fade" id="5" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="images/gallery_05.jpg" alt="" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the 5 one on my Gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                            <a href="#" data-toggle="modal" data-target="#9">
                                <img src="images/gallery_06.jpg" alt="" />
                            </a>
                            <div class="modal fade" id="9" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="images/gallery_06.jpg" alt="" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the 6 one on my Gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                        <div class="box">
                            <a href="#" data-toggle="modal" data-target="#10">
                                <img src="images/gallery_07.jpg" alt="" />
                            </a>
                            <div class="modal fade" id="10" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="images/gallery_07.jpg" alt="" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the 7 one on my Gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                            <a href="#" data-toggle="modal" data-target="#11">
                                <img src="images/gallery_08.jpg" alt="" />
                            </a>
                            <div class="modal fade" id="11" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="images/gallery_08.jpg" alt="" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the 8 one on my Gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                            <a href="#" data-toggle="modal" data-target="#12">
                                <img src="images/gallery_09.jpg" alt="" />
                            </a>
                            <div class="modal fade" id="12" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="images/gallery_09.jpg" alt="" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the 9 one on my Gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                            <a href="#" data-toggle="modal" data-target="#13">
                                <img src="images/gallery_10.jpg" alt="" />
                            </a>
                            <div class="modal fade" id="13" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="modal-body">
                                            <img src="images/gallery_10.jpg" alt="" />
                                        </div>
                                        <div class="col-md-12 description">
                                            <h4>This is the 10 one on my Gallery</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end gal-container -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end gallery-main -->

<div id="blog" class="blog-main pad-top-100 pad-bottom-100 parallax">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="block-title text-center">
                Our Blog
            </h2>
                <div class="blog-box clearfix">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="col-md-6 col-sm-6">
                            <div class="blog-block">
                                <div class="blog-img-box">
                                    <img src="images/featured-image-01.jpg" alt="" />
                                    <div class="overlay">
                                        <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="blog-dit">
                                    <p><span>25 NOVEMBER, 2014</span></p>
                                    <h2>LATEST RECIPES JUST IN!</h2>
                                    <!-- <h5>BY John Doggett</h5> -->
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="col-md-6 col-sm-6">
                            <div class="blog-block">
                                <div class="blog-img-box">
                                    <img src="images/featured-image-02.jpg" alt="" />
                                    <div class="overlay">
                                        <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="blog-dit">
                                    <p><span>2 NOVEMBER, 2014</span></p>
                                    <h2>Quick Tips For Cooking!</h2>
                                    <!-- <h5></h5> -->
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="col-md-6 col-sm-6">
                            <div class="blog-block">
                                <div class="blog-img-box">
                                    <img src="images/featured-image-03.jpg" alt="" />
                                    <div class="overlay">
                                        <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="blog-dit">
                                    {{-- <p><span>4 NOVEMBER, 2014</span></p> --}}
                                    <h2>BAKING TIPS FROM THE PROS</h2>
                                    <p>When starting to form and prepare baked goods, we must not put a lot of flour on the surface that we are working on, because this causes the pastry to dry out when preparing it.</p>
                                    <!-- <h5>BY Monica Reyes</h5> -->
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="col-md-6 col-sm-6">
                            <div class="blog-block">
                                <div class="blog-img-box">
                                    <img src="images/so9.jpg" alt="" />
                                    <div class="overlay">
                                        <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="blog-dit">
                                    <p><span>12 NOVEMBER, 2014</span></p>
                                    <h2>Top Homemade Salad Dressings</h2>
                                    <!-- <h5>BY John Doggett</h5> -->
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                </div>
                <!-- end blog-box -->

                {{-- <div class="blog-btn-v">
                    <a class="hvr-underline-from-center" href="#">View the Blog</a>
                </div> --}}

            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end blog-main -->


@endsection

    @include('layouts.inc.frontend.footer')


    <script src="js/modernizer.js"></script>
    @livewireScripts
</body>

</html>

{{-- @endsection --}}
