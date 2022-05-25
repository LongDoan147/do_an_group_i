<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryProduct;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

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
