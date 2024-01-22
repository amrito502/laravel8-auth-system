<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;
use Illuminate\Support\Facades\File;

class LogoController extends Controller
{
    public function admin_logo(){
        $logos = Logo::all();
        return view('dashboard.admin.pages.logo.logo', compact('logos'));
    }
    public function admin_add_logo(){
        return view('dashboard.admin.pages.logo.add_logo');
    }

    public function admin_store_logo(Request $request){
        $request->validate([
            'logo_text'=>'required',
            'image'=>'required',
        ]);


        $Logo = new Logo;
        $Logo->id = $request->Logo;
        $Logo->logo_text = $request->logo_text;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/logo',$filename);
            $Logo->image = $filename;

        }
        $Logo->save();
        return redirect()->route('admin.logo')->with('success','Successfully Created ');


    }

    public function admin_edit_logo($id){
        $logo = Logo::findOrFail($id);
        return view('dashboard.admin.pages.logo.edit_logo', compact('logo'));
    }

    public function admin_update_logo(Request $request, $id){
        $logo = Logo::findOrFail($id);
        $request->validate([
            'logo_text'=>'required',
        ]);

        $imageName = '';
        $deleteOldImage =  'images/logo/'.$logo->image;
        if($image = $request->file('image')){
            if(file_exists($deleteOldImage)){
                file::delete($deleteOldImage);
            }
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/logo',$imageName);
        }else{
            $imageName = $logo->image;
        }

        Logo::where('id',$id)->update([
            'logo_text'=>$request->logo_text,
            'image'=>$imageName,
        ]);

        return redirect()->route('admin.logo')->with('success','Successfully Updated ');
    }

    public function admin_delete_logo($id){
        $logo = Logo::findOrFail($id);
        $deleteOldImage =  'images/logo/'.$logo->image;
        if(file_exists($deleteOldImage)){
            file::delete($deleteOldImage);
        }
        $logo->delete();

        return redirect()->route('admin.logo')->with('success','Successfully Updated ');
    }
}
