<header id="header">
    <div class="header-container container-fluid">
        <div class="logo">
            <a href="#" class="logo-link">
                <p class="logo-text">Ukrinvest</p>
            </a>
        </div>
        <nav>
            <ul>
                @if(App::isLocale('en'))
                    @foreach($header as $link)
                        <li><a href="{{$link->url}}" id="{{$link->page_id}}">{{$link->text_en}}</a></li>
                    @endforeach
                @endif
                @if(App::isLocale('ru'))
                    @foreach($header as $link)
                        <li><a href="{{$link->url}}" id="{{$link->page_id}}">{{$link->text_ru }}</a></li>
                    @endforeach
                @endif
                @if(App::isLocale('arm'))
                    @foreach($header as $link)
                        <li class="li-arm"><a href="{{$link->url}}" style="font-size: 20px;"
                                              id="{{$link->page_id}}">{{$link->text_arm}}</a></li>
                    @endforeach
                @endif

            </ul>
        </nav>
        <div class="lang">
            <div id="lang-under">
                <button id="en" class="active"><a href="{{route('locale', ['locale' => 'en'])}}">En</a></button>
                <button id="ru"><a href="{{route('locale', ['locale' => 'ru'])}}">Ru</a></button>
                <button id="arm"><a href="{{route('locale', ['locale' => 'arm'])}}">Arm</a></button>
            </div>
        </div>
        <div class="burger">
            <span></span>
            <div class="menu">
                <ul>
                    @foreach($header as $link)
                        <li><a href="{{$link->url}}"
                               id="{{$link->page_id}}">{{$link->text_en ?? $link->text_ru ?? $link->text_arm}}</a></li>
                    @endforeach
                    <li>
                        <div class="lang">
                            <div id="lang-under2">
                                <button id="en"><a href="{{route('locale', ['locale' => 'en'])}}">En</a></button>
                                <button id="ru"><a href="{{route('locale', ['locale' => 'ru'])}}">Ru</a></button>
                                <button id="arm"><a href="{{route('locale', ['locale' => 'arm'])}}">Arm</a></button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</header>
