<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Blogs;
use App\Models\Logo;
use App\Models\Project;
use App\Models\Services;
use App\Models\Teams;
Use App\Models\User;
use App\Models\Hero;
use App\Models\Admin;
use App\Models\Message;
use App\Models\ClientReview;
use App\Models\ClientSay;
use App\Models\Guestpost;
Use App\Models\Resources;
use App\Models\Subscribe;
class AppController extends Controller
{
    // ========home=====================
    public function home(){
        $services = Services::where('status','0')->get();
        $teams = Teams::where('status','0')->get();
        $projects = Project::where('status','0')->get();
        $hero = Hero::where('status','0')->get();
        $review = ClientReview::where('status','0')->get();
        $about = About::where('status','0')->get();
        $teams = Teams::where('status','0')->get();

        $data = [
            'services'  => $services,
            'teams'   => $teams,
            'projects' => $projects,
            'hero' => $hero,
            'review' => $review,
            'about' => $about,
            'teams' => $teams,
        ];
        return view('app.pages.home')->with($data);
    }

    public function hero($id){
        $hero = Hero::find($id);

    }

    public function service_details($id){
        $service = Services::findOrFail($id);
        return view('app.pages.services_details',compact('service'));
    }

    // =========about===================
    public function about(){
        $about_Title = "About Us";
        $teams = Teams::all();
        return view('app.pages.about',compact('teams','about_Title'));
    }

    // ==========services================
    public function services(){
        $about_title = "About Us";
        $services = Services::all();
        return view('app.pages.services', compact('services','about_title'));
    }



    // ==========projects=================
    public function projects(){
        $project_title = "Projects";
        $projects = Project::all();
        return view('app.pages.project',compact('projects','project_title'));
    }


    // ===========teams==============
    public function teams(){
        $teams_title = "Teams";
        $teams = Teams::all();
        return view('app.pages.teams',compact('teams','teams_title'));
    }


    // ==========blogs=============
    public function blogs(){
        $recent_post = Blogs::orderBy('created_at', 'desc')->take(4)->get();
        $blogs = Blogs::orderBy('created_at', 'desc')->paginate(3);
        $blog_title = "Blogs";
        return view('app.pages.blog',compact('blogs','recent_post','blog_title'));
    }

    public function blogs_details($id){
        $blog_details_title = "Blogs Details";
        $blog = Blogs::findOrFail($id);
        $recent_post = Blogs::orderBy('created_at', 'desc')->take(4)->get();
        return view('app.pages.blog_details',compact('blog','blog_details_title','recent_post'));
    }




    // ==========contact==============
    public function contact(){
        $contact_title = "Contact";
        return view('app.pages.contact',compact('contact_title'));
    }

    public function contact_store(Request $request)
    {
        Message::create($request->all());

        return response(['success' => 'Message successfully Send!']);
    }




public function admin_message(){
    $messages = Message::all();
    return view('dashboard.admin.pages.message',compact('messages'));
}

public function admin_message_delete($id){
    $message = Message::findOrFail($id);
    $message->delete();

    return redirect()->route('admin.admin.all.message')->with('success','Message Successfully Deleted!');
}
}
