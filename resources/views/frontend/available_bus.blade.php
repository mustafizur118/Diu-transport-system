<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Available Bus :: DIU_Transport_System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css" />
    <link rel="shortcut icon" href="{{asset('assets/frontend/icons/fav-icon.png')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/style/co-sup.css')}}">

    <link href="{{asset('assets/frontend/style/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/style/bus.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/style/buyticket.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/style/contact.css')}}" rel="stylesheet">
    <link id="theme-color-file" href="{{asset('assets/frontend/style/footer.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/style/main.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/style/nav.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/style/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/most_post.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/drop.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/avialable.css')}}">


</head>

<body class="home page-template-default page page-id-122228 ">

<div class="mobile-fixed-toolbar">
    <ul class="top-nav-mobile-left">
        <li style="width:36%;">
            <a href="{{route('user.home')}}"><img style="width:120px;" src="{{asset('assets/frontend/images/logo.png')}}"></a>
        </li>
    </ul>
    <ul class="top-nav-mobile">
        <li><a href="{{route('available_bus')}}" id="pull" class="toggle-mobile-menu"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
    </ul>
</div>

<nav id="navigation" class="primary-navigation mobile-menu-wrapper" role="navigation">
    @include('layouts.frontend._topNav')
</nav>

<div style="width: 100%;height:50px ; background: rgb(6, 100, 121)">
</div>

<div id="content" class="site-content">
    <div class="tg-container">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <article id="post-228" class="post-228 page type-page status-publish hentry">

                    <div class="entry-content">
                        <div class="abx">
                            <b>Available Bus</b>
                            <p style="margin-left: 10px; margin-bottom: -1px;">DIU- City Campus </p>
                            <p style="margin-left: 10px; margin-bottom: -1px;">21-10-2020 </p>
                        </div>
                        <div class="hidden-xy">
                            <div class="row">
                                <div class="col-sm-4">
                                    <b>Operator & Coach Info</b>
                                </div>
                                <div class="col-sm-2">
                                    <b>Time</b>
                                </div>
                                <div class="col-sm-3">
                                    <b>Seats Capacity</b>
                                </div>
                                <div class="col-sm-3 " style=' text-align:right '>
                                    <b>Fare (BDT)</b>
                                </div>
                            </div>
                        </div>

                        <div class="eabzn">
                            <div class="eabd">

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class='bldec '>
                                            <p class='hidden-sm hidden-md hidden-lg vliss '>Bus Name</p>
                                            <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                            <h4>Suryamukhi</h4>
                                        </div>

                                        <div class='bldec '>
                                            <p class='hidden-sm hidden-md hidden-lg vliss '>Bus Type</p>
                                            <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                            <p><small class='bus_name '>AC</small></p>
                                        </div>
                                        <div class='bldec '>
                                            <p class='hidden-sm hidden-md hidden-lg vliss '>Coach No</p>
                                            <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                            <p><small class="coach_no">Suryamukhi 1</small></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class='bldec '>
                                            <p class='hidden-sm hidden-md hidden-lg vliss '>Time</p>
                                            <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                            <p>7:15 am</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class='bldec '>
                                            <p class='hidden-sm hidden-md hidden-lg vliss '>Seat Capacity</p>
                                            <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                            <p>40</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class='bldec '>
                                            <p class='hidden-sm hidden-md hidden-lg vliss '>Price (BDT)</p>
                                            <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                            <h4 style='text-align:right '>
                                                <span class='sfof1592 '>25</span> </h4>
                                        </div>
                                        <div class="clearfix">
                                            <p class="btn btn-primary btn-xs pull-right abdvb" style="margin-left: 10px;">
                                                <a href="{{route('seat')}}" style="color: #fff;">View Seats</a>
                                            </p>
                                            <p class="btn btn-primary btn-xs pull-right abdvb" style="margin-left: 10px;">
                                                <a href="{{route('bus_location')}}" style="color: #fff;">Track Bus</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="eabzn">
                            <div class="eabd">

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class='bldec '>
                                            <p class='hidden-sm hidden-md hidden-lg vliss '>Bus Name</p>
                                            <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                            <h4>Suryamukhi</h4>
                                        </div>

                                        <div class='bldec '>
                                            <p class='hidden-sm hidden-md hidden-lg vliss '>Bus Type</p>
                                            <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                            <p><small class='bus_name '>AC</small></p>
                                        </div>
                                        <div class='bldec '>
                                            <p class='hidden-sm hidden-md hidden-lg vliss '>Coach No</p>
                                            <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                            <p><small class="coach_no">Suryamukhi 1</small></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class='bldec '>
                                            <p class='hidden-sm hidden-md hidden-lg vliss '>Time</p>
                                            <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                            <p>7:15 am</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class='bldec '>
                                            <p class='hidden-sm hidden-md hidden-lg vliss '>Seat Capacity</p>
                                            <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                            <p>40</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class='bldec '>
                                            <p class='hidden-sm hidden-md hidden-lg vliss '>Price (BDT)</p>
                                            <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                            <h4 style='text-align:right '>
                                                <span class='sfof1592 '>25</span> </h4>
                                        </div>
                                        <div class="clearfix">
                                            <p class="btn btn-primary btn-xs pull-right abdvb" style="margin-left: 10px;">
                                                <a href="{{route('seat')}}" style="color: #fff;">View Seats</a>
                                            </p>
                                            <p class="btn btn-primary btn-xs pull-right abdvb" style="margin-left: 10px;">
                                                <a href="{{route('bus_location')}}" style="color: #fff;">Track Bus</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding: 10px">
                            <div style="background-color: #f7f7f7;margin: 50px 0;box-shadow: 0 0 3px #ccc;text-align:center" class='paywithimage '>
                                <img src="{{asset('assets/frontend/images/payment-methods.png')}}" style='max-width:600px;width:100% ' />
                            </div>
                        </div>

                    </div>
                    <!-- .entry-content -->
                </article>
                <!-- #post-## -->

            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->

    </div>
    <!-- .tg-container -->
</div>
<!-- #content -->

<footer id="colophon" class="site-footer" style="background-color: black;" role="contentinfo">
    @include('layouts.frontend._footer')
</footer>

<!-- Go Top BTN -->
<button class="goTop fas fa-arrow-up"></button>

@include('layouts.frontend._script')

</body>

</html>
