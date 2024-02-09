<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teams;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    public function admin_team(){
        $teams = Teams::latest()->get();
        return view('dashboard.admin.pages.teams.teams',compact('teams'));
    }

    public function admin_add_team(){
        return view('dashboard.admin.pages.teams.add_teams');
    }


    public function admin_store_team(Request $request){
        $request->validate([
            'name'=>'required',
            'profession'=>'required',
            'about'=>'required',
            'image'=>'required',
        ]);


        $team = new Teams;
        $team->name = $request->name;
        $team->profession = $request->profession;
        $team->about = $request->about;
        $team->facebook = $request->facebook;
        $team->instagram = $request->instagram;
        $team->twitter = $request->twitter;
        $team->linkedin = $request->linkedin;
        $team->slug = strtolower(str_replace(' ', '-', $request->name));
        $team->meta_title = $request->meta_title;
        $team->meta_description = $request->meta_description;
        $team->mete_keyword = $request->mete_keyword;
        $team->status = $request->status == true ? '1' : '0';

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/teams/', $fileName);
            $team->image = $fileName;
        }

        $team->save();
        return redirect()->route('admin.team')->with('success','Successfully Created ');


    }

    public function admin_edit_team($id){
        $team = Teams::findOrFail($id);
        return view('dashboard.admin.pages.teams.edit_team', compact('team'));
    }

    public function admin_update_team(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'profession'=>'required',
        ]);


        $team = Teams::find($id);
        $team->name = $request->name;
        $team->profession = $request->profession;
        $team->facebook = $request->facebook;
        $team->instagram = $request->instagram;
        $team->twitter = $request->twitter;
        $team->linkedin = $request->linkedin;
        $team->slug = strtolower(str_replace(' ', '-', $request->name));
        $team->meta_title = $request->meta_title;
        $team->meta_description = $request->meta_description;
        $team->mete_keyword = $request->mete_keyword;
        $team->status = $request->status == true ? '1' : '0';

        if ($request->hasFile('image')) {
            $destination = 'images/teams/' . $team->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/teams/', $fileName);
            $team->image = $fileName;
        }
        $team->update();
        return redirect()->route('admin.team')->with('success','Successfully Updated ');
    }



    public function admin_delete_team($id){
        $teams = Teams::findOrFail($id);
        $deleteOldImage =  'images/teams/'.$teams->image;
        if(file_exists($deleteOldImage)){
            file::delete($deleteOldImage);
        }
        $teams->delete();

        return redirect()->route('admin.team')->with('success','Successfully Deleted ');
    }
}



