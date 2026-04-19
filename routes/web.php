<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


Route::get("/",function(){
    return "burası ana sayfa";
});



Route::prefix("users")->group(function(){
 Route::get('/create',[UserController::class,"create"]);
 Route::get('/edit',[UserController::class,"edit"]);
 Route::get('/list',[UserController::class,"list"]);
 Route::get("/test",[UserController::class,"test"]);

});

Route::prefix("admin")->group(function(){
    Route::get("/",[AdminController::class,"index"]);

});







