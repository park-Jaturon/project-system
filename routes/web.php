<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Room\Room;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\HomeController;
use Illuminate\Contracts\Console\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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



Route::get('/posts', function () {
    return view('BlogPost.posts')->name('posts');
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/r1c1',[RoomController::class, 'room1class1'])->name('r1c1');

Route::get('/u1',[RoomController::class, 'unit1'])->name('u1');

Route::get('/gr1c1',[GradeController::class, 'r1c1grade'])->name('g1');

Route::get('/teacher/home',[TeacherController::class, 'teacherindex'])->name('teacher.home')->middleware('IsTeacher');
Route::get('/teacher/information',[TeacherController::class, 'information'])->name('teacher.information')->middleware('IsTeacher');
Route::get('/teacher/information/{id}/edit',[TeacherController::class, 'edit'])->name('teacher.editinformation')->middleware('IsTeacher');

Route::post('add-information',[TeacherController::class, 'store']);

Route::post('registration',[RegisterController::class,'store']);