<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SeoSetting;

class HomeController2 extends Controller
{
    public function show()
    {
        $seo = SeoSetting::where('page_name', 'home')->first();
        $products = Product::with('gallery')->latest()->paginate(8);
        return view('pages.index', [
            'products' => $products,
            'seo' => $seo
        ]);
    }
}
