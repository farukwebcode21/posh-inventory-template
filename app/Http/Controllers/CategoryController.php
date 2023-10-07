<?php

namespace App\Http\Controllers;

class CategoryController extends Controller {
    public function CategoryPage() {
        return view('pages.dashboard.category-page');
    }
}
