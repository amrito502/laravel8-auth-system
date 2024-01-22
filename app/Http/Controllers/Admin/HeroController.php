<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hero;

class HeroController extends Controller
{
    public function admin_hero(){
        return view('dashboard.admin.pages.hero.hero');
    }

    public function admin_add_hero(){
        return view('dashboard.admin.pages.hero.add_hero');
    }

    public function admin_store_hero(Request $request){
        $request->validate([
            'title'=>'required',
            'title'=>'required',
            'description'=>'required',
        ]);

        $Logo = new Hero;
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
}
