<?php

use App\Http\Livewire\Businesses;
use App\Http\Livewire\Customers;
use App\Http\Livewire\Invoices;
use App\Http\Livewire\BusinessCreate;
use App\Http\Livewire\InvoiceCreate;
use App\Http\Livewire\CustomerCreate;
use App\Http\Livewire\HelloWorld;
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

/*
|--------------------------------------------------------------------------
| Index Route
|--------------------------------------------------------------------------
*/

Route::get('/', HelloWorld::class)->name('home');

/*
|--------------------------------------------------------------------------
| Invoice Routes
|--------------------------------------------------------------------------
*/

Route::get('/customers', Customers::class)->name('customers');
Route::get('/customer/create', CustomerCreate::class)->name('customer.create');

/*
|--------------------------------------------------------------------------
| Invoice Routes
|--------------------------------------------------------------------------
*/

Route::get('/invoices', Invoices::class)->name('invoices');
Route::get('/invoice/create', InvoiceCreate::class)->name('invoice.create');

/*
|--------------------------------------------------------------------------
| Business Routes
|--------------------------------------------------------------------------
*/

Route::get('/businesses', Businesses::class)->name('businesses');
Route::get('/business/create', BusinessCreate::class)->name('business.create');
