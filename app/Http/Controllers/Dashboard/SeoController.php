<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateSeoRequest;
use App\Models\SeoSetting;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index()
    {
        $seoData = SeoSetting::all();
        $home = $seoData->where('page_name', 'home')->first();
        $about = $seoData->where('page_name', 'about')->first();
        $product = $seoData->where('page_name', 'product')->first();
        $service = $seoData->where('page_name', 'service')->first();
        $contact = $seoData->where('page_name', 'contact')->first();
        return view('dashboard.pages.seo', [
            'home' => $home,
            'about' => $about,
            'product' => $product,
            'service' => $service,
            'contact' => $contact,
        ]);
    }

    public function update(UpdateSeoRequest $request)
    {
        $seoSettings = SeoSetting::where('page_name', $request->input('page_name'))->first();

        if (!$seoSettings) {
            $seoSettings = new SeoSetting();
            $seoSettings->page_name = $request->input('page_name');
        }
        $seoSettings->meta_robots = $request->input('meta_robots');
        $seoSettings->seo_title = $request->input('seo_title', '');
        $seoSettings->h1_text = $request->input('h1_text', '');
        $seoSettings->meta_description = $request->input('meta_description', '');
        $seoSettings->meta_keywords = $request->input('meta_keywords', '');

        $seoSettings->save();
        return redirect()->route('seo.index', ['tab' => $request->input('page_name')])->with('success', ucfirst($request->input('page_name')) . ' SEO settings updated successfully.');
    }
}
