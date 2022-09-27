<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
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


Route::get('/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('red_login_google');

Route::get('/Auth/login',function(){
    $user = Socialite::driver('google')->user();
    dd($user);
})->name('redirectLoginWithGoogle');



//  github

Route::get('/redir_github', function () {
    return Socialite::driver('github')->redirect();
})->name('red_login_github');



Route::get('/Auth/login/github',function(){
    $user = Socialite::driver('github')->user();
    dd($user);
})->name('redirectLoginWithgithub');

