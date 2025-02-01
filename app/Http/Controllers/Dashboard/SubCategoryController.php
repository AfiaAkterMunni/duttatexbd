<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubcategoryRequest;
use App\Http\Requests\UpdateSubcategoryRequest;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Subcategory;
use Illuminate\Http\Request;

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
            'category_id' => $request->input('category')
        ];
        Subcategory::create($data);
        return redirect(route('subcategory.index'))->with('success', 'Subcategory Created Successfully!!!');
    }

    public function update(UpdateSubcategoryRequest $request, $id)
    {
        $subcategory = Subcategory::find($id);
        $data = [
            'name' => $request->input('name'),
            'gallery_id' => $request->input('gallery_id'),
            'category_id' => $request->input('category'),
        ];
        $subcategory->update($data);
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
