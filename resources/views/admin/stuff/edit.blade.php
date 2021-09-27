@extends('layouts.admin.master')
@section('title', 'Update Stuff')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Update Stuff</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="active">Update Stuff</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">Stuff Form</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('stuff.update', $stuff->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Bus Category</label>
                            <div class="col-sm-10">
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="" style="display: none" selected>Select Category</option>
                                    @foreach($bus_categories as $category)
                                        <option value="{{ $category->id }}" @if($stuff->category_id == $category->id) selected @endif> {{ $category->name }} </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Bus Route</label>
                            <div class="col-sm-10">
                                <select name="route_id" id="route_id" class="form-control">
                                    <option value="" style="display: none" selected>Select Route</option>
                                    @foreach($routes as $route)
                                        <option value="{{ $route->id }}" @if($stuff->route_id == $route->id) selected @endif> {{ $route->route_name }} </option>
                                    @endforeach
                                </select>
                                @error('route_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Bus Name</label>
                            <div class="col-md-10">
                                <input value="{{$stuff->bus_name}}" name="bus_name" type="text" id="bus_name" class="form-control" placeholder="Bus name">
                                @error('bus_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Designation</label>
                            <div class="col-md-10">
                                <input value="{{$stuff->designation}}" name="designation" type="text" id="designation" class="form-control" placeholder="Designation">
                                @error('designation')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Driver Name</label>
                            <div class="col-md-10">
                                <input value="{{$stuff->driver_name}}" name="driver_name" type="text" id="driver_name" class="form-control" placeholder="Driver name">
                                @error('driver_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Driver Phone No</label>
                            <div class="col-md-10">
                                <input value="{{$stuff->driver_phone}}" name="driver_phone" type="tel" id="driver_phone" class="form-control" placeholder="017xxxxxxxx">
                                @error('driver_phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Helper Name</label>
                            <div class="col-md-10">
                                <input value="{{$stuff->helper_name}}" name="helper_name" type="text" id="helper_name" class="form-control" placeholder="Helper name">
                                @error('helper_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Helper Phone No</label>
                            <div class="col-md-10">
                                <input value="{{$stuff->helper_phone}}" name="helper_phone" type="tel" id="helper_phone" class="form-control" placeholder="017xxxxxxxx">
                                @error('helper_phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Stuff Status</label>
                            <div class="col-md-10">
                                <div class="radio radio-info radio-inline">
                                    <input @if($stuff->status == 'active') checked   @endif type="radio" id="active" value="active" name="status">
                                    <label for="active"> Active </label>
                                </div>
                                <div class="radio radio-inline">
                                    <input @if($stuff->status == 'inactive') checked   @endif type="radio" id="inactive" value="inactive" name="status">
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
