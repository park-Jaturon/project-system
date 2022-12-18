<?php

use App\Http\Controllers\Room\Room;
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

Route::get('/information', function () {
    return view('teacher.information');
});

Route::get('/posts', function () {
    return view('BlogPost.posts');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/r1c1',[App\Http\Controllers\RoomController::class, 'room1class1'])->name('r1c1');

Route::get('/u1',[App\Http\Controllers\RoomController::class, 'unit1'])->name('u1');

Route::get('/gr1c1',[App\Http\Controllers\GradeController::class, 'r1c1grade'])->name('g1');
