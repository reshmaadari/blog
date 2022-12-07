<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\case_study_ctrl;
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


    Route::get('/signup', function () {return view('regform');})->middleware('auth2');
    Route::get('/signin', function () {
    return view('login_form');
})->middleware('auth2');


Route::post('/valid_reg',[case_study_ctrl::class,'valid_reg']);
Route::post('/valid_login',[case_study_ctrl::class,'valid_login']);
Route::get('/logout',function(){
    session()->pull('username');
    return redirect('signin');
});
Route::post('/savepost',[case_study_ctrl::class,'savepost']);
Route::get('/delete/{id}',[case_study_ctrl::class,'delete']);
Route::get('/restore/{id}',[case_study_ctrl::class,'restore']);
Route::get('forgot',[case_study_ctrl::class,'forgot']);
Route::post('change',[case_study_ctrl::class,'change']);
// Route::get('change_password',[case_study_ctrl::class,'change_password']);
Route::post('password/{id}',[case_study_ctrl::class,'password']);



Route::group(['middleware'=>['cantAuth']],function(){
Route::get('/posts',[case_study_ctrl::class,'viewposts']);
Route::get('/profile',[case_study_ctrl::class,'profile']);

Route::get('/dashboard',[case_study_ctrl::class,'dashboard']);
Route::get('/create_post',function(){
    return view('create_post');
});
});

Route::get('/approve/{id}',[case_study_ctrl::class,'approve']);
Route::get('/refuse/{id}',[case_study_ctrl::class,'refuse']);

Route::get('/profile2',[case_study_ctrl::class,'profile2']);
Route::get('/users',[case_study_ctrl::class,'users']);
Route::get('/dashboard2',[case_study_ctrl::class,'dashboard2']);








