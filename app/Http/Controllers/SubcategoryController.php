<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;

class SubcategoryController extends Controller
{
    public function show($slug)
    {
        $subcategory = Subcategory::where('slug', $slug)->firstOrFail();
        $subcategoryJsonLD = $this->subcategoryJsonLD($subcategory);
        $categories = Category::get();
        $products = Product::where('subcategory_id', $subcategory->id)->paginate(12);
        return view('pages.productsBySubCategory', [
            'subcategory' => $subcategory,
            'products' => $products,
            'categories' => $categories,
            'seo' => $subcategory->getSeoSettings(),
            'jsonLD' => $subcategoryJsonLD,
        ]);
    }

    public function subcategoryJsonLD($subcategory)
    {
        if ($subcategory) {
            $subcategoryJsonLD = [
                "@context" => "https://schema.org",
                "@type" => "WebPage",
                "name" => $subcategory->name,
                "url" => route('subcategories.show', ['slug' => $subcategory->slug]),
                "description" => $subcategory->meta_description,
                "mainEntity" => [
                    "@type" => "ItemList",
                    "itemListElement" => $subcategory->product->map(function($p, $index) {
                        return [
                            "@type" => "ListItem",
                            "position" => $index + 1,
                            "item" => [
                                "@type" => "Product",
                                "name" => $p->name,
                                "url" => route('product.show', ['slug' => $p->slug]),
                                "image" => asset('uploads/galleries/' . $p->gallery->image),
                                "description" => $p->description,
                            ]
                        ];
                    })->toArray(),
                ]
            ];

            return $subcategoryJsonLD;
        }

        return null;
    }

}
