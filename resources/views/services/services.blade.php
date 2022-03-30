<div class="services" id="serv">
    <div class="services-container">
        <h2>
            @if(App::isLocale('en'))
                Services
            @endif
            @if(App::isLocale('ru'))
                Сервисы
            @endif
            @if(App::isLocale('arm'))
                Ծառայություններ
            @endif
        </h2>
        <div class="services-items">
            @foreach($services as $serv)
                <div class="services-item">
                    <div class="services-bg service1">
                        <img class="services_img" src="{{$serv->bg}}" alt="">
                        <img src="{{$serv->icon}}" alt="" class="services-icon">
                    </div>
                    <p class="services-text">{{$serv->title_en ?? $serv->title_ru ?? $serv->title_arm}}</p>
                </div>
            @endforeach
        </div>

    </div>
</div>
