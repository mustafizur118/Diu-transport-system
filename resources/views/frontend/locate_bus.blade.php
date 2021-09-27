@extends('layouts.frontend.master')
@section('title', 'Locate Bus')

@section('content')
<div style="width: 100%;height:50px ; background: rgb(6, 100, 121)"></div>
<section class="about-mealq" style=" font-family:  Raleway-regular ; ">
    <div class="containerq ">
        <h2 class="section-headingq"> Diu Transport Track</h2>
        <div class="about-mealq-wrap flexq ">
            <div class="flexq-1 ">
                <video poster="{{asset('assets/frontend/images/diubus.jpg')}}" controls>
                    <source src="{{asset('assets/frontend/video/DIU TRANSPORT.mp4')}}" type="video/mp4 ">
                </video>
                <p>How to use locate the bus </p>
            </div>
            <div class="flexq-1 " style="margin-left: 15px;margin-right: 15px; ">
                <h3>Daffodil International University Automated Transport System</h3>
                <p>The DIU Automated Transportation System brings you a new technology. You can track your specific bus using this <br> <b> Terms of use:</b>&nbsp;&nbsp; Press the buttons below to track the bus and turn on the bus voice (you will be
                    called again) and off. And also you can make call, then auto recieve after 3 rings. Write DW send bus route number and you will get a return message url link, where you will see the location of the bus.<br> <b> Write
                        message opotion :
                    </b> <br> 1. Bus track : DW <br>2. Voice On : 1111 <br> 3. Voice Off : 0000 <br>send to this Locate Bus ID number .
                    <br> <b style="color: red;">Use your Phone</b></p>

            </div>
        </div>
    </div>
</section>
<section class="our-servicesq " id="locate Route " style=" font-family:  Raleway-regular ; ">
    <div class="containerq ">
        <h1 class="section-headingq ">Locate Bus Route</h1>
        <div class="card-wrapperq flexq" style="margin-top: 140px;">
            @foreach($routes as $route)
                <div class="service-cardq">
                    <img class="iconq " src="{{asset('assets/frontend/icons/transport.svg')}}" alt=" ">
                    <h2>{{$route->route_name}}</h2>
                    <p>{{Str::limit($route->route_description, 88)}}</p>
                    <button class=" btnq btnq-secondary "><a href="{{route('cityroute', $route->id)}}">Bus ID</a> </button>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection


