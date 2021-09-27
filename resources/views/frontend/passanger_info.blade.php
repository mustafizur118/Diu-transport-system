<!DOCTYPE html>
<html lang="en">

<head>

    <title>Passenger Info :: DIU_Transport_System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/footer.css')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/style/contact.css')}}">
    <link href="{{asset('assets/frontend/style/nav.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/style/main.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/drop.css')}}">
    <link href="{{asset('assets/frontend/style/bot.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/style/nk.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('assets/frontend/icons/fav-icon.png')}}" />


</head>

<body class="home page-template-default page page-id-122228 ">

<div class="mobile-fixed-toolbar">
    <ul class="top-nav-mobile-left">
        <li style="width:36%;">
            <a href="{{route('user.home')}}"><img style="width:120px;" src="{{asset('assets/frontend/images/logo.png')}}"></a>
        </li>
    </ul>
    <ul class="top-nav-mobile">
        <li><a href="{{route('passanger_info')}}" id="pull" class="toggle-mobile-menu"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
    </ul>
</div>

<nav id="navigation" class="primary-navigation mobile-menu-wrapper" role="navigation">
    @include('layouts.frontend._topNav')
</nav>
<div style="width: 100%;height:50px ; background: rgb(6, 100, 121)">
</div>
<br><br>
<section id="content" class="container">
    <form method="post" id="booknow" name="booknow" action="/booking/bus/pay-now" onkeypress="return event.keyCode != 13;">

        <!-- psngr_dtls starts -->
        <section id="psngr_dtls">

            <!-- psngr starts here -->
            <div id="psngr" class="col-md-8">

                <div class="p_head">
                    <h5>Passenger Details</h5>
                </div>

                <!-- p_body starts here -->
                <div class="p_body">
                    <ul class="list-inline clearfix">
                        <li class="srch_input_wd">
                            <div class="form-group">
                                <label for="pname">Name<span>*</span></label>
                                <input type="text" class="form-control pname jqchars" id="pname" name="pname[]" placeholder="Mizanur Rahaman" maxlength="25" onpaste="return false;">
                            </div>
                        </li>
                        <li class="srch_input_wd">
                            <div class="form-group">
                                <label for="pname">ID<span>*</span></label>
                                <input type="text" class="form-control pname jqchars" id="pname" name="pname[]" placeholder="171-15-1452" maxlength="25" onpaste="return false;">
                            </div>
                        </li>
                        <li class="srch_input_wd">
                            <div class="form-group">
                                <label for="pname">Email<span>*</span></label>
                                <input type="text" class="form-control pname jqchars" id="pname" name="pname[]" placeholder="mizahur15-1452@diu.edu.bd" maxlength="25" onpaste="return false;">
                            </div>
                        </li>
                        <li class="srch_input_wd">
                            <div class="form-group">
                                <label for="pname">Department<span>*</span></label>
                                <input type="text" class="form-control pname jqchars" id="pname" name="pname[]" placeholder="CSE" maxlength="25" onpaste="return false;">
                            </div>
                        </li>
                    </ul>

                </div>

            </div>
            <!-- psngr ends here -->
            <!-- journey starts here -->
            <aside id="journey" class="col-md-4 paside" style=" height: 235px;">

                <div class="page_title">
                    <h4 class="title_Ablack"><b>Route Details</b></h4>
                </div>
                <table class="table table-bordered" style="font-size: 14px;">
                    <tr>
                        <td>Departure</td>
                        <td> :</td>
                        <td>DIU- Danmondi</td>
                    </tr>

                    <tr>
                        <td>Coach No</td>
                        <td> :</td>
                        <td>Rojonigondha 1</td>
                    </tr>
                    <tr>
                        <td>Select Seat (S)</td>
                        <td> :</td>
                        <td>A1</td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td> :</td>
                        <td>10-12-2020</td>
                    </tr>
                    <tr>
                        <td>Boarding Point</td>
                        <td> :</td>
                        <td>DIU [ 7:15am ]</td>
                    </tr>
                </table>

            </aside>

        </section>
        <!-- psngr_dtls ends -->

        <!-- payment_dtls starts -->
        <section id="payment_dtls">

            <!-- fare starts here -->
            <aside id="fare" class="col-md-4 paside col-md-push-8" oncontextmenu="return false;">

                <div class="page_title">
                    <h4 class="title_Ablack"><b>Fare Details</b></h4>
                </div>

                <ul>
                    <li>Ticket Price <span id="display_ticket_price">25</span></li>
                    <li>Processing Fee <span id="display_shohoz_fee">0</span></li>
                    <li>Seat <span id="display_shohoz_fee">1</span></li>

                    <li><b>Total <span id="display_total">25</span></b></li>
                </ul>

                <div class="col-md-12 bg-warning" style="padding:5px 5px;margin-top:20px;border:1px solid #079d49;">
                    <b style="color:#fc0202;">Please note:</b> <br>
                    <ol style="background-color: transparent;padding-left:15px;">
                        <li style="background-color: transparent;border-bottom: none;">Delivery Charge : <b style="color:#fc0202;">Free</b> per delivery.
                        </li>
                    </ol>

                </div>
            </aside>

            <!-- fare ends here -->

            <!-- psngr starts here -->
            <div id="payment" class="col-md-8 col-md-pull-4">

                <div class="p_head">
                    <h5>Payment Details</h5>
                </div>

                <div id="amnt_pay">
                    <h3>Total Amount Payable: <span id="display_total_payable">৳ 25</span></h3>

                </div>

                <div id="payment_options">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-tabs-payment">
                        <li class="active"><a href="#bKash" id="tbkash" data-toggle="tab">
                                Mobile Banking
                            </a></li>
                        <li><a href="#all_banking" id="tall_banking" data-toggle="tab">Diu Payment</a></li>
                        <li><a href="#cod" id="tcod" data-toggle="tab">Debit Or Credit Card</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">

                        <!-- Mobile banking -->
                        <div class="tab-pane active" id="bKash">
                            <div id="bKash-panel-info">
                                <div class="col-md-12 info">
                                    <div class="col-md-12">

                                        <div class="row">
                                            <p>
                                                Please Select a Payment Method - Moblie Banking
                                            </p>
                                            <a href="bkash.html">
                                                <div class="col-md-3 col-xs-6 bkash_container" id="bkash_payment">
                                                    <p class="logo_svg">
                                                        <img src="{{asset('assets/frontend/icons/bkash_logo.png')}}" alt="bkash" />
                                                        <span>bKash</span>
                                                    </p>
                                            </a>
                                        </div>
                                        <a href="#" style="text-decoration: none;">
                                            <div class="col-md-3  col-xs-6 logo_container" id="mfs_payment">
                                                <p class="logo_svg">
                                                    <img src="{{asset('assets/frontend/icons/rocket.svg')}}" alt="rocket" />
                                                    <span>rocket</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <!-- debit or credit -->
                    <div class="tab-pane" id="cod">
                        <div id="bKash-panel-info">
                            <div class="col-md-12 info">
                                <div class="col-md-12">

                                    <div class="row">
                                        <p>
                                            Please Select a Payment Method - Debit or Credit
                                        </p>
                                        <a href="#" style="text-decoration: none;">
                                            <div class="col-md-3 col-xs-6 bkash_container" id="bkash_payment">
                                                <p class="logo_svg">
                                                    <span>Mster Card</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- Diu paymentt -->
                    <div class="tab-pane" id="all_banking">
                        <div id="bKash-panel-info">
                            <div class="col-md-12 info">
                                <div class="col-md-12">

                                    <div class="row">
                                        <p>
                                            Please Select a Payment Method - DIU Payement
                                        </p>
                                        <a href="#" style="text-decoration: none;">
                                            <div class="col-md-3 col-xs-6 bkash_container" id="bkash_payment">
                                                <p class="logo_svg">

                                                    <span>ONE CARD</span>
                                                </p>
                                            </div>
                                        </a>
                                        <a href="#" style="text-decoration: none;">
                                            <div class="col-md-3  col-xs-6 logo_container" id="mfs_payment">
                                                <p class="logo_svg">

                                                    <span>DIU ID</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- p_body ends here -->

            </div>
            <!-- psngr ends here -->

            <div class="clearfix"></div>
        </section>
        <!-- payment_dtls ends -->
        <input type="hidden" id="search_id" name="search_id" value="MA==">
    </form>
</section>


<footer id="colophon" class="site-footer" style="background-color: black;" role="contentinfo">
    @include('layouts.frontend._footer')
</footer>

<!-- Go Top BTN -->
<button class="goTop fas fa-arrow-up"></button>


<style>
    #operator_sec ul {
        margin-left: 20px !important;
    }

    #operator_sec ul li {
        font-size: 12px;
        margin: 0 0 0 11px;
        color: #333333;
        font-family: "Bw Helder", Helvetica, sans-serif !important;
        letter-spacing: .25px !important;
        line-height: 1.428571429;
    }

    .colmd3 {
        width: 19% !important
    }

    @media (max-width: 767px) {
        .mobile_row {
            padding: 0 22px 0 28px;
        }
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('assets/frontend/js/bkj.js')}}"></script>
<script src="{{asset('assets/frontend/js/goto-btn.js')}}"></script>
<script src="{{asset('assets/frontend/js/bkh.js')}}"></script>
<script src="{{asset('assets/frontend/js/window.js')}}"></script>

</body>
<!-- body ends -->

</html>
