<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;

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

Route::get('/add-driver',[DriverController::class,'create'])->name('driver.create');

Route::post('/store-driver',[DriverController::class,'store'])->name('driver.store');

Route::get('/all-drivers',[DriverController::class,'index'])->name('driver.index');

Route::get('/edit-driver/{driver_id}',[DriverController::class,'edit'])->name('driver.edit');

Route::post('/update-driver/{driver_id}',[DriverController::class,'update'])->name('driver.update');

Route::get('/delete-driver/{driver_id}',[DriverController::class,'destroy'])->name('driver.delete');
