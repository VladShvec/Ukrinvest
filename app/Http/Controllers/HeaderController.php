<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeaderRequest;
use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index()
    {
        $header = Header::select('id', 'text_en', 'page_id')->get();
        return view('admin.header', [
            'header' => $header
        ]);
    }

    public function destroy($id)
    {
        Header::find($id)->delete();
        return redirect(route('admin.header'));
    }

    public function store(HeaderRequest $request)
    {
        $header = new Header();
        $validatedRequest = $request->validated();
        $header->text_en = $validatedRequest['text_en'];
        $header->text_ru = $validatedRequest['text_ru'];
        $header->text_arm = $validatedRequest['text_arm'];
        $header->url = $validatedRequest['link_url'];
        $header->save();
        return redirect(route('admin.header'));
    }

    public function update(Request $request)
    {
        $header_link = Header::find(intval($request->selectedlink));
        $header_link->text_en = $request->text_en ?? $header_link->text_en;
        $header_link->text_ru = $request->text_ru ?? $header_link->text_ru;
        $header_link->text_arm = $request->text_arm ?? $header_link->text_arm;
        $header_link->url = $request->link_url ?? $header_link->url;
        $header_link->save();
        return redirect(route('admin.header'));

    }

}
