@extends('admin.admin')
@section('current-block')
    <div id="slider-site">
        @include('slider.slider')

        <div class="main-slider-block">
            <ul class="admin-slider-ul">
                @foreach($main_sliders as $slider)
                    <li class="admin-sliders">
                        <b>img</b>
                        <img class="admin_slider-img" src="{{$slider->img_path}}" alt="slider__img">
                        <b>text</b>
                        <p id="admin-slider-title">{{$slider->title}}</p>
                        <form action="{{route('admin.slider.destroy' , ['id' => $slider->id])}}" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button class="btn my-4 btn-dark" type="submit">Delete</button>
                        </form>
                    </li>
                @endforeach
            </ul>
            <div class="slider-form">
                <form action="{{route('admin.slider.store')}}" method="POST" enctype="multipart/form-data">
                    {{ method_field('POST') }}
                    {{ csrf_field() }}
                    <h4>Create slide form</h4>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">slider name</label>
                        <input type="text" class="form-control py-3 my-3" name="title_en" value="{{old('title_en')}}"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="Slider title">
                        <div class="medium text-secondary">
                            @error('title_en')
                            {{$message}}
                            @enderror
                        </div>
                        <input type="text" class="form-control py-3 my-3" name="title_ru" value="{{old('title_ru')}}"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="Slider title">
                        <div class="medium text-secondary">
                            @error('title_ru')
                            {{$message}}
                            @enderror
                        </div>
                        <input type="text" class="form-control py-3 my-3" name="title_arm" value="{{old('title_arm')}}"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="Slider title">
                        <div class="medium text-secondary">
                            @error('title_arm')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">slider img path</label>
                        <input type="text" class="form-control py-3" name="img_path" value="{{old('img_path')}}"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="Slider img path">
                        <div class="medium text-secondary">
                            @error('img_path')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">slider img upload</label>
                        <input type="file" class="form-control " name="upload_photo" style="height: 39px;padding: 4px;"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="Not required img">
                    </div>
                    <button type="submit" class="btn btn-secondary mb-2">Create</button>
                </form>
                <form enctype="multipart/form-data" action="{{route('admin.slider.update')}}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    {{--                    <input type="hidden" name="_method" value="PATCH">--}}
                    {{--                    <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                    <h4>Edit slide form</h4>


                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Choice the link</label>
                        <select class="custom-select" name="selectedslide">
                            @foreach($main_sliders as $slider)
                                <option value="{{$slider->id}}">{{$slider->title_en}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">slider name</label>
                        <input type="text" class="form-control py-3" name="title_en" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="Edit slider title">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">slider name ru</label>
                        <input type="text" class="form-control py-3" name="title_ru" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="Edit slider title RU">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">slider name arm</label>
                        <input type="text" class="form-control py-3" name="title_arm" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="Edit slider title ARM">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">slider img path</label>
                        <input type="text" class="form-control py-3" name="img_path" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="Edit slider imp path">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Update img upload</label>
                        <input type="file" class="form-control " name="upload_photo" style="height: 39px;padding: 4px;"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="Not required img">
                    </div>
                    <h2>Click to disable icons</h2>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="icon" style="width: 17px" value="0"
                               id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Disable social icon</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="icon" style="width: 17px" value="1"
                               id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Enable social icon</label>
                    </div>


                    <button type="submit" class="btn btn-secondary mb-2">Update</button>
                </form>

            </div>
        </div>
@endsection
