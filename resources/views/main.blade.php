<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Conci landing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/fonts/fonts.min.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <meta name="viewport" content="width=device-width"/>
</head>
<body>

<header style="height: 100vh;">

    <nav class="navbar navbar-default appy-menu" data-spy="appy-menu">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_menu"
                        aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand scroll-section" href="http://appy.bitballoon.com/">
                    <img src="./images/logo.svg" class="img-responsive" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="main_menu">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="scroll-section" href="#" data-toggle="modal" data-target="#about-modal">@lang('texts.menu_about')</a></li>
                    <li><a class="scroll-section" href="#" data-toggle="modal" data-target="#how-it-works-modal">@lang('texts.menu_how_it_works')</a></li>


                    <li class="active">
                        <a class="scroll-section" href="#" data-toggle="modal"
                           data-target="#get-started-modal">@lang('texts.button_apply')</a></li>

                </ul>
            </div>

        </div>

    </nav>

    <section id="home_banner" class="home-slide">

        <div class="container" style="height: 100vh;">
            <div class="row" style="height: 100vh;">
                <div class="col-md-7">
                    <div class="mt-225"></div>

                    <h3>
                        @lang('texts.main_text')
                        {{--With <span class="yellow">Conci</span> you <br>will make more <span class="yellow">money
                        </span>--}}

                    </h3>
                    {{--<p>You think that you can only make good money working in an office?<br>
                        Work should bring you joy! With Conci making money became even easier</p>--}}
                    <p>@lang('texts.main_text_p')</p>

                    <a class="btn btn-default" href="#" data-toggle="modal" data-target="#get-started-modal"
                       role="button">
                        <span>@lang('texts.button_get_started')</span>
                    </a>

                </div>
                <div class="col-md-5 img-container">
                    <div class="mt-225 hidden-sm hidden-xs"></div>
                    <img src="./images/Hero_main_page.png" class="img-responsive center-block fix" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Home Banner -->
</header>


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
                        <img class="img-responsive pull-right" src="images/hero_pop_up.png">
                    </div>
                    <div class="col-md-7">


                        <p class="stated-header-text">{{--In order to be part of <span class="yellow">Conci</span>,<br>
                            simply give us your contact information--}}
                            @lang('texts.get_started_popup_header')
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
                            <div class="mt-50 hidden-sm hidden-xs"></div>
                            <a href="#" class="btn send-button" id="get-started-send">
                                @lang('texts.button_send')
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


                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-5">
                            <img class="img-responsive pull-right" src="images/hero_pop_up.png">
                        </div>
                        <div class="col-md-7">

                            <p class="stated-header-text-about">
                                {{--<span class="yellow">Conci</span> is an affordable concierge service, where the<br>
                                priority is to make tourists <span class="yellow">feel comfortable</span> in a <br>foreign
                                country. Our guides are:--}}
                                @lang('texts.about_popup_header')
                            </p>


                            <div class="paragraphs about-list">
                                <div class="row">
                                    <div class="span4" style="display: inline;">
                                        <img style="float:left; width:auto; height:auto" src="images/c.png"/>
                                        <div class="content-heading"><p>@lang('texts.list_1')</p></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span4" style="display: inline;">
                                        <img style="float:left; width:auto; height:auto" src="images/c.png"/>
                                        <div class="content-heading"><p>@lang('texts.list_2')</p></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="span4" style="display: inline;">
                                        <img style="float:left; width:auto; height:auto" src="images/c.png"/>
                                        <div class="content-heading"><p>@lang('texts.list_3')</p></div>
                                    </div>
                                </div>

                                <?php if (Lang::get('texts.list_4')!='') {?>
                                    <div class="row">
                                        <div class="span4" style="display: inline;">
                                            <img style="float:left; width:auto; height:auto" src="images/c.png"/>
                                            <div class="content-heading"><p>@lang('texts.list_4')</p></div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>

                            <button type="submit" class="btn join-us-button" data-toggle="modal"
                                    data-target="#get-started-modal">
                                <span>@lang('texts.button_join_us')</span>
                            </button>
                        </div>
                        <div class="col-md-1"></div>
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5">
                            <img class="img-responsive pull-right" src="images/hero_pop_up.png">
                        </div>
                        <div class="col-md-7">

                            <p class="stated-header-text-how-it-works">
                                {{--How it <span class="yellow">works</span>?--}}
                                @lang('texts.how_it_works_header')
                            </p>

                            <div class="how-it-works-list">
                                <p>@lang('texts.how_it_works_list_1')</p>
                                <p>@lang('texts.how_it_works_list_2')</p>
                                <p>@lang('texts.how_it_works_list_3')</p>
                                <p>@lang('texts.how_it_works_list_4')</p>
                                <p>@lang('texts.how_it_works_list_5')</p>
                                <p>@lang('texts.how_it_works_list_6')</p>
                            </div>
                            <button type="submit" class="btn join-us-button" data-toggle="modal"
                                    data-target="#get-started-modal">
                                <span>@lang('texts.button_join_us')</span>
                            </button>
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5">
                            <img class="img-responsive pull-right" src="images/dancing_hero.png">
                        </div>
                        <div class="col-md-7">

                            <p class="stated-header-text-dance">
                                {{--<span class="yellow">Thank you!</span> Our manager will contact you
                                as soon as he’s done with his <span class="yellow">dance</span>--}}
                                @lang('texts.get_started_thank_you')
                            </p>

                            <div class="mt-100"></div>

                            <div class="row dancing-social">
                                <div class="col-md-4"><p>@lang('texts.get_started_thank_you.follow')</p>
                                </div>
                                <div class="col-md-2">
                                    <a href="https://www.facebook.com/ConciUkraine/">
                                        <img href="https://www.facebook.com/ConciUkraine/" class="img-responsive"
                                             src="images/facebook-logo-in-circular-button-outlined-social-symbol.svg">
                                    </a>
                                </div>
                                <div class="col-md-4"><p>@lang('texts.get_started_thank_you.share')</p>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-responsive" src="images/Share.svg">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.mask.min.js"></script>
<script src="/js/scripts.js"></script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-106162019-1', 'auto');
    ga('send', 'pageview');

</script>


<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter45889551 = new Ya.Metrika({
                    id: 45889551,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true,
                    trackHash: true,
                    ecommerce: "dataLayer"
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/45889551" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
</body>
</html>