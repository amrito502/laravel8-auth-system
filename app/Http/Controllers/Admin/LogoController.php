<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;
use Illuminate\Support\Facades\File;

class LogoController extends Controller
{
    public function admin_logo(){
        $logos = Logo::latest()->get();
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

        $logo = new Logo;
        $logo->logo_text = $request->logo_text;
        $logo->slug = strtolower(str_replace(' ', '-', $request->logo_text));
        $logo->meta_title = $request->meta_title;
        $logo->meta_description = $request->meta_description;
        $logo->mete_keyword = $request->mete_keyword;
        $logo->status = $request->status == true ? '1' : '0';

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/logo/', $fileName);
            $logo->image = $fileName;
        }
        $logo->save();
        return redirect()->route('admin.logo')->with('success','Successfully Created ');

    }

    public function admin_edit_logo($id){
        $logo = Logo::findOrFail($id);
        return view('dashboard.admin.pages.logo.edit_logo', compact('logo'));
    }

    public function admin_update_logo(Request $request, $id){

        $request->validate([
            'logo_text'=>'required',
        ]);

        $logo = Logo::find($id);
        $logo->logo_text = $request->logo_text;
        $logo->slug = strtolower(str_replace(' ', '-', $request->logo_text));
        $logo->meta_title = $request->meta_title;
        $logo->meta_description = $request->meta_description;
        $logo->mete_keyword = $request->mete_keyword;
        $logo->status = $request->status == true ? '1' : '0';


        if ($request->hasFile('image')) {
            $destination = 'images/logo/' . $logo->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/logo/', $fileName);
            $logo->image = $fileName;
        }

        $logo->update();
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
