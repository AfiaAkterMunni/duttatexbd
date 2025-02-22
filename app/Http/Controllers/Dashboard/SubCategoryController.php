<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Gallery;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubcategoryRequest;
use App\Http\Requests\UpdateSubcategoryRequest;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subcategories = Subcategory::with('gallery')->latest()->paginate(15);
        // dd($subcategories);
        return view('dashboard.pages.subcategories.index', ['subcategories' => $subcategories]);
    }

    public function create()
    {
        $categories = Category::all();
        $galleries = Gallery::latest()->paginate(12);
        return view('dashboard.pages.subcategories.create', ['categories' => $categories, 'galleries' => $galleries]);
    }

    public function edit($id)
    {
        $galleries = Gallery::latest()->paginate(12);
        $subcategory = Subcategory::find($id);
        $categories = Category::all();
        return view('dashboard.pages.subcategories.edit', [
            'subcategory' => $subcategory,
            'categories' => $categories,
            'galleries' => $galleries,
        ]);
    }

    public function store(StoreSubcategoryRequest $request)
    {
        $data = [
            'name' => $request->input('name'),
            'gallery_id' => $request->input('gallery_id'),
            'category_id' => $request->input('category'),
            'meta_robots' => $request->input('meta_robots', null),
            'seo_title' => $request->input('seo_title', null),
            'h1_text' => $request->input('h1_text', null),
            'meta_description' => $request->input('meta_description', null),
            'meta_keywords' => $request->input('meta_keywords', null),
        ];
        Subcategory::create($data);
        return redirect(route('subcategory.index'))->with('success', 'Subcategory Created Successfully!!!');
    }

    public function update(UpdateSubcategoryRequest $request, $id)
    {
        $subcategory = Subcategory::find($id);
        $subcategory->update([
            'name' => $request->input('name'),
            'gallery_id' => $request->input('gallery_id'),
            'category_id' => $request->input('category'),
            'meta_robots' => $request->input('meta_robots', null),
            'seo_title' => $request->input('seo_title', null),
            'h1_text' => $request->input('h1_text', null),
            'meta_description' => $request->input('meta_description', null),
            'meta_keywords' => $request->input('meta_keywords', null),
        ]);
        return redirect(route('subcategory.index'))->with('success', 'Subcategory Updated Successfully!!!');
    }

    public function search(Request $request)
    {
        $subcategories = Subcategory::where('name', 'LIKE', "$request->search")->paginate(15);
        return view('dashboard.pages.subcategories.index', ['subcategories' => $subcategories]);
    }

    // public function delete(Request $request, $id)
    // {
    //     $subcategory = Subcategory::find($id);
    //     if($subcategory->image)
    //     {
    //         unlink('uploads/subcategories/'.$subcategory->image);
    //     }
    //     $subcategory->delete();
    //     return redirect(route('subcategory.index'))->with('success', 'Subcategory Deleted Successfully!!!');
    // }
}
