<div class="slider-main-container" id="slider-main-container">
    <div class="slider">
        @foreach($main_sliders as $slider)
            <div class="slider__item">
                <img class="slider__img" src="{{$slider->img_path}}" alt="slider__img">
                <div class="slider-container">
                    <h1 id="slider-title">{{$slider->title_en ?? $slider->title_ru ?? $slider->title_arm}}</h1>
                </div>

            </div>
        @endforeach
    </div>
    <div id="social-media">
        @foreach($icons as $icon)
            <a href="{{$icon->link_path}}"><img src="{{$icon->img_path}}" alt=""></a>
        @endforeach
    </div>
    <div id="arr">
        <a href="#" id="arr-button" class="arr"><img src="/img/arrow-down-slider.png" alt=""></a>
    </div>
</div>
