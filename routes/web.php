<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\postController;
use App\Http\Controllers\adminloginController;
use App\Http\Controllers\adminpostController;
use App\Http\Controllers\commentcontroller;
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

Route::get('login',[loginController::class,'login'])->name('login');
Route::get('register',[loginController::class,'register'])->name('register');
Route::post('registernow',[loginController::class,'registernow'])->name('registernow');
Route::post('loginnow',[loginController::class,'loginnow'])->name('loginnow');
Route::get('logout',[loginController::class,'logout'])->name('logout');


Route::get('/',[postController::class,'index'])->name('index');
Route::get('profile',[postController::class,'profile'])->name('profile');
Route::get('postblog',[postController::class,'postblog'])->name('postblog');
Route::post('postnow',[postController::class,'postnow'])->name('postnow');
Route::get('details/{id}',[postController::class,'details'])->name('details');
Route::post('/postcomment/{id}',[commentcontroller::class,'postcomment'])->name('postcomment');
Route::get('bloggerpost',[postController::class,'bloggerpost'])->name('bloggerpost');
Route::get('deleteblogerpost/{id}',[postController::class,'deleteblogerpost'])->name('deleteblogerpost');
Route::get('blogcategory/{id}',[postController::class,'blogcategory'])->name('blogcategory');
//Route::post('comment',[commentcontroller::class,'comment'])->name('comment');



Route::get('admin/adminregister',[adminloginController::class,'adminregister'])->name('adminregister');
Route::post('admin/adminregisternow',[adminloginController::class,'adminregisternow'])->name('adminregisternow');
Route::get('admin/adminlogin',[adminloginController::class,'adminlogin'])->name('adminlogin');
Route::post('admin/adminloginnow',[adminloginController::class,'adminloginnow'])->name('adminloginnow');
Route::get('admin/adminlogout',[adminloginController::class,'adminlogout'])->name('adminlogout');

Route::get('admin/',[adminpostController::class,'adminhome'])->name('adminhome');
Route::get('admin/category',[adminpostController::class,'category'])->name('category');
Route::post('admin/insertcategory',[adminpostController::class,'insertcategory'])->name('insertcategory');
Route::get('admin/adminpost',[adminpostController::class,'adminpost'])->name('adminpost');
Route::put('admin/approveblog/{id}',[adminpostController::class,'approveblog'])->name('approveblog');
Route::put('admin/Deactivatepost/{id}',[adminpostController::class,'Deactivatepost'])->name('Deactivatepost');
Route::get('admin/deletepost/{id}',[adminpostController::class,'deletepost'])->name('deletepost');

