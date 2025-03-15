<?php

namespace App\Http\Controllers;

use App\Models\SeoSetting;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show()
    {
        $seo = SeoSetting::where('page_name', 'service')->first();
        $jsonLD = $this->seoSettingJsonLD($seo);
        return view('pages.service', [
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
                "url" => route('service'),
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
