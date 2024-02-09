<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guestpost;
use Illuminate\Support\Facades\File;

class GuestpostController extends Controller
{
    public function admin_guestpost(){
        $guestpost = Guestpost::latest()->get();
        return view('dashboard.admin.pages.guestpost.guestpost',compact('guestpost'));
    }


    public function admin_add_guestpost(){
        return view('dashboard.admin.pages.guestpost.add_guest');
    }


    public function admin_store_guestpost(Request $request){

        $guestpost = new Guestpost;
        $guestpost->title = $request->title;
        $guestpost->email = $request->email;
        $guestpost->post_rules = $request->post_rules;
        $guestpost->guest_post_title = $request->guest_post_title;
        $guestpost->guest_post_description = $request->guest_post_description;
        $guestpost->slug = strtolower(str_replace(' ', '-', $request->guest_post_title));
        $guestpost->meta_title = $request->meta_title;
        $guestpost->meta_description = $request->meta_description;
        $guestpost->mete_keyword = $request->mete_keyword;
        $guestpost->status = $request->status == true ? '1' : '0';

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/guestpost/', $fileName);
            $guestpost->image = $fileName;
        }

        $guestpost->save();
        return redirect()->route('admin.guestpost')->with('success', 'Successfully Created ');
    }

    public function admin_edit_guestpost($id){
        $guestpost_edit = Guestpost::find($id);
        return view('dashboard.admin.pages.guestpost.edit_guest',compact('guestpost_edit'));
    }

    public function admin_update_guestpost(Request $request, $id){

        $guestpost = Guestpost::find($id);
        $guestpost->title = $request->title;
        $guestpost->email = $request->email;
        $guestpost->post_rules = $request->post_rules;
        $guestpost->guest_post_title = $request->guest_post_title;
        $guestpost->guest_post_description = $request->guest_post_description;
        $guestpost->slug = strtolower(str_replace(' ', '-', $request->guest_post_title));
        $guestpost->meta_title = $request->meta_title;
        $guestpost->meta_description = $request->meta_description;
        $guestpost->mete_keyword = $request->mete_keyword;
        $guestpost->status = $request->status == true ? '1' : '0';

        if ($request->hasFile('image')) {
            $destination = 'images/guestpost/' . $guestpost->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/guestpost/', $fileName);
            $guestpost->image = $fileName;
        }

        $guestpost->update();
        return redirect()->route('admin.guestpost')->with('success', 'Successfully Updated ');
    }


    public function admin_delete_guestpost($id){
        $guestpost = Guestpost::findOrFail($id);
        $deleteOldImage =  'images/guestpost/'.$guestpost->image;
        if(file_exists($deleteOldImage)){
            file::delete($deleteOldImage);
        }
        $guestpost->delete();

        return redirect()->route('admin.guestpost')->with('success','Successfully Deleted ');
    }
}
