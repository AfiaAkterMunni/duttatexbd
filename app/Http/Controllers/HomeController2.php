<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SeoSetting;
use Illuminate\Http\Request;

class HomeController2 extends Controller
{
    public function show()
    {
        $seo = SeoSetting::where('page_name', 'home')->first();
        $categories = Category::with('gallery')->latest()->paginate(8);
        return view('pages.index', [
            'categories' => $categories,
            'seo' => $seo
        ]);
    }
}
