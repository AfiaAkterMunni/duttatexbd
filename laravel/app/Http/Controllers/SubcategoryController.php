<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function show()
    {
        $subcategories = Subcategory::paginate(12);
        return view('pages.subcategory', ['subcategories' => $subcategories]);
    }
}
