<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $profileData = [
        'name' => 'Luqman Hadi',
        'linkedinUrl' => 'https://www.linkedin.com/in/luqmanhadi/',
        'imageUrl' => asset('images/luqman-hadi.jpg'),
    ];
    return view('app', compact('profileData'));
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/profile/{name?}', [ProfileController::class, 'show'])->name('profile.show');

require __DIR__.'/auth.php';
