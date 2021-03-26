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
Route::post('/', [StaticPagesController::class, 'storeSubscriber']);
Route::get('/thank-you', [StaticPagesController::class, 'subThankYou']);
Route::get('/about', [StaticPagesController::class, 'about']);
Route::get('/rental-application', [StaticPagesController::class, 'rentalApplication']);
Route::post('/rental-application', [StaticPagesController::class, 'storeRentalApp']);
Route::get('/rental-application/thank-you', [StaticPagesController::class, 'rentalAppThankYou']);
Route::get('/contact', [StaticPagesController::class, 'contact']);
Route::post('/contact', [StaticPagesController::class, 'storeMessage']);
Route::get('/contact/thank-you', [StaticPagesController::class, 'messageThankYou']);


// Properties Pages
Route::get('/properties', [StaticPagesController::class, 'properties']);
Route::get('/properties/{slug}', [StaticPagesController::class, 'singleProperty']);

// Manager Pages
Route::get('/manager', [ManagerController::class, 'dashboard']);
Route::get('/manager/estimated-total-revenue', [ManagerController::class, 'estimatedTotalRevenue']);
Route::get('/manager/revenue-by-property', [ManagerController::class, 'revenueByProperty']);
Route::get('/manager/register', [ManagerController::class, 'register']);
Route::get('/manager/login', [ManagerController::class, 'login']);
Route::get('/manager/email-list', [ManagerController::class, 'showSubscriptions']);
Route::get('/manager/email-list/{id}/delete', [ManagerController::class, 'deleteSubscription']);
Route::get('/manager/messages', [ManagerController::class, 'siteMessages']);
Route::get('/manager/messages/{id}', [ManagerController::class, 'siteMessage']);
Route::get('/manager/rental-applications', [ManagerController::class, 'rentalApps']);
Route::get('/manager/rental-applications/{id}', [ManagerController::class, 'rentalApp']);

// Manager Property Pages
Route::get('/manager/properties', [PropertyController::class, 'index']);
Route::get('/manager/properties/create', [PropertyController::class, 'create']);
Route::post('/manager/properties', [PropertyController::class, 'store']);
Route::get('/manager/properties/{id}/edit', [PropertyController::class, 'edit']);
Route::put('/manager/properties/{id}', [PropertyController::class, 'update']);
Route::get('/manager/properties/{id}/delete', [PropertyController::class, 'delete']);

// Manager Units Pages
Route::get('/manager/units', [UnitController::class, 'index']);

// Manager Tenants Pages
Route::get('/manager/tenants', [TenantController::class, 'index']);
Route::get('/manager/tenants/create', [TenantController::class, 'create']);
Route::post('/manager/tenants', [TenantController::class, 'store']);
Route::get('/manager/tenants/{id}/edit', [TenantController::class, 'edit']);
Route::put('/manager/tenants/{id}', [TenantController::class, 'update']);
Route::get('/manager/tenants/{id}/delete', [TenantController::class, 'delete']);
Route::get('/manager/tenants/{id}/create', [ManagerController::class, 'newTenant']);

Auth::routes();