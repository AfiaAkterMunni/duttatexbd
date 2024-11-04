<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function show($id)
    {
        $categories = Category::get();
        $subcategories = Subcategory::where('category_id', $id)->get();
        return view('pages.subcategory', ['subcategories' => $subcategories, 'categories' => $categories]);
    }
}
