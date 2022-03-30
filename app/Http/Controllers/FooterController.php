<?php

namespace App\Http\Controllers;

use App\Http\Requests\FooterRequest;
use App\Models\Footer;
use App\Models\Icon;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $icons = Icon::where('footer_active', 1)->get();
        $footer = Footer::all();
        return view('admin.footer', [
            'footer' => $footer,
            'icons' => $icons
        ]);

    }

    public function store(FooterRequest $request)
    {
        $footer = new Footer();
        $footerValidated = $request->validated();
        $footer->text_en = $footerValidated['text_en'];
        $footer->text_ru = $footerValidated['text_ru'];
        $footer->text_arm = $footerValidated['text_arm'];
        $footer->url = $footerValidated['link_url'];
        $footer->save();
        return redirect(route('admin.footer'));
    }

    public function destroy($id)
    {
        $footer = Footer::find($id)->delete();
        return redirect(route('admin.footer'));
    }

    public function update(Request $request)
    {
        $icons = Icon::all();
        if (intval($request->icon) === 0) {
            foreach ($icons as $icon) {
                $icon->footer_active = intval($request->icon);
                $icon->save();
            }
        }
        if (intval($request->icon) === 1) {
            foreach ($icons as $icon) {
                $icon->footer_active = intval($request->icon);
                $icon->save();
            }
        }
        $footer = Footer::find(intval($request->selectedFooter));
        $footer->text_en = $request->text_en ?? $footer->text_en;
        $footer->text_ru = $request->text_ru ?? $footer->text_ru;
        $footer->text_arm = $request->text_arm ?? $footer->text_arm;
        $footer->url = $request->link_url ?? $footer->url;
        $footer->save();
        return redirect(route('admin.footer'));

    }
}
