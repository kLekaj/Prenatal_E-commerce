<?php

namespace App\Http\Controllers;

use App\Models\Category;


class CategoryController extends Controller
{

    public function landingPage()
    {
        $categories = Category::tree();
        return view('pages/landingPage', compact('categories'));
    }

}
