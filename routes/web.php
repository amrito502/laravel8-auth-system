<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\LogoController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\TeamController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AppController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// =================frontend==================

Route::get('/', [AppController::class,'home'])->name('app.home');
// about================
Route::get('/app/about', [AppController::class,'about'])->name('app.about');

// services=============
Route::get('/app/services', [AppController::class,'services'])->name('app.services');
Route::get('/app/services/details/{id}', [AppController::class,'service_details'])->name('app.services.details');

// project==============
Route::get('/app/project', [AppController::class,'projects'])->name('app.project');

// teams================
Route::get('/app/teams', [AppController::class,'teams'])->name('app.teams');

// blogs================
Route::get('/app/blogs', [AppController::class,'blogs'])->name('app.blogs');
Route::get('/app/blogs/details/{id}', [AppController::class,'blogs_details'])->name('app.blogs.details');

// contact==============
Route::get('/app/contact', [AppController::class,'contact'])->name('app.contact');
Route::post('/app/message', [AppController::class,'contact_store'])->name('app.message.store');








// ===================================


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->name('user.')->group(function(){

    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.user.login')->name('login');
        Route::view('/register','dashboard.user.register')->name('register');
        Route::post('/create', [UserController::class,'create'])->name('create');
        Route::post('/check',[UserController::class,'check'])->name('check');
    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.user.home')->name('home');
        Route::post('/logout', [UserController::class,'logout'])->name('logout');
    });

});


// admin-routes

Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.admin.login')->name('login');
        Route::post('/check', [AdminController::class,'check'])->name('check');
    });
// =======================================================================================================
// =======================================================================================================
    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.admin.home')->name('home');
        Route::post('/logout', [AdminController::class,'logout'])->name('logout');
        // profile
        Route::view('/profile', 'dashboard.admin.profile.profile')->name('profile');

        // =================logo-start=============
        Route::get('/logo', [LogoController::class,'admin_logo'])->name('logo');
        Route::get('/add/logo', [LogoController::class,'admin_add_logo'])->name('add.logo');
        Route::post('/store/logo',[LogoController::class,'admin_store_logo'])->name('store.logo');
        Route::get('/edit/logo/{id}',[LogoController::class,'admin_edit_logo'])->name('edit.logo');
        Route::post('/update/logo/{id}',[LogoController::class,'admin_update_logo'])->name('update.logo');
        Route::get('/delete/logo/{id}',[LogoController::class,'admin_delete_logo'])->name('delete.logo');
        // =================logo-end=============

        // =================hero-start=============
        Route::get('/hero', [HeroController::class,'admin_hero'])->name('hero');
        Route::get('/add/hero', [HeroController::class,'admin_add_hero'])->name('add.hero');
        Route::post('/store/hero',[HeroController::class,'admin_store_hero'])->name('store.hero');

        // Route::get('/edit/hero/{id}',[HeroController::class,'admin_edit_hero'])->name('edit.hero');
        // Route::post('/update/hero/{id}',[HeroController::class,'admin_update_hero'])->name('update.hero');
        // Route::get('/delete/hero/{id}',[HeroController::class,'admin_delete_hero'])->name('delete.hero');
        // Route::get('/hero/status{heroStatus}',[HeroController::class,'change_status']);
        // =================hero-end=============

        // =================about-start==========
        Route::get('/about', [AboutController::class,'admin_about'])->name('about');
        Route::get('/add/about', [AboutController::class,'admin_add_about'])->name('add.about');
        // =================about-end=============

        // =================services-start=============
        Route::get('/services', [ServicesController::class,'admin_services'])->name('services');
        Route::get('/add/services', [ServicesController::class,'admin_add_services'])->name('add.services');
        Route::post('/store/services',[ServicesController::class,'admin_store_services'])->name('store.services');

        Route::get('/edit/services/{id}',[ServicesController::class,'admin_edit_services'])->name('edit.services');
        Route::post('/update/services/{id}',[ServicesController::class,'admin_update_services'])->name('update.services');
        Route::get('/delete/services/{id}',[ServicesController::class,'admin_delete_services'])->name('delete.services');
        // =================services-end============

        // =================project-start=============
        Route::get('/project', [ProjectController::class,'admin_project'])->name('project');
        Route::get('/add/project', [ProjectController::class,'admin_add_project'])->name('add.project');
        Route::post('/store/project',[ProjectController::class,'admin_store_project'])->name('store.project');
        Route::get('/edit/project/{id}',[ProjectController::class,'admin_edit_project'])->name('edit.project');
        Route::post('/update/project/{id}',[ProjectController::class,'admin_update_project'])->name('update.project');
        Route::get('/delete/project/{id}',[ProjectController::class,'admin_delete_project'])->name('delete.project');
        // =================project-end=============

        // =================team-start=============
        Route::get('/our/team', [TeamController::class,'admin_team'])->name('team');
        Route::get('/add/our/team', [TeamController::class,'admin_add_team'])->name('add.team');
        Route::post('/store/our/team',[TeamController::class,'admin_store_team'])->name('store.team');
        Route::get('/edit/our/team/{id}',[TeamController::class,'admin_edit_team'])->name('edit.team');
        Route::post('/update/our/team/{id}',[TeamController::class,'admin_update_team'])->name('update.team');
        Route::get('/delete/our/team/{id}',[TeamController::class,'admin_delete_team'])->name('delete.team');
        // =================team-end=============

        // ================blogs-start===========
        Route::get('/blogs', [BlogController::class,'admin_blog'])->name('blog');
        Route::get('/add/blog', [BlogController::class,'admin_add_blog'])->name('add.blog');
        Route::post('/store/blog',[BlogController::class,'admin_store_blog'])->name('store.blog');
        Route::get('/edit/blog/{id}',[BlogController::class,'admin_edit_blog'])->name('edit.blog');
        Route::post('/update/blog/{id}',[BlogController::class,'admin_update_blog'])->name('update.blog');
        Route::get('/delete/blog/{id}',[BlogController::class,'admin_delete_blog'])->name('delete.blog');
        // ================blogs-end=============

        // message====================
        Route::get('/all/message', [AppController::class,'admin_message'])->name('admin.all.message');
        Route::get('/delete/message/{id}',[AppController::class,'admin_message_delete'])->name('delete.message');



    });
});





//end
