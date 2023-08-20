<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Live wire component
use App\Http\Livewire\CheckboxCounter;

use App\Http\Controllers\Auth\AuthenticatedSessionController;

use App\Http\Controllers\isAdmin\AdminDashboardController;
use App\Http\Controllers\isAdmin\AdminServerController;
use App\Http\Controllers\isAdmin\AdminMessagesController;
use App\Http\Controllers\isAdmin\AdminPlansController;
use App\Http\Controllers\isAdmin\AdminUsersController;

use App\Http\Controllers\isAuth\isAuthDashboardController;
use App\Http\Controllers\isAuth\isAuthFilesController;
use App\Http\Controllers\isAuth\isAuthPlansController;
use App\Http\Controllers\isAuth\isAuthContactController;
use App\Http\Controllers\isAuth\isAuthTopupController;
use App\Http\Controllers\isAuth\isAuthPdfController;

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

    Route::get('/received', [isAuthFilesController::class, 'getReceived'])->name('received');
    Route::get('/viewed', [isAuthFilesController::class, 'getViewed'])->name('viewed');
    Route::get('/sent', [isAuthFilesController::class, 'getSent'])->name('sent');

    Route::get('/history-received', [isAuthFilesController::class, 'getHistoryReceived'])->name('history-received');
    Route::get('/history-viewed', [isAuthFilesController::class, 'getHistoryViewed'])->name('history-viewed');
    Route::get('/history-sent', [isAuthFilesController::class, 'getHistorySent'])->name('history-sent');

    Route::get('/pdf/view', [isAuthPdfController::class, 'view'])->name('pdf.view');
    Route::post('/pdf/generate', [isAuthPdfController::class, 'generate'])->name('pdf.generate');
    Route::post('/pdf/template', [isAuthPdfController::class, 'template'])->name('pdf.template');

    Route::get('/plans', [isAuthPlansController::class, 'get']);
    Route::post('/plans/{plan}', [isAuthPlansController::class, 'update'])->name('plans.update');

    Route::get('/contact', [isAuthContactController::class, 'get'])->name('isauth.contact');
    Route::post('/contact', [isAuthContactController::class, 'add']);
    Route::post('/contact/{email}/delete', [isAuthContactController::class, 'delete']);

    Route::get('/topup', [isAuthTopupController::class, 'get'])->name('isauth.topup');
    Route::post('/topup', [isAuthTopupController::class, 'post']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::delete('/delete-contact/{username}', [isAuthContactController::class, 'delete'])->name('delete.contact');

    Route::get('/checkbox-counter', CheckboxCounter::class);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy']);

    // Route::post('/upload-image', [isAuthFilesController::class, 'uploadImage'])->name('uploadImage');
    // Route::get('/notifications', [isAuthNotificationsController::class, 'get']);
    // Route::get('/files', [isAuthS3FilesController::class, 'getAllFiles'])->name('files');
});

// Cut out until we focus on the admin area
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::get('/', [AdminDashboardController::class, 'get']);
    Route::get('/dashboard', [AdminDashboardController::class, 'get']);
    Route::get('/server', [AdminServerController::class, 'get']);
    Route::get('/plans', [AdminPlansController::class, 'get']);
    Route::get('/messages', [AdminMessagesController::class, 'get']);
    Route::get('/users', [AdminUsersController::class, 'get']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy']);
});

// Going to leave it here so the UI/UX guys can request this page at any time 😇
Route::get('/maintenance', function () {
    return view('errors.503');
});

require __DIR__ . '/auth.php';
