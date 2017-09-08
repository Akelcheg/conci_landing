<!DOCTYPE html>

<html lang="en" style="" class=" js no-touch js no-touch backgroundsize csstransforms3d csstransitions">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Conci</title>

    <link rel="stylesheet" type="text/css" href="./fonts/fonts.min.css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Conci">

    <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/css/blue.css" rel="stylesheet" media="screen">
    <link href="/css/media-queries.css" rel="stylesheet" media="screen">
    <!--<link href="/fontello.css" rel="stylesheet">-->
    <!--[if IE 7]>
    <link href="font/fontello-ie7.css" rel="stylesheet"><![endif]-->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Media queries -->
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <div class="fit-vids-style">­
        <style>               .fluid-width-video-wrapper {
                width: 100%;
                position: relative;
                padding: 0;
            }

            .fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }                                       </style>
    </div>
    <script src="/modernizr.custom.js"></script>

</head>


<body>
<header class="navbar-fixed-top animated fadeInDown delay1">
    <div class="container scale-container">
        <div class="row">
            <div class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <h1 class="logo">
                        <a class="navbar-brand" href="http://diploma.coralixthemes.com/blue/index.html"><img
                                    src="/images/logo.svg" alt="Logo"></a>
                    </h1>

                </div>

                <div class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav">

                        <li><a href="#" data-toggle="modal" data-target="#about-modal">About</a></li>

                        <li><a href="#" data-toggle="modal" data-target="#how-it-works-modal">How it works?</a></li>

                        <li><a href="#" data-toggle="modal" data-target="#get-started-modal" class="round">Apply</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</header>

<section class="jumbotron vertical-center animated fadeInUp delay2" id="menu-jumbotron">

    <div class="container scale-container">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12 main-text-header">
                        <h2><p>With <span class="yellow">Conci</span> you</p>
                            <p>will make more <span class="yellow">money</span></p>
                        </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 main-text">
                        <p>You think that you can only make good money working in an office?
                            Work shoudl bring you joy! With Conci making money became even easier</p>

                        <div>
                            <a href="#get-started-modal"
                               class="btn get-started"
                               data-toggle="modal">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5" style="margin-top: 8%;">
                <img src="/images/Hero_main_page.png" alt="image" class="figure">
            </div>
        </div>
    </div>

</section>

<div class="modal fade" id="get-started-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <img src="images/close_button.svg">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5">
                        <img class="img-responsive pull-right" src="images/hero_pop_up.png" style="width: 75%;">
                    </div>
                    <div class="col-md-7">


                        <p class="stated-header-text">In order to be part of <span class="yellow">Conci</span>,<br>
                            simply give us your contact information
                        </p>

                        <p class="error"></p>

                        <form id="get-started-form" method="POST" action="#" novalidate="novalidate">

                            <div class="form-group">
                                <input type="text" name="full_name" id="full_name" class="form-control input-sm"
                                       placeholder="Full name">
                            </div>

                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number"
                                               class="form-control input-sm" placeholder="Phone number">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="email" id="email"
                                               class="form-control input-sm" placeholder="Email">
                                    </div>
                                </div>
                            </div>

                            <a href="#" class="btn btn-success send-button" id="get-started-send">
                                <span>Send</span>
                            </a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="about-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <img src="images/close_button.svg">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5">
                        <img class="img-responsive pull-right" src="images/hero_pop_up.png" style="width: 75%;">
                    </div>
                    <div class="col-md-7">

                        <p class="stated-header-text-about">
                            <span class="yellow">Conci</span> is an affordable concierge service, where the
                            priority is to make tourists <span class="yellow">feel comfortable</span> in a <br>foreign
                            country. Our guides are:
                        </p>


                        <div class="paragraphs about-list">
                            <div class="row">
                                <div class="span4" style="display: inline;">
                                    <img style="float:left; width:auto; height:auto" src="images/c.png"/>
                                    <div class="content-heading"><p>Professional and Friendly</p></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span4" style="display: inline;">
                                    <img style="float:left; width:auto; height:auto" src="images/c.png"/>
                                    <div class="content-heading"><p>Speak English Fluently</p></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span4" style="display: inline;">
                                    <img style="float:left; width:auto; height:auto" src="images/c.png"/>
                                    <div class="content-heading"><p>Know City’s Top Places</p></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span4" style="display: inline;">
                                    <img style="float:left; width:auto; height:auto" src="images/c.png"/>
                                    <div class="content-heading"><p>Verified and Qualified</p></div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success join-us-button">
                            <span>Join us</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="how-it-works-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <img src="images/close_button.svg">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5">
                        <img class="img-responsive pull-right" src="images/hero_pop_up.png" style="width: 75%;">
                    </div>
                    <div class="col-md-7">

                        <p class="stated-header-text-how-it-works">
                            How it <span class="yellow">works</span>?
                        </p>

                        <div class="how-it-works-list">
                            <p><span class="yellow">01</span>Download the App and register in the system</p>
                            <p><span class="yellow">02</span>Conci manager will connect with you</p>
                            <p><span class="yellow">03</span>Get your first order</p>
                            <p><span class="yellow">04</span>Lead the tour/help the client</p>
                            <p><span class="yellow">05</span>Get your money</p>
                            <p><span class="yellow">06</span>Repeat every day</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="dancing-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <img src="images/close_button.svg">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5">
                        <img class="img-responsive pull-right" src="images/dancing_hero.png" style="width: 75%;">
                    </div>
                    <div class="col-md-7">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/jquery-1.9.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/retina.js"></script>
{{--<script src="/js/respond.min.js"></script>--}}
<script src="/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
</body>
</html>