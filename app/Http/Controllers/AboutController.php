<?php

namespace App\Http\Controllers;

use App\Models\SeoSetting;

class AboutController extends Controller
{
    public function show()
    {
        $seo = SeoSetting::where('page_name', 'about')->first();
        $jsonLD = $this->seoSettingJsonLD($seo);
        return view('pages.about', [
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
                "url" => route('about'),
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
