<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subcategories = Subcategory::all();
        
        return view('dashboard.pages.subcategories.index', ['subcategories' => $subcategories]);
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
