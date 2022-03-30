@extends('admin.admin')
@section('current-block')
    <div id="services-site">
        @include('services.services')
        <div class="service_change">
            <ul class="services-lists">
                @foreach($services as $serv)
                    <li class="services-list">
                        <div class="services-item">
                            <div class="services-bg service1">
                                <img class="services_img" src="{{$serv->bg}}" alt="">
                                <img src="{{$serv->icon}}" alt="" class="services-icon">
                            </div>
                            <p class="services-text">{{$serv->title}}</p>
                        </div>
                        <form action="{{route('admin.services.destroy' , ['id'=> $serv->id])}}" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}

                            <button class="btn my-4 btn-dark" type="submit">Delete</button>
                        </form>
                    </li>
                @endforeach
            </ul>
            <div class="services-form">
                <form action="{{route('admin.services.store')}}" method="POST" enctype="multipart/form-data">
                    <h4>Create Services form</h4>
                    {{ method_field('POST') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">service title en</label>
                        <input type="text" class="form-control py-3" value="{{old('title_en')}}" name="title_en"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="Service title">
                        <div class="medium text-secondary">
                            @error('title_en')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">service title ru</label>
                        <input type="text" class="form-control py-3" value="{{old('title_ru')}}" name="title_ru"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="Service title">
                        <div class="medium text-secondary">
                            @error('title_ru')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">service title arm</label>
                        <input type="text" class="form-control py-3" value="{{old('title_arm')}}" name="title_arm"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="Service title">
                        <div class="medium text-secondary">
                            @error('title_arm')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">service icon path</label>
                        <input type="text" class="form-control py-3" value="{{old('icon')}}" name="icon"
                               id="exampleFormControlInput1" placeholder="Service icon path" aria-label="Default">
                        <div class="medium text-secondary">
                            @error('icon')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">service background img path</label>
                        <input type="text" class="form-control py-3" value="{{old('bg')}}" name="bg"
                               id="exampleFormControlInput1" placeholder="Service img path" aria-label="Default">
                        <div class="medium text-secondary">
                            @error('bg')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <h4>Or</h4>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">service img icon upload</label>
                        <input type="file" class="form-control " name="upload_photo_icon"
                               style="height: 39px;padding: 4px;" id="exampleFormControlInput1" aria-label="Default"
                               placeholder="Not required img">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">service img bg upload</label>
                        <input type="file" class="form-control " name="upload_photo_bg"
                               style="height: 39px;padding: 4px;" id="exampleFormControlInput1" aria-label="Default"
                               placeholder="Not required img">
                    </div>
                    <button type="submit" class="btn btn-secondary mb-2">Create</button>
                </form>


                <form enctype="multipart/form-data" action="{{route('admin.services.update')}}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <h4>Edit services form</h4>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Choice the service</label>

                        <select class="custom-select" name="selectedServ">
                            @foreach($services as $serv)
                                <option value="{{$serv->id}}">{{$serv->title_en}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">service title en</label>
                        <input type="text" class="form-control py-3" name="title_en" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="service title en">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">service title ru</label>
                        <input type="text" class="form-control py-3" name="title_ru" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="service title ru">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">service title arm</label>
                        <input type="text" class="form-control py-3" name="title_arm" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="service title arm">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">service icon path</label>
                        <input type="text" class="form-control py-3" name="icon" id="exampleFormControlInput1"
                               aria-label="Default">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">service background img path</label>
                        <input type="text" class="form-control py-3" name="bg" id="exampleFormControlInput1"
                               aria-label="Default">
                    </div>
                    <h4>Or</h4>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">service img icon upload</label>
                        <input type="file" class="form-control " name="upload_photo_icon"
                               style="height: 39px;padding: 4px;" id="exampleFormControlInput1" aria-label="Default"
                               placeholder="Not required img">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">service img bg upload</label>
                        <input type="file" class="form-control " name="upload_photo_bg"
                               style="height: 39px;padding: 4px;" id="exampleFormControlInput1" aria-label="Default"
                               placeholder="Not required img">
                    </div>
                    <button type="submit" class="btn btn-secondary mb-2">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
