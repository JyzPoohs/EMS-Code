<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Auth;

//Main page
Route::get('/', function () {
    return redirect('/login');
});

//Module 1

Route::get('/login', [UserAuth::class, 'show'])->name('login');
Route::post('login-user', [UserAuth::class, 'loginUser'])->name('login-user');
Route::get('/logout', [UserAuth::class, 'logout'])->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->name('user.')->group(function () {
    Route::middleware(['guest'])->group(function () {

        Route::view('/register', 'auth.userRegister')->name('register');
        Route::post('/create', [UserController::class, 'create'])->name('create');
    });
    Route::middleware(['auth'])->group(function () {
        Route::view('/profile', 'manageUserProfile.profile')->name('profile');
    });
});

Route::prefix('staff')->name('staff.')->group(function () {
    Route::middleware(['guest'])->group(function () {

        Route::view('/register', 'auth.staffRegister')->name('register');
        Route::post('/create', [StaffController::class, 'create'])->name('create');
    });
    Route::view('/profile', 'manageStaffProfile.profile')->name('profile');
});

Route::get('/changePassword', [ChangePasswordController::class, 'showResetForm'])->name('change-password');

Route::view('/request', 'auth.module2')->name('request');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware('auth')->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/staff/profile', [StaffController::class, 'profile'])->name('staff.profile');
//     Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::post('register-user', [UserAuth::class, 'registerUser'])->name('register-user');

require __DIR__ . '/auth.php';





Route::get('/mregistration', function () {
    return view('module3.MR');
});
