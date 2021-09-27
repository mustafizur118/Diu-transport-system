<div id="nav-container">
    <ul id="menu-header-menu" class="menu clearfix">
        <li><a href="{{route('user.home')}}" >Home</a></li>
        <li><a href="{{route('schedule')}}">Schedule</a></li>
        <li><a href="{{route('service')}}">Service</a></li>
        <li><a href="{{route('online_ticket')}}">Online Ticket</a></li>
        <li>
            <div class="dropdown">
                <a class="dropbtn" style="color: white;">Facilities</a>
                <div class="dropdown-content">
                    <a href="{{route('locate_bus')}}">Locate Bus</a>
                    <a href="#">Facial Recognition</a>
                </div>
            </div>
        </li>
        <li>
            <div class="dropdown">
                <a class="dropbtn" style="color: white;">Info</a>
                <div class="dropdown-content">
                    <a href="{{route('about')}}">About</a>
                    <a href="{{route('developers')}}">Developers</a>
                    <a href="{{route('trnasportinfo')}}">Transport Info</a>
                </div>
            </div>
        </li>
        <li><a href="{{route('gallery')}}">Gallery</a></li>
        <li><a href="{{route('blog')}}">Blog</a></li>
        <li><a href="{{route('contact')}}">Contact</a></li>
        @if(Auth::check())
        <li>
            <div class="dropdown">
                <a class="dropbtn" style="color: white;"><i class="fa fa-user" aria-hidden="true"></i></a>
                <div class="dropdown-content">
                    <a href="{{route('student.profile', \Illuminate\Support\Facades\Auth::user()->id)}}">Profile</a>
                    <a href="{{route('ticket_list')}}">Ticket List</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    {{--<form action="{{route('logout')}}" method="get">
                        @csrf
                        <button type="submit">Sign Out</button>
                    </form>
                    <a href="">Sign Out</a>--}}
                </div>
            </div>
        </li>
        @else
            <li><a href="{{route('student.login')}}">Log In</a></li>
        @endif
    </ul>


    <div id="header-user-info-container" class="hidden-to-guest">
          <span id="robi-header-logo">
            <a href="{{route('user.home')}}"> <img src="{{asset('assets/frontend/images/logo.png')}}" ></a>
          </span>
    </div>

</div>
