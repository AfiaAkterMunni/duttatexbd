<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;

class SubcategoryController extends Controller
{
    public function show($slug)
    {
        $categories = Category::get();
        $subcategory = Subcategory::where('slug', $slug)->first();
        $products = Product::where('subcategory_id', $subcategory->id)->paginate(12);
        return view('pages.productsBySubCategory', [
            'subcategory' => $subcategory,
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
