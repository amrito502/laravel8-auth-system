<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Resources;

class ResourcesController extends Controller
{
    public function admin_resources(){
        $resources = Resources::latest()->get();
        return view('dashboard.admin.pages.resources.resources', compact('resources'));
    }

    public function admin_add_resources(){
        return view('dashboard.admin.pages.resources.add_resources');
    }

    public function admin_store_resources(Request $request){
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'image' => 'required',
            'short_description' => 'required',
        ]);

        $resources = new Resources;
        $resources->name = $request->name;
        $resources->title = $request->title;
        $resources->slug = strtolower(str_replace(' ', '-', $request->title));
        $resources->short_description = $request->short_description;
        $resources->long_description = $request->long_description;
        $resources->meta_title = $request->meta_title;
        $resources->meta_description = $request->meta_description;
        $resources->mete_keyword = $request->mete_keyword;
        $resources->status = $request->status == true ? '1' : '0';

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/resources/', $fileName);
            $resources->image = $fileName;
        }

        $resources->save();
        return redirect()->route('admin.resources')->with('success', 'Successfully Created ');
    }

    public function admin_edit_resources($id){
        $resources_edit = Resources::find($id);
        return view('dashboard.admin.pages.resources.edit_resources',compact('resources_edit'));
    }

    public function admin_update_resources(Request $request, $id){

        $resources = Resources::find($id);
        $resources->name = $request->name;
        $resources->title = $request->title;
        $resources->slug = strtolower(str_replace(' ', '-', $request->title));
        $resources->short_description = $request->short_description;
        $resources->long_description = $request->long_description;
        $resources->meta_title = $request->meta_title;
        $resources->meta_description = $request->meta_description;
        $resources->mete_keyword = $request->mete_keyword;
        $resources->status = $request->status == true ? '1' : '0';


        if ($request->hasFile('image')) {
            $destination = 'images/resources/' . $resources->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/resources/', $fileName);
            $resources->image = $fileName;
        }

        $resources->update();
        return redirect()->route('admin.resources')->with('success', 'Successfully Updated ');
    }

    public function admin_delete_resources($id){
        $resources = Resources::findOrFail($id);
        $deleteOldImage =  'images/resources/'.$resources->image;
        if(file_exists($deleteOldImage)){
            file::delete($deleteOldImage);
        }
        $resources->delete();

        return redirect()->route('admin.resources')->with('success','Successfully Deleted ');
    }
}
