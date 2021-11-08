<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AdvisoryCouncilController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PSMUController;
use App\Http\Controllers\TechWrkGrpController;
use App\Models\Activity;
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

Route::middleware('auth')->group(function () {
  Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

  //ACTIVITY
  Route::resource('/activity-logs', ActivityController::class);

  //CREATE MEETING
  Route::resource('/create-meetings', MeetingController::class);

  // PROFILEEEEEE
  Route::get('/profile', [ProfileController::class, 'index']);
  Route::post('/save-profile', [ProfileController::class, 'saveProfile'])->name('user.profile.save');

  Route::get('/activity', [HomeController::class, 'activity'])->name('main.activity.activity');
  Route::get('/balancedScorecardManagement', [HomeController::class, 'balancedScorecardManagement'])->name('main.activity.balancedScorecardManagement');


  /* Maintenance */

  Route::get('/admin', [HomeController::class, 'admin'])->name('main.admin');

  //ADVISORY COUNCIL
  Route::resource('/advisory-council', AdvisoryCouncilController::class);

  // TECHNICAL WORKING GROUP
  Route::get('/technical-working-group', [TechWrkGrpController::class, 'index'])->name('twg');
  Route::get('/technical-working-group/create', [TechWrkGrpController::class, 'create'])->name('twg.create');
  Route::post('/technical-working-group/store', [TechWrkGrpController::class, 'store'])->name('twg.store');
  Route::delete('/technical-working-group/delete/{id}', [TechWrkGrpController::class, 'destroy'])->name('twg.delete');
  Route::get('/technical-working-group/edit/{id}', [TechWrkGrpController::class, 'edit'])->name('twg.edit');
  Route::put('/technical-working-group/update/{id}', [TechWrkGrpController::class, 'update'])->name('twg.update');

  // PSMU
  Route::resource('psmu', PSMUController::class);

  Route::get('/notification-counter', [NotificationController::class, 'getNotificationCount']);
  Route::get('/notification-list', [NotificationController::class, 'index']);
  Route::get('/notification-viewed/{id}', [NotificationController::class, 'viewed'])->name('notification.viewed');
});


Auth::routes();

//------------------------------------ User Logins ---------------------------------------------------------------//

//Auth::routes(['verify' => true]);
