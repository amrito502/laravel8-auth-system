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
            'description'=>'required',
        ]);


        $Project = new Project;
        $Project->id = $request->Project;
        $Project->name = $request->name;
        $Project->title = $request->title;
        $Project->description = $request->description;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/projects',$filename);
            $Project->image = $filename;

        }
        $Project->save();
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

        $imageName = '';
        $deleteOldImage =  'images/projects/'.$projects->image;
        if($image = $request->file('image')){
            if(file_exists($deleteOldImage)){
                file::delete($deleteOldImage);
            }
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/projects',$imageName);
        }else{
            $imageName = $projects->image;
        }

        Project::where('id',$id)->update([
            'name'=>$request->name,
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$imageName,
        ]);

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
