<?php

namespace App\Http\Controllers;

use App\Models\SeoSetting;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show()
    {
        $seo = SeoSetting::where('page_name', 'service')->first();
        return view('pages.service', [
            'seo' => $seo
        ]);
    }
}
