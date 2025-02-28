<?php

namespace App\Http\Controllers;

use App\Models\SeoSetting;

class AboutController extends Controller
{
    public function show()
    {
        $seo = SeoSetting::where('page_name', 'about')->first();
        return view('pages.about', [
            'seo' => $seo,
        ]);
    }
}
