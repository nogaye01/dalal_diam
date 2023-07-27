<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::get('/', function () {
        return view('welcome');
    });
    Route::post('/deleteUser/{id}', [UserController::class, 'deleteUser']);
    Route::post('/deletePatient/{id}', [PatientController::class, 'deletePatient']);
    Route::view('/addPatient', 'patients.addPatient')->name('patients.addPatient');
    Route::view('/addImage', 'images.addImage')->name('images.addImage');
    // Route::post('/addPatient', [PatientController::class, 'addPatient']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::view('/showPatients', 'patients.allPatients')->name('patients.allPatients');
    Route::view('/showReports', 'reports.allreports')->name('reports.allreports');
    Route::get('/showUsers', [UserController::class, 'userManager']);
});

require __DIR__.'/auth.php';
