<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class DashboardController extends Controller {
    public function DashboardPage(): View {
        return view('pages.dashboard.dashboard-page');
    }
}
