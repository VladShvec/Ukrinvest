<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Form;
use App\Models\Header;
use App\Models\Icon;
use App\Models\MainSlider;
use App\Models\NewsPress;
use App\Models\OurMission;
use App\Models\Project;
use App\Models\Service;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    public function index()
    {
        if (App::isLocale('en')) {

            $header = Header::select('id', 'text_en', 'page_id')->get();
            $main_sliders = MainSlider::select('title_en', 'img_path')->get();
            $our_missions = OurMission::select('title_en', 'text_en', 'link_text_en')->get();
            $services = Service::select('title_en', 'icon', 'bg')->get();
            $projects = Project::select('id', 'adress_en', 'text_en', 'img_path')->get();
            $news_press = NewsPress::select('id', 'title_en', 'data_en', 'text_en', 'img')
                ->where('img', '<>', '')
                ->get();
            $news_press_without_img = NewsPress::select('id', 'title_en', 'data_en', 'text_en')
                ->where('img', '')
                ->get();
            $footer = Footer::select('text_en', 'url')->get();
        } elseif (App::isLocale('ru')) {

            $header = Header::select('id', 'text_ru', 'page_id')->get();
            $main_sliders = MainSlider::select('title_ru', 'img_path')->get();
            $our_missions = OurMission::select('title_ru', 'text_ru', 'link_text_ru')->get();
            $services = Service::select('title_ru', 'icon', 'bg')->get();
            $projects = Project::select('id', 'adress_ru', 'text_ru', 'img_path')->get();
            $news_press = NewsPress::select('id', 'title_ru', 'data_ru', 'text_ru', 'img')
                ->where('img', '<>', '')
                ->get();
            $news_press_without_img = NewsPress::select('id', 'title_ru', 'data_ru', 'text_ru')
                ->where('img', '')
                ->get();
            $footer = Footer::select('text_ru', 'url')->get();
        } elseif ((App::isLocale('arm'))) {

            $header = Header::select('id', 'text_arm', 'page_id')->get();
            $main_sliders = MainSlider::select('title_arm', 'img_path')->get();
            $our_missions = OurMission::select('title_arm', 'text_arm', 'link_text_arm')->get();
            $services = Service::select('title_arm', 'icon', 'bg')->get();
            $projects = Project::select('id', 'adress_arm', 'text_arm', 'img_path')->get();
            $news_press = NewsPress::select('id', 'title_arm', 'data_arm', 'text_arm', 'img')
                ->where('img', '<>', '')
                ->get();
            $news_press_without_img = NewsPress::select('id', 'title_arm', 'data_arm', 'text_arm')
                ->where('img', '')
                ->get();
            $footer = Footer::select('text_arm', 'url')->get();
        }
        $icons = Icon::where('slider_active', 1 and 'footer_active', 1)->get();
        $form = Form::all();
        return view('main', [
            'header' => $header,
            'main_sliders' => $main_sliders,
            'icons' => $icons,
            'our_missions' => $our_missions,
            'services' => $services,
            'projects' => $projects,
            'news_press' => $news_press,
            'news_press_null_img' => $news_press_without_img,
            'form' => $form,
            'footer' => $footer
//            'projectTitle' => $project_title,
//            'project_content' => $project_content,
//            'header_nav' => $header_nav,
//            'header_logo' =>$header_logo,
//            'mainSliders' => $mainSliders,
//            'ourMission' => $ourMission,
//            'newsPressTitle' => $newsPressTitle,
//            'newsPress' => $newsPress,
//            'newsPressSmall' => $newsPressSmall,
//            'services' => $services,
//            'services_title' => $services_title,
//            'footer' => $footer
        ]);
    }
}
