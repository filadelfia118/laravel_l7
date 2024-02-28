<?php

use App\Http\Controllers\SubscribeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::post('subscribe',[SubscribeController::class,'store'])->name('subscribe');
