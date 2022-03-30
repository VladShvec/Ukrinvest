<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Models\ServicesContent;
use App\Models\ServicesTitle;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::select('id', 'title_en', 'icon', 'bg')->get();
        return view('admin.services', [
            'services' => $services,
        ]);
    }

    public function destroy($id)
    {
        Service::find($id)->delete();
        return redirect(route('admin.services'));
    }

    public function store(ServiceRequest $request)
    {
        $serviceValidated = $request->validated();
        $service = new Service();
        $service->title_en = $serviceValidated['title_en'];
        $service->title_ru = $serviceValidated['title_ru'];
        $service->title_arm = $serviceValidated['title_arm'];
        $file_icon = $request->upload_photo_icon;
        $file_bg = $request->upload_photo_bg;
        $upload_folder = '/storage/img';
        if ($file_icon) {
            $file_icon_name = $file_icon->getClientOriginalName();
            $service->icon = $upload_folder . '/' . $file_icon_name;
            Storage::putFileAs($upload_folder, $file_icon, $file_icon_name);

        } else {
            $service->icon = $serviceValidated['icon'];
        }

        if ($file_bg) {
            $file_bg_name = $file_bg->getClientOriginalName();
            $service->bg = $upload_folder . '/' . $file_bg_name;
            Storage::putFileAs($upload_folder, $file_bg, $file_bg_name);
        } else {
            $service->bg = $serviceValidated['bg'];
        }
        $service->save();
        return redirect(route('admin.services'));
    }

    public function update(Request $request)
    {
        $service = Service::find(intval($request->selectedServ));
        $service->title_en = $request->title_en ?? $service->title_en;
        $service->title_ru = $request->title_ru ?? $service->title_ru;
        $service->title_arm = $request->title_arm ?? $service->title_arm;
        $file_bg = $request->file('upload_photo_bg');
        $file_icon = $request->file('upload_photo_icon');
        $upload_folder = '/storage/img';
        if ($file_bg) {
            $file_name = $file_bg->getClientOriginalName();
            $service->bg = $upload_folder . '/' . $file_name;
            Storage::putFileAs($upload_folder, $file_bg, $file_name);

        } else {
            $service->bg = $request->bg ?? $service->bg;
        }
        if ($file_icon) {
            $file_name = $file_icon->getClientOriginalName();
            $service->icon = $upload_folder . '/' . $file_name;
            Storage::putFileAs($upload_folder, $file_icon, $file_name);

        } else {
            $service->icon = $request->icon ?? $service->icon;
        }


        $service->save();
        return redirect(route('admin.services'));

    }

}
