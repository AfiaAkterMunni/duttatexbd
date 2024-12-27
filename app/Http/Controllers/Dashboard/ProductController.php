<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $products = Product::paginate(15);
        return view('dashboard.pages.products.index', ['products' => $products]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.pages.products.create', ['categories' => $categories]);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('dashboard.pages.products.edit', ['product' => $product, 'categories' => $categories, 'subcategories' => $subcategories]);
    }

    public function store(StoreProductRequest $request) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/products');
        $image->move($destinationPath, $name);
        $data = [
            'name' => $request->input('name'),
            'category_id' => $request->input('category'),
            'subcategory_id' => $request->input('subcategory'),
            'description' => $request->input('description'),
            'image' => $name
        ];
        Product::create($data);
        return redirect(route('product.index'))->with('success', 'Product Created Successfully!!!');
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $data = [
            'name' => $request->input('name'),
            'category_id' => $request->input('category'),
            'subcategory_id' => $request->input('subcategory'),
            'description' => $request->input('description')
        ];

        if($request->hasFile('image'))
        {
            $oldImage = $product->image;
            if($oldImage)
            {
                unlink('uploads/products/'.$oldImage);
            }
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/products');
            $image->move($destinationPath, $name);
            $data['image'] = $name;
        }

        $product->update($data);
        return redirect(route('product.index'))->with('success', 'Product Updated Successfully!!!');
    }
    public function delete(Request $request, $id)
    {
        $product = Product::find($id);
        if($product->image)
        {
            unlink('uploads/products/'.$product->image);
        }
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product Deleted Successfully!!!');
    }
    public function search(Request $request)
    {
        $products = Product::where('name', 'LIKE', "$request->search")->paginate(15);
        return view('dashboard.pages.products.index', ['products' => $products]);
    }

    public function categoryBySubcategory($id)
    {
        $subcategories = Subcategory::where('category_id', $id)->get(['id', 'name']);
        // dd($subcategories);
        // return $subcategories;
        return response()->json($subcategories);
    }

}
