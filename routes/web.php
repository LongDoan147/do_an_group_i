<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminController;

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


