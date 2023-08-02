<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthenticatedSessionController;

use App\Http\Controllers\isAdmin\AdminDashboardController;
use App\Http\Controllers\isAdmin\AdminServerController;
use App\Http\Controllers\isAdmin\AdminFilesController;
use App\Http\Controllers\isAdmin\AdminMessagesController;
use App\Http\Controllers\isAdmin\AdminNotificationsController;
use App\Http\Controllers\isAdmin\AdminPlansController;
use App\Http\Controllers\isAdmin\AdminUsersController;

use App\Http\Controllers\isAuth\isAuthDashboardController;
use App\Http\Controllers\isAuth\isAuthFilesController;
use App\Http\Controllers\isAuth\isAuthPlansController;
use App\Http\Controllers\isAuth\isAuthContactController;
use App\Http\Controllers\isAuth\isAuthTopupController;
use App\Http\Controllers\isAuth\isAuthNotificationsController;

use App\Http\Controllers\notAuth\HomeController;
use App\Http\Controllers\notAuth\ServicesController;
use App\Http\Controllers\notAuth\PlansController;
use App\Http\Controllers\notAuth\ContactController;
use App\Http\Controllers\notAuth\AboutController;
use App\Http\Controllers\notAuth\SubscribeController;
use App\Http\Controllers\notAuth\DownloadController;

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\NewsletterController;

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
Route::get('/download', [DownloadController::class, 'index']);

Route::post('/', [SubscribeController::class, 'index']);
Route::post('/process-form', [ContactFormController::class, 'processForm']);
Route::post('/newsletter-form', [NewsletterController::class, 'subscribe'])->name('newsletter-form');

Route::middleware(['auth', 'notadmin'])->prefix('portal')->group(function () {

    Route::get('/', [isAuthDashboardController::class, 'get']);
    Route::get('/dashboard', [isAuthDashboardController::class, 'get']);
    Route::get('/files', [isAuthFilesController::class, 'get'])->name('files');
    Route::post('/upload-image', [IsAuthFilesController::class, 'uploadImage'])->name('uploadImage');
    Route::get('/plans', [isAuthPlansController::class, 'get']);

    Route::get('/contact', [isAuthContactController::class, 'get'])->name('isauth.contact');
    Route::post('/contact', [isAuthContactController::class, 'add']);
    Route::post('/contact/{email}/delete', [isAuthContactController::class, 'delete']);


    Route::get('/topup', [isAuthTopupController::class, 'get'])->name('isauth.topup');
    Route::post('/topup', [isAuthTopupController::class, 'post']);

    Route::get('/notifications', [isAuthNotificationsController::class, 'get']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::delete('/delete-contact/{username}', [isAuthContactController::class, 'delete'])->name('delete.contact');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy']);
});

// Cut out until we focus on the admin area
// Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

//     Route::get('/', [AdminDashboardController::class, 'get']);
//     Route::get('/dashboard', [AdminDashboardController::class, 'get']);
//     Route::get('/server', [AdminServerController::class, 'get']);
//     Route::get('/files', [AdminFilesController::class, 'get']);
//     Route::get('/plans', [AdminPlansController::class, 'get']);
//     Route::get('/messages', [AdminMessagesController::class, 'get']);
//     Route::get('/users', [AdminUsersController::class, 'get']);
//     Route::get('/notifications', [AdminNotificationsController::class, 'get']);


//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//     Route::post('logout', [AuthenticatedSessionController::class, 'destroy']);
// });

// Going to leave it here so the UI/UX guys can request this page at any time 😇
Route::get('/maintenance', function () {
    return view('errors.503');
});

require __DIR__ . '/auth.php';
