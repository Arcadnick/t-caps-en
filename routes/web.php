<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CapsuleController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\RedirectDevelopedCapsuleController;
use App\Models\Page;

Route::get('/', [PageController::class, 'index'])->name('welcome');

Route::get('/capsules-page', [CapsuleController::class, 'index'])->name('capsules');

Route::get('/auto-response', [PageController::class, 'autoResponse'])->name('auto-response');

Route::get('/ai-capsules', [PageController::class, 'aicapsules'])->name('ai-capsules');

Route::get('/partners-page', [PageController::class, 'partners'])->name('partners');

Route::get('/request-capsule', [PageController::class, 'requestcapsule'])->name('request-capsule');

Route::post('/requests', [RequestController::class, 'store'])->name('requests.store');

Route::get('/book-demo', [PageController::class, 'bookdemo'])->name('book-demo');

Route::get('/login', [PageController::class, 'login'])->name('login');

Route::get('/user-agreement', [PageController::class, 'useragreement'])->name('user-agreement');

Route::get('/cookies', [PageController::class, 'cookies'])->name('cookies');

Route::get('/privacy-policy', [PageController::class, 'privacypolicy'])->name('privacy-policy');

Route::get('/capsules-page', [CapsuleController::class, 'index'])->name('capsules');

Route::get('/auto-response/{slug}', [CapsuleController::class, 'showDefault'])->name('capsule.default');

Route::get('/redirect-to-developed/{id}', [RedirectDevelopedCapsuleController::class, 'handle'])->name('redirect-developed');

Route::get('/developed-capsule-page', [RedirectDevelopedCapsuleController::class, 'developedCapsulePage'])->name('developed-capsule-page');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Route::get('/admin', [AdminController::class, 'index']);
});

require __DIR__.'/auth.php';
