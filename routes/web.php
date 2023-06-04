<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserManageMarriageRegController;
use App\Http\Controllers\UserManageCardAppController;
use App\Http\Controllers\StaffManageMarriageRegController;
use App\Http\Controllers\StaffManageCardAppController;
use Illuminate\Support\Facades\Auth;

//Main page
Route::get('/', function () {
    return redirect('/login');
});

//Module 1
Route::post('login/submit', [LoginController::class, 'loginUser'])->name('login-user');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Password
Route::get('/change', [PasswordController::class, 'showChangePasswordForm'])->name('change-password.get');
Route::get('/forgot', [PasswordController::class, 'showForgotPasswordForm'])->name('forgot-password.get');
Route::post('/forgot/submit', [PasswordController::class, 'submitForgotPasswordForm'])->name('forgot-password.post');
Route::post('/change/submit', [PasswordController::class, 'submitChangePasswordForm'])->name('change-password.post');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('user')->name('user.')->group(function () {
    Route::middleware(['guest'])->group(function () {

        Route::view('/register', 'manageRegister.userRegister')->name('register');
        Route::view('/register/message', 'message.registerMessage')->name('registerMessage');
        Route::post('/create', [UserController::class, 'create'])->name('create');
    });
    Route::middleware(['auth'])->group(function () {
        Route::view('/profile', 'manageUserProfile.profile')->name('profile');
        Route::view('/consult', 'manageConsultation(user).consult')->name('consult');
    });
    Route::put('/profile/{id}/update',  [UserController::class, 'update'])->name('update');

    //Module 3
    Route::get('/manageMarriageRegistration', [UserManageMarriageRegController::class, 'manage'])->name('manageMarriageRegistration');
    Route::get('/marriageRegistrationWithApproval', [UserManageMarriageRegController::class, 'marriageRegistrationWithApproval'])->name('marriageRegistrationWithApproval');
    Route::get('/eFormsGrooms', [UserManageMarriageRegController::class, 'eFormsGrooms'])->name('eFormsGrooms');
    Route::get('/eFormsBrides', [UserManageMarriageRegController::class, 'eFormsBrides'])->name('eFormsBrides');
    Route::get('/eFormsMarriage', [UserManageMarriageRegController::class, 'eFormsMarriage'])->name('eFormsMarriage');
    Route::get('/manageMarriageCardApp', [UserManageCardAppController::class, 'manageCardAppUser'])->name('manageMarriageCardApp');   
});

Route::prefix('staff')->name('staff.')->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::view('/register', 'manageRegister.staffRegister')->name('register');
        Route::view('/register/message', 'message.staffRegisterMessage')->name('registerMessage');
        Route::view('/accessCode', 'manageRegister.accessCode')->name('accessCode');
        Route::get('/validateCode',  [RegisterController::class, 'validateCode'])->name('validateCode');
        Route::post('/create', [StaffController::class, 'create'])->name('create');
    });
    Route::middleware(['auth'])->group(function () {
    });
    Route::view('/profile', 'manageStaffProfile.profile')->name('profile');
    Route::view('/admin/profile', 'manageStaffProfile.adminProfile')->name('admin.profile');
    Route::put('/profile/{id}/update',  [StaffController::class, 'update'])->name('update');

    //Module 1
    Route::get('/userProfileList', [UserController::class, 'userProfileList'])->name('userProfileList');
    Route::get('/viewUserProfile/{id}',  [UserController::class, 'profileView'])->name('viewUserProfile');
    Route::get('/userList/profile/{id}/updateView',  [UserController::class, 'profileUpdateView'])->name('userProfileUpdateView');
    Route::put('/userList/profile/{id}/update',  [UserController::class, 'profileUpdate'])->name('updateUserProfile');
    Route::get('/userList/profile/{id}/delete',  [UserController::class, 'destroy'])->name('destroyUserProfile');

    Route::get('/staffProfileList', [StaffController::class, 'staffProfileList'])->name('staffProfileList');
    Route::get('/viewStaffProfile/{id}',  [StaffController::class, 'profileView'])->name('viewStaffProfile');
    Route::get('/staffList/profile/{id}/updateView',  [StaffController::class, 'profileUpdateView'])->name('staffProfileUpdateView');
    Route::put('/staffList/profile/{id}/update',  [StaffController::class, 'profileUpdate'])->name('updateStaffProfile');
    Route::get('/staffList/profile/{id}/delete',  [StaffController::class, 'destroy'])->name('destroyStaffProfile');


    //Module 3
    Route::get('/manageMarriage', [StaffManageMarriageRegController::class, 'manage'])->name('manageMarriage');
    Route::get('/manageValidationMarriage', [StaffManageMarriageRegController::class, 'validationList'])->name('manageValidationMarriage');
    Route::get('/manageMarriageCardApp', [StaffManageCardAppController::class, 'manageCardAppStaff'])->name('manageMarriageCardApp');
    Route::get('/approveMarriageCardApp', [StaffManageCardAppController::class, 'approveCardAppStaff'])->name('approveMarriageCardApp');
    Route::get('/manageMarriageCardApplicationListStaff', [StaffManageCardAppController::class, 'manageCardAppStaff'])->name('staff.manageMarriageCardApplicationListStaff');
    // Route::get('/manageMarriageCardApp', [UserManageCardAppController::class, 'manageCardAppUser'])->name('manageMarriageCardApp');
});

// Route::get('/staff/manageMarriage',[StaffManageMarriageRegController::class,'index'])->name('staff.manageMarriage');

require __DIR__ . '/auth.php';

Route::get('/mregistration', function () {
    return view('module3.MR');
});
