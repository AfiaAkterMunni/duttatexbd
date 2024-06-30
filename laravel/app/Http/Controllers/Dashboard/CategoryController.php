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

    public function store(StoreCategoryRequest $request) {
        $data = [
            'name' => $request->input('name')
        ];
        dd($data);
        // if($request->hasFile('image'))
        // {
        //     $image = $request->file('image');
        //     $name = time().'.'.$image->getClientOriginalExtension();
        //     $destinationPath = public_path('/uploads/menus');
        //     $image->move($destinationPath, $name);
        //     $data['image'] = $name;
        // }
        Category::create($data);
        return redirect(url('/category'))->with('addcategory', 'Category Created Successfully!!!');
    }


    public function edit()
    {
        return view('dashboard.pages.categories.edit');
    }
}
