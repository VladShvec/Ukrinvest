<?php

namespace App\Http\Controllers;

use App\Http\Requests\MainSliderRequest;
use App\Http\Requests\SliderRequest;
use App\Models\Icon;
use App\Models\MainSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Image;

class MainSliderController extends Controller
{

    public function index()
    {
        $icons = Icon::where('slider_active', 1)->get();
        $main_sliders = MainSlider::all();
        return view('admin.mainslider', [
            'main_sliders' => $main_sliders,
            'icons' => $icons
        ]);
    }

    public function destroy($id)
    {

        MainSlider::find($id)->delete();
        return redirect(route('admin.slider'));
    }

    public function store(MainSliderRequest $request)
    {
        $validatedRequest = $request->validated();
        $main_sliders = new MainSlider();
        $main_sliders->title_en = $validatedRequest["title_en"];
        $main_sliders->title_ru = $validatedRequest["title_ru"];
        $main_sliders->title_arm = $validatedRequest["title_arm"];
        $file = $request->file('upload_photo');
        $upload_folder = '/storage/img';
        if ($file) {
            $filename = $file->getClientOriginalName();
            $main_sliders->img_path = $upload_folder . '/' . $filename;
            Storage::putFileAs($upload_folder, $file, $filename);
        } else {
            $main_sliders->img_path = $validatedRequest["img_path"];
        }
        $main_sliders->save();
        return redirect(route('admin.slider'));
    }

    public function update(Request $request)
    {
        $icons = Icon::all();
        $main_sliders = MainSlider::find(intval($request->selectedslide));
        if (intval($request->icon) === 0) {
            foreach ($icons as $icon) {
                $icon->slider_active = intval($request->icon);
                $icon->save();
            }
        }
        if (intval($request->icon) === 1) {
            foreach ($icons as $icon) {
                $icon->slider_active = intval($request->icon);
                $icon->save();
            }
        }
        $main_sliders->title_en = $request->title_en ?? $main_sliders->title_en;
        $main_sliders->title_ru = $request->title_ru ?? $main_sliders->title_ru;
        $main_sliders->title_arm = $request->title_arm ?? $main_sliders->title_arm;
        $file = $request->file('upload_photo');
        $upload_folder = '/storage/img';
        if ($file) {
            $file_name = $file->getClientOriginalName();
            $main_sliders->img_path = $upload_folder . '/' . $file_name;
            Storage::putFileAs($upload_folder, $file, $file_name);

        } else {
            $main_sliders->img_path = $request->updateBigImg ?? $main_sliders->img_path;
        }
        $main_sliders->save();
        return redirect(route('admin.slider'));

    }
}
