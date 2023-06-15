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
use App\Http\Controllers\Payments\EnotIoController;
use App\Http\Controllers\Payments\UserAgreementController;
use App\Http\Controllers\Payments\PrivacyPolicyController;
use App\Http\Controllers\Lineage2\DownloadController;
use App\Http\Controllers\Payments\PagesAlertSuccessController;
use App\Http\Controllers\Payments\PagesAlertFailController;
use App\Http\Controllers\Payments\EnotIoTestController;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\AdminDashboardBlockUserController;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\AdminDashboardUnBlockUserController;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\AdminDashboardPaginationController;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\AdminDashboardAllCharsByIdUserController;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\AdminDashboardAddL2ItemsController;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\AdminDashboardAllAccountsByIdUserController;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\Payments\AdminPaymentsPagination;
use App\Http\Controllers\Payments\Admin\AdminPaymentsController;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\Payments\AdminPaymentsFilters;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\Payments\AdminPaymentsPaginationFilters;
use App\Http\Middleware\StatisticsMiddleware;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Admin\AdminStatisticsController;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\Statistics\AdminStatisticsAllVisitByDay;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\Statistics\AdminStatisticsPaginatorVisit;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\Statistics\AdminStatisticsPaginatorUser;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\Statistics\AdminStaticsAllUsersByDay;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Admin\AdminPromoController;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\Promo\AdminPromoCreate;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\Promo\AdminPromoPaginator;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\DashboardActivatePromoUserController;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\Promo\AdminPromoOnlyUsed;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\Ajax\Admin\Promo\AdminPromoInfo;
use App\Http\Controllers\Lineage2\PersonalArea\Auth\DashboardConnectController;
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
})->name('home')->middleware('save_statistics');;

Route::get('/statistic/server/{server_id}/stats/{id}', [StatisticServerController::class, 'dataStat']);
Route::get('/statistic', [StatisticServerController::class, 'index'])->middleware('save_statistics');
Route::get('/registration', [RegistrationController::class, 'index'])->middleware('save_statistics');
Route::get('status/server', [StatusServerController::class, 'data']);
Route::get('lang/home', [LangController::class, 'index']);
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');
Route::get('/payments', [EnotIoController::class, 'index'])->middleware('save_statistics');
Route::get('/download', DownloadController::class)->name('download')->middleware('save_statistics');
Route::get('/privacypolicy', PrivacyPolicyController::class)->name('privacypolicy');
Route::get('/useragreement', UserAgreementController::class)->name('useragreement');
Route::get('/payments_success', PagesAlertSuccessController::class)->name('payments_success');
Route::get('/payments_fail', PagesAlertFailController::class)->name('payments_fail');
Route::post('/enotio/result1', [EnotIoController::class, 'handlePayment'])->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);
//Route::get('/enotio/result1', [EnotIoTestController::class, 'index'])->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);

Route::middleware('valid')->group(function () {
    Route::post('/adduser', [RegistrationController::class, 'ajaxRequestPost']);
    Route::post('/addPayments', [EnotIoController::class, 'paymentUser']);
});

Route::middleware(['auth', 'verified', 'roles_user'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboardchars', [DashboardCharsController::class, 'index'])->name('dashboardchars');
    Route::get('/dashboardconnect', [DashboardConnectController::class, 'index'])->name('dashboardconnect');
    Route::post('/dashboardchars/act_promo', [DashboardActivatePromoUserController::class, 'activate']);
});

Route::middleware(['auth', 'verified' , 'valid' , 'roles_user'])->group(function () {
    Route::post('/addL2User', [DashboardCreateL2UsersController::class, 'addAjaxL2User']);
    Route::post('/changePassL2User', [DashboardChangel2PassUsersController::class, 'changeAjaxPassL2User']);
});

Route::middleware(['auth', 'verified' ,  'roles_admin'])->group(function () {
    Route::get('/adminDashboard', [AdminDashboardController::class, 'index'])->name('adminDashboard');
    Route::get('/adminDashboard/users', [AdminDashboardPaginationController::class, 'page']);
    Route::get('/adminDashboard/block', [AdminDashboardBlockUserController::class, 'index']);
    Route::post('/adminDashboard/blockusersingl_account', [AdminDashboardBlockUserController::class, 'singl']);
    Route::get('/adminDashboard/unblock', [AdminDashboardUnBlockUserController::class, 'index']);
    Route::post('/adminDashboard/unblockusersingl_account', [AdminDashboardUnBlockUserController::class, 'singl']);
    Route::get('/adminDashboard/allchars', [AdminDashboardAllCharsByIdUserController::class, 'index']);
    Route::get('/adminDashboard/all_l2accounts', [AdminDashboardAllAccountsByIdUserController::class, 'index']);
    Route::post('/adminDashboard/additems', [AdminDashboardAddL2ItemsController::class, 'index']);

    Route::get('/adminPayments', [AdminPaymentsController::class, 'index'])->name('payments');
    Route::get('/adminPayments/orders', [AdminPaymentsPagination::class, 'page']);
    Route::get('/adminPayments/filter', [AdminPaymentsFilters::class, 'filter']);
    Route::get('/adminPayments/filters_pag/', [AdminPaymentsPaginationFilters::class, 'page']);


    Route::get('/adminStatistics', [AdminStatisticsController::class, 'index'])->name('adminStatistics');
    Route::get('/adminStatistics/visit', [AdminStatisticsAllVisitByDay::class, 'index']);
    Route::get('/adminStatistics/user', [AdminStaticsAllUsersByDay::class, 'index']);
    Route::get('/adminStatistics/visit_filter', [AdminStatisticsPaginatorVisit::class, 'page']);
    Route::get('/adminStatistics/user_filter', [AdminStatisticsPaginatorUser::class, 'page']);


    Route::get('/adminPromo', [AdminPromoController::class, 'index'])->name('promo');
    Route::post('/adminPromo/create', [AdminPromoCreate::class, 'create']);
    Route::get('/adminPromo/promo_filter', [AdminPromoPaginator::class, 'page']);
    Route::get('/adminPromo/promo_used', [AdminPromoOnlyUsed::class, 'page']);
    Route::get('/adminPromo/promo_info', [AdminPromoInfo::class, 'info']);
    
});

//Route::get('/enotio/result', [EnotIoController::class, 'handlePayment']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/usershow/{id}', [UserShowTest::class, 'show']);



require __DIR__.'/auth.php';
//require __DIR__.'/lineage2/l2auth.php';
