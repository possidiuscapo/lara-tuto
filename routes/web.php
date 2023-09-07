<?php

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

Route::get('/home', function () {
    $user = "Possidius";
    $array = [1,2,3];
    // dd($user);  // die and dump
    ddd($user, $array); // dump, die & debug
    return "<h1>Bienvenu $user !🤠</h1>";
});