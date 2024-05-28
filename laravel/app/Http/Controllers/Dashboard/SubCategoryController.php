<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function show()
    {
        return view('dashboard.pages.subcategories.index');
    }

    public function create()
    {
        return view('dashboard.pages.subcategories.create');
    }
    
    public function edit()
    {
        return view('dashboard.pages.subcategories.edit');
    }
}
