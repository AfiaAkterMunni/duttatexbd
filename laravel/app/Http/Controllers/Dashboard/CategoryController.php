<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
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
    
    public function edit($id)
    {
        $category = Category::find($id);
        // dd($category);
        return view('dashboard.pages.categories.edit',['category' => $category]);
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

    public function update(UpdateCategoryRequest $request, $id)
    {
        dd($request);

        $data = [
            'name' => $request->input('name1'),
            'details' => $request->input('details1'),
            'price' => $request->input('price1'),
            'category_id' => $request->input('category1')
        ];

        if($request->hasFile('image1'))
        {
            $oldImage = Menu::find($id)->image;
            if($oldImage)
            {
                unlink('uploads/menus/'.$oldImage);
            }
            // dd($oldImage);
            $image = $request->file('image1');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/menus');
            $image->move($destinationPath, $name);
            $data['image'] = $name;
        }

        Menu::where('id', $id)->update($data);
        return redirect(url('/menus'))->with('updatemenu', 'Menu Updated Successfully!!!');
    }

}
