<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth;
use App\Http\Controllers\studentsView;
use App\Http\Controllers\test;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\studentsManage;
use App\Http\Controllers\email;
use App\Http\Controllers\analytics;
use App\Http\Controllers\profile;


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/test',[test::class, 'test'] );
// Route::get("/test", [test::class, "test1"]);
// Route::post("/test", [test::class, "test"]);


# Auth Pages 
Route::get('/login', [auth::class, 'loginView'])->name('login');
Route::post('/login', [auth::class, 'loginAuth']);

Route::get('/emailOtp', [auth::class, 'emailOtpView']);
Route::post('/emailOtp', [auth::class, 'emailOtpAuth']);

Route::get('/OtpVerify', [auth::class, 'OtpVerifyView'])->name('OtpVerify');
Route::post('/OtpVerify', [auth::class, 'OtpVerifyAuth']);

Route::get('/ChangePassword', [auth::class, 'ChangePasswordView'])->name('ChangePassword');
Route::post('/ChangePassword', [auth::class, 'ChangePasswordAuth']);


Route::prefix('dashboard')->group(function (){
    
    # Student View
    Route::get('/students_view', [studentsView::class, 'studentView'])->name('studentView');
    Route::post('/students_view', [studentsView::class, 'studentSearch'])->name('studentSearch');
    Route::get('/students_full_details', [studentsView::class, 'studentsFullDetails'])->name('studentsFullDetails');
    Route::get('/students/export', [studentsView::class, 'export'])->name('students.export');
    Route::post('/submit_columns', [studentsView::class, 'submitColumns'])->name('students.submitColumns');


    # Analytics
    Route::get('/analytics', [analytics::class, 'analyticsView'])->name('analytics');


    # Students Manage
    Route::get('/students_manage', [studentsManage::class, 'studentsManageView'])->name('studentsManage');
    Route::post('/students/upload', [studentsManage::class, 'uploadStudents'])->name('students.upload');

    # Email
    // Route::get('/email', [email::class, 'emailView'])->name('email');


    # Profile
    Route::get('/profile', [profile::class, 'profileView'])->name('profile');
});


Route::get('/logout', function (){
    session()->forget('verified');
    return redirect(route('login'))->with('message', 'You are logged out!');
})->name('logout');