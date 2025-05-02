<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapIndex;
use Spatie\Sitemap\Tags\Url;

class SitemapService
{
    protected $sitemap;

    public function __construct(Sitemap $sitemap)
    {
        $this->sitemap = $sitemap;
    }

    /**
     * Generate the sitemap index file.
     *
     * @return void
     */
    public function generateSitemapIndex()
    {
        // Create sitemap index file
        SitemapIndex::create()
            ->add(asset('static-sitemap.xml'))
            ->add(asset('categories-sitemap.xml'))
            ->add(asset('subcategories-sitemap.xml'))
            ->add(asset('products-sitemap.xml'))
            ->writeToFile(public_path('sitemap.xml'));
    }

    /**
     * Add a URL to the static sitemap.
     *
     * @param string $url
     * @return void
     */
    public function addToStaticSitemap()
    {
        $home = Url::create('/')
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_NEVER)
            ->setPriority(1.0);
        $about = Url::create('/about')
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_NEVER)
            ->setPriority(1.0);
        $services = Url::create('/service')
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_NEVER)
            ->setPriority(1.0);
        $contact = Url::create('/contact')
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_NEVER)
            ->setPriority(1.0);
        $categories = Url::create('/categories')
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_NEVER)
            ->setPriority(1.0);
        Sitemap::create()
            ->add($home)
            ->add($about)
            ->add($services)
            ->add($contact)
            ->add($categories)
            ->writeToFile(public_path('static-sitemap.xml'));
    }

    /**
     * Add a URL to the categories sitemap.
     *
     * @param Category $category
     * @return void
     */
    public function addCategoryToSitemap(Category $category)
    {
        $sitemapPath = 'categories-sitemap.xml';
        $sitemap = Sitemap::create();
        if (file_exists($sitemapPath)) {
            $xml = simplexml_load_file(public_path($sitemapPath));
            $existingUrls = [];
            foreach ($xml->url as $urlEntry) {
                $loc = (string) $urlEntry->loc;
                $urlTag = Url::create($loc)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setPriority(0.7);
                $existingUrls[] = $urlTag->url;
                $sitemap->add($urlTag);
            }
            $newUrl = url("/categories/{$category->slug}");
            if (!in_array($newUrl, $existingUrls)) {
                $sitemap->add(
                    Url::create($newUrl)
                        ->setLastModificationDate(now())
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                        ->setPriority(0.7)
                );
                $sitemap->writeToFile($sitemapPath);
            }
        } else {
            if ($category->slug) {
                $categoryUrl = Url::create("/categories/$category->slug")
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setPriority(0.7);
                $sitemap->add($categoryUrl);
                $sitemap->writeToFile(public_path($sitemapPath));
            }
        }
    }

    /**
     * Add a URL to the subcategories sitemap.
     *
     * @param Subcategory $subcategory
     * @return void
     */
    public function addSubcategoryToSitemap(Subcategory $subcategory)
    {
        $sitemapPath = 'subcategories-sitemap.xml';
        $sitemap = Sitemap::create();
        if (file_exists($sitemapPath)) {
            $xml = simplexml_load_file(public_path($sitemapPath));
            $existingUrls = [];
            foreach ($xml->url as $urlEntry) {
                $loc = (string) $urlEntry->loc;
                $urlTag = Url::create($loc)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setPriority(0.8);
                $existingUrls[] = $urlTag->url;
                $sitemap->add($urlTag);
            }
            $newUrl = url("/subcategories/{$subcategory->slug}");
            if (!in_array($newUrl, $existingUrls)) {
                $sitemap->add(
                    Url::create($newUrl)
                        ->setLastModificationDate(now())
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                        ->setPriority(0.8)
                );
                $sitemap->writeToFile($sitemapPath);
            }
        } else {
            if ($subcategory->slug) {
                $subcategoryUrl = Url::create("/subcategories/$subcategory->slug")
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setPriority(0.8);
                $sitemap->add($subcategoryUrl);
                $sitemap->writeToFile(public_path($sitemapPath));
            }
        }
    }

    /**
     * Add a URL to the products sitemap.
     *
     * @param Product $product
     * @return void
     */
    public function addProductToSitemap(Product $product)
    {
        $sitemapPath = 'products-sitemap.xml';
        $sitemap = Sitemap::create();
        if (file_exists($sitemapPath)) {
            $xml = simplexml_load_file(public_path($sitemapPath));
            $existingUrls = [];
            foreach ($xml->url as $urlEntry) {
                $loc = (string) $urlEntry->loc;
                $urlTag = Url::create($loc)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setPriority(0.9);
                $existingUrls[] = $urlTag->url;
                $sitemap->add($urlTag);
            }
            $newUrl = url("/products/{$product->slug}");
            if (!in_array($newUrl, $existingUrls)) {
                $sitemap->add(
                    Url::create($newUrl)
                        ->setLastModificationDate(now())
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                        ->setPriority(0.9)
                );
                $sitemap->writeToFile($sitemapPath);
            }
        } else {
            if ($product->slug) {
                $productUrl = Url::create("/products/$product->slug")
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setPriority(0.9);
                $sitemap->add($productUrl);
                $sitemap->writeToFile(public_path($sitemapPath));
            }
        }
    }
}
