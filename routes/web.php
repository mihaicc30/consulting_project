<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthenticatedSessionController;


// use App\Http\Controllers\isAuth\AuthDashboardController;
// use App\Http\Controllers\isAuth\AuthServicesController;
// use App\Http\Controllers\isAuth\AuthPlansController;
// use App\Http\Controllers\isAuth\AuthContactController;
// use App\Http\Controllers\isAuth\AuthAboutController;

use App\Http\Controllers\notAuth\HomeController ;
use App\Http\Controllers\notAuth\ServicesController ;
use App\Http\Controllers\notAuth\PlansController ;
use App\Http\Controllers\notAuth\ContactController ;
use App\Http\Controllers\notAuth\AboutController ;

use App\Http\Controllers\notAuth\SubscribeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/plans', [PlansController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);

Route::post('/', [SubscribeController::class, 'index']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->prefix('portal')->group(function () {
    Route::get('/',function (Request $request) {
        return view('isauth.dashboard');
    });
    Route::get('/dashboard',function (Request $request) {
        return view('isauth.dashboard');
    });
    Route::get('/files',function (Request $request) {
        return view('isauth.files');
    });
    Route::get('/plans',function (Request $request) {
        return view('isauth.plans');
    });
    Route::get('/contact',function (Request $request) {
        return view('isauth.contact');
    });
    Route::get('/topup',function (Request $request) {
        return view('isauth.topup');
    });
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy']);
});

Route::middleware('auth')->prefix('portal')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
