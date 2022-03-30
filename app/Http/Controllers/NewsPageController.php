<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Header;
use App\Models\Header_logo;
use Illuminate\Http\Request;

class NewsPageController extends Controller
{
    public function index()
    {
        $header = Header::all();
        $footer = Footer::all();
        return view('news', [
            'header' => $header,
            'footer' => $footer
        ]);
    }
}
