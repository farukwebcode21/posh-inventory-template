<?php

namespace App\Http\Controllers;

class CustomerController extends Controller {

    public function CustomerPage() {
        return view('pages.dashboard.customer-page');
    }
}
