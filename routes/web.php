<?php

use App\Http\Controllers\Admin\FrontendControllerAdmin;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Fonct\FrontendController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/dashboard', function () {
    return view('Fonctionnaire.dashboard.dashboard');
});


Auth::routes();

Route::group(['prefix'=>'admin','middleware' => ['auth','isAdmin']], function () {
    

    Route::get('/dashboard', [FrontendControllerAdmin::class,'index']);
    Route::resource('profile', ProfileController::class);
 });

 Route::group(['prefix'=>'fonctionnaire','middleware' => ['auth','isFonctionnaire']], function () {
    

    Route::get('/dashboard', [FrontendController::class,'index']);
    Route::resource('profile', ProfileController::class);

 });



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
