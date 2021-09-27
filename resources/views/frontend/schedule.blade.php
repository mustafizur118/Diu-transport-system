@extends('layouts.frontend.master')
@section('title', 'Schedule')


@section('css')
    <link rel="stylesheet" href="{{asset('assets/frontend/style/schedule.css')}}">
@endsection


@section('content')
<div style="width: 100%;height:50px ; background: rgb(6, 100, 121)"></div>

<div class="schedule-container">
        <div class="row">
            <div class="col-md-12">
                <div class="page">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <h2 style="color: rgba(255, 255, 255, 0);">DIU Transport Schedule</h2>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                    </div>

                    <h2 style="color: rgb(8, 43, 88);text-align: center;">DIU Transport Schedule</h2>
                    <br>
                </div>
                <table class="table table-bordered" style="font-size: 14px;">

                    <tr style="background-color:#066479; ;color: rgb(252, 250, 250);">
                        <th>From</th>
                        <th>Time</th>
                        <th>To</th>
                    </tr>

                    <tr>
                        <td colspan="3" style="background-color: #05243aa2;color: rgb(255, 249, 249);">City Campus Route
                        </td>
                    </tr>

                    <tr>
                        <td>City Campus</td>
                        <td>7.15&nbsp; am</td>
                        <td rowspan="4">Daffodil Internatinal University</td>
                    </tr>

                    <tr style="color: red;">
                        <td>City Campus (Only Faculty &amp; Admin)</td>
                        <td>9.00 am</td>
                    </tr>
                    <tr>
                        <td>City Campus</td>
                        <td>10.00 am</td>
                    </tr>
                    <tr>
                        <td>Mirpur- (via prosikha more, purnima, sony, Mirpur-1)</td>
                        <td>7.30 am</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="background-color: #05243aa2;color: rgb(255, 249, 249);">Uttara Route</td>
                    </tr>
                    <tr>
                        <td>MES Via Uttara, Khilkhet, Rajlokhi</td>
                        <td>7:15 am</td>
                        <td rowspan="3">Daffodil Internatinal University</td>
                    </tr>
                    <tr>
                        <td rowspan="2">Uttara,&nbsp; Rajlokhi</td>
                        <td>8.00 am</td>
                    </tr>
                    <tr>
                        <td>10.00 am</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="background-color: #05243aa2;color: rgb(255, 249, 249);">Tongi College Gate Route
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="3">Tongi College Gate</td>
                        <td>7.15 am</td>
                        <td rowspan="3">Daffodil Internatinal University</td>
                    </tr>
                    <tr>
                        <td>9.00 am</td>
                    </tr>
                    <tr>
                        <td>10.00 am</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="background-color: #05243aa2;color: rgb(255, 249, 249);">Others Route</td>
                    </tr>
                    <tr>
                        <td>Pukurpar Kashimpur, via Ashulia</td>
                        <td>7.15 am</td>
                        <td rowspan="4">Daffodil Internatinal University</td>
                    </tr>
                    <tr>
                        <td>Savar, Via CMB</td>
                        <td>7.50 am</td>
                    </tr>
                    <tr>
                        <td>Dhamrai bus station, Via Nabinagar, CMB</td>
                        <td>7.45 am</td>
                    </tr>
                    <tr>
                        <td>Baipail bus station,&nbsp; Via Nabinagar, CMB</td>
                        <td>7.45 am</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="background-color: #05243aa2;color: rgb(255, 249, 249);">Daffodil Internatinal University Route</td>
                    </tr>
                    <tr>
                        <td rowspan="6">Daffodil International University</td>
                        <td rowspan="6">2.00 pm</td>
                        <td>City Campus</td>
                    </tr>
                    <tr>
                        <td>UC, Rajlokhi, Khilkhet.</td>
                    </tr>
                    <tr>
                        <td>CMB, Nabinagar</td>
                    </tr>
                    <tr>
                        <td>Mirpur (Konabari)</td>
                    </tr>
                    <tr>
                        <td>Tongi College Gate</td>
                    </tr>
                    <tr>
                        <td>Ashulia via Pukurpar Kashimpur</td>
                    </tr>
                    <tr>
                        <td style="color: red">Daffodil Internatinal University</td>
                        <td style="color: red">4.00 Pm</td>
                        <td style="color: red">CC (Only Faculty &amp; Admin)</td>
                    </tr>
                    <tr>
                        <td rowspan="7">Daffodil Internatinal University</td>
                        <td rowspan="7">5.30 pm</td>
                        <td>City Campus</td>
                    </tr>
                    <tr>
                        <td>Mirpur- (via prosikha more, purnima, sony, Mirpur-1)</td>
                    </tr>
                    <tr>
                        <td>Uttara, Rajlokhi, Khilkihet.</td>
                    </tr>
                    <tr>
                        <td>Tongi College Gate</td>
                    </tr>
                    <tr>
                        <td>Savar</td>
                    </tr>
                    <tr>
                        <td>Dhamrai bus station</td>
                    </tr>
                    <tr>
                        <td>Baipail bus station</td>
                    </tr>
                    <tr>
                        <td rowspan="3">Daffodil Internatinal University</td>
                        <td rowspan="3">9.00 pm</td>
                        <td>City Campus</td>
                    </tr>
                    <tr>
                        <td>Abdullapur.</td>
                    </tr>
                    <tr>
                        <td>Radio Colony, via Nabinagar.</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="background-color: #05243aa2;color: rgb(255, 249, 249);">Friday</td>
                    </tr>
                    <tr>
                        <td>City Campus</td>
                        <td rowspan="3">7.30 am</td>
                        <td rowspan="3">Daffodil Internatinal University</td>
                    </tr>
                    <tr>
                        <td>Tongi College Gate via Uttara House Building</td>
                    </tr>
                    <tr>
                        <td>Savar, via Nabinagar, CMB</td>
                    </tr>
                    <tr>
                        <td rowspan="3">Daffodil Internatinal University</td>
                        <td rowspan="3">6.00 pm &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>
                        <td>Tongi College gate via Abdullapur</td>
                    </tr>
                    <tr>
                        <td>CC</td>
                    </tr>
                    <tr>
                        <td>Radio colony, via Nabinagar.</td>
                    </tr>
                </table>
                <div class="row" style="color: tomato;">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="font-size: 14px;">
                        * DIU = Daffodil Internatinal University.<br> * CC = City Campus, Dhanmondi.<br> * UC = Uttara Campus , Uttara.
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    </div>
                </div>
                <p>&nbsp;</p>

            </div>
        </div>
</div>


@endsection
