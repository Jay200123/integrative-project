<?php

use App\Http\Controllers\CustomerController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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

Route::group(['prefix' => 'user'], function(){
 
    //routes for guest users who wants  to signup to app
    Route::group(['middleware' => 'guest'], function(){
       
        //routes for customer signup

        //GET Request for Customer sign up views 
        Route::get('/signup', [UserController::class, 'getSignup'])->name('user.signup');

        //POST Request for customer
        Route::post('/signup', [UserController::class, 'postSignup'])->name('user.signups');

        //GET Request for Sign in Views
        Route::get('/signin', [UserController::class, 'getSignin'])->name('user.signin');
        //POST REQUEST for user sign in
        Route::post('/signins', [LoginController::class, 'postSignin'])->name('user.signins');
    });
 
    //Route Group for User Customer
    Route::get('/profile', [UserController::class, 'getProfile'])->name('user.profile');

});

Route::get('/logout', [LoginController::class, 'logout'])->name('user.logout');
Route::fallback(function () {
    return redirect()->back();
    });
    
