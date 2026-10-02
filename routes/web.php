<?php

use App\Http\Controllers\CollaborationController;
use App\Http\Controllers\CollaborationInboxController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])->name('beranda');

Route::get('/sop', [PageController::class, 'sop'])->name('sop');

Route::get('/interview', [PageController::class, 'interview'])->name('interview');

Route::get('/diklat', [PageController::class, 'diklat'])->name('diklat');

Route::get('/lokakarya', [PageController::class, 'lokakarya'])->name('lokakarya');

Route::get('/training', [PageController::class, 'training'])->name('training');

Route::get('/sdm', [PageController::class, 'sdm'])->name('sdm');

Route::get('/tailor', [PageController::class, 'tailor'])->name('tailor');

Route::get('/karir-dosen', [PageController::class, 'karirDosen'])->name('karir-dosen');

/* The original URL contained a space, which forced %20 in every link and read
   badly in search results. The slug above is the canonical address; this path
   stays registered so existing links and bookmarks keep working. */
Route::get('/karier dosen', [PageController::class, 'karierDosenLama']);

/* Collaboration requests. POST is throttled per IP because the form is public
   and unauthenticated; five submissions a minute is well above what a real
   visitor needs and low enough to blunt a script. */
Route::get('/kolaborasi', [CollaborationController::class, 'form'])->name('kolaborasi');
Route::post('/kolaborasi', [CollaborationController::class, 'submit'])
    ->middleware('throttle:5,1')
    ->name('kolaborasi.kirim');

/* The inbox holds real names, email addresses and phone numbers, so it sits
   behind both the auth and the password.confirm middleware: signing in is not
   enough, the password has to be re-entered on every visit. The controller
   clears the confirmation once the page is served, so it is asked every time
   rather than on a timer. There is no public sign-up, so an account here can
   only exist if someone created it from the command line. */
Route::get('/pengajuan', [CollaborationInboxController::class, 'index'])
    ->middleware(['auth', 'password.confirm'])
    ->name('pengajuan');

require __DIR__.'/auth.php';
