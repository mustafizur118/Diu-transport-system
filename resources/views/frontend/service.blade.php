@extends('layouts.frontend.master')
@section('title', 'Service')
@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="{{asset('assets/frontend/style/ak.css')}}">
@endsection

@section('content')
    <div style="width: 100%;height:50px ; background: rgb(6, 100, 121)"></div>
    <div class="service">
        <div class="containerser"><br><br>
            <h1 class="ser-head">Our Service</h1>
            <div class="slider-ser">
                <div class="ser-silder">
                    @foreach($services as $service)
                        <div class="ser-card ">
                            <div class="ser-image ser-flex ser-items-center ser-justify-center ">
                                <img src="{{asset($service->image)}}" alt=" ">
                            </div>
                            <hr>
                            <div>
                                <h2 class="ser-text-center" style="font-size: 20px">{{$service->title}}</h2>
                                <div class="price ser-text-center "style="font-size: 12px">
                                    {{Str::limit($service->description, 80)}}
                                </div>
                              <button class="btn "><a href="{{route('stuffinfo', $service->category_id)}}">Conatct</a></button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-circle justify-content-center">
                        <li class="page-item ">
                            <a class="page-link ser-pres-btn" style="border-radius: 20px;" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="page-item">
                            <a class="page-link ser-nexts-btn" style="border-radius: 20px;" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- Pagination End -->
                <br>
                <br><br>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript " src="https://code.jquery.com/jquery-1.11.0.min.js "></script>
    <script type="text/javascript " src="https://code.jquery.com/jquery-migrate-1.2.1.min.js "></script>
    <script type="text/javascript " src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js "></script>
    <script src="{{asset('assets/frontend/js/ak.js')}}"></script>
@endsection

