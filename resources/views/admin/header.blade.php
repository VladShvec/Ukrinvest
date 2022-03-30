@extends('admin.admin')
@section('current-block')
    <div id="header-site">
        @include('header.header')
        <div class="admin-header-editor">
            <ul class="admin-header-nav-list">
                @foreach($header as $link)
                    <li class="admin-header-nav-list-li">
                        <strong>{{$link->id}}</strong>
                        <div>
                            <p>
                                text: <b>{{$link->text_en}}</b> link to <b>{{$link->url}}</b>
                            </p>
                            <form action="{{route('admin.header.destroy' , ['id' => $link->id])}}" method="POST">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                {{--                         <a  id="delete-button-header" class="badge badge-dark" href="{{route("admin.header.destroy", ['id' => $link->id])}}">--}}
                                <button class="btn my-4 btn-dark" type="submit">Delete</button>
                                {{--                         </a>--}}
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="header-form">

                <form action="{{route('admin.header.store')}}" method="POST">
                    <h4>Create Link form</h4>
                    {{ method_field('POST') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">link name</label>
                        <input type="text" class="form-control py-3 my-3" name="text_en" value="{{old('text_en')}}"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="link name">
                        <div class="medium text-secondary">
                            @error('text_en')
                            {{$message}}
                            @enderror
                        </div>
                        <input type="text" class="form-control py-3 my-3" name="text_ru" value="{{old('text_ru')}}"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="link name ru">
                        <div class="medium text-secondary">
                            @error('text_ru')
                            {{$message}}
                            @enderror
                        </div>
                        <input type="text" class="form-control py-3 my-3" name="text_arm" value="{{old('text_arm')}}"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="link name arm">
                        <div class="medium text-secondary">
                            @error('text_arm')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">link url</label>
                        <input type="text" class="form-control py-3" value="{{old('link_url')}}" name="link_url"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="this is default value #">
                        <div class="medium text-secondary">
                            @error('link_text')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary mb-2">Create</button>
                </form>


                <form action="{{route('admin.header.update')}}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <h4>Edit Link form</h4>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Choice the link</label>
                        <select class="custom-select" name="selectedlink">
                            @foreach($header as $link)
                                <option value="{{$link->id}}">{{$link->text_en}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">link name EN</label>
                        <input type="text" class="form-control py-3" name="text_en" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="link name EN">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">link name RU</label>
                        <input type="text" class="form-control py-3" name="text_ru" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="link name RU">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">link name ARM</label>
                        <input type="text" class="form-control py-3" name="text_arm" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="link name ARM">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">link url</label>
                        <input type="text" class="form-control py-3" value="#" name="link_url"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="this is default value #">
                    </div>
                    <button type="submit" class="btn btn-secondary mb-2">Update</button>
                </form>
            </div>
        </div>

    </div>
@endsection
