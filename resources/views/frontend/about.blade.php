<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>About :: DIU_Transport_System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('assets/frontend/icons/fav-icon.png')}}" />
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css" />
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
        <li><a href="{{route('about')}}" id="pull" class="toggle-mobile-menu"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
    </ul>
</div>

<nav id="navigation" class="primary-navigation mobile-menu-wrapper" role="navigation">
    @include('layouts.frontend._topNav')
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
    @include('layouts.frontend._slider')
</div>


<div id="content" class="site-content">
    <div class="tg-container">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <article id="post-228" class="post-228 page type-page status-publish hentry">

                    <div class="eabzn">
                        <div class="eabd">

                            <div class="row" style="margin-left: 30px; margin-right: 30px;">
                                <p>&nbsp;</p>
                                <h3>Introduction :</h3>
                                <p style="text-align: justify;">
                                <p>DIU transtpost is apparently private specializing in transportation of students and faculty bus services since 2013. We worked hard and honest, we put our vision forward and explored ways and means to continuously
                                    improve students and faculty comfort, and as a result, we were able to introduce the 1st ever online bus services in Private University. The company at present operates more then 50 (Fivety) buses on schedule
                                    routes employing over 100 trained staff and safely transporting over a passengers a year.</p>
                                </p>

                                <div class="ins">
                                    <p>&nbsp;</p>
                                    <b style="color: rgb(109, 109, 109);">The mission of the Transport Company may be categorized by 3 principal activities as follows :
                                    </b>
                                    <p>&nbsp;</p>

                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;The goal priorities for efficient service through continuous development towards world class standards are safety,&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;convenience, cleanliness, modernity and punctuality in every journey.</p>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Create student and faculty satisfaction and meet student and faculty needs. The service network must be connected and &nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allowed uninterrupted.
                                    </p>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Implement a system of management that is both efficient and streamlined. Capitalise on the potential of employees, by &nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;building teamwork. Reduce waste and non-productivity, in the interest of quality management and to compete with the &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;private
                                        sector.
                                    </p>

                                </div>

                                <div class="inx">
                                    <p>&nbsp;</p>
                                    <h3>Our Vision :</h3>

                                    <p>Must be a domestic land transport worker by employing world class service quality, efficient management, modern technology and quality workers.</p>

                                </div>.
                                <div class="inx">
                                    <p>&nbsp;</p>
                                    <h3>Our Management :</h3>

                                    <p>DIU Authority</p>

                                </div>
                            </div>
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
<br><br>

<footer id="colophon" class="site-footer" style="background-color: black;" role="contentinfo">
    @include('layouts.frontend._footer')
</footer>

<!-- Go Top BTN -->
@include('layouts.frontend._script')
</body>

</html>
