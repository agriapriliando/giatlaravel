<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ReportController;

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
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index']);

// ActivityController
Route::get('/act', [ActivityController::class, 'actlist']);
Route::get('/act/detail', [ActivityController::class, 'actdetail']);
Route::get('/act/add', [ActivityController::class, 'actadd']);
Route::get('/act/edit', [ActivityController::class, 'actedit']);

// OrganizationController
Route::get('/org', [OrganizationController::class, 'orglist']);
Route::get('/org/add', [OrganizationController::class, 'orgadd']);
Route::get('/org/edit', [OrganizationController::class, 'orgedit']);

// UnitController
Route::get('/unit', [UnitController::class, 'unitlist']);
Route::get('/unit/add', [UnitController::class, 'unitadd']);
Route::get('/unit/edit', [UnitController::class, 'unitedit']);

// employeeController
Route::get('/emp', [EmployeeController::class, 'emp']);
Route::get('/emp/list', [EmployeeController::class, 'emplist']);

Route::get('/monthly',[ReportController::class, 'monthly']);
Route::get('/daily',[ReportController::class, 'daily']);