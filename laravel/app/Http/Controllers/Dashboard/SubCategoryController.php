<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubcategoryRequest;
use App\Models\Category;
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
        $categories = Category::all();
        return view('dashboard.pages.subcategories.create', ['categories' => $categories]);
    }

    public function edit($id)
    {
        $subcategory = Subcategory::find($id);
        $categories = Category::all();
        return view('dashboard.pages.subcategories.edit', ['subcategory' => $subcategory, 'categories' => $categories]);
    }

    public function store(StoreSubcategoryRequest $request) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/subcategories');
        $image->move($destinationPath, $name);
        $data = [
            'name' => $request->input('name'),
            'image' => $name,
            'category_id' => $request->input('category')
        ];
        Subcategory::create($data);
        return redirect(route('subcategory.index'))->with('success', 'Subcategory Created Successfully!!!');
    }
}
