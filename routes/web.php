<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UnitController;


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
Route::get('/properties/{propName}', [StaticPagesController::class, 'singleProperty']);

// Manager Pages
Route::get('/manager', [ManagerController::class, 'dashboard']);
Route::get('/manager/register', [ManagerController::class, 'register']);
Route::get('/manager/login', [ManagerController::class, 'login']);

// Manager Property Pages
Route::get('/manager/properties', [PropertyController::class, 'index']);
Route::get('/manager/properties/create', [PropertyController::class, 'create']);
Route::get('/manager/properties/{slug}/edit', [PropertyController::class, 'edit']);

// Manager Units Pages
Route::get('/manager/units', [UnitController::class, 'index']);
Route::get('/manager/units/available', [UnitController::class, 'available']);


Auth::routes();