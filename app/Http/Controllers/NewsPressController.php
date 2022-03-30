<?php

namespace App\Http\Controllers;

use App\Models\NewsPress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsPressController extends Controller
{
    public function index()
    {

        $news_press = NewsPress::select('id', 'title_en', 'data_en', 'text_en', 'img')
            ->where('img', '<>', '')
            ->get();
        $news_press_without_img = NewsPress::select('id', 'title_en', 'data_en', 'text_en')
            ->where('img', '')
            ->get();
        return view('admin.newspress', [
            'news_press' => $news_press,
            'news_press_null_img' => $news_press_without_img,
        ]);
    }

    public function updateBlock(Request $request)
    {

        $news_press_without_img = NewsPress::find(intval($request->selectedBox));
        $news_press = NewsPress::find(intval($request->selectedBig));
        $news_press->title_en = $request->updateBigTitle_en ?? $news_press->title_en;
        $news_press->title_ru = $request->updateBigTitle_ru ?? $news_press->title_ru;
        $news_press->title_arm = $request->updateBigTitle_arm ?? $news_press->title_arm;
        $news_press->data_en = $request->updateBigData_en ?? $news_press->data_en;
        $news_press->data_ru = $request->updateBigData_ru ?? $news_press->data_ru;
        $news_press->data_arm = $request->updateBigData_arm ?? $news_press->data_arm;
        $news_press->text_en = $request->updateBigText_en ?? $news_press->text_en;
        $news_press->text_ru = $request->updateBigText_ru ?? $news_press->text_ru;
        $news_press->text_arm = $request->updateBigText_arm ?? $news_press->text_arm;
        $file = $request->file('upload_photo');
        $upload_folder = '/storage/img';
        if ($file) {
            $file_name = $file->getClientOriginalName();
            $news_press->img = $upload_folder . '/' . $file_name;
            Storage::putFileAs($upload_folder, $file, $file_name);

        } else {
            $news_press->img = $request->updateBigImg ?? $news_press->img;
        }
//        $news_press->img = $request->updateBigImg ?? $news_press->img;
        $news_press_without_img->title_en = $request->updateTitle_en ?? $news_press_without_img->title_en;
        $news_press_without_img->title_ru = $request->updateTitle_ru ?? $news_press_without_img->title_ru;
        $news_press_without_img->title_arm = $request->updateTitle_arm ?? $news_press_without_img->title_arm;
        $news_press_without_img->data_en = $request->updateData_en ?? $news_press_without_img->data_en;
        $news_press_without_img->data_ru = $request->updateData_ru ?? $news_press_without_img->data_ru;
        $news_press_without_img->data_arm = $request->updateData_arm ?? $news_press_without_img->data_arm;
        $news_press_without_img->text_en = $request->updateText_en ?? $news_press_without_img->text_en;
        $news_press_without_img->text_ru = $request->updateText_ru ?? $news_press_without_img->text_ru;
        $news_press_without_img->text_arm = $request->updateText_arm ?? $news_press_without_img->text_arm;
        $news_press_without_img->save();
        $news_press->save();
        return redirect(route('admin.newspress'));
    }
}
