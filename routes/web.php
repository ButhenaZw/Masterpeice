<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

// Google Login Routes
Route::get('login/google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('login/google/callback', function () {
    $user = Socialite::driver('google')->user();

    $authUser = \App\Models\User::firstOrCreate([
        'email' => $user->getEmail(),
    ], [
        'name' => $user->getName(),
        'password' => bcrypt('password')
    ]);

    Auth::login($authUser, true);

    return redirect()->route('Home');
});

Route::get('/', function () {
    return view('Home.home');
})->name('Home');

Route::get('/about', function () {
    return view('Aboutus.aboutus');
});

Route::get('/contact', function () {
    return view('Contact.contact');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
