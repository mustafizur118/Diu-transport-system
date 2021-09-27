@extends('layouts.admin.master')
@section('title', 'Route List')
@section('table_css')
    <!-- DataTables -->
    <link href="{{asset('assets/admin/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/plugins/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/admin/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">List Of Route</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="active">Route List</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Route List</h3>
                </div>
                <div class="panel-body">

                    <table id="datatable-buttons" class="table table-striped table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 10px">SL#</th>
                            <th class="text-center" >Name</th>
                            <th class="text-center" >Destination From Name</th>
                            <th class="text-center" >Destination To Name</th>
                            <th class="text-center" >Depart Time</th>
                            <th class="text-center" >Fare</th>
                            <th class="text-center " >Description</th>
                            <th class="text-center " >Status</th>
                            <th class="text-center" style="width: 12%">Actions</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($routes as $route)
                            <tr>
                                <td>{{$serial++ }}</td>
                                <td>{{$route->route_name}}</td>
                                <td>{{$route->destination_from}}</td>
                                <td>{{$route->destination_to}}</td>
                                <td>{{$route->depart_time->format('H:i:s')}}</td>
                                <td>{{$route->fare}}</td>
                                <td>{{$route->route_description}}</td>
                                <td>{{ucfirst($route->status)}}</td>
                                <td class="d-flex">
                                    <a class="btn btn-info d-inline-block" href="{{ route('route.edit', $route->id) }}">Edit</a>
                                    <form class="d-inline-block pull-right" method="post" action="{{ route('route.destroy', $route->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" onclick="return confirm('Are you confirm to delete?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    <!-- End Row -->

@endsection

@section('table_script')
    <!-- Datatables-->
    <script src="{{asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/responsive.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/dataTables.scroller.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{asset('assets/admin/pages/datatables.init.js')}}"></script>

@endsection
