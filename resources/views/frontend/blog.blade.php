@extends('layouts.frontend.master')
@section('title', 'Blog')

@section('css')
    <link rel="stylesheet" href="{{asset('assets/frontend/style/most_post.css')}}">
@endsection

@section('content')
<div style="width: 100%;height:50px ; background: rgb(6, 100, 121)">
</div>
<br><br>

<div class="auto-container">
    <div class="row clearfix">

        <!--Content Side-->
        <div class="content-side col-lg-8 col-md-12 col-sm-12">

            <!--Marquee-->
            <div class="sec-news">
                <marquee> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </marquee>
            </div>
            <div class="letest-title">
                <p>Letest News</p>
            </div>
            <!--Marquee End-->


            <div class="content-blocks">

                <!--News Block Four-->
                <div class="news-block-four">
                    <div class="inner-box">
                        <div class="row clearfix">
                          @foreach($posts as $post)
                            <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                <div class="image">
                                    <a href="{{route('post.details', $post->id)}}"><img src="{{$post->image}}" alt="" /></a>
                                </div>
                            </div>
                            <div class="content-box col-lg-6 col-md-6 col-sm-12">
                                <div class="content-inner">
                                    <h3><a href="{{route('post.details', $post->id)}}">{{$post->title}}</a></h3>
                                    <ul class="post-meta">
                                        <li><span class="icon fa fa-clock-o"></span>{{$post->published_at->format('M d, Y')}}</li>
                                        <li><span class="icon fa fa-comments"></span>9</li>
                                        <li><span class="icon fa fa-eye"></span>{{$post->view_count }}</li>
                                    </ul>
                                    <div class="text">{{Str::limit($post->description, 170)}}...<a href="{{route('post.details', $post->id)}}" class="read-more">Read More </a></div>
                                </div>
                            </div>
                          @endforeach
                        </div>
                    </div>
                </div>
                <!-- END News Block Four-->


            <!-- Pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center" style="font-size: 14px;padding: 5px;">
                        <li class="page-item ">
                            <span class="page-link">
                                {{$posts->render()}}
                                <span class="sr-only">(current)</span>
                            </span>
                        </li>
                    </ul>
                </nav>
           <!-- Pagination End -->


                <br><br>
            </div>
        </div>

        <!--Sidebar Side-->
        <!--Sidebar Side-->
        <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
            @include('layouts.frontend._sidebar')
        </div>
    </div>
</div>
</div>

@endsection
