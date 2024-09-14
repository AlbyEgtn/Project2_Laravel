<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('auth.login');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('auth.register');

Route::get('/', function () {
return view('home');
});