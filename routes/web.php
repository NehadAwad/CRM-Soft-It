<?php

use App\Http\Controllers\AuthController;
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

//user
Route::get('/user-sign-in-page', [UserController::class, 'userSignInPage'])->name('userSignInPage');
Route::post('/sign-in-user', [UserController::class, 'signInUser'])->name('signInUser');
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::get('/homeUser', [UserController::class, 'homePageUser'])->name('user.dashboard');
});

//admin
Route::get('/', [AuthController::class,'signInPage'])->name('login');
Route::post('/sign-in', [AuthController::class, 'signIn'])->name('signIn');


Route::get('/sign-out', [AuthController::class, 'signOut'])->name('signOut');
//Route::get('/home', [AuthController::class, 'homePage'])->name('admin.dashboard');
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::get('/home', [AuthController::class, 'homePage'])->name('admin.dashboard');
});

