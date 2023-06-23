<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UnauthHomeController;
use App\Http\Controllers\UnauthServicesController;
use App\Http\Controllers\UnauthPlansController;
use App\Http\Controllers\UnauthContactController;
use App\Http\Controllers\UnauthAboutController;

use App\Http\Controllers\AuthPlansController;
use App\Http\Controllers\AuthFilesController;
use App\Http\Controllers\AuthContactsController;
use App\Http\Controllers\AuthDashboardController;
use App\Http\Controllers\AuthSubscribeController;
use App\Http\Controllers\AuthTopupController;

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
// FOR NON AUTH USERS - START
Route::get('/', [UnauthHomeController::class, 'index'])
->name('welcome');

Route::get('/services', [UnauthServicesController::class, 'index'])
->name('services');

Route::get('/plans', [UnauthPlansController::class, 'index'])
->name('plans');

Route::get('/contact', [UnauthContactController::class, 'index'])
->name('contact');

Route::get('/about', [UnauthAboutController::class, 'index'])
->name('about');
// FOR NON AUTH USERS - END

Route::prefix('portal')->group(function () {

    Route::get('/', [AuthDashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

    Route::get('/dashboard', [AuthDashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

    Route::get('/files', [AuthFilesController::class, 'index'])
        ->middleware(['auth'])
        ->name('files');

    Route::get('/plans', [AuthPlansController::class, 'index'])
        ->middleware(['auth'])
        ->name('plans');

    // Route::resource('plans', PlansController::class)
    //     ->middleware(['auth']);

    Route::get('/contacts', [AuthContactsController::class, 'index'])
        ->middleware(['auth'])
        ->name('contacts');

    Route::get('/subscribe', [AuthSubscribeController::class, 'index'])
        ->middleware(['auth'])
        ->name('subscribe');

    Route::get('/topup', [AuthTopupController::class, 'index'])
        ->middleware(['auth'])
        ->name('topup');
});

require __DIR__ . '/auth.php';