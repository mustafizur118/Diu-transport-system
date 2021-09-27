@extends('layouts.frontend.master')
@section('title', 'Home')

@section('content')
    <div id="demo" class="carousel slide" data-ride="carousel">
        @include('layouts.frontend._slider')
    </div>

    <div class="sidebar-page-container" style="margin:-70px 0px -70px ">
        <div class="auto-container">
            <div class="row clearfix">
                    <!--Content Side-->
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <!--Category Tabs Box-->
                        <div class="category-tabs-box">
                            <!--Product Tabs-->
                            <div class="prod-tabs tabs-box">

                                <!--Tabs Container-->
                                <div class="tabs-content">

                                    <!--Tab / Active Tab-->
                                    <div class="tab active-tab" id="prod-alls">
                                        <div class="content">

                                            <div class="row clearfix">

                                                <!-- News Block Two -->
                                                <div class="news-block-two col-sm-12">

                                                    <!--Marquee-->

                                                    <div class="sec-news">
                                                        <marquee> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                            aliquip ex ea commodo consequat.
                                                        </marquee>
                                                    </div>
                                                    <div class="letest-title">
                                                        <p>Letest News</p>
                                                    </div>

                                                    <!--Marquee End-->

                                                    <div class="inner-box">
                                                        @foreach($videos as $video)
                                                            <div class="image">
                                                                <img src="{{asset($video->image)}}" />
                                                                <div class="category"><a href="{{$video->link}}">Video</a></div>
                                                                <a href="https://www.youtube.com/watch?v=sL0oTexGTc4" target="_blank" class="lightbox-image overlay-box">
                                                                    <span class="fa fa-play-circle"><i class="ripple"></i></span>
                                                                </a>
                                                            </div>

                                                            <div class="lower-box">
                                                                <h3>
                                                                    {{$video->title}}
                                                                </h3>
                                                                <ul class="post-meta">
                                                                    <li><span class="icon fa fa-clock-o"></span>{{$video->published_at->format('M d, Y')}}</li>
                                                                    <li><span class="icon fa fa-comments"></span>3</li>
                                                                    <li><span class="icon fa fa-eye"></span>{{$video->view_count }}</li>
                                                                </ul>
                                                                <div class="text">{{$video->description}}</div>

                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <br>

                                                <!-- News Block Two -->
                                                <div class="news-block-two col-md-6 col-sm-12">
                                                    <div class="inner-box">

                                                        <div class="single-item-carousel owl-carousel owl-theme">
                                                            <div class="image">
                                                                <img src="{{asset('assets/frontend/images/noid1.jpg')}}" alt="" />
                                                                <div class="category"><a href="#">Show ID</a></div>
                                                            </div>

                                                        </div>

                                                        <div class="lower-box">
                                                            <h3>
                                                                NO ID NO Service
                                                            </h3>
                                                            <ul class="post-meta">
                                                                <li><span class="icon fa fa-clock-o"></span>February 16, 2020
                                                                </li>
                                                                <li><span class="icon fa fa-comments"></span>3</li>
                                                                <li><span class="icon fa fa-eye"></span>1524</li>
                                                            </ul>
                                                            <div class="text">
                                                                The ID card you have been issued represents your identity. Wearing ID card at all times helps the security personnel and others to ....
                                                            </div>
                                                            <a href="bloghome.html" class="read-more">Read More </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- News Block Two -->
                                                <div class="news-block-two col-md-6 col-sm-12">
                                                    <div class="inner-box">

                                                        <div class="single-item-carousel owl-carousel owl-theme">
                                                            <div class="image">
                                                                <img src="{{asset('assets/frontend/images/noid1.jpg')}}" alt="" />
                                                                <div class="category"><a href="#">Show ID</a></div>
                                                            </div>

                                                        </div>

                                                        <div class="lower-box">
                                                            <h3>
                                                                NO ID NO Service
                                                            </h3>
                                                            <ul class="post-meta">
                                                                <li><span class="icon fa fa-clock-o"></span>February 16, 2020
                                                                </li>
                                                                <li><span class="icon fa fa-comments"></span>3</li>
                                                                <li><span class="icon fa fa-eye"></span>1524</li>
                                                            </ul>
                                                            <div class="text">
                                                                The ID card you have been issued represents your identity. Wearing ID card at all times helps the security personnel and others to ....
                                                            </div>
                                                            <a href="bloghome.html" class="read-more">Read More </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Pagination -->
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination pagination-circle justify-content-center">
                                                    <li class="page-item ">
                                                        <a class="page-link active" style="border-radius: 20px;" aria-label="Previous">
                                                            <span aria-hidden="true">
                                                                &laquo;
                                                                <span class="sr-only">(current)</span>
                                                            </span>
                                                        </a>
                                                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <li class="page-item">
                                                        <a class="page-link" style="border-radius: 20px;" aria-label="Next">
                                                            <span aria-hidden="true">&raquo;</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </nav>
                                            <!-- Pagination End -->
                                            <br><br>

                                        </div>
                                    </div>

                                    <!--News Block Three-->
                                    <div class="news-block-four">
                                        <div class="inner-box">
                                            <div class="row clearfix">
                                                @foreach($featured_posts as $post)
                                                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                                        <div class="image">
                                                            <a href="{{route('post.details', $post->id)}}"><img src="{{asset($post->image)}}" alt="" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="content-box col-lg-6 col-md-6 col-sm-12">
                                                        <div class="content-inner">
                                                            <div class="category"><a href="{{route('post.details', $post->id)}}">Bonomaya</a></div>
                                                            <h3><a href="{{route('post.details', $post->id)}}">{{$post->title}}</a></h3>
                                                            <ul class="post-meta">
                                                                <li><span class="icon fa fa-clock-o"></span>{{$post->published_at->format('M d, Y')}}</li>
                                                                <li><span class="icon fa fa-comments"></span>7</li>
                                                                <li><span class="icon fa fa-eye"></span>{{$post->view_count}}</li>
                                                            </ul>
                                                            <div class="text">{{Str::limit($post->description, 170)}}...<a href="{{route('post.details', $post->id)}}" class="read-more">Read More</a></div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END News Block Three-->



                                    <!-- Pagination -->
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center" style="font-size: 14px;padding: 5px;">
                                            <li class="page-item ">
                                                <span class="page-link">
                                                    {{$featured_posts->render()}}
                                                    <span class="sr-only">(current)</span>
                                                </span>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- Pagination End -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Sidebar-->
                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        @include('layouts.frontend._sidebar')
                   </div>
            </div>
        </div>
    </div>
@endsection
