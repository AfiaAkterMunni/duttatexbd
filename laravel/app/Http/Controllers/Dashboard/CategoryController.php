<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        // dd($categories);
        return view('dashboard.pages.categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('dashboard.pages.categories.create');
    }

    public function edit()
    {
        return view('dashboard.pages.categories.edit');
    }
}
