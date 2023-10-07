<?php

namespace App\Http\Controllers;

class ProductController extends Controller {
    public function ProductPage() {
        return view('pages.dashboard.product-page');
    }
}
