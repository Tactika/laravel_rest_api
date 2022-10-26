<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// api/v1/endpoint

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function () {
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('invoices', InvoiceController::class);
});

Route::get('customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::get('invoices/create', [InvoiceController::class, 'create'])->name('invoices.create');
Route::post('customers', [CustomerController::class, 'store'])->name('customers.store');
Route::post('invoices', [InvoiceController::class, 'store'])->name('invoices.store');
