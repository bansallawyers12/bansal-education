<?php

use App\Http\Controllers\Email\ComposeEmailController;
use App\Http\Controllers\Email\EmailDashboardController;
use App\Http\Controllers\Email\EmailTemplateController;
use App\Http\Controllers\Email\InboundEmailController;
use App\Http\Controllers\Email\OutboundEmailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Email app (CRM-SES) at /email
Route::prefix('email')->group(function () {
    Route::get('/', fn () => redirect()->route('dashboard'));
    Route::get('/dashboard', EmailDashboardController::class)->name('dashboard');
    Route::get('/emails', [InboundEmailController::class, 'index'])->name('emails.index');
    Route::delete('/emails/inbound/{email}', [InboundEmailController::class, 'destroy'])->name('emails.inbound.destroy');
    Route::get('/emails/compose', [ComposeEmailController::class, 'create'])->name('emails.compose');
    Route::post('/emails/compose', [ComposeEmailController::class, 'store'])->name('emails.compose.store');
    Route::put('/emails/compose/{email}', [ComposeEmailController::class, 'update'])->name('emails.compose.update');
    Route::post('/emails/templates', [EmailTemplateController::class, 'store'])->name('emails.templates.store');
    Route::get('/emails/drafts', [OutboundEmailController::class, 'drafts'])->name('emails.drafts');
    Route::get('/emails/outbox', [OutboundEmailController::class, 'outbox'])->name('emails.outbox');
    Route::post('/emails/outbox/{email}/send', [OutboundEmailController::class, 'send'])->name('emails.outbox.send');
    Route::get('/emails/sent', [OutboundEmailController::class, 'sent'])->name('emails.sent');
    Route::get('/emails/trash', [OutboundEmailController::class, 'trash'])->name('emails.trash');
    Route::delete('/emails/outbound/{email}', [OutboundEmailController::class, 'destroy'])->name('emails.outbound.destroy');
    Route::get('/emails/inbound/{email}', [InboundEmailController::class, 'show'])->name('emails.show');
});
