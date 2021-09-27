@extends('layouts.frontend.master')
@section('title', 'Stuff Info')

@section('content')
    <div style="width: 100%;height:50px ; background: rgb(6, 100, 121)"></div>
    <br>
    <section id="nonac">
        <div class="inner-width">
            <h1 class="section-title">Drivers And Helpers</h1>

            <div class="button-row">
                @foreach($buses_info as $bus_info)
                    <div class="row1">
                        <a href="{{route('stuffinfo', $bus_info->id)}}" class="bus">{{$bus_info->name}}</a>
                    </div> &nbsp;
                @endforeach&nbsp;
            </div>
            <br>

            <b>
                <h5>{{$buses_category->name}}</h5>
            </b>
            <div class="time-line">
                @if($stafs->count() < 1)
                    <h5 class="alert-danger d-block w-100 text-center py-sm-2" style="border-radius: 4px;">No Bus Availavle !! Thank you</h5>
                @endif
                @foreach($stafs as $staf)
                    <div class="block">
                        <h5>{{$staf->route->route_name}}</h5>
                        <h3>{{$staf->designation}}</h3>
                        <table class="table table-bordered" style="font-size: 14px;">
                            <tr>
                                <td>Driver Name : {{$staf->driver_name}} </td>
                                <td>Phone : +88{{$staf->driver_phone}}</td>
                            </tr>
                            <tr>
                                <td>Helper Name : {{$staf->helper_name}} </td>
                                <td>Phone : +88{{$staf->helper_phone}}</td>
                            </tr>
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <br>
    <br>
@endsection

