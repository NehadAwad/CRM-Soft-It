<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



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

Route::group(['middleware' => ['auth:sanctum']], function(){

    Route::get('/home', [AuthController::class, 'homePage'])->name('admin.dashboard');
    Route::get('add-user-page', [AuthController::class, 'addUserPage'])->name('create.user');
});

