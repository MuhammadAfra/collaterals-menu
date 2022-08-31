<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\CorporateController;

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
//     return view('layouts.index');
// });


Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/car', [FrontendController::class, 'car_vehicle'])->name('car_vehicle');
Route::get('/motor', [FrontendController::class, 'motor_vehicle'])->name('motor_vehicle');
Route::get('/house', [FrontendController::class, 'house'])->name('house');
Route::get('/inventory', [FrontendController::class, 'inventory'])->name('inventory');
Route::get('/invoice', [FrontendController::class, 'invoice'])->name('invoice');
Route::get('/corporate', [FrontendController::class, 'corporate'])->name('corporate');

Route::get('/carTambahan', [FrontendController::class, 'car_vehicle_tambahan'])->name('car_vehicle_tambahan');
Route::get('/motorTambahan', [FrontendController::class, 'motor_vehicle_tambahan'])->name('motor_vehicle_tambahan');
Route::get('/houseTambahan', [FrontendController::class, 'house_tambahan'])->name('house_tambahan');
Route::get('/inventoryTambahan', [FrontendController::class, 'inventory_tambahan'])->name('inventory_tambahan');
Route::get('/invoiceTambahan', [FrontendController::class, 'invoice_tambahan'])->name('invoice_tambahan');
Route::get('/corporateTambahan', [FrontendController::class, 'corporate_tambahan'])->name('corporate_tambahan');


Route::post('/motorVehicleStore', [MotorController::class, 'store'])->name('motorVehicleStore');
Route::post('/carVehicleStore', [CarController::class, 'store'])->name('carVehicleStore');
Route::post('/inventoryStore', [InventoryController::class, 'store'])->name('inventoryStore');
Route::post('/houseStore', [HouseController::class, 'store'])->name('houseStore');
Route::post('/invoiceStore', [InvoiceController::class, 'store'])->name('invoiceStore');
Route::post('/corporateStore', [CorporateController::class, 'store'])->name('corporateStore');
