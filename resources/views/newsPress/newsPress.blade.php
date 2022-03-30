<div class="newspress" id="newspress">
    <div class="newspress-container">
        <h2 class="news-press-title">
            @if(App::isLocale('en'))
                News & Press
            @endif
            @if(App::isLocale('ru'))
                Новости и Пресса
            @endif
            @if(App::isLocale('arm'))
                Նորություններ և մամուլ
            @endif

        </h2>
        <div class="small-news-press">
            @foreach($news_press_null_img as $newsSmall)
                <div class="news-press-item">
                    <div class="data">
                        <p class="main-data">{{$newsSmall->data_en ?? $newsSmall->data_ru ?? $newsSmall->data_arm }}</p>
                    </div>
                    <div class="news-press-text">
                        <h4>{{$newsSmall->title_en ??$newsSmall->title_ru ??$newsSmall->title_arm }}</h4>
                        <p>{{$newsSmall->text_en ?? $newsSmall->text_ru ?? $newsSmall->text_arm}}</p>
                    </div>
                </div>
            @endforeach
            <div class="social-news-press">
                <a href=""><img src="/img/telegram-icon2.png" alt=""></a>
                <a href=""><img src="/img/facebook-icon2.png" alt=""></a>
                <a href=""><img src="/img/messanger-icon2.png" alt=""></a>
            </div>
        </div>

        <div class="big-news-press">
            @foreach($news_press as $news)
                <div class="big-news-item">
                    <img src='{{$news->img}}' alt="" class="big-news-img">
                    <p class="big-news-data">{{$news->data_en ?? $news->data_ru ?? $news->data_arm}}</p>
                    <h4 class="big-news-title">{{$news->title_en ?? $news->title_ru ?? $news->title_arm}}</h4>
                    <p class="big-news-text">{{$news->text_en ?? $news->text_ru ?? $news->text_arm}}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>

