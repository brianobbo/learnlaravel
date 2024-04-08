<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\Books;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth;


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

    ## redirects to about page
    // return redirect('about');
});


## passing data dynamically
// Route::get('/{name}', function ($name) {
//     // echo $name;
//     return view('welcome', ['name' => $name]);
// });

Route::get('/hello', function () {
    return view('hello');
});


// Route::get('about', function () {
//     return view('about');
// });

## Routing Views short form
## Short form: Limitaion=> Can't pass data
// Route::view('about', 'about');
Route::view('contact', 'contact');



## Routing controller
## Route::get('path', [controller class, function in controller]) ->Normal way
// Route::get("users", [Users::class, 'index']);

## passing data to the controlller
// Route::get('users/{user}', [Users::class, 'index']);
// Route::get('users/', [Users::class, 'index']);


## Product
Route::resource('products', ProductController::class);


## Form
Route::post('userlogin', [Users::class, 'getData']);
Route::view('login', 'user');


# No access
Route::view("noaccess", "noaccess");


## Group middleware
// Route::group(['middleware' => ['protectedpages']], function () {
//     Route::view('about', 'about');
//     Route::view('contact', 'contact');
// });



## Route Middleware
Route::view('about', 'about')-> middleware('protectedpage');



## Database configuration and Fetch Data
Route::get("users/", [Users::class, 'index']);



## Htttp Request Methods
Route::delete('testrequest', [Users::class,'testRequest']);
Route::view('testlogin', 'user');


## Session
// Route::view('login_session', 'user');
Route::post('login_session_action', [Auth::class, 'getDataSession']);

Route::get('login_session', function () {
    if(session()->has('user')){
        return redirect('/'); //redirect to welcome view/ page
    }
    return view('user');
});

Route::get('logout', function () {
    if(session()->has('user')){
        session()->pull('user');
    } 
    return redirect('login_session');
});






## Flash Session
// Route::view('login_session', 'user');
Route::view('add','user');

Route::post('addmember', [Users::class, 'addMember']);






