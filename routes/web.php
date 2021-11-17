<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DataProductController;
use App\Http\Controllers\DataCategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    $categories = DB::table('categories')->get(); //Penting ! Karena untuk define di perulangan
    return view("home", [
        'categories' => $categories,
        "title" => "Home"
    ]);
});
Route::get('/profile', function () {
    $users = Auth::user();
    return view('profile', [
        'title' => 'Akun',
        'users' => $users
    ]);
});

//Register User
Route::get('/register', [RegistrationController::class, 'create']);
Route::post('/register', [RegistrationController::class, 'store']);

//Login User
Route::get('/login', [SessionsController::class, 'create']);
Route::post('/login', [SessionsController::class, 'store']);
Route::get('/logout', [SessionsController::class, 'destroy']);


//Show All product
Route::get("/allproduct", function () {
    $products = DB::table('products')->get();
    return view('dry-food-category', [
        'product' => $products,
        "title" => "Product"
    ]);
});


//Add product into database
Route::get('/addproduct', [ProductController::class, 'create']);
Route::post('/addproduct', [ProductController::class, 'store']);
Route::get('editpr/{id}', [ProductController::class, 'formedit']);
Route::post('updatepr/{id}', [ProductController::class, 'processedit']);

//Kategori - ini form kategori
Route::get('/kategori', [CategoriesController::class, 'create']);
Route::post('/kategori', [CategoriesController::class, 'store']);
Route::get('edit/{id}', [CategoriesController::class, 'formedit']);
Route::post('update/{id}', [CategoriesController::class, 'processedit']);

//Data Kategori - Ini dalam table data kategori
Route::get('/data-kategori', [DataCategoryController::class, 'index']);
Route::get('delete/{id}', [DataCategoryController::class, 'delete']);




//Data Produk
Route::get('/data-product', [DataProductController::class, 'index']);
Route::get('delete-produk/{id}', [DataProductController::class, 'delete']);

//Data User
Route::get('/data-user', function () {
    $user = DB::table('users')->get();
    return view('/data-user', [
        'user' => $user,
        'title' => 'Data User'
    ]);
});


//Tampilan Cart
Route::get('/cart', function () {
    return view('/cart', [
        'title' => 'Keranjang'
    ]);
});