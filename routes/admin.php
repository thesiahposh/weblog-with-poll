<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;

Route::view('/','admin.main');
Route::get('polls',[PollController::class,'index']);