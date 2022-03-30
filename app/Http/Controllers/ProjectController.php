<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use App\Models\ProjectContent;
use App\Models\ProjectTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.project', [
            'projects' => $projects,

        ]);
    }

    public function destroy($id)
    {

        Project::find(intval($id))->delete();
        $projects = Project::all();
        return redirect(route('admin.project', [
            '$projects' => $projects,

        ]));
    }

    public function store(ProjectRequest $request)
    {
        $projectValidate = $request->validated();
        $project = new Project();
        $project->adress_en = $projectValidate['adress_en'];
        $project->adress_ru = $projectValidate['adress_ru'];
        $project->adress_arm = $projectValidate['adress_arm'];
        $project->text_en = $projectValidate['text_en'];
        $project->text_ru = $projectValidate['text_ru'];
        $project->text_arm = $projectValidate['text_arm'];
        $file = $request->file('upload_photo');
        $upload_folder = '/storage/img';
        if ($file) {
            $file_name = $file->getClientOriginalName();
            $project->img_path = $upload_folder . '/' . $file_name;
            Storage::putFileAs($upload_folder, $file, $file_name);

        } else {
            $project->img_path = $projectValidate['img_url'];
        }

        $project->save();
        return redirect(route('admin.project', [
            'project' => $project
        ]));

    }

    public function update(Request $request)
    {
        $project = Project::find(intval($request->selectedProject));
        $project->adress_en = $request->adress_en ?? $project->adress_en;
        $project->adress_ru = $request->adress_ru ?? $project->adress_ru;
        $project->adress_arm = $request->adress_arm ?? $project->adress_arm;
        $project->text_en = $request->text_en ?? $project->text_en;
        $project->text_ru = $request->text_ru ?? $project->text_ru;
        $project->text_arm = $request->text_arm ?? $project->text_arm;
        $file = $request->file('upload_photo');
        $upload_folder = '/storage/img';
        if ($file) {
            $file_name = $file->getClientOriginalName();
            $project->img_path = $upload_folder . '/' . $file_name;
            Storage::putFileAs($upload_folder, $file, $file_name);

        } else {
            $project->img_path = $request->img_url ?? $project->img_path;
        }

        $project->save();
        return redirect(route('admin.project', [
            'project' => $project
        ]));
    }
}
