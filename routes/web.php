<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','App\Http\Controllers\eventController@getAllCommittees')->name('homePage');
Route::post('/registration','App\Http\Controllers\eventController@store')->name('registration');
Route::get('/registration','App\Http\Controllers\eventController@registrationView')->name('registrationView');
Route::get('/appointments','App\Http\Controllers\eventController@getAppointments')->name('appointmentsAjax');

// Route::get('/admin',function (){
//     return view('admin');
// });


Route::group(['prefix' => 'admin'], function () {

    Route::get('/EventMembers','App\Http\Controllers\eventController@getAllMembers')->name('EventMembers');
    Route::get('/{id}','App\Http\Controllers\eventController@deleteMember')->name('deleteMember');


    Route::get('/EventAppointment/{committee_id}','App\Http\Controllers\AppointmentsController@getAllAppoitments')->name('GetAll');
    Route::post('/EventAppointment/{committee_id}', 'App\Http\Controllers\AppointmentsController@insertAppoitment')->name('Insert');
    Route::get('/EventAppointment/{committee_id}/{id}', 'App\Http\Controllers\AppointmentsController@deleteAppointment')->name('Delete');
});
Route::get('/home/registeration', 'App\Http\Controllers\AppointmentsController@registerationView')->name('registeration.meeting');
Route::get('/aboutUs', 'App\Http\Controllers\AppointmentsController@aboutUsView')->name('aboutUs.view');
Route::get('/home/art', 'App\Http\Controllers\AppointmentsController@artView')->name('art.view');
Route::get('/home/blender', 'App\Http\Controllers\AppointmentsController@blenderView')->name('blender.view');
Route::get('/home/ccc', 'App\Http\Controllers\AppointmentsController@cccView')->name('ccc.view');
Route::get('/home/eh', 'App\Http\Controllers\AppointmentsController@ehView')->name('eh.view');
Route::get('/home/game', 'App\Http\Controllers\AppointmentsController@gameView')->name('game.view');
Route::get('/home/hr', 'App\Http\Controllers\AppointmentsController@hrView')->name('hr.view');
Route::get('/home/linux', 'App\Http\Controllers\AppointmentsController@linuxView')->name('linux.view');
Route::get('/home/lr', 'App\Http\Controllers\AppointmentsController@lrView')->name('lr.view');
Route::get('/home/pr', 'App\Http\Controllers\AppointmentsController@prView')->name('pr.view');
Route::get('/home/projects', 'App\Http\Controllers\AppointmentsController@projectsView')->name('projects.view');
Route::get('/home/web', 'App\Http\Controllers\AppointmentsController@webView')->name('web.view');
Route::get('/home/welcome', 'App\Http\Controllers\AppointmentsController@welcomeView')->name('welcome.view');

Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

Route::get('password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('password/confirm', [App\Http\Controllers\Auth\ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
Route::post('password/confirm', [App\Http\Controllers\Auth\ConfirmPasswordController::class, 'confirm']);

Route::get('email/verify', [App\Http\Controllers\Auth\VerificationController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [App\Http\Controllers\Auth\VerificationController::class, 'verify'])->name('verification.verify');
Route::post('email/resend', [App\Http\Controllers\Auth\VerificationController::class, 'resend'])->name('verification.resend');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
