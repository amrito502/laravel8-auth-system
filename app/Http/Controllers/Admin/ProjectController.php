<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    public function admin_project(){
        $projects = Project::all();
        return view('dashboard.admin.pages.project.project',compact('projects'));
    }

    public function admin_add_project(){
        return view('dashboard.admin.pages.project.add_project');
    }

    public function admin_store_project(Request $request){
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'image'=>'required',
        ]);


        $project = new Project;
        $project->name = $request->name;
        $project->title = $request->title;
        $project->description = $request->description;
        $project->slug = strtolower(str_replace(' ', '-', $request->title));
        $project->meta_title = $request->meta_title;
        $project->meta_description = $request->meta_description;
        $project->mete_keyword = $request->mete_keyword;
        $project->status = $request->status == true ? '1' : '0';

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/projects/', $fileName);
            $project->image = $fileName;
        }

        $project->save();
        return redirect()->route('admin.project')->with('success','Successfully Created ');

    }

    public function admin_edit_project($id){
        $project = Project::findOrFail($id);
        return view('dashboard.admin.pages.project.edit_project', compact('project'));
    }

    public function admin_update_project(Request $request, $id){
        $projects = Project::findOrFail($id);
        $request->validate([
            'name'=>'required',
            'title'=>'required',
        ]);

        $project = Project::find($id);
        $project->name = $request->name;
        $project->title = $request->title;
        $project->description = $request->description;
        $project->slug = strtolower(str_replace(' ', '-', $request->title));
        $project->meta_title = $request->meta_title;
        $project->meta_description = $request->meta_description;
        $project->mete_keyword = $request->mete_keyword;
        $project->status = $request->status == true ? '1' : '0';

        if ($request->hasFile('image')) {
            $destination = 'images/projects/' . $project->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/projects/', $fileName);
            $project->image = $fileName;
        }
        $project->update();
        return redirect()->route('admin.project')->with('success','Successfully Updated ');
    }

    public function admin_delete_project($id){
        $projects = Project::findOrFail($id);
        $deleteOldImage =  'images/projects/'.$projects->image;
        if(file_exists($deleteOldImage)){
            file::delete($deleteOldImage);
        }
        $projects->delete();

        return redirect()->route('admin.project')->with('success','Successfully Deleted ');
    }

}
