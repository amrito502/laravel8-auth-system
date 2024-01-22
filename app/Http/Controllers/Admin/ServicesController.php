<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
use Illuminate\Support\Facades\File;

class ServicesController extends Controller
{
    public function admin_services(){
        $Services = Services::all();
        return view('dashboard.admin.pages.services.services',compact('Services'));
    }
    public function admin_add_services(){
        return view('dashboard.admin.pages.services.add_services');
    }

    public function admin_store_services(Request $request){
        $request->validate([
            'service_name'=>'required',
            'service_title'=>'required',
            'image'=>'required',
        ]);


        $Services = new Services;
        $Services->id = $request->Services;
        $Services->service_name = $request->service_name;
        $Services->service_title = $request->service_title;
        $Services->description = $request->description;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/services',$filename);
            $Services->image = $filename;

        }
        $Services->save();
        return redirect()->route('admin.services')->with('success','Successfully Created ');


    }

    public function admin_edit_services($id){
        $service = Services::findOrFail($id);
        return view('dashboard.admin.pages.services.edit_services', compact('service'));
    }

    public function admin_update_services(Request $request, $id){
        $services = Services::findOrFail($id);
        $request->validate([
            'service_name'=>'required',
            'service_title'=>'required',
        ]);

        $imageName = '';
        $deleteOldImage =  'images/services/'.$services->image;
        if($image = $request->file('image')){
            if(file_exists($deleteOldImage)){
                file::delete($deleteOldImage);
            }
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/services',$imageName);
        }else{
            $imageName = $services->image;
        }

        Services::where('id',$id)->update([
            'service_name'=>$request->service_name,
            'service_title'=>$request->service_title,
            'description'=>$request->description,
            'image'=>$imageName,
        ]);

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

