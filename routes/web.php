<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminEmployeeController;
use App\Http\Controllers\AdminMedicineController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminSupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
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
    return redirect('admin/login');
});

Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store']);
});

Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('/admin/profile', [AdminProfileController::class, 'index'])->name('admin.profile');
Route::post('/admin/profile.edit', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');

Route::get('/admin/product', [AdminMedicineController::class, 'index'])->name('admin.medicine');
Route::get('/admin/product/store', [AdminMedicineController::class, 'store'])->name('admin.medicine.add');
Route::post('/admin/product/save', [AdminMedicineController::class, 'save'])->name('admin.product.save');
Route::get('/admin/product/verification/{regNo}', [AdminMedicineController::class, 'verification'])->name('admin.product.verification');
Route::post('/admin/supplier/delete/{id}', [AdminSupplierController::class, 'deleteSupplier'])->name('admin.supplier.delete');

Route::get('/admin/supplier', [AdminSupplierController::class, 'index'])->name('admin.supplier');
Route::get('/admin/supplier/all', [AdminSupplierController::class, 'supplierData'])->name('admin.supplier.all');
Route::get('/admin/supplier/store', [AdminSupplierController::class, 'store'])->name('admin.supplier.add');
Route::post('/admin/supplier/save', [AdminSupplierController::class, 'save'])->name('admin.supplier.save');
Route::get('/admin/supplier/verification/{regNo}', [AdminSupplierController::class, 'verification'])->name('admin.supplier.verification');
Route::post('/admin/supplier/delete/{id}', [AdminSupplierController::class, 'deleteSupplier'])->name('admin.supplier.delete');

Route::get('/admin/employee', [AdminEmployeeController::class, 'index'])->name('admin.employee');
Route::get('/admin/employee/store', [AdminEmployeeController::class, 'store'])->name('admin.employee.add');

Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('admin.dashboard');

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/test', [TestController::class, 'testApi'])->name('test');
