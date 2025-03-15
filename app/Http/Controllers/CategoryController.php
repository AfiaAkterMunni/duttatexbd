<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SeoSetting;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $seo = SeoSetting::where('page_name', 'product')->first();
        $jsonLD = $this->seoSettingJsonLD($seo);
        $categories = Category::latest()->paginate(12);
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
        $subcategories = Subcategory::where('category_id', $category->id)->paginate(12);
        return view('pages.subcategory', [
            'category' => $category,
            'categories' => $categories,
            'subcategories' => $subcategories,
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
                "mainEntity" => [
                    "@type" => "ItemList",
                    "itemListElement" => $category->subcategories->map(function ($subcategory, $index) {
                        return [
                            "@type" => "ListItem",
                            "position" => $index + 1,
                            "item" => [
                                "@type" => "Category",
                                "name" => $subcategory->name,
                                "url" => route('subcategories.show', ['slug' => $subcategory->slug]),
                            ]
                        ];
                    })->toArray(),
                ]
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
