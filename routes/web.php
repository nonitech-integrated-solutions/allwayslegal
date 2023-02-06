<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\Profile;
use App\Http\Controllers\Admin\PracticeAreaController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AdminLawyerController;
use App\Http\Controllers\Admin\AdminClientController;
use App\Http\Controllers\Lawyer\LawyerController;
use App\Http\Controllers\Lawyer\LawyerAppointmentController;
use App\Http\Controllers\Lawyer\LawyerProfileController;
use App\Http\Controllers\Lawyer\LawyerPracticeAreaController;
use App\Http\Controllers\Lawyer\LawyerScheduleController;
use App\Http\Controllers\Lawyer\LawyerServiceController;
use App\Http\Controllers\Lawyer\LawyerMessageController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\ClientProfileController;

use App\Http\Controllers\PaymentSystemController;

use App\Http\Controllers\PaymentController;

use App\Http\Controllers\RegisterController;

use App\Http\Controllers\BookingController;

use App\Http\Controllers\CreateBookingController;

use App\Http\Livewire\CreateBooking;
use App\Http\Livewire\ShowBooking;

use App\Http\Livewire\Chat\CreateChat;
use App\Http\Livewire\Chat\Main;
//use Illuminate\Support\Facades\Gate;


use App\Models\Area;

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
    return view('index');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', 
    [HomePageController::class, 'index'])->name('dashboard');
});

// Admin Routes
Route::prefix('admin')->middleware(['auth', 'auth.isAdmin'])->name('admin.')->group(function () {
    Route::resource('/', AdminController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/lawyers', AdminLawyerController::class);
    Route::resource('/clients', AdminClientController::class);
    Route::resource('/practice-areas', PracticeAreaController::class);
    Route::resource('/services', ServiceController::class);
});

// Route::prefix('user')->middleware(['auth'])->name('user.')->group(function () {    
    // Route::get('/user/register', UserController::class)->name('user.register');   
// });

Route::resource('/register', RegisterController::class);

// Lawyer Routes
Route::prefix('lawyer')->middleware(['auth', 'auth.isLawyer'])->name('lawyer.')->group(function () { 
    Route::resource('/', LawyerController::class);      
    Route::resource('/appointment', LawyerAppointmentController::class);
    Route::post('/appointment/check', [LawyerAppointmentController::class, 'check'])->name('appointment.check');
    Route::post('/appointment/update', [LawyerAppointmentController::class, 'updateSlots'])->name('slots.update');
    Route::resource('/profile', LawyerProfileController::class);   
    Route::resource('/schedules', LawyerScheduleController::class);
    Route::resource('/practice-areas', LawyerPracticeAreaController::class);
    Route::resource('/services', LawyerServiceController::class);
    Route::resource('/messages', LawyerMessageController::class);
});

// Client Routes
Route::prefix('client')->middleware(['auth', 'auth.isClient'])->name('client.')->group(function () {
    Route::resource('/', ClientController::class);
    Route::resource('/profile', ClientProfileController::class);
    Route::resource('/client', PracticeAreaController::class);
});

//Route::resource('/practice-areas', PracticeAreaController::class);

Route::resource('/lawyers', LawyerController::class);

Route::get('/booking/practice-areas', [CreateBookingController::class, 'practiceAreas'])->name('practice.areas'); 
Route::get('/booking/lawyer-selection/{id}', [CreateBookingController::class, 'lawyerSelection'])->name('lawyer.selection'); 
Route::get('/booking/lawyer-selected/{id}', [CreateBookingController::class, 'lawyerSelected'])->name('lawyer.selected'); 
Route::get('/booking/lawyer-schedule/{id}', [CreateBookingController::class, 'lawyerSchedule'])->name('lawyer.schedule');
Route::get('/booking/case-summary', [CreateBookingController::class, 'caseSummary'])->name('case.summary'); 
Route::get('/booking/confirmation', [CreateBookingController::class, 'bookingConfirmation'])->name('booking.confirmation'); 

Route::get('/bookings/create', CreateBooking::class);
Route::get('bookings/{appointment:uuid}', ShowBooking::class)->name('bookings.show');

Route::get('/booking/create', BookingController::class);

Route::get('/messages{key?}', Main::Class)->name('chat');
Route::get('/chat/lawyers', CreateChat::Class)->name('lawyers');

Route::get('/payments', [PaymentSystemController::Class, 'index'])->name('home');

Route::post('/payments/pay', [PaymentController::Class, 'pay'])->name('pay');
Route::get('/payments/approval', [PaymentController::Class, 'approval'])->name('approval');
Route::get('/payments/cancelled', [PaymentController::Class, 'cancelled'])->name('cancelled');