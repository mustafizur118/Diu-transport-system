<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Seat :: DIU_Transport_System</title>
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
    <link rel="stylesheet" href="{{asset('assets/frontend/style/select-seat.css')}}">

</head>

<body class="home page-template-default page page-id-122228 " style="  background-color: rgb(231, 231, 231);">

<div class="mobile-fixed-toolbar">
    <ul class="top-nav-mobile-left">
        <li style="width:36%;">
            <a href="{{route('user.home')}}"><img style="width:120px;" src="{{asset('assets/frontend/images/logo.png')}}"></a>
        </li>
    </ul>
    <ul class="top-nav-mobile">
        <li><a href="{{route('seat')}}" id="pull" class="toggle-mobile-menu"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
    </ul>
</div>

<nav id="navigation" class="primary-navigation mobile-menu-wrapper" role="navigation">
    @include('layouts.frontend._topNav')
</nav>
<div style="width: 100%;height:50px ; background: rgb(6, 100, 121)">
</div>
<br><br>
<div>
    <h1 class="section-headingq ">Book Your Seat</h1>
</div>
<br><br>
<div class="auto-container">

    <div class="row clearfix">

        <div class="sidebar-side col-lg-5 col-md-12 col-sm-12">
            <div class="dx">
                <table>
                    <tr>
                        <td><button class="bit" id=""></button></td>
                        <td style="font-size: 13px;">Available Seat</td>

                    </tr>
                    <tr>
                        <td><button class="bit1" id=""></button></td>
                        <td style="font-size: 13px;">Sold Seat</td>

                    </tr>
                </table>
            </div>
            <div id="bus-seat">

                <div id="keyboard">

                    <table style="text-align: center; margin-top:-10px;">

                        <tr>
                            <td>

                            </td>
                            <td>
                            <td>

                            </td>
                            <td>
                            <td>

                            </td>
                            <td>
                            <td>

                            </td>
                            <td>
                            <td>
                                <button class="operator" style=" background-color: #fff;"><img src="{{asset('assets/frontend/icons/driver.png')}}" alt=""></button>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <button class="number" id="">A1</button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">A2</button>
                            </td>
                            <td>
                            <td>

                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">A3</button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">A4</button>
                            </td>
                            <td>
                        </tr>
                        <tr>
                            <td>
                                <button class="number" id="">B1</button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">B2</button>
                            </td>
                            <td>
                            <td>

                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">B3</button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">B4</button>
                            </td>
                            <td>
                        </tr>
                        <tr>
                            <td>
                                <button class="number" id="">C1</button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">C2</button>
                            </td>
                            <td>
                            <td>

                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">C3</button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">C4</button>
                            </td>
                            <td>
                        </tr>
                        <tr>
                            <td>
                                <button class="number" id="">D1</button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">D2</button>
                            </td>
                            <td>
                            <td>

                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">D3</button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">D4</button>
                            </td>
                            <td>
                        </tr>
                        <tr>
                            <td>
                                <button class="number" id="">E1</button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">E2</button>
                            </td>
                            <td>
                            <td>

                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">E3</button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">E4</button>
                            </td>
                            <td>
                        </tr>
                        <tr>
                            <td>
                                <button class="number" id="">F1</button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">F2</button>
                            </td>
                            <td>
                            <td>

                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">F3</button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">F4</button>
                            </td>
                            <td>
                        </tr>
                        <tr>
                            <td>
                                <button class="number" id="">G1</button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">G2</button>
                            </td>
                            <td>
                            <td>

                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">G3</button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">G4</button>
                            </td>
                            <td>
                        </tr>
                        <tr>
                            <td>
                                <button class="number" id="">H1</button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">H2</button>
                            </td>
                            <td>
                            <td>

                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">H3</button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">H4</button>
                            </td>
                            <td>
                        </tr>
                        <tr>
                            <td>
                                <button class="number" id="">I1</button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">I2</button>
                            </td>
                            <td>
                            <td>

                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">I3</button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">I4</button>
                            </td>
                            <td>
                        </tr>
                        <tr>
                            <td>
                                <button class="number" id="">J1</button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">J2</button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8"></button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">J3</button>
                            </td>
                            <td>
                            <td>
                                <button class="number" id="8">J4</button>
                            </td>
                            <td>
                        </tr>

                    </table>
                    <tr></tr>
                </div>
            </div>
        </div>

        <br>
        <div class="content-side col-lg-7 col-md-12 col-sm-12">

            <div class="tab">
                <b style="font-size: 18px; color: rgb(13, 24, 75);">Booking Details :</b>
                <table class="table " style="font-size: 15px;text-align: center;   background-color: rgb(48, 151, 182);color: #fff;">
                    <tr>
                        <td>
                            DIU - City Campus
                        </td>
                        <td>
                            7:15 am
                        </td>
                        <td>29-10-2020</td>
                    </tr>
                </table>



                <table class="table table-bordered" style="font-size: 12px;text-align: center;   background-color: #fff;">

                    <tr style="background-color: rgb(83, 192, 219); color:#fff;">
                        <th style="font-size: 15px;">
                            Select Seat
                        </th>
                        <th style="font-size: 15px;">
                            Fare ৳
                        </th>
                        <th style="font-size: 15px;">
                            Action
                        </th>
                    </tr>
                    <tr>
                        <td style="font-size: 14px;">
                            A1
                        </td>
                        <td style="font-size: 14px;">
                            25
                        </td>
                        <td>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 14px;">
                            A2
                        </td>
                        <td style="font-size: 14px;">
                            25
                        </td>
                        <td>
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <tr>
                        <th style="font-size: 15px;">
                            Total Seat : 2
                        </th>
                        <th colspan="2" style="font-size: 15px;">
                            Total Amount ৳ : 50
                        </th>
                    </tr>

                </table>
                <p></p>
                <b style="color:rgb(34, 31, 31);font-size: 15px;">Choose Boarding Point :
                </b>
                <p></p>
                <form>
                    <select required style="width: 180px; background-color: #fff;
                    border-radius: 4px;
                    border: none;
                    height: 30px;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                    color: #3e485c;
                    font-size: 14px;" required>
                        <option value="">Select Option</option>
                        <option value="">Dhanmondi</option>
                        <option value="">Shymoli</option>
                        <option value="">Tongi</option>
                        <option value="">Mirpur-1</option>
                        <option value="">Saver</option>
                        <option value="">Uattara</option>
                    </select>
                    <span class="bokselect-arrow"></span><br><br>
                    <button class="amz"><a href="{{route('passanger_info')}}">Next</button>

                </form>
            </div>
        </div>
    </div>

</div>
</div>

<br><br>

<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<footer id="colophon" class="site-footer" style="background-color: black;" role="contentinfo">
    @include('layouts.frontend._footer')
</footer>

@include('layouts.frontend._script')


</body>

</html>

