
<ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
</ul>

<div class="carousel-inner" style="height: 400px;">
    @foreach($sliders as $slider)
        <div class="carousel-item" style="margin-bottom: 30px;">
            <img src="{{asset($slider->image)}}" alt="Los Angeles" style="width: 100%; height:450px">
            <div class="carousel-caption" style="margin-bottom: 30px;">
                <h3 style="text-shadow: 2px 2px 5px rgb(0, 0, 0);">{{$slider->title}}</h3>
                <p style="font-size: 16px;text-shadow: 2px 2px 5px rgb(7, 1, 1);">{{$slider->description}}</p>
            </div>
        </div>
    @endforeach
</div>

    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>

<script>
        document.querySelector(".carousel-inner").firstElementChild.setAttribute("class","active carousel-item");
</script>
