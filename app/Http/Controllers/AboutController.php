<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Header;
use App\Models\Header_logo;
use App\Models\OurMission;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $header = Header::all();
        $our_missions = OurMission::first();
        $footer = Footer::all();
        return view('about', [
            'header' => $header,
            'our_missions' => $our_missions,
            'footer' => $footer
        ]);
    }
}
