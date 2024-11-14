<?php

use App\Http\Controllers\AuthController;
// use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
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



// Route::get('/service',function(){
//     $session = 0;
//     $authors = [];
//     return view('service',compact('session','authors'));
// });

// Route::get('/login',function(){
//     return view('login');
// });

// Route::get('/template',function(){
//     return view('__templates.default');
// });

// Route::get('/laravel', function () {
//     return view('welcome');
// });

// // Route::get('/login',[LoginController::class,'login_form']);

// Route::get('/month/{num}',function($num){
//     if($num == 1){
//         return "<h1>January</h1>";
//     }
//     if($num == 2){
//         return "<h1>Febraury</h1>";
//     }
// })->middleware('month');

// // Route::view('template','__templates.default');

// Route::view('/test','test');

// Route::get('/',function(){
//     return view('welcome');
// });
// Route::get('service',function(){
//     return view('auth.service');
// });
Route::get('/',[AuthController::class,'dashboard'])->name('dashboard');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::get('service',[AuthController::class, 'service'])->name('service');
Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');
Route::post('store', [AuthController::class, 'store'])->name('store');
Route::post('authenticate',[AuthController::class, 'authenticate'])->name('authenticate');
Route::post('logout',[AuthController::class, 'logout'])->name('logout')->middleware('auth');


