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
        $categories = Category::with('gallery')->latest()->paginate(15);
        // dd($categories);
        return view(
            'dashboard.pages.categories.index',
            [
                'categories' => $categories
            ]
        );
    }

    public function create()
    {
        $galleries = Gallery::latest()->paginate(12);
        return view('dashboard.pages.categories.create', [
            'galleries' => $galleries,
        ]);
    }

    public function edit($id)
    {
        $galleries = Gallery::latest()->paginate(12);
        $category = Category::with('gallery')->find($id);
        return view('dashboard.pages.categories.edit', [
            'category' => $category,
            'galleries' => $galleries,
        ]);
    }

    public function store(StoreCategoryRequest $request)
    {
        $data = [
            'name' => $request->input('name'),
            'gallery_id' => $request->input('gallery_id'),
        ];
        Category::create($data);
        return redirect(route('category.index'))->with('success', 'Category Created Successfully!!!');
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
        $category = Category::find($id);
        $category->update([
            'name' => $request->input('name'),
            'gallery_id' => $request->input('gallery_id'),
        ]);
        return redirect(route('category.index'))->with('success', 'Category Updated Successfully!!!');
    }

    public function search(Request $request)
    {
        $categories = Category::where('name', 'LIKE', "$request->search")->paginate(15);
        return view('dashboard.pages.categories.index', [
            'categories' => $categories
        ]);
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
