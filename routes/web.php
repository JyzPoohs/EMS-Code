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
Route::view('/login', 'manageLogin.login-view')->middleware('guest')->name('login');
Route::post('login/submit', [LoginController::class, 'loginUser'])->middleware('guest')->name('login-user');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('guest')->name('logout');

//Password
Route::get('/change', [PasswordController::class, 'showChangePasswordForm'])->middleware('guest')->name('change-password.get');
Route::get('/forgot', [PasswordController::class, 'showForgotPasswordForm'])->middleware('guest')->name('forgot-password.get');
Route::post('/forgot/submit', [PasswordController::class, 'submitForgotPasswordForm'])->middleware('guest')->name('forgot-password.post');
Route::post('/change/submit', [PasswordController::class, 'submitChangePasswordForm'])->middleware('guest')->name('change-password.post');


Auth::routes();

Route::prefix('user')->name('user.')->group(function () {
    Route::middleware(['guest'])->group(function () {

        Route::view('/register', 'manageRegister.userRegister-view')->name('register');
        Route::view('/register/message', 'manageRegister.registerMessage-view')->name('registerMessage');
        Route::post('/create', [RegisterController::class, 'createUser'])->name('create');
    });
    Route::middleware(['auth'])->group(function () {
        Route::view('/profile', 'manageUserProfile.profile-view')->name('profile');
        Route::view('/consult', 'manageConsultation(user).consult')->name('consult');
    });
    Route::put('/profile/{id}/update',  [UserController::class, 'update'])->name('update');

    //Module 3
    Route::get('/manageMarriageRegistration', [UserManageMarriageRegController::class, 'manage'])->name('manageMarriageRegistration');
    Route::get('/marriageRegistrationWithApproval', [UserManageMarriageRegController::class, 'marriageRegistrationWithApproval'])->name('marriageRegistrationWithApproval');
    Route::get('/editEFormsGrooms', [UserManageMarriageRegController::class, 'editEFormsGrooms'])->name('editEFormsGrooms');
    Route::get('/editEFormsBrides', [UserManageMarriageRegController::class, 'editEFormsBrides'])->name('editEFormsBrides');
    Route::get('/editEFormsMarriage', [UserManageMarriageRegController::class, 'editEFormsMarriage'])->name('editEFormsMarriage');
    Route::get('/viewEFormsGrooms', [UserManageMarriageRegController::class, 'viewEFormsGrooms'])->name('viewEFormsGrooms');
    Route::get('/viewEFormsBrides', [UserManageMarriageRegController::class, 'viewEFormsBrides'])->name('viewEFormsBrides');
    Route::get('/viewEFormsMarriage', [UserManageMarriageRegController::class, 'viewEFormsMarriage'])->name('viewEFormsMarriage');

    Route::delete('/deleteMarriageCardApp/{id}', [UserManageCardAppController::class, 'destroy'])->name('deleteMarriageCardApp');
    Route::get('/manageMarriageCardApp/{id}', [UserManageCardAppController::class, 'manageCardAppUser'])->name('manageMarriageCardApp');   
    Route::get('/editMarriageCardAppInfo/{id}', [UserManageCardAppController::class, 'fillCardAppUser'])->name('editMarriageCardAppInfo');   
    Route::get('/viewMarriageCardAppInfo/{id}', [UserManageCardAppController::class, 'viewCardAppUser'])->where('id', '.*')->name('viewMarriageCardAppInfo');   
    Route::post('/createCardApp', [UserManageCardAppController::class, 'createCardApp'])->name('createCardApp');
});

Route::prefix('staff')->name('staff.')->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::view('/register', 'manageRegister.staffRegister-view')->name('register');
        Route::view('/register/message', 'manageRegister.staffRegisterMessage-view')->name('registerMessage');
        Route::view('/accessCode', 'manageRegister.accessCode-view')->name('accessCode');
        Route::get('/validateCode',  [RegisterController::class, 'validateCode'])->name('validateCode');
        Route::post('/create', [RegisterController::class, 'createStaff'])->name('create');
    });
    Route::middleware(['auth:staff'])->group(function () {
        Route::view('/profile', 'manageStaffProfile.profile-view')->name('profile');
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
    });

    //Module 3
    Route::get('/manageMarriage', [StaffManageMarriageRegController::class, 'manage'])->name('manageMarriage');
    Route::get('/manageMarriageCardApplicationListStaff', [StaffManageCardAppController::class, 'manageCardAppStaff'])->name('staff.manageMarriageCardApplicationListStaff');
    Route::get('/eFormsGrooms', [StaffManageMarriageRegController::class, 'eFormsGrooms'])->name('eFormsGrooms');
    Route::get('/eFormsBrides', [StaffManageMarriageRegController::class, 'eFormsBrides'])->name('eFormsBrides');
    Route::get('/eFormsMarriage', [StaffManageMarriageRegController::class, 'eFormsMarriage'])->name('eFormsMarriage');
    Route::get('/approveMarriageRegistration', [StaffManageMarriageRegController::class, 'approveMarriageRegistration'])->name('approveMarriageRegistration');

    Route::get('/manageMarriageCardApp', [StaffManageCardAppController::class, 'manageCardAppStaff'])->name('manageMarriageCardApp');
    Route::get('/approveMarriageCardApp/{id}', [StaffManageCardAppController::class, 'approveCardAppStaff'])->name('approveMarriageCardApp');
});

// Route::get('/staff/manageMarriage',[StaffManageMarriageRegController::class,'index'])->name('staff.manageMarriage');

require __DIR__ . '/auth.php';

Route::get('/mregistration', function () {
    return view('module3.MR');
});
