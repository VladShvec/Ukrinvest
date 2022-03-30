@extends('admin.admin')
@section('current-block')
    <div id="form-site">
        @include('form.formpart')

        <ul>
            @foreach($form as $for)
                <li>
                    {{$for->forms_title}}
                    <form action="{{route('admin.form.destroy' , ['id' => $for->id])}}" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        {{--                         <a  id="delete-button-header" class="badge badge-dark" href="{{route("admin.header.destroy", ['id' => $link->id])}}">--}}
                        <button class="btn my-4 btn-dark" type="submit">Delete</button>
                        {{--                         </a>--}}
                    </form>
                </li>
            @endforeach
        </ul>
        <form action="{{route('admin.form.store')}}" method="POST">
            <h4>Create form link form</h4>
            {{ method_field('POST') }}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleFormControlInput1">form name</label>
                <input type="text" class="form-control py-3" name="form_name" value="{{old('form_name')}}"
                       id="exampleFormControlInput1" aria-label="Default" placeholder="link name">
                <div class="medium text-secondary">
                    @error('form_name')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-secondary mb-2">Create</button>
        </form>
    </div>
@endsection
