<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StaffManageMarriageRegController;
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

//For showing purpose


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
    Route::middleware(['auth'])->group(function () {
    });
    Route::view('/profile', 'manageStaffProfile.profile')->name('profile');
<<<<<<< HEAD
    Route::get('/manageMarriage', [StaffManageMarriageRegController::class, 'index'])->name('manageMarriage');
    Route::get('/userProfileList', [UserController::class, 'userProfileList'])->name('userProfileList');
    Route::get('/viewUserProfile/{id}',  [UserController::class, 'profileView'])->name('viewUserProfile');
    Route::get('/userList/profile/{id}/updateView',  [UserController::class, 'profileUpdateView'])->name('profileUpdateView');
    Route::put('/userList/profile/{id}/update',  [UserController::class, 'profileUpdate'])->name('updateUserProfile');
    Route::get('/userList/profile/{id}/delete',  [UserController::class, 'destroy'])->name('destroyUserProfile');
=======
    Route::get('/manageMarriage',[StaffManageMarriageRegController::class,'index'])->name('manageValidationMarriage');
>>>>>>> 7f4ed9393cd78483480e4f929bdcd3eeed84c628
});

// Route::get('/staff/manageMarriage',[StaffManageMarriageRegController::class,'index'])->name('staff.manageMarriage');
Route::get('/changePassword', [ChangePasswordController::class, 'showResetForm'])->name('change-password');


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
