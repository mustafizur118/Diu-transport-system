@extends('layouts.frontend.master')
@section('title', 'Gallery')
@section('content')
<div style="width: 100%;height:50px ; background: rgb(6, 100, 121)">
</div>
<br>
<!-- gallery -->

<div class="inner-width">
    <h1 class="section-title">Gallery</h1>
    <div class="works">
        @foreach($galleries as $gallery)
        <a href="{{asset($gallery->image)}}" class="work">
            <img src="{{asset($gallery->image)}}" alt="">
            <div class="info">
                <h3>{{$gallery->title}}</h3>
                <div class="cat">{{$gallery->description}}</div>
            </div>
        </a>
        @endforeach
       {{--

        <a href="images/bus.jpg" class="work">
            <img src="images/bus.jpg" alt="">
            <div class="info">
                <h3>Colorful Bus</h3>
                <div class="cat">Shadhinota Sommelon Center (Auditoriam)</div>
            </div>
        </a>

        <a href="images/bus11.jpg" class="work">
            <img src="images/bus11.jpg" alt="">
            <div class="info">
                <h3>Mini AC Bus</h3>
                <div class="cat">Provides a good  travel trip</div>
            </div>
        </a>

        <a href="images/bus4.jpg" class="work">
            <img src="images/bus4.jpg" alt="">
            <div class="info">
                <h3>Non-AC Bus</h3>
                <div class="cat">DIU Bustand</div>
            </div>
        </a>

        <a href="images/bus5.jpg" class="work">
            <img src="images/bus5.jpg" alt="">
            <div class="info">
                <h3>Mid-Night</h3>
                <div class="cat">Night time on campus</div>
            </div>
        </a>

        <a href="images/bus3.jpg" class="work">
            <img src="images/bus3.jpg" alt="">
            <div class="info">
                <h3>Bus Clean Center</h3>
                <div class="cat">This the largest bus clean center in private versity at DIU</div>
            </div>
        </a>--}}
    </div>
</div>
<br><br>
@endsection
