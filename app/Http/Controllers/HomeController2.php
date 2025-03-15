<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SeoSetting;

class HomeController2 extends Controller
{
    public function show()
    {
        $seo = SeoSetting::where('page_name', 'home')->first();
        $jsonLD = $this->seoSettingJsonLD($seo);
        $products = Product::with('gallery')->latest()->paginate(8);
        return view('pages.index', [
            'products' => $products,
            'seo' => $seo,
            'jsonLD' => $jsonLD,
        ]);
    }

    public function seoSettingJsonLD($seoSetting)
    {
        if ($seoSetting) {
            $seoJsonLD = [
                "@context" => "https://schema.org",
                "@type" => "WebPage",
                "name" => $seoSetting->seo_title,
                "url" => route('homepage'),
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
