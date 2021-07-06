<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


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
Route::get('send-mail',function(){
    $details=[
        'name' => 'hanifa',
          
        'title' => 'mail from mohamedhanifa@integras.com',
        'body' => 'This is for testing email using smtb'
    ];


    \Mail::to('your_receiver_admin@gmail.com')->send(new \App\Mail\MyTestMail($details));

    dd("Email is sent.");
});


Route::get("user", [UserController::class, 'create']);

Route::post("user/create", [UserController::class, 'store']);