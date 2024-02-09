<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UpdateInfoController extends Controller
{
    public function admin_password(){
        // $fetch_all_admin = Admin::where('status','0')->latest()->get();
        $fetch_all_admin = Admin::latest()->get();
        return view('dashboard.admin.pages.password.password', compact('fetch_all_admin'));
    }


    public function edit_password($id){
        $admin_info = Admin::findOrFail($id);
        return view('dashboard.admin.pages.password.edit_password', compact('admin_info'));
    }

    public function add_new_admin(){
        return view('dashboard.admin.pages.password.add_new_admin');
    }


    public function store_password(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        $admin_data = new Admin;
        $admin_data->name = $request->name;
        $admin_data->email = $request->email;
        $admin_data->password = Hash::make($request->password);
        $admin_data->status = $request->status == true ? '1' : '0';

        $admin_data->save();
        return redirect()->route('admin.all.password')->with('success', 'Successfully Added ');

    }

    public function update_password(Request $request, $id){

        $admin_data = Admin::find($id);
        $admin_data->name = $request->name;
        $admin_data->email = $request->email;
        $admin_data->password = Hash::make($request->password);
        $admin_data->phone = $request->phone;
        $admin_data->address = $request->address;
        $admin_data->status = $request->status == true ? '1' : '0';

        if ($request->hasFile('image')) {
            $destination = 'images/admin/' . $admin_data->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/admin/', $fileName);
            $admin_data->image = $fileName;
        }

        $admin_data->update();
        return redirect()->route('admin.all.password')->with('success', 'Successfully Updated ');

    }





}
