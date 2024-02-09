<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    public function admin_about(){
        $about = About::latest()->get();
        return view('dashboard.admin.pages.about.about',compact('about'));
    }

    public function admin_add_about(){
        return view('dashboard.admin.pages.about.add_about');
    }

    public function admin_store_about(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $about = new About;
        $about->title = $request->title;
        $about->description = $request->description;
        $about->slug = strtolower(str_replace(' ', '-', $request->title));
        $about->meta_title = $request->meta_title;
        $about->meta_description = $request->meta_description;
        $about->mete_keyword = $request->mete_keyword;
        $about->status = $request->status == true ? '1' : '0';

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/about/', $fileName);
            $about->image = $fileName;
        }

        $about->save();
        return redirect()->route('admin.about')->with('success', 'Successfully Created ');
    }

    public function admin_edit_about($id){
        $edit_about = About::findOrFail($id);
        return view('dashboard.admin.pages.about.edit_about', compact('edit_about'));
    }

    public function admin_update_about(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $about = About::find($id);
        $about->title = $request->title;
        $about->description = $request->description;
        $about->slug = strtolower(str_replace(' ', '-', $request->title));
        $about->meta_title = $request->meta_title;
        $about->meta_description = $request->meta_description;
        $about->mete_keyword = $request->mete_keyword;
        $about->status = $request->status == true ? '1' : '0';

        if ($request->hasFile('image')) {
            $destination = 'images/about/' . $about->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/about/', $fileName);
            $about->image = $fileName;
        }
        $about->update();
        return redirect()->route('admin.about')->with('success', 'Successfully Updated ');
    }

    public function admin_delete_about($id){
        $about = About::findOrFail($id);
        $deleteOldImage =  'images/about/'.$about->image;
        if(file_exists($deleteOldImage)){
            file::delete($deleteOldImage);
        }
        $about->delete();

        return redirect()->route('admin.about')->with('message','Successfully Deleted ');
    }
}
