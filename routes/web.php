<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/login', [UserAuth::class, 'login'])->name('login');
Route::get('/logout', [UserAuth::class, 'logout'])->name('logout');
Route::get('/register', [UserAuth::class, 'register']);
Route::get('/profile', [UserAuth::class, 'profile'])->name('profile');
Route::post('register-user', [UserAuth::class, 'registerUser'])->name('register-user');
Route::post('login-user', [UserAuth::class, 'loginUser'])->name('login-user');
