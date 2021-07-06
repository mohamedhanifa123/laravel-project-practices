<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testcontroller;

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

Route::get('/hello',function()
{
    return view('hello');
});

Route::get('/hello1',function()
{
    return view('hello1');
});

Route::get('/hello2',function()
{
    return view('hello2');
});

Route::get("user",[testcontroller::class,'index']);




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
