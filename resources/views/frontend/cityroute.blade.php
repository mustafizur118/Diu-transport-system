@extends('layouts.frontend.master')
@section('title', 'Tracking Buses')

@section('content')
<div style="width: 100%;height:50px ; background: rgb(6, 100, 121)"></div>

<section class="our-servicesq " id="locate Route " style=" font-family: Raleway-regular ; ">
    <div class="containerq ">
        <h1 class="section-headingq ">{{$bus_route}}</h1>
        <div class="card-wrapperq flexq ">
            @foreach($buses as $bus)
                <div class="service-cardq ">
                    <h2>{{$bus->name}}</h2>
                    <button class=" btnq btnq-secondary "><a href="sms:+88{{$bus->tracking_number}}">Track</a> </button>
                    <button class=" btnq btnq-secondary "><a href="tel:+88{{$bus->tracking_number}}">Call</a> </button>
                    <button class=" btnq btnq-secondary "><a href="sms:+88{{$bus->tracking_number}}">Voice On</a> </button>
                    <button class=" btnq btnq-secondary "><a href="sms:+88{{$bus->tracking_number}}">Voice Off</a> </button>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
