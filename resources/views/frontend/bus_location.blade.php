<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Bus Location :: DIU_Transport_System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="shortcut icon" href="{{asset('assets/frontend/icons/fav-icon.png')}}" />

    <link rel="stylesheet" href="{{asset('assets/frontend/style/sup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/co-sup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/teams.css')}}">
    <link href="{{asset('assets/frontend/style/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/style/bus.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/style/buyticket.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/style/contact.css')}}" rel="stylesheet">
    <link id="theme-color-file" href="{{asset('assets/frontend/style/footer.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/style/main.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/style/nav.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/style/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/style/user.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/style/gallery.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/most_post.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/drop.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/about.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/locate.css')}}">

</head>

<body class="home page-template-default page page-id-122228 ">

<div class="mobile-fixed-toolbar">
    <ul class="top-nav-mobile-left">
        <li style="width:36%;">
            <a href="{{route('user.home')}}"><img style="width:120px;" src="{{asset('assets/frontend/images/logo.png')}}"></a>
        </li>
    </ul>
    <ul class="top-nav-mobile">
        <li><a href="{{route('bus_location')}}" id="pull" class="toggle-mobile-menu"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
    </ul>
</div>

<nav id="navigation" class="primary-navigation mobile-menu-wrapper" role="navigation">
    @include('layouts.frontend._topNav')
</nav>
<div style="width: 100%;height:50px ; background: rgb(6, 100, 121)">
</div>

<section class="our-servicesq " id="locate Route " style=" font-family: Raleway-regular ; ">
    <div class="containerq ">
        <h1 class="section-headingq ">City Campus Route</h1>
        <div>
            <div class="service-cardq ">
                <h2>Suryamukhi 1</h2>
                <button class=" btnq btnq-secondary "><a href="sms:+8801732955937 ">Track</a> </button>
                <button class=" btnq btnq-secondary "><a href="tel:+8801732955937 ">Call</a> </button>
                <button class=" btnq btnq-secondary "><a href="sms:+8801732955937 ">Voice On</a> </button>
                <button class=" btnq btnq-secondary "><a href="sms:+8801732955937 ">Voice Off</a> </button>
            </div>
        </div>
    </div>
</section>



<footer id="colophon" class="site-footer" style="background-color: black;" role="contentinfo">
    @include('layouts.frontend._footer')
</footer>


@include('layouts.frontend._script')

</body>

</html>
