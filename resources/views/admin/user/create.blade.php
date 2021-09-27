@extends('layouts.admin.master')
@section('title','Create new User')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Create new User</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="active">Create User</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">User Form</h3></div>
                <div class="panel-body">

                    <form action="{{ route('user.store') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-2 control-label">User Role</label>
                            <div class="col-sm-10">
                                <select name="role_id" id="role_id" class="form-control">
                                    <option value="" style="display: none" selected>Select User Role</option>
                                    @foreach($roles as $role)
                                        <option @if(old('role_id') == $role->id) selected @endif value="{{ $role->id }}"> {{ $role->name }} </option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Name</label>
                            <div class="col-md-10">
                                <input name="name" value="{{ old('name') }}" type="text" class="form-control" placeholder="Name">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="example-email">Email</label>
                            <div class="col-md-10">
                                <input type="email" value="{{ old('email') }}" id="example-email" name="email" class="form-control" placeholder="Email">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Password</label>
                                <div class="col-md-10">
                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                    @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Confirm Password</label>
                                <div class="col-md-10">
                                    <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm password">
                                </div>
                            </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">User Id</label>
                            <div class="col-md-10">
                                <input name="user_id" value="{{ old('user_id') }}" type="text" class="form-control" placeholder="xxx-xx-xxxx">
                                @error('user_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Department</label>
                            <div class="col-md-10">
                                <input name="department" value="{{ old('department') }}" type="text" class="form-control" placeholder="Department">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Phone No</label>
                            <div class="col-md-10">
                                <input name="phone_no" value="{{ old('phone_no') }}" type="text" class="form-control" placeholder="017xxxxxxxx">
                                @error('phone_no')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Image</label>
                            <div class="col-md-10">
                                <input type="file" class="form-control" name="image">
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button class="btn btn-info pull-right" type="submit">Save</button>
                    </form>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div>
@endsection
