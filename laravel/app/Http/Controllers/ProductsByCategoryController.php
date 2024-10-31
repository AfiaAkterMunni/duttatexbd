<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductsByCategoryController extends Controller
{
    public function show()
    {
        $categories = Category::get();
        $subcategories = Subcategory::get();
        return view('pages.productsByCategory', ['subcategories' => $subcategories, 'categories' => $categories]);
    }
}
