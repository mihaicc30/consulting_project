<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthenticatedSessionController;

use App\Http\Controllers\isAuth\isAuthDashboardController;
use App\Http\Controllers\isAuth\isAuthFilesController;
use App\Http\Controllers\isAuth\isAuthPlansController;
use App\Http\Controllers\isAuth\isAuthContactController;
use App\Http\Controllers\isAuth\isAuthTopupController;

use App\Http\Controllers\notAuth\HomeController ;
use App\Http\Controllers\notAuth\ServicesController ;
use App\Http\Controllers\notAuth\PlansController ;
use App\Http\Controllers\notAuth\ContactController ;
use App\Http\Controllers\notAuth\AboutController ;
use App\Http\Controllers\notAuth\SubscribeController;

use App\Http\Controllers\ContactFormController;
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
Route::post('/process-form', [ContactFormController::class, 'processForm']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->prefix('portal')->group(function () {
    Route::get('/',[isAuthDashboardController::class,'get']);
    Route::get('/dashboard',[isAuthDashboardController::class,'get']);

    Route::get('/files',[isAuthFilesController::class,'get']);

    Route::get('/plans',[isAuthPlansController::class,'get']);

    Route::get('/contact',[isAuthContactController::class,'get']);

    Route::get('/topup',[isAuthTopupController::class,'get']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy']);
});
    


require __DIR__.'/auth.php';
