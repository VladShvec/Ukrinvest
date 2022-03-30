@extends('admin.admin')
@section('current-block')
    <div id="news-press-site">
        @include('newsPress.newsPress')
        <div class="newsPressChanger container">
            <div class="smallchange">
                <h4>2 small block changing</h4>
                <div class="small-news-press">
                    @foreach($news_press_null_img as $newsSmall)
                        <div class="news-press-item">
                            <div class="data">
                                <p class="main-data">{{$newsSmall->data_en}}</p>
                            </div>
                            <div class="news-press-text">
                                <h4>{{$newsSmall->title_en}}</h4>
                                <p>{{$newsSmall->text_en}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>


                <form action="{{ route('admin.news_press.updateBlock') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <select class="custom-select" name="selectedBox">
                        @foreach($news_press_null_img as $newsSmall)
                            <option value="{{$newsSmall->id}}">{{$newsSmall->title_en}}</option>
                        @endforeach
                    </select>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Update data en</label>
                        <input type="text" class="form-control py-3" name="updateData_en" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="title put hear">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Update data ru</label>
                        <input type="text" class="form-control py-3" name="updateData_ru" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="title put hear">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Update data</label>
                        <input type="text" class="form-control py-3" name="updateData_arm" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="title put hear">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Update title en</label>
                        <input type="text" class="form-control py-3" name="updateTitle_en" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="title put hear">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Update title ru</label>
                        <input type="text" class="form-control py-3" name="updateTitle_ru" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="title put hear">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Update title arm</label>
                        <input type="text" class="form-control py-3" name="updateTitle_arm"
                               id="exampleFormControlInput1"
                               aria-label="Default" placeholder="title put hear">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Update text en</label>
                        <input type="text" class="form-control py-3" name="updateText_en" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="title put hear">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Update text ru</label>
                        <input type="text" class="form-control py-3" name="updateText_ru" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="title put hear">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Update text arm</label>
                        <input type="text" class="form-control py-3" name="updateText_arm" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="title put hear">
                    </div>
                    <button type="submit" class="btn btn-secondary mb-5">Update</button>
                    <div class="big-news-press mb-5">
                        @foreach($news_press as $news)
                            <div class="big-news-item">
                                <img src='{{$news->img}}' alt="" class="big-news-img">
                                <p class="big-news-data">{{$news->data_en}}</p>
                                <h4 class="big-news-title">{{$news->title_en}}</h4>
                                <p class="big-news-text">{{$news->text_en}}</p>
                            </div>
                        @endforeach
                    </div>
                    <select class="custom-select" name="selectedBig">
                        @foreach($news_press  as $news)
                            <option value="{{$news->id}}">{{$news->title_en}}</option>
                        @endforeach
                    </select>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Update data</label>
                        <input type="text" class="form-control py-3" name="updateBigData" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="data put hear">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Update title</label>
                        <input type="text" class="form-control py-3" name="updateBigTitle" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="title put hear">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Update text</label>
                        <input type="text" class="form-control py-3" name="updateBigText" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="text put hear">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Update img ulr</label>
                        <input type="text" class="form-control py-3" name="updateBigImg" id="exampleFormControlInput1"
                               aria-label="Default" placeholder="/img/...">
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

