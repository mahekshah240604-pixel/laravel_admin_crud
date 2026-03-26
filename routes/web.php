<?php

use App\Http\Controllers\homecontroller;
use App\Http\Controllers\mycategorycontroller;
use App\Http\Controllers\mylogincontroller;
use App\Http\Controllers\mylogoutcontroller;
use App\Http\Controllers\myproductcontroller;
use App\Http\Controllers\mysignupcontroller;
use Illuminate\Database\Connectors\MySqlConnector;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('signup',mysignupcontroller::class);
Route::resource('login',mylogincontroller::class);

Route::get('/home',[homecontroller::class,'home']);
Route::get('/logout',[homecontroller::class,'logout']);

Route::resource('category',mycategorycontroller::class);

Route::resource('product',myproductcontroller::class);