<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


### Route Complete Page List 

```
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

```
## git clone after work 

```
1. cp .env.example .env & (Create Token code)
2. composer install
3. php artisan key:generate
4. php artisan migrate
5. php artisan serve

```