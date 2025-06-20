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
        $products = Product::count();
        $categories = Category::count();
        $subcategories = Subcategory::count();
        return view('dashboard.pages.index', ['products' => $products, 'categories' => $categories, 'subcategories' => $subcategories]);
    }
}
