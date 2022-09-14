<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\YoutubeController;
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
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth','user-role:admin'])->group(function(){
    Route::get('/home',[AdminController::class,'adminHome'])->name('home');
    Route::get('/addstudent',[AdminController::class,'addStudent'])->name('student');
    Route::get('/addteacher',[AdminController::class,'addTeacher'])->name('teacher');
    Route::post('/create',[AdminController::class,'create'])->name('createstudent');
    Route::post('/createt',[AdminController::class,'createTeacher'])->name('createteacher');
});

Route::middleware(['auth','user-role:student'])->group(function(){
    Route::get('/student/home',[StudentController::class,'index'])->name('home.student');
    Route::get('/student/videos',[YoutubeController::class,'index'])->name('index');
    Route::get('/student/watch{id}',[YoutubeController::class,'watch'])->name('watch');
    Route::get('/student/result',[YoutubeController::class,'result'])->name('result');
});

Route::middleware(['auth','user-role:teacher'])->group(function(){
    Route::get('/teacher/home',[TeacherController::class,'index'])->name('home.teacher');
});
