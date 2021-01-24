<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

//Route::get('/registration','App\Http\Controllers\eventController@registrationView')->name('registrationView');
Route::get('/registration','App\Http\Controllers\eventController@registrationView')->name('registrationView');
Route::get('/appointments','App\Http\Controllers\eventController@getAppointments')->name('appointmentsAjax');

// Route::get('/admin',function (){
//     return view('admin');
// });


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/EventMembers/{key?}','App\Http\Controllers\eventController@getAllMembers')->name('EventMembers');
    Route::get('/{id}','App\Http\Controllers\eventController@deleteMember')->name('deleteMember');
    Route::get('/workshop/{id}','App\Http\Controllers\workshopController@deleteMember')->name('deleteWorkshopMember');
    Route::get('/EventAppointment/{committee_id}','App\Http\Controllers\AppointmentsController@getAllAppoitments')->name('GetAll');
    Route::post('/EventAppointment/{committee_id}', 'App\Http\Controllers\AppointmentsController@insertAppoitment')->name('Insert');
    Route::get('/EventAppointment/{committee_name}/{id}', 'App\Http\Controllers\AppointmentsController@deleteAppointment')->name('Delete');
});
Route::get('/home/registeration', 'App\Http\Controllers\AppointmentsController@registerationView')->name('registeration.meeting');
Route::get('/aboutUs', 'App\Http\Controllers\AppointmentsController@aboutUsView')->name('aboutUs.view');
Route::get('/committees/art', 'App\Http\Controllers\AppointmentsController@artView')->name('art.view');
Route::get('/committees/blender', 'App\Http\Controllers\AppointmentsController@blenderView')->name('blender.view');
Route::get('/committees/ccc', 'App\Http\Controllers\AppointmentsController@cccView')->name('ccc.view');
Route::get('/committees/eh', 'App\Http\Controllers\AppointmentsController@ehView')->name('eh.view');
Route::get('/committees/game', 'App\Http\Controllers\AppointmentsController@gameView')->name('game.view');
Route::get('/committees/hr', 'App\Http\Controllers\AppointmentsController@hrView')->name('hr.view');
Route::get('/committees/linux', 'App\Http\Controllers\AppointmentsController@linuxView')->name('linux.view');
Route::get('/committees/lr', 'App\Http\Controllers\AppointmentsController@lrView')->name('lr.view');
Route::get('/committees/pr', 'App\Http\Controllers\AppointmentsController@prView')->name('pr.view');
Route::get('/committees/projects', 'App\Http\Controllers\AppointmentsController@projectsView')->name('projects.view');
Route::get('/committees/web', 'App\Http\Controllers\AppointmentsController@webView')->name('web.view');
Route::get('/committees/welcome', 'App\Http\Controllers\AppointmentsController@welcomeView')->name('welcome.view');
Route::get('/regestration-closed', 'App\Http\Controllers\AppointmentsController@closed')->name('reg-closed');
//registrar form veiw
Route::get('/workshop/registration/form','App\Http\Controllers\workshopController@workshop_view_registration')->name('workshop.registration.form');
// admin-board table to registration data
Route::get('/workshop/registration/show/table/{key?}','App\Http\Controllers\workshopController@workshop_view_table')->name('workshop.registration.table');
//create registrar to work shop
Route::post('/create/workshop/registration','App\Http\Controllers\workshopController@create_workshop_registration')->name('create.workshop.registration');


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

Route::post('/',[ContactController::class,'send'])->name('send');
