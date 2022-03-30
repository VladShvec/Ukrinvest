<div id="our-mission">
    <div class="container">
        <div id="our-mission-container">
            @foreach($our_missions as $mission)
                <h2 id="our-mission-title">{{$mission->title_en ?? $mission->title_ru ?? $mission->title_arm}}</h2>
                <p id="our-mission-text">
                    {{$mission->text_en ?? $mission->text_ru ?? $mission->text_arm}}
                </p>
                <a class="our-mission-link"
                   href="{{$mission->url}}">{{$mission->link_text_en ?? $mission->link_text_ru ?? $mission->link_text_arm}}</a>
            @endforeach
        </div>
    </div>
</div>
