<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        return view('dashboard.pages.products.index');
    }

    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('dashboard.pages.products.create', ['categories' => $categories, 'subcategories' => $subcategories]);
    }

    public function edit()
    {
        return view('dashboard.pages.products.edit');
    }

    public function store(Request $request) {
        dd($request);
        // $image = $request->file('image');
        // $name = time().'.'.$image->getClientOriginalExtension();
        // $destinationPath = public_path('/uploads/categories');
        // $image->move($destinationPath, $name);
        // $data = [
        //     'name' => $request->input('name'),
        //     'email' => $request->input('email'),
        //     'phone' => $request->input('phone'),
        //     'message' => $request->input('message'),
        //     'image' => $name
        // ];
        // Category::create($data);
        // return redirect(route('category.index'))->with('success', 'Category Created Successfully!!!');
    }
}
