@extends('admin.admin')
@section('current-block')
    <div id="projects-site">
        @include('featuredProjects.project')
        <div class="project-site-admin">
            <ul class="project-item-list">
                @foreach($projects as $project)
                    <div class="projects-item">
                        <img class="project-item-img" src="{{$project->img_path}}" alt="">
                        <div class="project-item-text">
                            <h3>{{$project->adress_en}}</h3>
                            <p>{{$project->text_en}}</p>
                        </div>
                        <form action="{{route('admin.project.destroy' , ['id' => $project->id])}}" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button class="btn my-4 btn-dark" type="submit">Delete</button>
                        </form>
                    </div>
                @endforeach

            </ul>
            <div class="form-project">
                <form action="{{route('admin.project.store')}}" method="POST" enctype="multipart/form-data">
                    <h4>Create project form</h4>
                    {{ method_field('POST') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">project adress en</label>
                        <input type="text" class="form-control py-3" name="adress_en" value="{{old('adress_en')}}"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="project adress en">
                        <div class="medium text-secondary">
                            @error('adress_en')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">project adress ru</label>
                        <input type="text" class="form-control py-3" name="adress_ru" value="{{old('adress_ru')}}"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="project adress ru">
                        <div class="medium text-secondary">
                            @error('adress_ru')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">project adress arm</label>
                        <input type="text" class="form-control py-3" name="adress_arm" value="{{old('adress_arm')}}"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="project adress arm">
                        <div class="medium text-secondary">
                            @error('adress_arm')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">project text en</label>
                        <input type="text" class="form-control py-3" name="text_en" value="{{old('text_en')}}"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="project text en">
                        @error('text_en')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">project text ru</label>
                        <input type="text" class="form-control py-3" name="text_ru" value="{{old('text_ru')}}"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="project text ru">
                        @error('text_en')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">project text arm</label>
                        <input type="text" class="form-control py-3" name="text_arm" value="{{old('text_arm')}}"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="project text arm">
                        @error('text_en')
                        {{$message}}
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">project img path</label>
                        <input type="text" class="form-control py-3" name="img_url" value="{{old('img_url')}}"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="project img path">
                        @error('img_url')
                        {{$message}}
                        @enderror
                    </div>
                    <h4>Or</h4>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">projects img upload</label>
                        <input type="file" class="form-control " name="upload_photo" style="height: 39px;padding: 4px;"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="Not required img">
                    </div>
                    <button type="submit" class="btn btn-secondary mb-2">Create</button>
                </form>

                <form enctype="multipart/form-data" action="{{route('admin.project.update')}}" method="POST">
                    <h4>Update project form</h4>
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}

                    <button type="submit" class="btn btn-secondary mb-2">Update</button>
                    <select class="custom-select" name="selectedProject">
                        @foreach($projects as $project)
                            <option value="{{$project->id}}">{{$project->adress_en}}</option>
                        @endforeach
                    </select>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">project adress en</label>
                        <input type="text" class="form-control py-3" name="adress_en" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="adress en">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">project adress ru</label>
                        <input type="text" class="form-control py-3" name="adress_ru" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="adress ru">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">project adress </label>
                        <input type="text" class="form-control py-3" name="adress_arm" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="adress arm">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">project text en</label>
                        <input type="text" class="form-control py-3" name="text_en" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="en">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">project text ru</label>
                        <input type="text" class="form-control py-3" name="text_ru" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="ru">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">project text arm</label>
                        <input type="text" class="form-control py-3" name="text_arm" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="arm">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">project img path</label>
                        <input type="text" class="form-control py-3" name="img_url" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="this is default value #">
                    </div>
                    <h4>Or</h4>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Update img upload</label>
                        <input type="file" class="form-control " name="upload_photo" style="height: 39px;padding: 4px;"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="Not required img">
                    </div>
                    <button type="submit" class="btn btn-secondary mb-2">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
