<div class="sidebar-inner slimscrollleft">
    <div class="user-details">
        <div class="text-center">
            <img src="{{ asset(auth()->user()->image) }}" alt="" class="img-circle">
        </div>
        <div class="user-info">
            <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{auth()->user()->name}}</a>
            </div>

            <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>
        </div>
    </div>
    <!--- Divider -->
    <div id="sidebar-menu">
        <ul>
            <li>
                <a href="{{route('admin.dashboard')}}" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
            </li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i> <span> Roles </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('role.index')}}">Role List</a></li>
                    <li><a href="{{route('role.create')}}">Create New Role</a></li>
                </ul>
            </li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i> <span> Users </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('user.index')}}">User List</a></li>
                    <li><a href="{{route('user.create')}}">Create New User</a></li>
                </ul>
            </li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-agenda"></i> <span> Slider </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('slider.index')}}">Slider List</a></li>
                    <li><a href="{{route('slider.create')}}">Create New Slider</a></li>
                </ul>
            </li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-video-camera"></i> <span> Video </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('video.index')}}">Video List</a></li>
                    <li><a href="{{route('video.create')}}">Create New Video</a></li>
                </ul>
            </li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-image"></i> <span> Gallery </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('gallery.index')}}">Gallery List</a></li>
                    <li><a href="{{route('gallery.create')}}">Create New Gallery</a></li>
                </ul>
            </li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-tag"></i> <span> Tag </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('tag.index')}}">Tag List</a></li>
                    <li><a href="{{route('tag.create')}}">Create New Tag</a></li>
                </ul>
            </li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-layout-list-post"></i> <span> Post </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('post.index')}}">Post List</a></li>
                    <li><a href="{{route('post.create')}}">Create New Post</a></li>
                </ul>
            </li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu"></i> <span> Bus Category </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('bus_category.index')}}">Category List</a></li>
                    <li><a href="{{route('bus_category.create')}}">Create New Category</a></li>
                </ul>
            </li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i> <span> Route </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('route.index')}}">Route List</a></li>
                    <li><a href="{{route('route.create')}}">Create New Route</a></li>
                </ul>
            </li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-truck"></i> <span> Bus </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('bus.index')}}">Bus List</a></li>
                    <li><a href="{{route('bus.create')}}">Create New Bus</a></li>
                </ul>
            </li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i> <span> Bus Stoppages </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('stoppages.index')}}">Stoppages List</a></li>
                    <li><a href="{{route('stoppages.create')}}">Create New Stoppages</a></li>
                </ul>
            </li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i> <span> Stuff </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('stuff.index')}}">Stuff List</a></li>
                    <li><a href="{{route('stuff.create')}}">Create New Stuff</a></li>
                </ul>
            </li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-layers"></i> <span> Service </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{route('service.index')}}">Service List</a></li>
                    <li><a href="{{route('service.create')}}">Create New Service</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="clearfix"></div>
</div> <!-- end sidebarinner -->
