<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;

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

Route::get('post',[homecontroller::class,'index'])->name('post-list');
Route::get('comments/{id}',[homecontroller::class,'list'])->name('comments');

Route::get('list/{id}',[homecontroller::class,'list']);

Route::get('show',[homecontroller::class,'getcomment']);
