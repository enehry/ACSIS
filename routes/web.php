<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TechWrkGrpController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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

/*
Route::get('/home', function () {
    return view('home.dash');
});

Route::get('/advisorlist', function () {
    return view('home.advisorlist');
});
*/
//------------------------------------ Main ---------------------------------------------------------------//

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('auth.login');

Route::get('/home', [App\Http\Controllers\MainController::class, 'dash'])->name('main.dash');
Route::get('/advisorlist', [HomeController::class, 'advisorlist'])->name('main.advisorlist');
Route::get('/addadvisor', [HomeController::class, 'addadvisor'])->name('main.addadvisor');
Route::get('/stakeholderinfo', [HomeController::class, 'stakeholderinfo'])->name('main.stakeholderinfo');
Route::get('/stakeholderprofile', [HomeController::class, 'stakeholderprofile'])->name('main.stakeholderprofile');
Route::get('/notification', [HomeController::class, 'notification'])->name('main.notification');
Route::get('/maintenance', [HomeController::class, 'maintenance'])->name('main.maintenance');
Route::get('/admin', [HomeController::class, 'admin'])->name('main.admin');
Route::get('/editacc', [HomeController::class, 'editacc'])->name('main.editacc');

/* Activity */

Route::get('/activity', [HomeController::class, 'activity'])->name('main.activity.activity');
Route::get('/balancedScorecardManagement', [HomeController::class, 'balancedScorecardManagement'])->name('main.activity.balancedScorecardManagement');
Route::get('/createmeeting', [HomeController::class, 'createmeeting'])->name('main.activity.createmeeting');

/* Maintenance */

Route::get('/technical-working-group', [TechWrkGrpController::class, 'index'])->name('twg');

Route::get('/admin', [HomeController::class, 'admin'])->name('main.admin');
Route::get('/advisoryCouncil', [HomeController::class, 'advisoryCouncil'])->name('main.advisoryCouncil');

Route::get('/policeStrategyManagementUnit', [HomeController::class, 'policeStrategyManagementUnit'])->name('main.policeStrategyManagementUnit');
Route::get('/superadminMaintenance', [HomeController::class, 'superadminMaintenance'])->name('main.superadminMaintenance');
Route::get('/addOffice', [HomeController::class, 'addOffice'])->name('main.addOffice');


//------------------------------------ User Logins ---------------------------------------------------------------//
Route::get('/AClogin', [App\Http\Controllers\HomeController::class, 'loginac'])->name('login.loginac');
Route::get('/PSMUlogin', [App\Http\Controllers\HomeController::class, 'loginps'])->name('login.loginps');
Route::get('/TWGlogin', [App\Http\Controllers\HomeController::class, 'logintwg'])->name('login.logintwg');


//Auth::routes(['verify' => true]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
