<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\SitemapService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Generate sitemap index on application boot
        $sitemapService = app(SitemapService::class);
        $sitemapService->generateSitemapIndex();
        $sitemapService->addToStaticSitemap();
    }
}
