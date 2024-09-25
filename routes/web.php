<?php
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DressController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\PaymentController;
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
Route::controller(CustomerController::class)->group(function(){
    Route::get('customers', 'index');
    Route::get('customers/create', 'create');
    Route::post('customers', 'store');
    Route::get('customers/{id}', 'show');
    Route::get('customers/{id}/edit', 'edit');
    Route::put('customers/{id}', 'update');
    Route::delete('customers/{id}', 'destroy');
});

Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::resource('dresses', DressController::class);
Route::resource('rents', RentController::class);
Route::resource('payments', PaymentController::class);