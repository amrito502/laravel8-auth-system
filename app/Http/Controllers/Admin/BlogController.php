<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\Blogs;

class BlogController extends Controller
{
    public function admin_blog()
    {
        $blogs = Blogs::all();
        return view('dashboard.admin.pages.blogs.blog', compact('blogs'));
    }

    public function admin_add_blog()
    {
        return view('dashboard.admin.pages.blogs.add_blog');
    }

    public function admin_store_blog(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'desc' => 'required',
        ]);


        $Blogs = new Blogs;
        $Blogs->id = $request->Blogs;
        $Blogs->title = $request->title;
        $Blogs->desc = $request->desc;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/blogs', $filename);
            $Blogs->image = $filename;
        }
        $Blogs->save();
        return redirect()->route('admin.blog')->with('success', 'Successfully Created ');
    }

    public function admin_edit_blog($id){
        $blog = Blogs::findOrFail($id);
        return view('dashboard.admin.pages.blogs.edit_blog', compact('blog'));
    }

    public function admin_update_blog(Request $request, $id){
        $blogs = Blogs::findOrFail($id);
        $request->validate([
            'title'=>'required',
        ]);

        $imageName = '';
        $deleteOldImage =  'images/blogs/'.$blogs->image;
        if($image = $request->file('image')){
            if(file_exists($deleteOldImage)){
                file::delete($deleteOldImage);
            }
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/blogs',$imageName);
        }else{
            $imageName = $blogs->image;
        }

        Blogs::where('id',$id)->update([
            'title'=>$request->title,
            'desc'=>$request->desc,
            'image'=>$imageName,
        ]);

        return redirect()->route('admin.blog')->with('success','Successfully Updated ');
    }

    public function admin_delete_blog($id){
        $blogs = Blogs::findOrFail($id);
        $deleteOldImage =  'images/blogs/'.$blogs->image;
        if(file_exists($deleteOldImage)){
            file::delete($deleteOldImage);
        }
        $blogs->delete();

        return redirect()->route('admin.blog')->with('message','Successfully Deleted ');
    }
}
