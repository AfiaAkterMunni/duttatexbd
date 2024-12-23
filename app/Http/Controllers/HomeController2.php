<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController2 extends Controller
{
    public function show()
    {
        $categories = Category::paginate(8);
        return view('pages.index', ['categories' => $categories]);
    }
}
