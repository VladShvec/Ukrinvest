@extends('admin.admin')
@section('current-block')
    <div id="our-mission-site">
        @include('ourMission.ourmission')
        <div class="slider-form">
            <form action="{{route('admin.ourmission.update')}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h4>Edit mission form</h4>

                <div class="form-group">
                    <label for="exampleFormControlInput1">OurMission title en</label>
                    <input type="text" class="form-control py-3" name="title_en" id="exampleFormControlInput1"
                           aria-label="Default" placeholder="title edit part en">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">OurMission title ru</label>
                    <input type="text" class="form-control py-3" name="title_ru" id="exampleFormControlInput1"
                           aria-label="Default" placeholder="title edit part ru">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">OurMission title arm</label>
                    <input type="text" class="form-control py-3" name="title_arm" id="exampleFormControlInput1"
                           aria-label="Default" placeholder="title edit part arm">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">OurMission text en</label>
                    <input type="text" class="form-control py-3" name="text_en" id="exampleFormControlInput1"
                           aria-label="Default" placeholder="text edit en">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">OurMission text ru</label>
                    <input type="text" class="form-control py-3" name="text_ru" id="exampleFormControlInput1"
                           aria-label="Default" placeholder="text edit ru">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">OurMission text arm</label>
                    <input type="text" class="form-control py-3" name="text_arm" id="exampleFormControlInput1"
                           aria-label="Default" placeholder="text edit arm">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">OurMission link text</label>
                    <input type="text" class="form-control py-3" name="link_text_en" id="exampleFormControlInput1"
                           aria-label="Default" placeholder="link edit parth en">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">OurMission link text</label>
                    <input type="text" class="form-control py-3" name="link_text_ru" id="exampleFormControlInput1"
                           aria-label="Default" placeholder="link edit parth ru">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">OurMission link text</label>
                    <input type="text" class="form-control py-3" name="link_text_arm" id="exampleFormControlInput1"
                           aria-label="Default" placeholder="link edit parth arm">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">OurMission link path</label>
                    <input type="text" class="form-control py-3" name="url" id="exampleFormControlInput1"
                           aria-label="Default" placeholder="link url path edit">
                </div>
                <button type="submit" class="btn btn-secondary mb-2">Update</button>
            </form>
        </div>
    </div>
@endsection

