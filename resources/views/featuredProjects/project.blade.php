<div class="projects" id="projects">
    <div class="projects-container">
        <div class="project-text-part">
            @if(App::isLocale('en'))
                <h2 class="projects-title">

                    Featured Projects
                </h2>
                <p class="projects-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing
                </p>
            @endif
            @if(App::isLocale('ru'))
                <h2 class="projects-title">
                    Избранные проекты
                </h2>
                <p class="projects-text">
                    Боль сама любовь, главный парень
                </p>
            @endif
            @if(App::isLocale('arm'))
                <h2 class="projects-title">
                    Առաջարկվող նախագծեր
                </h2>
                <p class="projects-text">
                    Ցավն ինքնին սերն է, գլխավոր տղան
                </p>
            @endif


        </div>
        <div class="project-slider">
            @foreach($projects as $project)
                <div class="projects-item">
                    <img class="project-item-img" src="{{$project->img_path}}" alt="">
                    <div class="project-item-text">
                        <h3>{{$project->adress_en ?? $project->adress_ru ?? $project->adress_arm}}</h3>
                        <p>{{$project->text_en ?? $project->text_ru ?? $project->text_arm}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
