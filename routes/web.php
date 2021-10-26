<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FOLsController;
use App\Http\Controllers\ApplicantsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// EMPLOYEE'S VIEWS
Route::view('/', 'index');
Route::view('/home', 'employee-interface.home');
Route::view('/dashboard', 'employee-interface.dashboard');
Route::view('/request-a-coe', 'employee-interface.request-a-coe');
Route::view('/file-leave-of-absence/request-form', 'employee-interface.file-leave-of-absence');
Route::view('/login-as-admin', 'login-as-admin');

// EMPLOYEE'S GET METHODS
Route::get('/file-leave-of-absence/my-request', [FOLsController::class,'showData']);

// ADMIN'S VIEWS
Route::view('/admin/home', 'admin-interface.home');
Route::view('/admin/dashboard', 'admin-interface.dashboard');
Route::view('/admin/applicants/jobs', 'admin-interface.applicants');
Route::view('/admin/applicants/candidates', 'admin-interface.candidates');
Route::view('/admin/employees', 'admin-interface.employees');
Route::view('/admin/file-of-leave', 'admin-interface.file-of-leave');
Route::view('/admin/coe-requests', 'admin-interface.coe-requests');

// ADMIN'S GET METHODS
Route::get('/admin/file-of-leave', [FOLsController::class,'showDataToAdmin']);

// OTHER VIEWS
Route::view('/application-form', 'admin-interface.application-form');
Route::view('/admin', 'admin');
Route::view('/register-an-employee', 'register-an-employee');
Route::view('login-admin', 'login-admin');

// OTHER GET METHODS
Route::get('/login', function ()
{
  if(session()->has('email'))
    {
      return redirect('/dashboard');
    }
      return view('login');
});
Route::get('/login/forgot', [ForgotPasswordController::class, 'forgot']);
Route::get('/logout', function () {
    if(session()->has('email'))
    {
        session()->pull('email');
    }
    return redirect('login');
});
Route::get('/logout-admin', function () {
    if(session()->has('email'))
    {
        session()->pull('email');
    }
    return redirect('/login-admin');
});

// OTHER POST METHODS
Route::post('loginme',[LoginController::class,'login']); // POST AN EMAIL
Route::post('/login/forgot', [ForgotPasswordController::class, 'password']);
Route::post('/requested', [FOLsController::class,'saveData']);
Route::post('/recorded', [ApplicantsController::class, 'saveApplicant']);
Route::post('/added-as-admin', [AdminController::class, 'addAsAdmin']);
Route::post('/loginme-as-admin',[LoginController::class,'loginAsAdmin']);
Route::post('registered-as-employee', [EmployeesController::class, 'registerAnEmployee']);
Route::post('/loginme-admin',[LoginController::class,'loginAdmin']);