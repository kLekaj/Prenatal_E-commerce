<?php

namespace App\Http\Controllers;

use App\Models\Category;


class CategoryController extends Controller
{

    public function landingPage(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Category::tree();
        return view('pages/landing_page', compact('categories'));
    }

}
