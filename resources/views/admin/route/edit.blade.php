@extends('layouts.admin.master')
@section('title', 'Update Route')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Update Route</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="active">Update Route</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">Route -> <b>{{$route->name}}</b> </h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('route.update', $route->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="col-md-2 control-label">Route Name</label>
                            <div class="col-md-10">
                                <input value="{{$route->route_name}}" name="route_name" type="text" id="route_name" class="form-control" placeholder="Route Name">
                                @error('route_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Destination From Name</label>
                            <div class="col-md-10">
                                <input value="{{$route->destination_from}}" name="destination_from" type="text" id="destination_from" class="form-control" placeholder="Destination From Name">
                                @error('destination_from')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Destination To Name</label>
                            <div class="col-md-10">
                                <input value="{{$route->destination_to}}" name="destination_to" type="text" id="destination_to" class="form-control" placeholder="Destination To Name">
                                @error('destination_to')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Depart Time</label>
                            <div class="col-md-10">
                                <input value="{{$route->depart_time}}" type="time"  min="07:00" max="19:00" name="depart_time" id="depart_time" class="form-control">
                                @error('depart_time')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Fare</label>
                            <div class="col-md-10">
                                <input value="{{$route->fare}}" name="fare" type="number" min="10" id="fare" class="form-control" placeholder="Fare">
                                @error('fare')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"> Description</label>
                            <div class="col-md-10">
                                <textarea name="route_description" class="form-control" rows="5" placeholder="Route Description">{{$route->route_description}}</textarea>
                                @error('route_description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Status</label>
                            <div class="col-md-10">
                                <div class="radio radio-info radio-inline">
                                    <input @if($route->status == 'active') checked   @endif type="radio" id="active" value="active" name="status">
                                    <label for="active"> Active </label>
                                </div>
                                <div class="radio radio-inline">
                                    <input @if($route->status == 'inactive') checked   @endif type="radio" id="inactive" value="inactive" name="status">
                                    <label for="inactive"> Inactive </label>
                                </div>
                                @error('status')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Update</button>
                        </div>



                    </form>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div>
    <!-- End Row -->

@endsection
