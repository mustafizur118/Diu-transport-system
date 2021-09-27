@extends('layouts.admin.master')
@section('title', 'Update Bus Stoppages')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Update Bus Stoppages</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="active">Update Bus Stoppages</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">Bus Stoppages Form</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('stoppages.update', $stoppages->id)}}" method="post">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Bus Route</label>
                            <div class="col-sm-10">
                                <select name="route_id" id="route_id" class="form-control">
                                    <option value="" style="display: none" selected>Select Route</option>
                                    @foreach($routes as $route)
                                        <option value="{{ $route->id }}" @if($stoppages->route_id == $route->id) selected @endif> {{ $route->route_name }} </option>
                                    @endforeach
                                </select>
                                @error('route_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Bus Stoppages Name</label>
                            <div class="col-md-10">
                                <input value="{{$stoppages->name}}" name="name" type="text" id="name" class="form-control" placeholder="Bus name">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Status</label>
                            <div class="col-md-10">
                                <div class="radio radio-info radio-inline">
                                    <input @if($stoppages->status == 'active') checked   @endif type="radio" id="active" value="active" name="status">
                                    <label for="active"> Active </label>
                                </div>
                                <div class="radio radio-inline">
                                    <input @if($stoppages->status == 'inactive') checked   @endif type="radio" id="inactive" value="inactive" name="status">
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
