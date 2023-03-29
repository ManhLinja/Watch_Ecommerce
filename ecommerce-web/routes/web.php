<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserRoleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\WebsiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [WebsiteController::class, 'index'])->name('website_index');



// Route::get('/admin', [AdminController::class, 'index'])->name('admin_index')->middleware('auth');

Route::group([
    'prefix'=>'admin', 
    'middleware'=>['auth'], 
    'namespace'=>'Admin'
    ], function(){
        Route::get('/', [AdminController::class, 'index'])->name('admin_index');

});

//User management
Route::group([
    'prefix'=>'user', 
    'middleware'=>['auth','check_user_is_active','super_admin'], 
    'namespace'=>'Admin'
    ], function(){

        Route::get('/index', [UserController::class, 'index'])->name('admin_user_index');
        Route::get('/view/{id}', [UserController::class, 'view'])->name('admin_user_view');
        Route::get('/create', [UserController::class, 'create'])->name('admin_user_create');
        Route::post('/store', [UserController::class, 'store'])->name('admin_user_store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin_user_edit');
        Route::post('/update', [UserController::class, 'update'])->name('admin_user_update');
        Route::post('/delete', [UserController::class, 'delete'])->name('admin_user_delete');
});

Route::group([
    'prefix'=>'user-role', 
    'middleware'=>['auth','check_user_is_active','super_admin'], 
    'namespace'=>'Admin'
    ], function(){

        Route::get('/index', [UserRoleController::class, 'index'])->name('admin_user_role_index');
        Route::get('/view/{id}', [UserRoleController::class, 'view'])->name('admin_user_role_view');
        Route::get('/create', [UserRoleController::class, 'create'])->name('admin_user_role_create');
        Route::post('/store', [UserRoleController::class, 'store'])->name('admin_user_role_store');
        Route::get('/edit', [UserRoleController::class, 'edit'])->name('admin_user_role_edit');
        Route::post('/update', [UserRoleController::class, 'update'])->name('admin_user_role_update');
        Route::post('/delete', [UserRoleController::class, 'delete'])->name('admin_user_role_delete');
});


Route::group([
    'prefix'=>'blank', 
    'middleware'=>['auth'], 
    'namespace'=>'Admin'
    ], function(){
        // Route::get('/', [AdminController::class, 'index'])->name('admin_index');

        //basic page
        Route::get('/index', [AdminController::class, 'blade_index'])->name('admin_blade_index');
        Route::get('/create', [AdminController::class, 'blade_create'])->name('admin_blade_create');
        Route::get('/view', [AdminController::class, 'blade_view'])->name('admin_blade_view');
});


