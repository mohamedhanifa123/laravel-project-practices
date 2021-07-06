<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\joincontroller;
use App\Http\Controllers\postcontroller;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',[homecontroller::class,'home'])->name('home.home');
Route::POST('/add',[homecontroller::class,'addpostsubmit'])->name('post.addsubmit');


Route::view('add','form');

Route::post('/add',[homecontroller::class,'addform'])->name('addform.list');
Route::get('list',[homecontroller::class,'show']);
Route::get('delete/{id}',[homecontroller::class,'delete']);
Route::get('edit/{id}',[homecontroller::class,'showdata']);
Route::post('edit',[homecontroller::class,'update']);
Route::get('show',[joincontroller::class,'show']);
Route::get('/add-post',[postcontroller::class,'addpost']);
Route::get('/add-comment/{id}',[postcontroller::class,'addcomment']);
Route::get('/get-comments/{id}',[postcontroller::class,'getcommentsBypost']);