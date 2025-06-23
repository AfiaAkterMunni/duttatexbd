<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SeoSetting;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $seo = SeoSetting::where('page_name', 'product')->first();
        $jsonLD = $this->seoSettingJsonLD($seo);
        $categories = Category::latest()->paginate(16);
        return view('pages.category', [
            'categories' => $categories,
            'seo' => $seo,
            'jsonLD' => $jsonLD,
        ]);
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $categoryJsonLD = $this->categoryJsonLD($category);
        $categories = Category::get();
        // $subcategories = Subcategory::where('category_id', $category->id)->latest()->paginate(16);
        $products = Product::where('category_id', $category->id)->latest()->paginate(16);
        return view('pages.productsByCategory', [
            'category' => $category,
            'categories' => $categories,
            'products' => $products,
            // 'subcategories' => $subcategories,
            'seo' => $category->getSeoSettings(),
            'jsonLD' => $categoryJsonLD,
        ]);
    }

    public function categoryJsonLD($category)
    {
        if ($category) {
            $categoryJsonLD = [
                "@context" => "https://schema.org",
                "@type" => "CollectionPage",
                "name" => $category->name,
                "url" => route('categories.show', ['slug' => $category->slug]),
                "description" => $category->meta_description,

            ];

            return $categoryJsonLD;
        }
        return null;
    }

    public function seoSettingJsonLD($seoSetting)
    {
        if ($seoSetting) {
            $seoJsonLD = [
                "@context" => "https://schema.org",
                "@type" => "WebPage",
                "name" => $seoSetting->seo_title,
                "url" => route('categories'),
                "description" => $seoSetting->meta_description ?? "",
                "publisher" => [
                    "@type" => "Organization",
                    "name" => "Nrb fashion",
                    "logo" => asset("images/duttatex-Logo.png"),
                ]
            ];
            return $seoJsonLD;
        }
        return null;
    }
}
