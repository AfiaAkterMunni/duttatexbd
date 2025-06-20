<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $products = Product::latest()->paginate(15);
        return view('dashboard.pages.products.index', ['products' => $products]);
    }

    public function create()
    {
        $categories = Category::all();
        $galleries = Gallery::latest()->paginate(12);
        return view('dashboard.pages.products.create', [
            'categories' => $categories,
            'galleries' => $galleries,
        ]);
    }

    public function store(StoreProductRequest $request)
    {
        Product::create([
            'name' => $request->input('name'),
            'category_id' => $request->input('category'),
            'subcategory_id' => $request->input('subcategory'),
            'description' => $request->input('description'),
            'gallery_id' => $request->input('gallery_id'),
            'meta_robots' => $request->input('meta_robots', null),
            'seo_title' => $request->input('seo_title', null),
            'h1_text' => $request->input('h1_text', null),
            'meta_description' => $request->input('meta_description', null),
            'meta_keywords' => $request->input('meta_keywords', null),
        ]);
        return redirect(route('product.index'))->with('success', 'Product Created Successfully!!!');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $galleries = Gallery::latest()->paginate(12);
        $subcategories = Subcategory::where('category_id', $product->category_id)->get();
        return view('dashboard.pages.products.edit', [
            'product' => $product,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'galleries' => $galleries,
        ]);
    }

    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::find($id);
        $product->update([
            'name' => $request->input('name'),
            'gallery_id' => $request->input('gallery_id'),
            'category_id' => $request->input('category'),
            'subcategory_id' => $request->input('subcategory'),
            'description' => $request->input('description'),
            'meta_robots' => $request->input('meta_robots', null),
            'seo_title' => $request->input('seo_title', null),
            'h1_text' => $request->input('h1_text', null),
            'meta_description' => $request->input('meta_description', null),
            'meta_keywords' => $request->input('meta_keywords', null),
        ]);
        return redirect(route('product.index'))->with('success', 'Product Updated Successfully!!!');
    }
    public function delete(Request $request, $id)
    {
        $product = Product::find($id);
        if ($product->image) {
            unlink('uploads/products/' . $product->image);
        }
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product Deleted Successfully!!!');
    }
    public function search(Request $request)
    {
        $products = Product::where('name', 'LIKE', "%$request->search%")->paginate(15);
        return view('dashboard.pages.products.index', ['products' => $products]);
    }

    public function categoryBySubcategory($id)
    {
        $subcategories = Subcategory::where('category_id', $id)->get(['id', 'name']);
        return response()->json($subcategories);
    }
}
