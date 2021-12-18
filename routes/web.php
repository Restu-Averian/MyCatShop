<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\DataProductController;
use App\Http\Controllers\TesController;
use App\Http\Controllers\DataCategoryController;
use App\Http\Controllers\DataPenjualanController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartDetailController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\ReviewController;
use App\Models\Products;
use App\Models\User;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    $products = Products::latest()->limit('3')->get();
    $kucing = Products::where('kategori', 'Kucing');
    $wetfood = Products::where('kategori', 'Wet Food');
    $dryfood = Products::where('kategori', 'Dry Food');
    $cattoys = Products::where('kategori', 'Cat Toys');
    $pasir = Products::where('kategori', 'Perlengkapan Pasir');
    $obat = Products::where('kategori', 'Obat Kucing');
    return view('home', [
        'title' => 'Home',
        'products' => $products,
        'kucing' => $kucing,
        'wetfood' => $wetfood,
        'dryfood' => $dryfood,
        'cattoys' => $cattoys,
        'pasir' => $pasir,
        'obat' => $obat,
    ]);
});


Route::get('/home', [UserHomeController::class, 'index']);



//Register User
Route::get('/register', [RegistrationController::class, 'create']);
Route::post('/register', [RegistrationController::class, 'store']);

//Login User
Route::get('/login', [SessionsController::class, 'create']);
Route::post('/login', [SessionsController::class, 'store']);
Route::get('/logout', [SessionsController::class, 'destroy']);

//TODO::Forgot password outside, sementara di session controller dulu
Route::get('/forgot-password', function () {
    return view('forgotpassoutside', [
        'title' => 'Reset Password'
    ]);
});

//Show All product
Route::get("/allproduct", function () {
    $products = DB::table('products')->get();
    return view('dry-food-category', [
        'product' => $products,
        "title" => "Product"
    ]);
});

Route::get('allkucingproduct', [UserHomeController::class, 'showKucing']);
Route::get('allwetfoodproduct', [UserHomeController::class, 'showWetFood']);
Route::get('alldryfoodproduct', [UserHomeController::class, 'showDryFood']);
Route::get('allcattoysproduct', [UserHomeController::class, 'showCatToys']);
Route::get('allpasirproduct', [UserHomeController::class, 'showPasir']);
Route::get('allmedicproduct', [UserHomeController::class, 'showMedic']);
Route::get('allproducts', [UserHomeController::class, 'allproducts']);
Route::get('resultsearchproduct', [UserHomeController::class, 'resultsearchproducts']);

Route::get('detail/{id}', [UserHomeController::class, 'detail']);

Route::post('add-to-cart', [CartController::class, 'addProduct']);

Route::get('/load-cart-data', [CartController::class, 'cartcount']);

Route::middleware(['auth'])->group(function () {
    //harus login
    Route::get('cart', [CartController::class, 'viewcart']);
    Route::get('delete-cart-item/{id}', [CartController::class, 'deleteproduct']);
    Route::post('update-cart', [CartController::class, 'updatecart']);
    Route::get('checkout', [CheckoutController::class, 'index']);
    Route::get('hapus-checkout/{id}', [CheckoutController::class, 'hapuscheckout']);
    Route::post('place-order', [CheckoutController::class, 'placeorder']);
    Route::get('profile', [UserController::class, 'index']);
    Route::get('hapuspembelian/{id}', [UserController::class, 'hapuspembelian']);

    //Update Profile
    // //1. Ganti Nama
    Route::get('/change-nama', [UserController::class, 'changenama']);
    Route::post('update-nama/{id}', [UserController::class, 'updatenama']);
    // //2. Ganti Email
    Route::get('/change-email', [UserController::class, 'changeemail']);
    Route::post('update-email/{id}', [UserController::class, 'updateemail']);
    // //3. Ganti Password
    Route::get('/change-password', [ChangePasswordController::class, 'index']);
    Route::post('/change-password', [ChangePasswordController::class, 'updatepassword']);
});

//Reviews
Route::post('detail/{id}/reviews', [ReviewController::class, 'store']);



//---Admin---
Route::middleware(['auth', 'admin'])->group(function () {

    //Dashboard
    Route::get('/dashboard', function () {
        $countPenjualan = DB::table('order_items')->count();
        $countUser = DB::table('users')->where('isAdmin', '=', 0)->count();
        $countProduct = DB::table('products')->count();
        //$countCategories = DB::table('categories')->count();
        return view('admin/home', [
            'title' => 'Dashboard',
            'countUser' => $countUser,
            'countProduct' => $countProduct,
            'countPenjualan' => $countPenjualan
            //  'countCategories' => $countCategories
        ]);
    });

    //Logout
    Route::get('/logout-admin', function () {
        Auth::logout();

        return redirect()->to('/home');
    });

    //Data User
    Route::get('/searchuser', [DataUserController::class, 'search']);
    Route::get('/data-user', [DataUserController::class, 'index']);

    //Add product into database
    Route::get('/addproduct', [ProductController::class, 'create']);
    Route::post('/addproduct', [ProductController::class, 'store']);
    Route::get('editpr/{id}', [ProductController::class, 'formedit']);
    Route::post('updatepr/{id}', [ProductController::class, 'processedit']);
    //Data Produk
    Route::get('/data-product', [DataProductController::class, 'index']);
    Route::get('delete-produk/{id}', [DataProductController::class, 'delete']);
    Route::get('/searchproduct', [DataProductController::class, 'search']);


    //Kategori - ini form kategori
    // Route::get('/kategori', [CategoriesController::class, 'create']);
    // Route::post('/kategori', [CategoriesController::class, 'store']);
    // Route::get('edit/{id}', [CategoriesController::class, 'formedit']);
    // Route::post('update/{id}', [CategoriesController::class, 'processedit']);
    //Data Kategori - Ini dalam table data kategori
    Route::get('/data-kategori', [DataCategoryController::class, 'index']);
    //Route::get('delete/{id}', [DataCategoryController::class, 'delete']);


    //Data Penjualan
    Route::get('/data-penjualan', [DataPenjualanController::class, 'index']);
    Route::get('edit-data-penjualan/{id}', [DataPenjualanController::class, 'edit']);
    Route::post('proses-edit-data-penjualan/{id}', [DataPenjualanController::class, 'update']);
    Route::get('/searchdatajual', [DataPenjualanController::class, 'search']);
});