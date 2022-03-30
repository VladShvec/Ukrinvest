<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Header_logo;
use App\Models\MainSlider;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.admin');
    }
}
