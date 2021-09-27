@extends('layouts.admin.master')
@section('title', 'Update Gallery')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Update Gallery</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="active">Update Gallery</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">Gallery Form</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('gallery.update', $gallery->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="col-md-2 control-label">Gallery Title</label>
                            <div class="col-md-10">
                                <input value="{{$gallery->title}}" name="title" type="text" id="title" class="form-control" placeholder="Gallery title">
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Gallery Description</label>
                            <div class="col-md-10">
                                <textarea name="description" class="form-control" rows="5" placeholder="Gallery Description">{{$gallery->description}}</textarea>
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Gallery Status</label>
                            <div class="col-md-10">
                                <div class="radio radio-info radio-inline">
                                    <input @if($gallery->status == 'active') checked   @endif type="radio" id="active" value="active" name="status">
                                    <label for="active"> Active </label>
                                </div>
                                <div class="radio radio-inline">
                                    <input @if($gallery->status == 'inactive') checked   @endif type="radio" id="inactive" value="inactive" name="status">
                                    <label for="inactive"> Inactive </label>
                                </div>
                                @error('status')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Gallery Image</label>
                            <div class="col-md-10">
                                <input type="file" class="form-control" name="image" >
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                @if($gallery->image != null)
                                    <img src="{{ asset($gallery->image) }}" width="20%">
                                @endif
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
