<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Pos\CustomerController;
use App\Http\Controllers\Pos\SupplierController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
//Admin All Route
Route::controller(AdminController::class)->group(function () {
    Route::post('/admin/login', 'login')->name('admin.login');
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'profile')->name('admin.profile.view');
    Route::get('/admin/profile/edit', 'EditProfile')->name('admin.profile.edit');
    Route::post('/admin/profile/update', 'UpdateProfile')->name('admin.profile.update');
    Route::get('/admin/profile/change_password', 'ChangePassword')->name('admin.profile.change.password');
    Route::post('/admin/profile/update_password', 'UpdatePassword')->name('admin.profile.update.password');
});


Route::controller(SupplierController::class)->group(function () {
    Route::get('/supplier/all', 'SupplierAll')->name('supplier.all');
    Route::get('/supplier/add', 'SupplierAdd')->name('supplier.add');
    Route::post('/supplier/store', 'SupplierStore')->name('supplier.store');
    Route::get('/supplier/edit/{id}', 'SupplierEdit')->name('supplier.edit');
    Route::post('/supplier/update/{id}', 'SupplierUpdate')->name('supplier.update');
    Route::get('/supplier/delete/{id}', 'SupplierDelete')->name('supplier.delete');
});
Route::controller(CustomerController::class)->group(function () {
    Route::get('/customer/all', 'CustomerAll')->name('customer.all');
    Route::get('/customer/add', 'CustomerAdd')->name('customer.add');
    Route::post('/customer/store', 'CustomerStore')->name('customer.store');
    Route::get('/customer/edit/{id}', 'CustomerEdit')->name('customer.edit');
    Route::post('/customer/update/{id}', 'CustomerUpdate')->name('customer.update');
    Route::get('/customer/delete/{id}', 'CustomerDelete')->name('customer.delete');
});
require __DIR__.'/auth.php';
