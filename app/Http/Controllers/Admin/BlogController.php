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
        $blogs = Blogs::latest()->get();
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
            'short_description' => 'required',
            'meta_title' => 'required',
        ]);



        $Blogs = new Blogs;
        $Blogs->title = $request->title;
        $Blogs->slug = strtolower(str_replace(' ', '-', $request->title));
        $Blogs->short_description = $request->short_description;
        $Blogs->long_description = $request->long_description;
        $Blogs->meta_title = $request->meta_title;
        $Blogs->meta_description = $request->meta_description;
        $Blogs->mete_keyword = $request->mete_keyword;
        $Blogs->status = $request->status == true ? '1' : '0';

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/blogs/', $fileName);
            $Blogs->image = $fileName;
        }

        $Blogs->save();
        return redirect()->route('admin.blog')->with('success', 'Successfully Created ');
    }


    public function admin_edit_blog($id){
        $blog = Blogs::findOrFail($id);
        return view('dashboard.admin.pages.blogs.edit_blog', compact('blog'));
    }

    public function admin_update_blog(Request $request, $id){

        $request->validate([
            'title' => 'required',
        ]);


        $Blogs = Blogs::find($id);
        $Blogs->title = $request->title;
        $Blogs->slug = strtolower(str_replace(' ', '-', $request->title));
        $Blogs->short_description = $request->short_description;
        $Blogs->long_description = $request->long_description;
        $Blogs->meta_title = $request->meta_title;
        $Blogs->meta_description = $request->meta_description;
        $Blogs->mete_keyword = $request->mete_keyword;
        $Blogs->status = $request->status == true ? '1' : '0';

        if ($request->hasFile('image')) {
            $destination = 'images/blogs/' . $Blogs->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/blogs/', $fileName);
            $Blogs->image = $fileName;
        }

        $Blogs->update();
        return redirect()->route('admin.blog')->with('success', 'Successfully Updated ');

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
