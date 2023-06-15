<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserRequestMarriageController;
use App\Http\Controllers\StaffRequestMarriageController;
use App\Http\Controllers\UserManageMarriageRegController;
use App\Http\Controllers\UserManageCardAppController;
use App\Http\Controllers\StaffManageMarriageRegController;
use App\Http\Controllers\StaffManageCardAppController;
use App\Http\Controllers\IncentiveController;
use App\Http\Controllers\StaffManageIncentiveController;
use App\Http\Controllers\UserManageCourseController;
use App\Http\Controllers\StaffManageCourseController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ConsultationController;

Route::post('/submitForm', [Consultation::class, 'submitForm'])->name('user.submitForm');

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
        Route::view('/Search', 'manageConsultation(user).Search')->name('Search');
        Route::view('/CreateComplaint', 'manageConsultation(user).CreateComplaint')->name('CreateComplaint');
        Route::view('/Viewinformation', 'manageConsultation(user).Viewinformation')->name('ViewInformation');
        Route::view('/userIncentive', 'manageIncentiveUser.userIncentive')->name('userIncentive');
        Route::view('/userStatus', 'manageIncentiveUser.userStatus')->name('userStatus');
    });
    Route::put('/profile/{id}/update',  [UserController::class, 'update'])->name('update');

    //Module 2
    Route::get('/requestMarriageUser', [UserRequestMarriageController::class, 'view'])->name('requestMarriageUser');
    Route::get('/FormGrooms', [UserRequestMarriageController::class, 'FormGrooms'])->name('FormGrooms');
    Route::get('/FormBrideS', [UserRequestMarriageController::class, 'FormBrides'])->name('FormBrides');
    Route::get('/FormMarriage', [UserRequestMarriageController::class, 'FormMarriage'])->name('FormMarriage');
    Route::get('/Document', [UserRequestMarriageController::class, 'Document'])->name('Document');

    Route::get('editFormGrooms', [UserManageCourseController::class, 'editFormGrooms'])->name('editFormGrooms');
    Route::get('prepCourseInformation', [UserManageCourseController::class, 'prepCourseInformation'])->name('prepCourseInformation');

    //Module 3
    //Marriage Reigstration
    Route::get('/manageMarriageRegistration', [UserManageMarriageRegController::class, 'manage'])->name('manageMarriageRegistration');
    Route::get('/marriageRegistrationWithApproval', [UserManageMarriageRegController::class, 'marriageRegistrationWithApproval'])->name('marriageRegistrationWithApproval');
    Route::get('/eFormsGrooms', [UserManageMarriageRegController::class, 'eFormsGrooms'])->name('eFormsGrooms');
    Route::get('/eFormsBrides', [UserManageMarriageRegController::class, 'eFormsBrides'])->name('eFormsBrides');
    Route::get('/eFormsMarriage', [UserManageMarriageRegController::class, 'eFormsMarriage'])->name('eFormsMarriage');

    Route::get('/editEFormsGrooms', [UserManageMarriageRegController::class, 'editEFormsGrooms'])->name('editEFormsGrooms');
    Route::get('/editEFormsBrides', [UserManageMarriageRegController::class, 'editEFormsBrides'])->name('editEFormsBrides');
    Route::get('/editEFormsMarriage', [UserManageMarriageRegController::class, 'editEFormsMarriage'])->name('editEFormsMarriage');
    Route::get('/viewEFormsGrooms/{id}', [UserManageMarriageRegController::class, 'viewEFormsGrooms'])->name('viewEFormsGrooms');
    Route::get('/viewEFormsBrides/{id}', [UserManageMarriageRegController::class, 'viewEFormsBrides'])->name('viewEFormsBrides');
    Route::get('/viewEFormsMarriage/{id}', [UserManageMarriageRegController::class, 'viewEFormsMarriage'])->name('viewEFormsMarriage');
    //store
    Route::post('/storeMarriage/{id}', [UserManageMarriageRegController::class, 'store'])->name('storeMarriage');
    //delete
    Route::delete('/deleteMR/{id}', [UserManageMarriageRegController::class, 'destroy'])->name('deleteMarriageRegistration');

    //Card Application
    Route::get('/manageMarriageCardApp', [UserManageCardAppController::class, 'manageCardAppUser'])->name('manageMarriageCardApp');
    Route::get('/editMarriageCardAppInfo/{id}', [UserManageCardAppController::class, 'fillCardAppUser'])->name('editMarriageCardAppInfo');
    Route::get('/viewMarriageCardAppInfo/{id}', [UserManageCardAppController::class, 'viewCardAppUser'])->where('id', '.*')->name('viewMarriageCardAppInfo');
    Route::post('/createCardApp', [UserManageCardAppController::class, 'createCardApp'])->name('createCardApp');
    Route::put('/{id}/updateCardApp', [UserManageCardAppController::class, 'update'])->name('updateCardApp');
    Route::delete('/deleteMarriageCardApp/{id}', [UserManageCardAppController::class, 'destroy'])->name('deleteMarriageCardApp');

    Route::get('/manageMarriageCardApp', [UserManageCardAppController::class, 'manageCardAppUser'])->name('manageMarriageCardApp');
    Route::get('/marriageCardAppInfo', [UserManageCardAppController::class, 'fillCardAppUser'])->name('marriageCardAppInfo');

    //module 5
    Route::get('/userUpload', [IncentiveController::class, 'userUpload'])->name('userUpload');
    Route::get('userIncentive/tags', 'IncenticeController@tags');
    Route::get('/download/{file}', 'IncentiveController@download');
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

        Route::view('/Viewinformation', 'manageConsultation(staff).ViewInformation')->name('ViewInformation');
        Route::view('/ConsultationApplicationList', 'manageConsultation(staff).ConsultationApplicationList')->name('ConsultationApplicationList');

    });


    Route::view('/profile', 'manageStaffProfile.profile-view')->name('profile');
    // Route::view('/admin/profile', 'manageStaffProfile.adminProfile-view')->name('admin.profile');
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

    //Module 2
    Route::get('/requestMarriageStaff', [StaffRequestMarriageController::class, 'views'])->name('requestMarriageStaff');
    Route::get('/viewFormGrooms', [StaffRequestMarriageController::class, 'viewFormGrooms'])->name('viewFormGrooms');
    Route::get('/viewFormBrides', [StaffRequestMarriageController::class, 'viewFormBrides'])->name('viewFormBrides');
    Route::get('/viewFormMarriage', [StaffRequestMarriageController::class, 'viewFormMarriage'])->name('viewFormMarriage');
    Route::get('/viewDocuments', [StaffRequestMarriageController::class, 'viewDocuments'])->name('viewDocuments');

    Route::get('staffPrepCourseList', [StaffManageCourseController::class, 'staffPrepCourseList'])->name('staffPrepCourseList');
    Route::get('editEPrepCourseInformation', [StaffManageCourseController::class, 'editEPrepCourseInformation'])->name('editEPrepCourseInformation');
    Route::get('viewEListGroomsPrepCourse', [StaffManageCourseController::class, 'viewEListGroomsPrepCourse'])->name('viewEListGroomsPrepCourse');
    Route::get('viewEGroomsInformation', [StaffManageCourseController::class, 'viewEGroomsInformation'])->name('viewEGroomsInformation');

    //Module 3
    Route::get('/manageMarriage', [StaffManageMarriageRegController::class, 'manage'])->name('manageMarriage');
    Route::get('/manageMarriageCardApplicationListStaff', [StaffManageCardAppController::class, 'manageCardAppStaff'])->name('staff.manageMarriageCardApplicationListStaff');
    Route::get('/eFormsGrooms', [StaffManageMarriageRegController::class, 'eFormsGrooms'])->name('eFormsGrooms');
    Route::get('/eFormsBrides', [StaffManageMarriageRegController::class, 'eFormsBrides'])->name('eFormsBrides');
    Route::get('/eFormsMarriage', [StaffManageMarriageRegController::class, 'eFormsMarriage'])->name('eFormsMarriage');
    Route::get('/approveMarriageRegistration', [StaffManageMarriageRegController::class, 'approveMarriageRegistration'])->name('approveMarriageRegistration');

    Route::get('/manageMarriageCardApp', [StaffManageCardAppController::class, 'manageCardAppStaff'])->name('manageMarriageCardApp');
    Route::get('/approveMarriageCardApp', [StaffManageCardAppController::class, 'approveCardAppStaff'])->name('approveMarriageCardApp');
    Route::put('/{id}/updateCardApp', [StaffManageCardAppController::class, 'update'])->name('updateCardApp');


    //module 4
    Route::post('/submitForm', [ConsultationController::class, 'submitForm'])->name('user.submitForm');
    Route::get('/edit/{id}', [ConsultationController::class, 'edit'])->name('user.editInformation');
    //Module 5
    Route::get('/staffIncentive', [StaffManageIncentiveController::class, 'staffIncentive'])->name('staffIncentive');
    Route::get('/userUpload', 'IncentiveController@index');
    Route::post('/userUpload', 'IncentiveController@showUploadFile');

    Route::get('/approveMarriageCardApp/{id}', [StaffManageCardAppController::class, 'approveCardAppStaff'])->name('approveMarriageCardApp');
});

// Route::get('/staff/manageMarriage',[StaffManageMarriageRegController::class,'index'])->name('staff.manageMarriage');

require __DIR__ . '/auth.php';

Route::get('/mregistration', function () {
    return view('module3.MR');
});
