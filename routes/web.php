<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LineController;
use App\Http\Controllers\CatogeryController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\QoutationController;
use App\Http\Controllers\UnitsController;
use App\Http\Controllers\AboutCompanyController;


use Illuminate\Support\Facades\Auth;

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
//     return redirect()->to("lines");

// });
// Auth::login();
// Route::get('login', LoginController::class,"login");

Auth::routes();

 Route::get('/',function(){
    view('home');
 });
// lines route
Route::get('lines/create', [LineController::class,"create"]);
Route::get('lines/{master?}', [LineController::class,"index"]);
Route::post('lines', [LineController::class,"store"])->name('lines');
Route::post('lines/delete', [LineController::class,"destroy"])->name('lines.delete');
Route::put('lines/update', [LineController::class,"update"])->name('lines.update');
Route::put('lines/store', [LineController::class,"store"])->name('lines.store');




// items route
Route::get('item', [ItemsController::class,"index"]);
Route::post('item', [ItemsController::class,"store"])->name('item');
Route::post('item/delete', [ItemsController::class,"destroy"])->name('item.delete');
Route::post('item/update', [ItemsController::class,"update"])->name('item.update');
// grtItems
Route::get('item/data', [ItemsController::class,"getItems"])->name('getItems');



// catogery route
Route::get('catogery', [CatogeryController::class,"index"]);
Route::post('catogery', [CatogeryController::class,"store"])->name('catogery');
Route::post('catogery/delete', [CatogeryController::class,"destroy"])->name('catogery.delete');
Route::put('catogery/update', [CatogeryController::class,"update"])->name('catogery.update');

// brand
Route::get('brand', [BrandController::class,"index"]);
Route::post('brand', [BrandController::class,"store"])->name('brand');
Route::post('brand/delete', [BrandController::class,"destroy"])->name('brand.delete');
Route::put('brand/update', [BrandController::class,"update"])->name('brand.update');


// brand
Route::get('type', [TypeController::class,"index"]);
Route::post('type', [TypeController::class,"store"])->name('type');
Route::post('type/delete', [TypeController::class,"destroy"])->name('type.delete');
Route::put('type/update', [TypeController::class,"update"])->name('type.update');

// size
Route::get('size', [SizeController::class,"index"]);
Route::post('size', [SizeController::class,"store"])->name('size');
Route::post('size/delete', [SizeController::class,"destroy"])->name('size.delete');
Route::put('size/update', [SizeController::class,"update"])->name('size.update');

// units

Route::get('units', [UnitsController::class,"index"]);
Route::post('units', [unitsController::class,"store"])->name('units');
Route::post('units/delete', [unitsController::class,"destroy"])->name('units.delete');
Route::put('units/update', [unitsController::class,"update"])->name('units.update');


// quotation

Route::get('qoute', [QoutationController::class,"index"])->name('qoute');
Route::get('qoute/create', [QoutationController::class,"create"])->name('qoute.create');
Route::post('qoute/store', [QoutationController::class,"store"])->name('qoute.store');
Route::post('qoute/delete', [QoutationController::class,"destroy"])->name('qoute.delete');
Route::put('qoute/update', [QoutationController::class,"update"])->name('quotation.update');
Route::put('qoute/edit', [QoutationController::class,"edit"])->name('quotation.edit');
// Route::put('lines/store', [QoutationController::class,"store"])->name('lines.store');




// customer route
Route::get('customer', [CustomerController::class,"index"]);
Route::post('customer', [customerController::class,"store"])->name('customer');
Route::post('customer/delete', [customerController::class,"destroy"])->name('customer.delete');
Route::put('customer/update', [customerController::class,"update"])->name('customer.update');
Route::get('customer/data/{id}', [customerController::class,"data_customer"])->name('customer.data');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//About company routes
Route::get('about_company', [AboutCompanyController::class,"index"])->name('about_company');
Route::post('about_company', [AboutCompanyController::class,"store"])->name('about_company.store');
Route::delete('/about_company/delete_logo', [AboutCompanyController::class,"deleteLogo"])->name('about_company.delete_logo');
Route::delete('/about_company/delete_project/{project}',[AboutCompanyController::class,"deleteProject"] )->name('about_company.delete_project');
