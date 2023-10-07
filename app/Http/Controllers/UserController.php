<?php

namespace App\Http\Controllers;

class UserController extends Controller {

    public function LoginPage() {
        return view('pages.auth.login-page');
    }

    public function UserLogout() {
        return redirect('/')->cookie('token', '', -1);
    }

    public function RegistrationPage() {
        return view('pages.auth.registration-page');
    }
    public function SendOtpPage() {
        return view('pages.auth.send-otp-page');
    }
    public function VerifyOTPPage() {
        return view('pages.auth.verify-otp-page');
    }
    public function ResetPasswordPage() {
        return view('pages.auth.reset-pass-page');
    }
    public function ProfilePage() {
        return view('pages.dashboard.profile-page');
    }
}
