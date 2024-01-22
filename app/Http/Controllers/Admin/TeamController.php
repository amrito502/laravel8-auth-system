<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teams;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    public function admin_team(){
        $teams = Teams::all();
        return view('dashboard.admin.pages.teams.teams',compact('teams'));
    }

    public function admin_add_team(){
        return view('dashboard.admin.pages.teams.add_teams');
    }


    public function admin_store_team(Request $request){
        $request->validate([
            'name'=>'required',
            'profession'=>'required',
            'image'=>'required',
        ]);


        $Teams = new Teams;
        $Teams->id = $request->Teams;
        $Teams->name = $request->name;
        $Teams->profession = $request->profession;
        $Teams->facebook = $request->facebook;
        $Teams->instagram = $request->instagram;
        $Teams->twitter = $request->twitter;
        $Teams->linkedin = $request->linkedin;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/teams',$filename);
            $Teams->image = $filename;

        }
        $Teams->save();
        return redirect()->route('admin.team')->with('success','Successfully Created ');


    }

    public function admin_edit_team($id){
        $team = Teams::findOrFail($id);
        return view('dashboard.admin.pages.teams.edit_team', compact('team'));
    }

    public function admin_update_team(Request $request, $id){
        $teams = Teams::findOrFail($id);
        $request->validate([
            'name'=>'required',
            'profession'=>'required',
        ]);

        $imageName = '';
        $deleteOldImage =  'images/teams/'.$teams->image;
        if($image = $request->file('image')){
            if(file_exists($deleteOldImage)){
                file::delete($deleteOldImage);
            }
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/teams',$imageName);
        }else{
            $imageName = $teams->image;
        }

        Teams::where('id',$id)->update([
            'name'=>$request->name,
            'profession'=>$request->profession,
            'facebook'=>$request->facebook,
            'instagram'=>$request->instagram,
            'twitter'=>$request->twitter,
            'linkedin'=>$request->linkedin,
            'image'=>$imageName,
        ]);

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



