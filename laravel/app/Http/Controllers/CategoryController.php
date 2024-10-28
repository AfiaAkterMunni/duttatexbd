<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show()
    {
        $categories = Category::paginate(12);
        return view('pages.category', ['categories' => $categories]);
    }
}
