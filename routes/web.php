<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\ManagerController;

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
Route::get('/manager', [ManagerController::class, 'managerDash']);
Route::get('/manager/register', [ManagerController::class, 'managerRegister']);
Route::get('/manager/login', [ManagerController::class, 'managerLogin']);


Auth::routes();