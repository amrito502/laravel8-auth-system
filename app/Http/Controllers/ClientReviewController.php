<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientReview;
use Illuminate\Support\Facades\File;

class ClientReviewController extends Controller
{
    public function admin_review(){
        $review = ClientReview::latest()->get();
        return view('dashboard.admin.pages.client_review.client_review', compact('review'));
    }

    public function admin_add_review(){
        return view('dashboard.admin.pages.client_review.add_client_review');
    }

    public function admin_store_review(Request $request){
        $request->validate([
            'title'=>'required',
            'rating'=>'required',
            'image'=>'required',
        ]);

        $review = new ClientReview;
        $review->title = $request->title;
        $review->rating = $request->rating;
        $review->slug = strtolower(str_replace(' ', '-', $request->title));
        $review->meta_title = $request->meta_title;
        $review->meta_description = $request->meta_description;
        $review->mete_keyword = $request->mete_keyword;
        $review->status = $request->status == true ? '1' : '0';

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/review/', $fileName);
            $review->image = $fileName;
        }
        $review->save();
        return redirect()->route('admin.review')->with('success','Successfully Created ');
    }

    public function admin_edit_review($id){
        $review_item = ClientReview::findOrFail($id);
        return view('dashboard.admin.pages.client_review.edit_client_review', compact('review_item'));
    }


    public function admin_update_review(Request $request, $id){

        $request->validate([
            'title'=>'required',
            'rating'=>'required',
        ]);

        $review = ClientReview::find($id);
        $review->title = $request->title;
        $review->rating = $request->rating;
        $review->slug = strtolower(str_replace(' ', '-', $request->title));
        $review->meta_title = $request->meta_title;
        $review->meta_description = $request->meta_description;
        $review->mete_keyword = $request->mete_keyword;
        $review->status = $request->status == true ? '1' : '0';


        if ($request->hasFile('image')) {
            $destination = 'images/review/' . $review->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/review/', $fileName);
            $review->image = $fileName;
        }

        $review->update();
        return redirect()->route('admin.review')->with('success','Successfully Updated ');
    }



    public function admin_delete_review($id){
        $review = ClientReview::findOrFail($id);
        $deleteOldImage =  'images/review/'.$review->image;
        if(file_exists($deleteOldImage)){
            file::delete($deleteOldImage);
        }
        $review->delete();

        return redirect()->route('admin.review')->with('success','Successfully Deleted ');
    }
}
