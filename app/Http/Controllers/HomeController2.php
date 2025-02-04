<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController2 extends Controller
{
    public function show()
    {
        $categories = Category::with('gallery')->latest()->paginate(8);
        return view('pages.index', ['categories' => $categories]);
    }
}
