<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User2controller;
use App\Http\Controllers\Usercontroller;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/test',[User2controller::class,'test']);
Route::get('/test2',[User2controller::class,'mytest']);
Route::get('/user-home',[Usercontroller::class,'userhome']);
Route::get('/user-abut',[Usercontroller::class,'userabut']);

