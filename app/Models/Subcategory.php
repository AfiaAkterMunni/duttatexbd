<?php

namespace App\Models;

use App\Services\SitemapService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Subcategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'gallery_id',
        'category_id',
        'meta_robots',
        'seo_title',
        'h1_text',
        'meta_description',
        'meta_keywords',
    ];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        // Model Event Hook
        static::creating(function ($model) {
            $slug = Str::slug($model->name);
            $latest = static::whereRaw("slug REGEXP '^{$slug}(-[0-9]+)?$'")
                ->latest('id')
                ->value('slug');
            if($latest){
                $pieces = explode('-', $latest);
                $number = intval(end($pieces));
                $slug .= '-' . ($number + 1);
            }
            $model->slug = $slug;
        });

        //saved model hook for sitemap
        static::saved(function ($subcategory) {
            $sitemapService = app(SitemapService::class);
            $sitemapService->addSubcategoryToSitemap($subcategory);
        });
    }

    /**
     * Get the category data for the Subcategory.
     */

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    /**
     * Get the product data for the subcategory.
     */

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Get the gallery data for the subcategory.
     */
    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }

    /**
     * Get the seo data for the subcategory.
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
}
