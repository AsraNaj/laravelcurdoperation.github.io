<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\UserController;
Route::redirect('/','/posts');

Route::get('posts',[PostController::class,'index']);
Route::get('posts/create',[PostController::class,'create']);
Route::post('posts/store',[PostController::class,'store']);
Route::get('posts/{post}/show',[PostController::class,'show']);
Route::get('posts/{post}/edit',[PostController::class,'edit']);
Route::put('posts/{post}/update',[PostController::class,'update']);
Route::delete('posts/{post}/delete',[PostController::class,'destroy']);












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
























//Route::get('user',[UserController::class,'getUser']);
//Route::get('about',[UserController::class,'aboutUser']);
//Route::get('user/{name}',[UserController::class,'getUserName']);




//vie welcome page
//Route::get('/', function () {
  //  return view('welcome');
//});

//view home page
//Route::get('/home', function () {
  //  return view('home');
//});
//it is redirect one page goes to another page
//Route::redirect('/home','/');

//it is used to view to welcome page 
//Route::view('/home','welcome');

//its used to passed the parameter likes name or etc.so, its display the webpages 







//its commands used in the achore tages
//vie welcome page
//Route::get('/', function () {
  //  return view('welcome');
//});
//view home page
//Route::get('/home', function () {
  //  return view('home');
//});
//view the name with about page
