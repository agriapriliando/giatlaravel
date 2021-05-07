<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\LoginController;

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

// loginController
Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

// dashboardController
Route::get('/dashboard', [DashboardController::class, 'index']);

// OrganizationController
Route::get('/org', [OrganizationController::class, 'orglist']);
Route::get('/org/add', [OrganizationController::class, 'orgadd']);
Route::put('/org/addprocess', [OrganizationController::class, 'orgaddProcess']);
Route::delete('/org/delete/{id}', [OrganizationController::class, 'orgDelete']);
Route::get('/org/edit/{id}', [OrganizationController::class, 'orgedit']);
Route::patch('/org/edit/{id}', [OrganizationController::class, 'orgeditProcess']);

// UnitController
Route::get('/unit', [UnitController::class, 'unitlist']);
Route::get('/unit/add', [UnitController::class, 'unitadd']);
Route::get('/unit/edit', [UnitController::class, 'unitedit']);

// ActivityController
Route::get('/act', [ActivityController::class, 'actlist']);
Route::get('/act/detail', [ActivityController::class, 'actdetail']);
Route::get('/act/add', [ActivityController::class, 'actadd']);
Route::get('/act/edit', [ActivityController::class, 'actedit']);


// employeeController
Route::get('/emp', [EmployeeController::class, 'emp']);
Route::get('/emp/list', [EmployeeController::class, 'emplist']);

Route::get('/monthly',[ReportController::class, 'monthly']);
Route::get('/daily',[ReportController::class, 'daily']);