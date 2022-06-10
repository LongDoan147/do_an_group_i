<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SocialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});
Route::get('detail-product', [ProductController::class, 'detail_product'])->name('detail.product');

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::middleware('checklogin')->group(function(){
    Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
});

//Admin
Route::get('admin', [AdminController::class, 'index'])->name('admin_login');
Route::get('dashboard', [AdminController::class, 'show_dashboard'])->name('admin_layout');
Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::post('admin-dashboard', [AdminController::class, 'dashboard'])->name('admin.layout');

//Category
Route::get('add-category-product', [CategoryProduct::class, 'add_category_product'])->name('admin.add_category');
Route::get('all-category-product', [CategoryProduct::class, 'all_category_product'])->name('admin.all_category');
Route::post('save-category-product', [CategoryProduct::class, 'save_category_product'])->name('admin.save_category');

//Product
Route::get('add-product', [ProductController::class, 'add_product'])->name('admin.add_product');
Route::get('all-product', [ProductController::class, 'all_product'])->name('admin.all_product');
Route::post('save-product', [ProductController::class, 'save_product'])->name('admin.save_product');
Route::get('/unactive-product/{product_id}', [ProductController::class, 'unactive_product']);
Route::get('/active-product/{product_id}', [ProductController::class, 'active_product']);
// login fb
Route::get('/login-facebook', [AdminController::class, 'login_facebook']);
Route::get('/admin/callback', [AdminController::class, 'callback_facebook']);
