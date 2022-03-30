<?php

namespace App\Http\Controllers;

use App\Http\Requests\OurMissionRequest;
use App\Models\OurMission;
use Illuminate\Http\Request;

class OurMissionController extends Controller
{
    public function index()
    {
        $our_missions = OurMission::all();
        return view('admin.ourmission', [
            'our_missions' => $our_missions
        ]);
    }

    public function update(OurMissionRequest $request)
    {

        $our_missions = OurMission::first();
        $our_missions->title_en = $request->title_en ?? $our_missions->title_en;
        $our_missions->title_ru = $request->title_ru ?? $our_missions->title_ru;
        $our_missions->title_arm = $request->title_arm ?? $our_missions->title_arm;
        $our_missions->text_en = $request->text_en ?? $our_missions->text_en;
        $our_missions->text_ru = $request->text_ru ?? $our_missions->text_ru;
        $our_missions->text_arm = $request->text_arm ?? $our_missions->text_arm;
        $our_missions->link_text_en = $request->link_text_en ?? $our_missions->link_text_en;
        $our_missions->link_text_ru = $request->link_text_ru ?? $our_missions->link_text_ru;
        $our_missions->link_text_arm = $request->link_text_arm ?? $our_missions->link_text_arm;
        $our_missions->url = $request->url ?? $our_missions->url;
        $our_missions->save();
        return redirect(route('admin.ourmission'))->with('Ваши изменения успешно зарегистрированы ');

    }
}
