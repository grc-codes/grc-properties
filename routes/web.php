<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\TenantController;



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

// Static Pages
Route::get('/', [StaticPagesController::class, 'home']);
Route::get('/about', [StaticPagesController::class, 'about']);
Route::get('/rental-application', [StaticPagesController::class, 'rentalApplication']);
Route::get('/contact', [StaticPagesController::class, 'contact']);


// Properties Pages
Route::get('/properties', [StaticPagesController::class, 'properties']);
Route::get('/properties/{slug}', [StaticPagesController::class, 'singleProperty']);

// Manager Pages
Route::get('/manager', [ManagerController::class, 'dashboard']);
Route::get('/manager/register', [ManagerController::class, 'register']);
Route::get('/manager/login', [ManagerController::class, 'login']);
Route::get('/manager/email-list', [ManagerController::class, 'emailList']);
Route::get('/manager/messages', [ManagerController::class, 'siteMessages']);
Route::get('/manager/messages/{id}', [ManagerController::class, 'siteMessage']);
Route::get('/manager/rental-applications', [ManagerController::class, 'rentalApps']);
Route::get('/manager/rental-applications/{id}', [ManagerController::class, 'rentalApp']);




// Manager Property Pages
Route::get('/manager/properties', [PropertyController::class, 'index']);
Route::get('/manager/properties/create', [PropertyController::class, 'create']);
Route::get('/manager/properties/{slug}/edit', [PropertyController::class, 'edit']);

// Manager Units Pages
Route::get('/manager/units', [UnitController::class, 'index']);
Route::get('/manager/units/available', [UnitController::class, 'available']);

// Manager Tenants Pages
Route::get('/manager/tenants', [TenantController::class, 'index']);
Route::get('/manager/tenants/create', [TenantController::class, 'create']);
Route::get('/manager/tenants/{slug}/edit', [TenantController::class, 'edit']);


Auth::routes();