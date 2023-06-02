<?php
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StaffManageMarriageRegController;
use Illuminate\Support\Facades\Auth;

//Main page
Route::get('/', function () {
    return redirect('/login');
});

//Module 1
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('login-user', [LoginController::class, 'loginUser'])->name('login-user');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/changePassword', [ChangePasswordController::class, 'showResetForm'])->name('change-password');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('user')->name('user.')->group(function () {
    Route::middleware(['guest'])->group(function () {

        Route::view('/register', 'auth.userRegister')->name('register');
        Route::post('/create', [UserController::class, 'create'])->name('create');
    });
    Route::middleware(['auth'])->group(function () {
        Route::view('/profile', 'manageUserProfile.profile')->name('profile');
        Route::view('/consult', 'manageConsultation(user).consult')->name('consult');
        
    });
    Route::put('/profile/{id}/update',  [UserController::class, 'update'])->name('update');
});

Route::prefix('staff')->name('staff.')->group(function () {
    Route::middleware(['guest'])->group(function () {

        Route::view('/register', 'auth.staffRegister')->name('register');
        Route::post('/create', [StaffController::class, 'create'])->name('create');
    });
    Route::middleware(['auth'])->group(function () {
    });
    Route::view('/profile', 'manageStaffProfile.profile')->name('profile');
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
});

// Route::get('/staff/manageMarriage',[StaffManageMarriageRegController::class,'index'])->name('staff.manageMarriage');



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
