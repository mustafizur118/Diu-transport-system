<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ticket List :: DIU_Transport_System</title>
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
    <link rel="stylesheet" href="{{asset('assets/frontend/style/ak.css')}}">

</head>

<body class="home page-template-default page page-id-122228 ">

<div class="mobile-fixed-toolbar">
    <ul class="top-nav-mobile-left">
        <li style="width:36%;">
            <a href="{{route('user.home')}}"><img style="width:120px;" src="{{asset('assets/frontend/images/logo.png')}}"></a>
        </li>
    </ul>
    <ul class="top-nav-mobile">
        <li><a href="{{route('ticket_list')}}" id="pull" class="toggle-mobile-menu"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
    </ul>
</div>

<nav id="navigation" class="primary-navigation mobile-menu-wrapper" role="navigation">
    @include('layouts.frontend._topNav')
</nav>

<div style="width: 100%;height:50px ; background: rgb(6, 100, 121)"></div>
<br>
<h1 class="ser-head">Ticket List</h1>

<style>
    .col-sm-2 b {
        font-size: 17px;
    }
</style>
<div>
    <div class="tg-container">
        <div class="entry-content">
            <div class="hidden-xy">
                <div class="row" style="font-size: 13px;">
                    <div class="col-sm-2">
                        <b>Departure</b>
                    </div>
                    <div class=" col-sm-2 ">
                        <b>Coach</b>
                    </div>
                    <div class="col-sm-2 ">
                        <b>Seat</b>
                    </div>
                    <div class="col-sm-2 ">
                        <b>Date</b>
                    </div>
                    <div class="col-sm-2 ">
                        <b>Boarding Point</b>
                    </div>
                    <div class="col-sm-2 ">
                        <b>Fare ৳</b>
                    </div>
                </div>
            </div>
            <div class="eabzn ">
                <div class="eabd ">
                    <div class="row " style="font-size: 13px; ">
                        <div class="col-sm-2 ">
                            <div class='bldec '>
                                <p class='hidden-sm hidden-md hidden-lg vliss '>Departure</p>
                                <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                <p>DIU - City Campus</p>
                            </div>
                        </div>
                        <div class="col-sm-2 ">
                            <div class='bldec '>
                                <p class='hidden-sm hidden-md hidden-lg vliss '>Coach</p>
                                <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                <p>Suryamukhi 1</p>
                            </div>
                        </div>
                        <div class="col-sm-2 ">
                            <div class='bldec '>
                                <p class='hidden-sm hidden-md hidden-lg vliss '>Seat</p>
                                <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                <p>A1</p>
                            </div>
                        </div>
                        <div class="col-sm-2 ">
                            <div class='bldec '>
                                <p class='hidden-sm hidden-md hidden-lg vliss '>Date</p>
                                <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                <p>10-1-2020</p>
                            </div>
                        </div>

                        <div class="col-sm-2 ">
                            <div class='bldec '>
                                <p class='hidden-sm hidden-md hidden-lg vliss '>Boarding Point</p>
                                <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                <p>DIU [ 7:15 am ]</p>
                            </div>
                        </div>
                        <div class="col-sm-2 ">
                            <div class='bldec '>
                                <p class='hidden-sm hidden-md hidden-lg vliss '>Fare ৳</p>
                                <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                <p>25</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="padding: 10px ">
            <div style="background-color: #f7f7f7;margin: 50px 0;box-shadow: 0 0 3px #ccc;text-align:center " class='paywithimage '>
                <img src="{{asset('assets/frontend/images/payment-methods.png')}}" style='max-width:600px;width:100% ' />
            </div>
        </div>
    </div>
</div>

<footer id="colophon" class="site-footer" style="background-color: black;" role="contentinfo">
    @include('layouts.frontend._footer')
</footer>

@include('layouts.frontend._script')

</body>

</html>
