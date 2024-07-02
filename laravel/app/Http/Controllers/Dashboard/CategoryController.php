<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
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

    public function store(StoreCategoryRequest $request) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/categories');
        $image->move($destinationPath, $name);
        $data = [
            'name' => $request->input('name'),
            'image' => $name
        ];
        Category::create($data);
        return redirect(route('category.index'))->with('addcategory', 'Category Created Successfully!!!');
    }

}
