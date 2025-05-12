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

// Логин
Route::get('/login', [PageController::class, 'login'])->name('login');

Route::get('/privacy-policy', function () {
    $page = Page::where('slug', 'privacy-policy')->firstOrFail();
    return view('privacy-policy', ['content' => $page->content]);
})->name('privacy-policy');

Route::get('/cookies', function () {
    $page = Page::where('slug', 'cookies')->firstOrFail();
    return view('cookies', ['content' => $page->content]);
})->name('cookies');

Route::get('/user-agreement', function () {
    $page = Page::where('slug', 'terms-and-conditions')->firstOrFail();
    return view('user-agreement', ['content' => $page->content]);
})->name('user-agreement');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Route::get('/admin', [AdminController::class, 'index']);
});

Route::get('/capsules-page', [CapsuleController::class, 'index'])->name('capsules');

Route::get('/auto-response/{slug}', [CapsuleController::class, 'showDefault'])->name('capsule.default');

//Route::get('/develop-generated-capsule', [PageController::class, 'developGeneratedCapsule'])->name('develop-generated-capsule');

Route::get('/developed-capsule-page', [PageController::class, 'developedCapsulePage'])->name('developed-capsule-page');

require __DIR__.'/auth.php';
