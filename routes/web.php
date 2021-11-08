<?php

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



//Route::get('/', function () {
//    return view('login');
//});

//Route::get('/home', function (){
//    return view("home");
//});
//Route::get('/login', function (){
//    return view('login');
//});
//Route::redirect('/redirect_home', 'login');
//
//Route::get('/test/{name}', function ($var){
//    return $var;
//});
//
//Route::get('/{name}',function ($name){
//    $customer_name = $name;
//    return view('welcome',['customer_name' => $name]);
//});
//
//Route::get('posts/{post}/comments/{comment}', function ($postId, $comment){
//    return $postId. "</br>/" . $comment;
//});

//Name Routes//

//Route::get('/',function (){
//        return view('welcome');
//})->name('welcome');
//
//Route::get('/profile', function (){
//    return "hello world";
//})->name('test');
//
//Route::get('/testing_route', function (){
//    return redirect()->route('test');
//});


Route::prefix('UI')->group(function (){

    Route::get('/login', function (){
        return view('login');
    });

    Route::get('/register', function (){
        return view('registration');
    });
    Route::get('/', function (){
        return view('welcome');
    });

    Route::get('/dashboard', function (){
        return view('dashboard.index');
    });

//    Route::get('/profile', function (){
//        return "Project";
//    })->name('test');
//
//    Route::get('/contact', function (){
//        return "contact us";
//    })->name('test');
//
//    Route::get('/singin', function (){
//        return "sing in";
//    })->name('test');

});











