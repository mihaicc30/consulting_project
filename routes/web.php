<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

use App\Http\Controllers\ShowcaseAboutController;
use App\Http\Controllers\ShowcasePlansController;
use App\Http\Controllers\ShowcaseContactController;
use App\Http\Controllers\ShowcaseServicesController;

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
// FOR NON AUTH USERS - START
Route::get('/', [WelcomeController::class, 'index'])
->name('welcome');

Route::get('/services', [WelcomeController::class, 'index'])
->name('services');


Route::get('/plans', [WelcomeController::class, 'index'])
->name('plans');

Route::get('/contact', [WelcomeController::class, 'index'])
->name('contact');

Route::get('/about', [WelcomeController::class, 'index'])
->name('about');
// FOR NON AUTH USERS - END

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