<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;

Route::view('/','admin.main');
Route::view('polls/create','admin.polls.create')->name('polls.create');
Route::post('polls/create',[PollController::class,'store'])->name('polls.store');
Route::delete('polls/{poll}',[PollController::class,'destroy'])->name('polls.destroy');

Route::get('polls',[PollController::class,'index']);