<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hero;
use Illuminate\Support\Facades\File;

class HeroController extends Controller
{
    public function admin_hero(){
        $hero = Hero::latest()->get();
        return view('dashboard.admin.pages.hero.hero',compact('hero'));
    }

    public function admin_add_hero(){
        return view('dashboard.admin.pages.hero.add_hero');
    }

    public function admin_store_hero(Request $request){
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'description'=>'required',
            'image'=>'required',
        ]);

        $hero = new Hero;
        $hero->name = $request->name;
        $hero->title = $request->title;
        $hero->description = $request->description;
        $hero->slug = strtolower(str_replace(' ', '-', $request->title));
        $hero->meta_title = $request->meta_title;
        $hero->meta_description = $request->meta_description;
        $hero->mete_keyword = $request->mete_keyword;
        $hero->status = $request->status == true ? '1' : '0';


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/hero/', $fileName);
            $hero->image = $fileName;
        }

        $hero->save();
        return redirect()->route('admin.hero')->with('success','Successfully Created ');

    }


    public function admin_edit_hero($id){
        $hero_id = Hero::findOrFail($id);
        return view('dashboard.admin.pages.hero.edit_hero', compact('hero_id'));
    }

    public function admin_update_hero(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'title'=>'required',
        ]);


        $hero = Hero::find($id);
        $hero->name = $request->name;
        $hero->title = $request->title;
        $hero->description = $request->description;
        $hero->slug = strtolower(str_replace(' ', '-', $request->title));
        $hero->meta_title = $request->meta_title;
        $hero->meta_description = $request->meta_description;
        $hero->mete_keyword = $request->mete_keyword;
        $hero->status = $request->status == true ? '1' : '0';

        if ($request->hasFile('image')) {
            $destination = 'images/hero/' . $hero->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/hero/', $fileName);
            $hero->image = $fileName;
        }

        $hero->update();
        return redirect()->route('admin.hero')->with('success', 'Successfully Updated ');
    }


    public function admin_delete_hero($id){
        $hero = Hero::findOrFail($id);
        $deleteOldImage =  'images/hero/'.$hero->image;
        if(file_exists($deleteOldImage)){
            file::delete($deleteOldImage);
        }
        $hero->delete();

        return redirect()->route('admin.hero')->with('success','Successfully Deleted');
    }
}
