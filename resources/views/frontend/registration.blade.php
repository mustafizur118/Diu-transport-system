<!DOCTYPE html>
<html>

<head>
    <title>Registration :: DIU_Transport_System</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/style/lon.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('assets/frontend/icons/fav-icon.png')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/style/lonc.css')}}">
</head>

<body>
<img class="wave" src="{{asset('assets/frontend/images/wave.png')}}">
<div class="container">
    <div class="img">
        <img src="{{asset('assets/frontend/images/as.png')}}" style="width: 289px;">
    </div>

    <div class="login-content">

        <form action="{{ route('register') }}" method="POST" class="sign-in-form">
            @csrf


            <img src="{{asset('assets/frontend/images/profilepic.png')}}">
            <h2 class="login-title">User Info</h2>
            <div class="login-input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="name" class="from-control @error('name') is-invalid @enderror" value="{{ old('name') }}"  autocomplete="name" autofocus placeholder="Username" />
            </div>
                @error('name')
                    <div style="color: red;">{{ $message }}</div>
                @enderror

            <div class="login-input-field">
                <i class="fas fa-id-card"></i>
                <input type="text" name="user_id" class="from-control @error('user_id') is-invalid @enderror" value="{{ old('user_id') }}" autocomplete="user_id" autofocus placeholder="171-15-XXX" />
            </div>
                @error('user_id')
                    <div style="color: red;">{{ $message }}</div>
                @enderror

            <div class="login-input-field">
                <i class="fas fa-graduation-cap"></i>
                <input type="text" name="department" class="from-control @error('department') is-invalid @enderror" value="{{ old('department') }}" autocomplete="department" autofocus placeholder="CSE" />
            </div>
                @error('department')
                    <div style="color: red;">{{ $message }}</div>
                @enderror

            <div class="login-input-field">
                <i class="fas fa-phone"></i>
                <input type="text" name="phone_no" class="from-control @error('phone_no') is-invalid @enderror" value="{{ old('phone_no') }}" autocomplete="phone_no" autofocus placeholder="+88017XXXXXXXX" />
            </div>
                @error('phone_no')
                    <div style="color: red;">{{ $message }}</div>
                @enderror

            <div class="login-input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" class="from-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="abc15-14XX@diu.edu.bd" />
            </div>
                @error('email')
                    <div style="color: red;">{{ $message }}</div>
                @enderror

            <div class="login-input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" class="from-control @error('password') is-invalid @enderror" value="{{ old('password') }}" autocomplete="password" autofocus placeholder="Password" />
            </div>
                @error('password')
                    <div style="color: red;">{{ $message }}</div>
                @enderror

            <button name="signup-btn" class="btn">signup</button>
            <br><br> (
            <a href="{{route('student.login')}}" style="color: red;
                   font-size: 0.9rem;"> Login</a>)

        </form>
    </div>
</div>
<script type="text/javascript" src="{{asset('assets/frontend/js/lonc.js')}}"></script>
</body>

</html>



