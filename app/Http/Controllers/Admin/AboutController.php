<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function admin_about(){
        return view('dashboard.admin.pages.about.about');
    }

    public function admin_add_about(){
        return view('dashboard.admin.pages.about.add_about');
    }
}
