<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'HomePage']);
Route::get('userLogin', [UserController::class, 'LoginPage']);
Route::get('logout', [UserController::class, 'UserLogout']);
Route::get('userRegistration', [UserController::class, 'RegistrationPage']);
Route::get('sendOtp', [UserController::class, 'SendOtpPage']);
Route::get('verifyOtp', [UserController::class, 'VerifyOTPPage']);
Route::get('resetPassword', [UserController::class, 'ResetPasswordPage']);
Route::get('userProfile', [UserController::class, 'ProfilePage']);

Route::get('dashboard', [DashboardController::class, 'DashboardPage']);

Route::get('categoryPage', [CategoryController::class, 'CategoryPage']);
Route::get('customerPage', [CustomerController::class, 'CustomerPage']);
Route::get('productPage', [ProductController::class, 'ProductPage']);

Route::get('invoicePage', [InvoiceController::class, 'InvoicePage']);
Route::get('salePage', [InvoiceController::class, 'SalePage']);
Route::get('reportPage', [ReportController::class, 'ReportPage']);
