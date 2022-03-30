@extends('admin.admin')
@section('current-block')
    <div id="footer-site">
        @include('footer.footerpart')
        <div class="footer-changer">
            <ul class="footer-lists">
                @foreach($footer as $foot)
                    <li>{{$foot->text_en}}
                        <form action="{{route('admin.footer.destroy' , ['id'=> $foot->id])}}" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button class="btn my-4 btn-dark" type="submit">Delete</button>
                        </form>
                    </li>
                @endforeach
            </ul>
            <div class="footer-forms">
                <form action="{{route('admin.footer.store')}}" method="POST">
                    <h4>Create footer link form</h4>
                    {{ method_field('POST') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">footer name en</label>
                        <input type="text" class="form-control py-3" name="text_en" value="{{old('text_en')}}"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="link name en">
                        <div class="medium text-secondary">
                            @error('text_en')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">footer name ru</label>
                        <input type="text" class="form-control py-3" name="text_ru" value="{{old('text_ru')}}"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="link name ru">
                        <div class="medium text-secondary">
                            @error('text_ru')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">footer name arm</label>
                        <input type="text" class="form-control py-3" name="text_arm" value="{{old('text_arm')}}"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="link name arm">
                        <div class="medium text-secondary">
                            @error('text_arm')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">footer url</label>
                        <input type="text" class="form-control py-3" value="{{old('link_url')}}" name="link_url"
                               id="exampleFormControlInput1" aria-label="Default" placeholder="this is default value #">
                        <div class="medium text-secondary">
                            @error('link_url')
                            {{$message}}
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary mb-2">Create</button>
                </form>

                <form action="{{route('admin.footer.update')}}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Choice the footer link</label>
                        <select class="custom-select" name="selectedFooter">
                            @foreach($footer as $foot)
                                <option value="{{$foot->id}}">{{$foot->text_en}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Footer link title en</label>
                        <input type="text" class="form-control py-3" name="text_en" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="link name">

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Footer link title ru</label>
                        <input type="text" class="form-control py-3" name="text_ru" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="link name">

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Footer link title arm</label>
                        <input type="text" class="form-control py-3" name="text_arm" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="link name">

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Footer link url</label>
                        <input type="text" class="form-control py-3" name="link_url" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="link name">

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
                    <button type="submit" class="btn btn-secondary mb-2">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
