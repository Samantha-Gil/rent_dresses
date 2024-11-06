<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DressController;
use App\Http\Controllers\RentController;
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
    return view('home');
});

Route::view('/', 'home')->name('home');

Route::controller(CustomerController::class)->group(function(){
    Route::get('customers', 'index')->name('customers.index');
    Route::get('customers/create', 'create')->name('customers.create');
    Route::post('customers', 'store')->name('customers.store');
    Route::get('customers/{customer}', 'show')->name('customers.show');
    Route::get('customers/{customer}/edit', 'edit')->name('customers.edit');
    Route::put('customers/{customer}', 'update')->name('customers.update');
    Route::delete('customers/{customer}', 'destroy')->name('customers.destroy');
});

Route::resource('dresses', DressController::class);
Route::resource('rents', RentController::class);

