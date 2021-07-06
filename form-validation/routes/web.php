<?php
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\Mail;
use App\Mail\Contactmail;
use App\Http\Controllers\PostController;
use App\Http\Controllers\pagescontroller;

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

Route::get("user", [UserController::class, 'create']);

Route::post("user/create", [UserController::class, 'store']);

Route::get('/contactmail',function(){
    return view('registration-form');
});

Route::post('/contactmail',function(Request $request){

    Mail::send(new Contactmail($request));
    return redirect('/user');

});


Route::get('/welcome',[App\Http\Controllers\UserController::class,'welcome'])->name('pages.welcome');


Route::get('/home',function(){

    return view('pages.home');
});


Route::get('/about',function(){

    return view('pages.about');
});




Route::post('/contact',[App\Http\Controllers\pagescontroller::class,'postcontact']
)->name('pages.contact');

Route::get('/contact',[App\Http\Controllers\pagescontroller::class,'getcontact']);


Route::get('/create',function(){
    return view('posts.create');
});

// Route::get('posts',[App\Http\Controllers\PostController::class,'create']);

Route::post('posts',[App\Http\Controllers\PostController::class,'store'])->name('posts.create');

Route::get ('login',function(){

    Return View::make ('login');
});

Route::post('logincheck', function(){

    // username and password validation rule
    
    $rules = array (
    
    'username' => 'required|max:25',
    
    'password' => 'required|max:25',
    
    );
    
    $v = Validator::make (Input::all (), $rules);
    
    if ($v->fails()) {
    
    // username or password missing
    
    // validation fails
    
    // used to retain input values
    
    Input::flash ();
    
    // return to login page with errors
    
    return Redirect::to('login')
    
    ->withInput()
    
    ->withErrors ($v->messages ());
    
    } else {
    
    $userdata = array (
    
    'username' => Input::get('username'),
    
    'password' => Input::get('password')
    
    );
    
    If (Auth::attempt ($userdata)) {
    
    // authentication success, enters home page
    
    return Redirect::to('home');
    
    } else {
    
    // authentication fail, back to login page with errors
    
    return Redirect::to('login')
    
    ->withErrors('Incorrect login details');
    
    }
    
    }
    
    });

    Route::get ('home',function(){

        return View::make('home');
        
        });

        Route::group (array ('before' => 'auth'), function () {

            // list routes that needs authentication
            
            });

            Route::group (array ('before' => 'auth'), function () {

                Route::get ('home',function(){
                
                return View::make('home');
                
                });
                
                });

                If (Auth::check ()) {

                    return Redirect::to('/home');
                    
                    }
                    
                    return View::make('login');
                    
                    Route::get ('logout',function(){

                        Auth::logout ();
                        
                        return Redirect::to('login');
                        
                        });
            