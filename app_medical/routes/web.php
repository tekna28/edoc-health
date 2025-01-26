<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect']);

Route::get('/add_doctor_view', [AdminController::class, 'addview']);

Route::post('/upload_doctor', [AdminController::class, 'upload']);

Route::post('/appointment', [AppointmentController::class, 'appointment']);

Route::get('/myappointment', [AppointmentController::class, 'myappointment']);

Route::get('/cancel_appoint/{id}', [AppointmentController::class, 'cancel_appoint']);

Route::get('/showappointment', [AdminController::class, 'showappointment']);

Route::get('/approved/{id}', [AdminController::class, 'approved']);

Route::get('/canceled/{id}', [AdminController::class, 'canceled']);

Route::get('/showdoctor', [AdminController::class, 'showdoctor']);

Route::get('/deletedoctor/{id}', [AdminController::class, 'deletedoctor']);

Route::get('/updatedoctor', [AdminController::class, 'updatedoctor']);

Route::get('/showpatient', [AdminController::class, 'showpatient']);

Route::get('/deletepatient/{id}', [AdminController::class, 'deletepatient']);

Route::get('/updatepatient/{id}', [AdminController::class, 'updatepatient']);

Route::get('/add_patient_view', [AdminController::class, 'add_patient_view']);

Route::post('/upload_patient', [AdminController::class, 'upload_patient']);

Route::post('/editpatient/{id}', [AdminController::class, 'editpatient']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


