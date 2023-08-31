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
use App\Http\Controllers\isAdmin\AdminFilesController;
use App\Http\Controllers\isAdmin\isAdminPdfController;

use App\Http\Controllers\isAuth\isAuthDashboardController;
use App\Http\Controllers\isAuth\isAuthPackagesController;
use App\Http\Controllers\isAuth\isAuthPlansController;
use App\Http\Controllers\isAuth\isAuthContactController;
use App\Http\Controllers\isAuth\isAuthTopupController;
use App\Http\Controllers\isAuth\isAuthPdfController;
use App\Http\Controllers\isAuth\isAuthCustomerPortalController;

use App\Http\Controllers\notAuth\HomeController;
use App\Http\Controllers\notAuth\ServicesController;
use App\Http\Controllers\notAuth\PlansController;
use App\Http\Controllers\notAuth\ContactController;
use App\Http\Controllers\notAuth\AboutController;
use App\Http\Controllers\notAuth\SubscribeController;
use App\Http\Controllers\notAuth\DownloadController;

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\isAuth\isAuthHomeTodayController;
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
Route::post('/stripe-web-hook', [StripeController::class, 'listen']);

Route::post('/', [SubscribeController::class, 'index']);
Route::post('/process-form', [ContactFormController::class, 'processForm']);
Route::post('/newsletter-form', [NewsletterController::class, 'subscribe'])->name('newsletter-form');

Route::middleware('auth')->get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::middleware('auth')->patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::middleware('auth')->delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::middleware(['auth', 'notadmin', 'checkIfUserHasStripeId'])->prefix('portal')->group(function () {

    Route::get('/', [isAuthDashboardController::class, 'get']);
    Route::get('/dashboard', [isAuthDashboardController::class, 'get'])->name('dashboard');

    Route::get('/received', [isAuthPackagesController::class, 'getReceived'])->name('received');
    Route::get('/viewed', [isAuthPackagesController::class, 'getViewed'])->name('viewed');
    Route::get('/sent', [isAuthPackagesController::class, 'getSent'])->name('sent');

    Route::get('/pdf/view', [isAuthPdfController::class, 'view'])->name('pdff.view');
    Route::post('/pdf/template', [isAuthPdfController::class, 'template'])->name('pdff.template');
    Route::post('/pdf/generate', [isAuthPdfController::class, 'generate'])->name('pdff.generate');

    Route::get('/subscriptions', [isAuthPlansController::class, 'get']);
    Route::get('/plans/{plan}', [isAuthPlansController::class, 'show'])->name('plans.show');
    Route::post('/plans/subscription', [isAuthPlansController::class, 'subscription'])->name('subscription.create');

    Route::post('/subscription/cancel', [isAuthPlansController::class, 'cancel'])->name('subscription.cancel');

    Route::get('/contact', [isAuthContactController::class, 'get'])->name('isauth.contact');
    Route::post('/contact', [isAuthContactController::class, 'add']);
    Route::post('/contact/{email}/delete', [isAuthContactController::class, 'delete']);

    Route::get('/topup', [isAuthTopupController::class, 'get'])->name('isauth.topup');
    Route::post('/topup', [isAuthTopupController::class, 'topup'])->name('isauth.topup');

 
    Route::post('/create-customer-portal-session', [isAuthCustomerPortalController::class, 'stripe'])->name('create-customer-portal-session');

    Route::get('customer-portal', [isAuthCustomerPortalController::class, 'get'])->name('customer-portal');
    Route::delete('/delete-contact/{username}', [isAuthContactController::class, 'delete'])->name('delete.contact');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy']);
    
    
    // Route::get('/checkbox-counter', CheckboxCounter::class);
    // Route::post('/upload-image', [isAuthPackagesController::class, 'uploadImage'])->name('uploadImage');
    // Route::get('/files', [isAuthS3FilesController::class, 'getAllFiles'])->name('files');
});

// Cut out until we focus on the admin area
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::get('/', [AdminDashboardController::class, 'get']);
    Route::get('/dashboard', [AdminDashboardController::class, 'get']);

    Route::get('/pdf/view', [isAdminPdfController::class, 'view'])->name('pdf.view');
    Route::post('/pdf/template', [isAdminPdfController::class, 'template'])->name('pdf.template');
    Route::post('/pdf/generate', [isAdminPdfController::class, 'generate'])->name('pdf.generate');
    
    Route::get('/transfers', [AdminFilesController::class, 'get']);
    Route::post('/transfers/toggle', [AdminFilesController::class, 'toggleDelete'])->name('admin.transfers.toggle');


    Route::get('/plans', [AdminPlansController::class, 'get']);
    Route::post('/plans/update', [AdminPlansController::class, 'updatePlan'])->name('admin.plans.update');
    
    Route::get('/messages', [AdminMessagesController::class, 'get']);
    Route::post('/messages/toggle', [AdminMessagesController::class, 'toggleStatus'])->name('admin.messages.toggle');
    Route::post('/messages/delete', [AdminMessagesController::class, 'deleteMessage'])->name('admin.messages.delete');

    Route::get('/users', [AdminUsersController::class, 'get']);
    Route::post('/users/toggle', [AdminUsersController::class, 'toggleBlock'])->name('admin.users.toggleBlock');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy']);
});

// Going to leave it here so the UI/UX guys can request this page at any time 😇
Route::get('/maintenance', function () {
    return view('errors.503');
});

require __DIR__ . '/auth.php';
