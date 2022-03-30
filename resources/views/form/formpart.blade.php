<div class="form" id="form">
    <div class="form-container">
        <div class="form-text">
            <h4 class="form-title">
                @if(App::isLocale('en'))
                    Contacts
                @endif
                @if(App::isLocale('ru'))
                    Контакты
                @endif
                @if(App::isLocale('arm'))
                    Կոնտակտներ
                @endif
            </h4>
            @foreach($form as $contact)
                <p class="form-email">{{$contact->forms_title}}</p>
            @endforeach
        </div>
        <div class="form-wrapper">
            <form action="" method="POST">
                @csrf
                <div class="inputs">
                    <input name="name" type="text"
                           placeholder="@if(App::isLocale('en'))Name*@elseif(App::isLocale('ru'))Имя*@elseif(App::isLocale('arm'))Անուն*@endif">
                    <input name="email" type="email"
                           placeholder="@if(App::isLocale('en'))E-mail*@elseif(App::isLocale('ru'))Эллектронная почта*@elseif(App::isLocale('arm'))Էլեկտրոնային հասցե*@endif">
                    <input name="subjects" type="text"
                           placeholder="@if(App::isLocale('en'))Subject*@elseif(App::isLocale('ru'))Тема*@elseif(App::isLocale('arm'))Թեմա*@endif">
                </div>
                <textarea name="teaxarea" id="">

        </textarea>
                <div class="sub">
                    <button type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
