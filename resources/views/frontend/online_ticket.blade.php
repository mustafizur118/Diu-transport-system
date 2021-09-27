<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Online Ticket :: DIU_Transport_System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">


    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="bootstrap.min.css" />
    <link rel="shortcut icon" href="{{asset('assets/frontend/icons/fav-icon.png')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/style/bokcss.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/frontend/style/co-sup.css')}}">

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
        <li><a href="{{route('online_ticket')}}" id="pull" class="toggle-mobile-menu"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
    </ul>
</div>

<nav id="navigation" class="primary-navigation mobile-menu-wrapper" role="navigation">
    @include('layouts.frontend._topNav')
</nav>

<div style="width: 100%;height:50px ; background: rgb(6, 100, 121)"></div>


<div id="booking" class="boksection">
    <div class="boksection-center">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-push-5">
                    <div class="booking-cta">
                        <h1>DIU Online Bus Ticket Booking</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facere, soluta magnam consectetur molestias itaque ad sint fugit architecto incidunt iste culpa perspiciatis possimus voluptates aliquid consequuntur cumque quasi.
                            Perspiciatis.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-md-pull-7">
                    <div class="booking-form">
                        <form>
                            <div class="bokform-group">
                                <span class="bokform-label"> From</span>
                                <select class="form-control" required>
                                    <option value="">Select Route</option>
                                    <option value="">DIU</option>
                                    <option value="">City Campus Route</option>
                                    <option value="">Mirpur Route</option>
                                    <option value="">Uttara Route</option>
                                    <option value="">Tongi College Gate Route</option>
                                    <option value="">Others Route</option>
                                </select>
                                <span class="bokselect-arrow"></span>
                            </div>
                            <div class="bokform-group">
                                <span class="bokform-label">To</span>
                                <select class="form-control" required>
                                    <option value="">Select Route</option>
                                    <option value="">DIU</option>
                                    <option value="">City Campus Route</option>
                                    <option value="">Mirpur Route</option>
                                    <option value="">Uttara Route</option>
                                    <option value="">Tongi College Gate Route</option>
                                    <option value="">Others Route</option>
                                </select>
                                <span class="bokselect-arrow"></span>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="bokform-group">
                                        <span class="bokform-label">Date</span>
                                        <input class="form-control" id="minmaxdate" min="2020-11-21" max="2020-11-30" style="width: 160px;" type="date" required>
                                    </div>
                                </div>
                            </div>
                            <button class="bokbtn"><a href="{{route('available_bus')}}" style="color: #fff;">Check availability</a> </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer id="colophon" class="site-footer" style="background-color: black;" role="contentinfo">
    @include('layouts.frontend._footer')
</footer>


@include('layouts.frontend._script')

<script>
    var now = new Date();
    var xday = now.getDate();
    var xmonth = now.getMonth()+1;
    var xyear = now.getFullYear();
    var x = xyear+ "-" + xmonth + "-" +xday;
    if(xmonth == 12){
        var xmaxday = 1;
        var xyear = xyear +1;
        var y = xyear+ "-" + xmaxday + "-" +xday;
    }
    else{
        var xmaxday = xmonth + 1;
        var y = xyear+ "-" + xmaxday + "-" +xday;

    }
    document.querySelector("#minmaxdate").setAttribute("min",x);
    document.querySelector("#minmaxdate").setAttribute("max",y);
</script>

</body>

</html>
