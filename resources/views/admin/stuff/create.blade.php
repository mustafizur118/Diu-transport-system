@extends('layouts.admin.master')
@section('title', 'Create Stuff')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Create New Stuff</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="active">Create Post</li>
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
                    <form class="form-horizontal" action="{{route('stuff.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Bus Category</label>
                            <div class="col-sm-10">
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="" style="display: none" selected>Select Category</option>
                                    @foreach($bus_categories as $category)
                                        <option @if(old('category_id') == $category->id) selected @endif value="{{ $category->id }}"> {{ $category->name }} </option>
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
                                        <option @if(old('route_id') == $route->id) selected @endif value="{{ $route->id }}"> {{ $route->route_name }} </option>
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
                                <input value="{{old('bus_name')}}" name="bus_name" type="text" id="bus_name" class="form-control" placeholder="Bus name">
                                @error('bus_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Designation</label>
                            <div class="col-md-10">
                                <input value="{{old('designation')}}" name="designation" type="text" id="designation" class="form-control" placeholder="Designation">
                                @error('designation')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Driver Name</label>
                            <div class="col-md-10">
                                <input value="{{old('driver_name')}}" name="driver_name" type="text" id="driver_name" class="form-control" placeholder="Driver name">
                                @error('driver_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Driver Phone No</label>
                            <div class="col-md-10">
                                <input value="{{old('driver_phone')}}" name="driver_phone" type="tel" id="driver_phone" class="form-control" placeholder="017xxxxxxxx">
                                @error('driver_phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Helper Name</label>
                            <div class="col-md-10">
                                <input value="{{old('helper_name')}}" name="helper_name" type="text" id="helper_name" class="form-control" placeholder="Helper name">
                                @error('helper_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Helper Phone No</label>
                            <div class="col-md-10">
                                <input value="{{old('helper_phone')}}" name="helper_phone" type="tel" id="helper_phone" class="form-control" placeholder="017xxxxxxxx">
                                @error('helper_phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"> Status</label>
                            <div class="col-md-10">
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="active" value="active" name="status">
                                    <label for="active"> Active </label>
                                </div>
                                <div class="radio radio-inline">
                                    <input type="radio" id="inactive" value="inactive" name="status">
                                    <label for="inactive"> Inactive </label>
                                </div>
                                @error('status')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                        </div>

                    </form>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div>
    <!-- End Row -->

@endsection
