<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

// dashboardController
Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/worksall', [DashboardController::class, 'worksall']);
Route::get('/workspeg', [DashboardController::class, 'workspeg']);

// OrganizationController
Route::get('/org', [OrganizationController::class, 'orglist']);
Route::get('/org/add', [OrganizationController::class, 'orgadd']);
Route::put('/org/addprocess', [OrganizationController::class, 'orgaddProcess']);
Route::get('/org/edit/{id}', [OrganizationController::class, 'orgedit']);
Route::patch('/org/edit/{id}', [OrganizationController::class, 'orgeditProcess']);
Route::delete('/org/delete/{id}', [OrganizationController::class, 'orgDelete']);

// UnitController
Route::get('/unit', [UnitController::class, 'unitlist']);
Route::get('/unit/add', [UnitController::class, 'unitadd']);
Route::put('/unit/addprocess', [UnitController::class, 'unitaddProcess']);
Route::get('/unit/edit/{id}', [UnitController::class, 'unitedit']);
Route::patch('/unit/editprocess/{id}', [UnitController::class, 'uniteditProcess']);
Route::delete('/unit/delete/{id}', [UnitController::class, 'unitDelete']);

// LeaderController
Route::get('leader', [LeaderController::class, 'list']);
Route::get('leader/add', [LeaderController::class, 'leaderadd']);
Route::put('leader/addprocess', [LeaderController::class, 'leaderaddprocess']);
Route::get('leader/edit/{id}', [LeaderController::class, 'leaderedit']);
Route::patch('leader/editprocess/{id}', [LeaderController::class, 'leadereditProcess']);
Route::delete('leader/delete/{id}', [LeaderController::class, 'leaderDelete']);

// EmployeeController
Route::get('/emp', [EmployeeController::class, 'emp']);
Route::get('/emp/list', [EmployeeController::class, 'emplist']);
Route::get('/emp/add', [EmployeeController::class, 'empadd']);
Route::patch('/emp/addprocess', [EmployeeController::class, 'empaddProcess']);
Route::get('/emp/edit/{id}', [EmployeeController::class, 'empedit']);
Route::patch('/emp/editprocess/{id}', [EmployeeController::class, 'empeditProcess']);
Route::delete('/emp/delete/{id}', [EmployeeController::class, 'empDelete']);

// ActivityController
Route::get('/act', [WorkController::class, 'actlist']);
Route::get('/act/detail/{id}', [WorkController::class, 'actdetail']);
Route::get('/act/add', [WorkController::class, 'actadd']);
Route::put('/act/addprocess', [WorkController::class, 'actaddProcess']);
Route::get('/act/edit/{id}', [WorkController::class, 'actedit']);
Route::patch('/act/editprocess/{id}', [WorkController::class, 'acteditProcess']);
Route::delete('/act/delete/{id}', [WorkController::class, 'actDelete']);
Route::get('/autocomplete',[WorkController::class, 'autocomplete'])->name('autocomplete');

// ReportController
Route::get('/report',[ReportController::class, 'report']);
Route::get('/monthly',[ReportController::class, 'monthly']);
Route::get('/daily',[ReportController::class, 'daily']);

//UserController
Route::get('/user',[UserController::class, 'index']);
Route::get('/employeeac',[UserController::class, 'employeeac'])->name('employeeac');
Route::get('/user/add', [UserController::class, 'useradd']);
Route::patch('/user/addprocess', [UserController::class, 'useraddProcess']);
Route::get('/user/edit/{id}', [UserController::class, 'useredit']);
Route::patch('/user/edit/{id}', [UserController::class, 'usereditProcess']);

Route::get('/user/pass/{id}', [UserController::class, 'userPass']);
Route::patch('/user/pass/{id}', [UserController::class, 'userPassProcess']);
Route::delete('/user/delete/{id}', [UserController::class, 'userDelete']);

//UserController pass account
Route::get('/user/pass', [UserController::class, 'userPassAccount']);
Route::patch('/user/passaccount', [UserController::class, 'userPassAccountProcess']);