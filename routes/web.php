<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\dataController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ProfileController;
Route::get('/', function(){
    return view('auth.login');
});

Route::group(['middleware' => 'is_user'] , function(){
 Route::get('/home', [AdminController::class, 'home'])
    ->name('home');
   

Route::post('logout', [AdminController::class, 'logout'])->name('logout');
Route::get('/feedback', [AdminController::class, 'feedback'])->name('feedback');
Route::get('/profile',[ProfileController::class,'profile' ]) ->name('profile');
Route::post('/profile-side/{ID}', [ProfileController::class, 'update'])->name('profile-side.update');   
Route::resource('feed', AdminController::class);
Route::get('/users',[AdminController::class,"users"])->name('users');
Route::get('/help',[AdminController::class,"help"])->name('help');
Route::get('/view', [AdminController::class, 'show'])->name('edit');
Route::get('/report',[AdminController::class,'report'])->name('report');



});
  


//form feedback
Route::resource('form-feedback', AdminController::class);
Route::get('/form', function(){
    return view('form-feedback.form');
});


//login and register
Route::get('/login', [AdminController::class,'login'])->name('login');
Route::get('/register',[AdminController::class,'register'])->name('register');
Route::post('/login',[AdminController::class,'loginPost'])->name('login.post');
Route::post('/register',[AdminController::class,'registerPost'])->name('register.post');