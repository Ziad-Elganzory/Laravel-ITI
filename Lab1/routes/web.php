<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('posts', [PostController::class, 'index'])->name('posts.index');

//create post
//1- Show form for creation => GET
//2- Submit form , send data => POST
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');//show the form for creation
Route::post('posts', [PostController::class, 'store'])->name('posts.store');//save data

Route::get('posts/{id}', [PostController::class, 'show'])->where('id', '[0-9]+')->name('posts.show');;

//update post
//1- Show form for edit => GET
//2- Submit form , send data => POST
Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');//Show form for edit
Route::put('posts/{id}', [PostController::class, 'update'])->name('posts.update');//save data

Route::delete('posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');



Route::fallback(fn() => 'Route not found');
