@extends('layouts.frontend.master')
@section('title', 'Developers')

@section('content')
    <div style="width: 100%;height:50px ; background: rgb(6, 100, 121)"></div>

    <div id="supervisor">
        <div class="supervisor cons">

            <div class="col-left">
                <div class="supervisor-img">
                    <img src="{{asset('assets/frontend/images/team/tajim.jpg')}}" alt="img">
                </div>
            </div>
            <div class="col-right">
                <h1 class="sup-title">supervi<span>Sor</span></h1>
                <h2>
                    Tajim Md. Niamat Ullah Akhund
                </h2>
                <br>
                <div>
                    <p class="pro-type">Lecturer</p>
                    <p class="pro-type">Department of CSE</p>
                    <p class="pro-type">Email : tajim.cse@diu.edu.bd</p>
                    <p class="pro-type">Daffodil International University</p>
                </div>
                <div class="icons-container" style="margin-left: 10px;">
                    <a href="https://www.facebook.com/apurbo.cse" target="_blank" class="icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/tajim_unmatched" target="_blank" class="icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com/Tajim53" target="_blank" class="icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.researchgate.net/profile/Tajim_Md_Niamat_Ullah_Akhund2" class="icon">
                        <i class="fas fa-globe"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section id="">
        <div class="inner-width">
            <div class="co-supervisor-content">
                <div class="col-right">
                    <h4><span style="color: red;">Co-</span>Supervisor</h4>
                    <h6>
                        Mohammad Jahangir Alam
                    </h6>
                    <br>
                    <div>
                        <p class="pro-type">Lecturer</p>
                        <p class="pro-type">Department of CSE</p>
                        <p class="pro-type">Email : jahangir.cse@diu.edu.bd</p>
                        <p class="pro-type">Daffodil International University</p>
                    </div>
                    <div class="icons-container" style="margin-left: 10px;">
                        <a href="#" target="_blank" class="icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" target="_blank" class="icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" target="_blank" class="icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" target="_blank" class="icon">
                            <i class="fas fa-globe"></i>
                        </a>
                    </div>
                </div><br>

                <img src="{{asset('assets/frontend/images/team/jahangir.jpg')}}" alt="" class="co-supervisor-pic" style="margin-top: 10px;">
            </div>
        </div>
    </section>

    <div class="team">
        <h1 class="heading">Meet The Team</h1>
        <div class="card-wraper">
            <div class="team-card">
                <img src="{{asset('assets/frontend/images/team/p.jpg')}}" alt="team-card background" class=team-card-img>
                <img src="{{asset('assets/frontend/images/team/apurbo.jpg')}}" alt="profile images" class="profile-img"><br>
                <h1>Apurbo Kumar Anup</h1>
                <h3 class="job">Web Developer & UI/UX Deginer</h3>
                <div>

                    <h3 class="pro">Profile</h3>
                    <p class="pro-type">Department : CSE</p>
                    <p class="pro-type">Phone : 01732955937</p>
                    <p class="pro-type">Email : apurbo15-1335@diu.edu.bd</p>
                </div>
                <div class="icons-container" style="margin-left: 10px;">
                    <a href="https://www.facebook.com/apurbo.cse" target="_blank" class="icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/apurbo.cse" target="_blank" class="icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com/Apurbocse_roy" target="_blank" class="icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="http://apurboroy.me/" target="_blank" class="icon">
                        <i class="fas fa-globe"></i>
                    </a>
                </div>
                <ul class="social-media">
                </ul>
            </div>

            <div class="team-card">
                <img src="{{asset('assets/frontend/images/team/p.jpg')}}" alt="team-card background" class=team-card-img>
                <img src="{{asset('assets/frontend/images/team/mijanur.jpg')}}" alt="profile images" class="profile-img"><br>
                <h1>Mizanur Rahaman Raihan</h1>
                <h3 class="job">Full Stack Web Developer</h3>
                <div>

                    <h3 class="pro">Profile</h3>
                    <p class="pro-type">Department : CSE</p>
                    <p class="pro-type">Phone : 01749969029</p>
                    <p class="pro-type">Email : mizahur15-1452@diu.edu.bd</p>
                </div>
                <div class="icons-container" style="margin-left: 10px;">
                    <a href="https://www.facebook.com/profile.php?id=100014307134284" target="_blank" class="icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/mizanur_bd" target="_blank" class="icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com/RaihanMizanur" target="_blank" class="icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="http://www.mizanurbd.com/" target="_blank" class="icon">
                        <i class="fas fa-globe"></i>
                    </a>
                </div>
                <ul class="social-media">
                </ul>
            </div>

            <div class="team-card">
                <img src="{{asset('assets/frontend/images/team/p.jpg')}}" alt="team-card background" class=team-card-img>
                <img src="{{asset('assets/frontend/images/team/mustafijur.jpg')}}" alt="profile images" class="profile-img"><br>
                <h1>MD. Mustafizur Rahaman</h1>
                <h3 class="job">Django Developer</h3>
                <div>

                    <h3 class="pro">Profile</h3>
                    <p class="pro-type">Department : CSE</p>
                    <p class="pro-type">Phone : 01952544519</p>
                    <p class="pro-type">Email : mustafizur15-1456@diu.edu.bd</p>
                </div>
                <div class="icons-container" style="margin-left: 10px;">
                    <a href="https://www.facebook.com/Fizz2345" target="_blank" class="icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" target="_blank" class="icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com/musta1456" target="_blank" class="icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" target="_blank" class="icon">
                        <i class="fas fa-globe"></i>
                    </a>
                </div>
                <ul class="social-media">
                </ul>
            </div>

            <div class="team-card">
                <img src="{{asset('assets/frontend/images/team/p.jpg')}}" alt="team-card background" class=team-card-img>
                <img src="{{asset('assets/frontend/images/team/dipok.jpg')}}" alt="profile images" class="profile-img"><br>
                <h1>Dipok Biswas</h1>
                <h3 class="job">Software Engineer</h3>
                <div>

                    <h3 class="pro">Profile</h3>
                    <p class="pro-type">Department : CSE</p>
                    <p class="pro-type">Phone : 01772887262</p>
                    <p class="pro-type">Email : dipok15-1460@diu.edu.bd</p>
                </div>

                <div class="icons-container" style="margin-left: 10px;">
                    <a href="https://www.facebook.com/profile.php?id=100004991234822" target="_blank" class="icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" target="_blank" class="icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" target="_blank" class="icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" target="_blank" class="icon">
                        <i class="fas fa-globe"></i>
                    </a>
                </div>

                <ul class="social-media">

                </ul>
            </div>
        </div>
    </div>
    <br><br>
@endsection



