<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserShowTest;
use App\Http\Controllers\Lang\LangController;
use App\Http\Controllers\Lineage2\StatusServerController;
use App\Http\Controllers\Lineage2\StatisticServerController;
use App\Http\Controllers\Lineage2\RegistrationController;
use App\Http\Middleware\Lineage2\ValidateReg;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\DashboardController;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\DashboardCharsController;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Admin\AdminDashboardController;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\DashboardCreateL2UsersController;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\DashboardChangel2PassUsersController;


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

Route::get('/', function () {
    return view('l2index');
});

Route::get('/statistic/server/{server_id}/stats/{id}', [StatisticServerController::class, 'dataStat']);
Route::get('/statistic', [StatisticServerController::class, 'index']);
Route::get('/registration', [RegistrationController::class, 'index']);
Route::get('status/server', [StatusServerController::class, 'data']);
Route::get('lang/home', [LangController::class, 'index']);
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

Route::middleware('valid')->group(function () {
    Route::post('/adduser', [RegistrationController::class, 'ajaxRequestPost']);
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified' , 'roles_user'])->name('dashboard');
Route::get('/dashboardchars', [DashboardCharsController::class, 'index'])->middleware(['auth', 'verified' , 'roles_user'])->name('dashboardchars');

Route::middleware(['auth', 'verified' , 'valid' , 'roles_user'])->group(function () {
    Route::post('/addL2User', [DashboardCreateL2UsersController::class, 'addAjaxL2User']);
    Route::post('/changePassL2User', [DashboardChangel2PassUsersController::class, 'changeAjaxPassL2User']);
});

Route::middleware(['auth', 'verified' ,  'roles_admin'])->group(function () {
    Route::get('/adminDashboard', [AdminDashboardController::class, 'index']);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/usershow/{id}', [UserShowTest::class, 'show']);



require __DIR__.'/auth.php';
//require __DIR__.'/lineage2/l2auth.php';
