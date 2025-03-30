<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;

Route::view('/','admin.main');
Route::view('polls/create','admin.polls.create')->name('polls.create');
Route::get('polls/{poll}/edit', [PollController::class,'edit'])->name('polls.edit');
Route::put('polls/{poll}/edit', [PollController::class,'update'])->name('polls.update');
Route::post('polls/create',[PollController::class,'store'])->name('polls.store');
Route::delete('polls/{poll}',[PollController::class,'destroy'])->name('polls.destroy');

Route::get('polls',[PollController::class,'index']);