<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
use Illuminate\Support\Facades\File;

class ServicesController extends Controller
{
    public function admin_services(){
        $Services = Services::latest()->get();
        return view('dashboard.admin.pages.services.services',compact('Services'));
    }
    public function admin_add_services(){
        return view('dashboard.admin.pages.services.add_services');
    }

    public function admin_store_services(Request $request){

        $request->validate([
            'name'=>'required',
            'title'=>'required',
        ]);

        $service = new Services;
        $service->name = $request->name;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->slug = strtolower(str_replace(' ', '-', $request->title));
        $service->meta_title = $request->meta_title;
        $service->meta_description = $request->meta_description;
        $service->mete_keyword = $request->mete_keyword;
        $service->status = $request->status == true ? '1' : '0';


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/services/', $fileName);
            $service->image = $fileName;
        }

        $service->save();
        return redirect()->route('admin.services')->with('success','Successfully Created ');


    }

    public function admin_edit_services($id){
        $service = Services::findOrFail($id);
        return view('dashboard.admin.pages.services.edit_services', compact('service'));
    }

    public function admin_update_services(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'title'=>'required',
        ]);

        $service = Services::find($id);
        $service->name = $request->name;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->slug = strtolower(str_replace(' ', '-', $request->title));
        $service->meta_title = $request->meta_title;
        $service->meta_description = $request->meta_description;
        $service->mete_keyword = $request->mete_keyword;
        $service->status = $request->status == true ? '1' : '0';


        if ($request->hasFile('image')) {
            $destination = 'images/services/' . $service->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/services/', $fileName);
            $service->image = $fileName;
        }

        $service->update();
        return redirect()->route('admin.services')->with('success','Successfully Updated ');
    }

    public function admin_delete_services($id){
        $services = Services::findOrFail($id);
        $deleteOldImage =  'images/services/'.$services->image;
        if(file_exists($deleteOldImage)){
            file::delete($deleteOldImage);
        }
        $services->delete();

        return redirect()->route('admin.services')->with('success','Successfully Deleted ');
    }

}

