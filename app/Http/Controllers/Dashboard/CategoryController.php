<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(15);
        return view('dashboard.pages.categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        $galleries = Gallery::latest()->paginate(6);
        return view('dashboard.pages.categories.create', ['galleries' => $galleries]);
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('dashboard.pages.categories.edit',['category' => $category]);
    }

    public function store(StoreCategoryRequest $request) {
        dd($request->all());
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/categories');
        $image->move($destinationPath, $name);
        $data = [
            'name' => $request->input('name'),
            'image' => $name
        ];
        Category::create($data);
        return redirect(route('category.index'))->with('success', 'Category Created Successfully!!!');
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
        $category = Category::find($id);
        $data = [
            'name' => $request->input('name')
        ];

        if($request->hasFile('image'))
        {
            $oldImage = $category->image;
            if($oldImage)
            {
                unlink('uploads/categories/'.$oldImage);
            }
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/categories');
            $image->move($destinationPath, $name);
            $data['image'] = $name;
        }

        $category->update($data);
        return redirect(route('category.index'))->with('success', 'Category Updated Successfully!!!');
    }

    public function search(Request $request)
    {
        $categories = Category::where('name', 'LIKE', "$request->search")->paginate(15);
        return view('dashboard.pages.categories.index', ['categories' => $categories]);
    }
    // public function delete(Request $request, $id)
    // {
    //     $category = Category::find($id);
    //     if($category->image)
    //     {
    //         unlink('uploads/categories/'.$category->image);
    //     }
    //     $category->delete();
    //     return redirect(route('category.index'))->with('success', 'Category Deleted Successfully!!!');
    // }

}
