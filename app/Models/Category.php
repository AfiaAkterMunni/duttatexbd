<?php

namespace App\Models;

use App\Services\SitemapService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'gallery_id',
        'meta_robots',
        'seo_title',
        'h1_text',
        'meta_description',
        'meta_keywords',
    ];

    /**
     * Get the subcategory data for the category.
     */
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    /**
     * Get the product data for the Category.
     */

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Get the gallery data for the Category.
     */
    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }

    /**
     * Get the seo data for the Category.
     */
    public function getSeoSettings()
    {
        return new SeoSetting([
            'meta_robots' => $this->meta_robots,
            'seo_title' => $this->seo_title,
            'h1_text' => $this->h1_text,
            'meta_description' => $this->meta_description,
            'meta_keywords' => $this->meta_keywords,
        ]);
    }

    protected static function booted()
    {
        parent::booted();
        static::saved(function ($category) {
            $sitemapService = app(SitemapService::class);
            $sitemapService->addCategoryToSitemap($category);
        });
    }
}
