<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlansController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\TopupController;

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
    return view('welcome');
});

Route::prefix('portal')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

    Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

    Route::get('/files', [FilesController::class, 'index'])
        ->middleware(['auth'])
        ->name('files');

    Route::get('/plans', [PlansController::class, 'index'])
        ->middleware(['auth'])
        ->name('plans');

    // Route::resource('plans', PlansController::class)
    //     ->middleware(['auth']);

    Route::get('/contacts', [ContactsController::class, 'index'])
        ->middleware(['auth'])
        ->name('contacts');

    Route::get('/subscribe', [SubscribeController::class, 'index'])
        ->middleware(['auth'])
        ->name('subscribe');

    Route::get('/topup', [TopupController::class, 'index'])
        ->middleware(['auth'])
        ->name('topup');
});

require __DIR__ . '/auth.php';