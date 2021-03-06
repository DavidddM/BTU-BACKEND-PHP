<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {return view('welcome');});

Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->middleware('auth');
Route::get('/posts/create', [\App\Http\Controllers\PostController::class, 'create'])->name("posts.create") ->middleware('auth');
Route::post('/posts/save', [\App\Http\Controllers\PostController::class, 'save'])->name("posts.save")->middleware('auth');
Route::get('/posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show') ->middleware('auth');
Route::get('/posts/{post}/edit', [\App\Http\Controllers\PostController::class, 'edit'])->name("posts.edit") ->middleware('auth');
Route::put('/posts/{post}/update', [\App\Http\Controllers\PostController::class, 'update'])->name("posts.update")->middleware('auth');
Route::delete('/posts/{post}/delete', [\App\Http\Controllers\PostController::class, 'delete'])->name("posts.delete")->middleware('auth');

Route::get('/users/login', [UserController::class, 'login'])->name('login');
Route::post('/users/post-login', [UserController::class, 'postLogin'])->name('post_login');
Route::post('/users/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/users/register', [UserController::class, 'register'])->name('register');
Route::post('/users/post-register', [UserController::class, 'postRegister'])->name('post_register');
Route::get('/user_posts', [\App\Http\Controllers\PostController::class, 'user_posts'])->name('posts.user_posts')->middleware('auth');


Route::get('/tags', [\App\Http\Controllers\TagController::class, 'index'])->name('tags.index');
Route::get('/tags/create', [\App\Http\Controllers\TagController::class, 'create'])->name('tags.create')->middleware('auth');
Route::post('/tags/save', [\App\Http\Controllers\TagController::class, 'save'])->name('tags.save')->middleware('auth');
Route::delete('/tags/{tag}/delete', [\App\Http\Controllers\TagController::class, 'delete'])->name('tags.delete')->middleware('auth');
Route::get('/tags/{tag}/edit', [\App\Http\Controllers\TagController::class, 'edit'])->name('tags.edit')->middleware('auth');
Route::put('/tags/{tag}/update', [\App\Http\Controllers\TagController::class, 'update'])->name('tags.update')->middleware('auth');
