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
use Carbon\Carbon;


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



    // =========about===================
    public function about(){
        $about_Title = "About Us";
        $teams = Teams::all();
        return view('app.pages.about',compact('teams','about_Title'));
    }





    // ==========projects=================
    public function projects(){
        $projects = Project::where('status','0')->latest()->get();
        return view('app.pages.project',compact('projects'));
    }

    public function projects_dtls(string $project_slug){
        $all_project = Project::where('slug',$project_slug)->where('status','0')->first();
        $project_dts = Project::where('id',$all_project->id)->where('status','0')->first();
        return view('app.pages.project_dtls',compact('project_dts'));
    }


    // ===========teams==============
    public function teams(){
        $teams_title = "Teams";
        $teams = Teams::where('status','0')->latest()->get();
        return view('app.pages.teams',compact('teams','teams_title'));
    }
// ================guestpost================
    public function guest_post(){
        $guest_post = Guestpost::where('status','0')->get();
        return view('app.pages.guestpost',compact('guest_post'));
    }

       // ==========services================
       public function services(){
        $services = Services::where('status','0')->latest()->get();
        return view('app.pages.services', compact('services'));
    }
    public function service_details(string $service_slug){
        $all_services = Services::where('slug',$service_slug)->where('status','0')->first();
        $service_dts = Services::where('id',$all_services->id)->where('status','0')->first();
        return view('app.pages.services_details',compact('service_dts'));
    }

// ===========resources===============
    public function resources(){
        $popular_resources = Resources::where('status','0')->latest()->take(10)->get();
        $resources = Resources::where('status','0')->latest()->paginate(5);
        return view('app.pages.resources',compact('resources','popular_resources'));
    }

    public function resources_details(string $resources_slug){
        $popular_resources = Resources::latest()->get()->take(10);
        $resources_all = Resources::where('slug',$resources_slug)->where('status','0')->first();
        $resources_dtls = Resources::where('id',$resources_all->id)->where('status','0')->first();
        return view('app.pages.resources_datails',compact('resources_dtls','popular_resources'));
    }


    // ==========blogs=============
    public function blogs(){
        $recent_post = Blogs::where('status','0')->latest()->take(10)->get();
        $blogs = Blogs::where('status','0')->latest()->paginate(5);
        return view('app.pages.blog',compact('blogs','recent_post'));
    }

    public function blogs_details($post_slug){
        $recent_post = Blogs::where('status','0')->latest()->take(10)->get();
        $all_blog = Blogs::where('slug',$post_slug)->where('status','0')->first();
        $blog = Blogs::where('id',$all_blog->id)->where('status','0')->first();
        return view('app.pages.blog_details',compact('blog','recent_post'));
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
