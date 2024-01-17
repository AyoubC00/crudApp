<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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
    return View::make('layouts.index');
});

Route::get("/users", function () {
    return View::make("layouts.users");
});

Route::get("/users/create", function () {
    return View::make("layouts.createUser");
});


Route::get("/users/{id}", function () {
    return View::make("layouts.user");
});

Route::get("/users/{id}/edit", function () {
    return View::make("layouts.editUser");
});