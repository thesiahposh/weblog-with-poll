<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PollController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

//admin
//Route::view('admin','layouts.admin.main');

//polls
Route::get('poll/show/{poll}', [PollController::class,'show']);
Route::post('answer',[App\Http\Controllers\AnswerController::class,'answer'])->name('answer');

//blog
Route::group(['as' => 'blog.'], function ()
{
    Route::resource('blog', PostController::class)->whereNumber('blog');
    Route::resource('blog/comments', CommentController::class);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
