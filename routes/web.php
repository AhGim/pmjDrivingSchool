<?php

use App\Http\Controllers\BookingController;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use Spatie\GoogleCalendar\Event;

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


Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect'])->middleware('auth', 'verified');

/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});*/

Route::middleware([
    'auth:sanctum',
    'verified'
])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/add_tutor_view', [AdminController::class, 'addview']);

Route::post('/upload_tutor', [AdminController::class, 'upload']);

Route::post('/appointment', [HomeController::class, 'appointment']);

Route::get('/myappointment', [HomeController::class, 'myappointment']);

Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint']);

Route::get('/showappointment', [AdminController::class, 'showappointment']);

Route::get('/approved/{id}', [AdminController::class, 'approved']);

Route::get('/canceled/{id}', [AdminController::class, 'canceled']);

Route::get('/showtutor', [AdminController::class, 'showtutor']);

Route::get('/deletetutor/{id}', [AdminController::class, 'deletetutor']);

Route::get('/updatetutor/{id}', [AdminController::class, 'updatetutor']);

Route::post('/edittutor/{id}', [AdminController::class, 'edittutor']);

Route::get('/emailview/{id}', [AdminController::class, 'emailview']);

Route::post('/sendemail/{id}', [AdminController::class, 'sendemail']);

Route::get('/viewtutor_calendar', [AdminController::class, 'viewtutor_calendar']);

Route::get('/google_calendar_add_event_with_php/index', [AdminController::class, 'index']);

Route::post('/addEvent', [AdminController::class, 'add_event']);

// Route::get(
//     '/',
//     function () {

//         $event = new Event;

//         $event->name = 'test from app';

//         $event->startDateTime = Carbon::now();

//         $event->emdDateTime = Carbon::now()->addHour();

//         $event->save();
        
//         $e = Event::get();

//         dd($e);
// }

// );

// Route::resource('booking', BookingController::class);

Route::get('/searchAppointments', [AdminController::class, 'searchAppointmentData']);

Route::get('/searchTutors', [AdminController::class, 'searchTutorData']);