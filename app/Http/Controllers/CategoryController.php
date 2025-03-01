<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(12);
        return view('pages.category', ['categories' => $categories]);
    }

    public function show($slug)
    {
        $categories = Category::get();
        $category = Category::where('slug', $slug)->first();
        $subcategories = Subcategory::where('category_id', $category->id)->paginate(12);
        return view('pages.subcategory', [
            'category' => $category,
            'categories' => $categories,
            'subcategories' => $subcategories
        ]);
    }
}
