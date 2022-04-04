<?php

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

Auth::routes();

// POSTS ROUTES
Route::post('/p', [\App\Http\Controllers\PostsController::class, 'store'])->name('posts.store');
Route::get('/p/create', [\App\Http\Controllers\PostsController::class, 'create'])->name('posts.create');
Route::get('/p/{post}', [\App\Http\Controllers\PostsController::class, 'show'])->name('posts.show');

// PROFILE ROUTES
Route::get('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
