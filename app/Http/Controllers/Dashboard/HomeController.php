<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        $products = Product::all();
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('dashboard.pages.index', ['products' => $products, 'categories' => $categories, 'subcategories' => $subcategories]);
    }
}
