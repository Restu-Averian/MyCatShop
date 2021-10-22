<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view("home", [
        "title" => "Home"
    ]);
});
Route::get('/profil', function () {
    return view("my-account", [
        "title" => "Akun Saya"
    ]);
});
Route::get('/dry-food-category', function () {
    return view("dry-food-category", [
        "title" => "Kategori Dry Food"
    ]);
});