<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontController;


Route::resource('/',frontController::class);
Route::get('/index',[frontController::class ,'index']);


Route::get('/front', function () {
    return view('front');
});