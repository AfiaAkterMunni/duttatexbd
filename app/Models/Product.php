<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'gallery_id',
        'category_id',
        'subcategory_id',
        'description',
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
        static::creating(function ($product) {
            $slug = Str::slug($product->name);
            $latest = static::whereRaw("slug REGEXP '^{$slug}(-[0-9]+)?$'")
                ->latest('id')
                ->value('slug');
            if($latest){
                $pieces = explode('-', $latest);
                $number = intval(end($pieces));
                $slug .= '-' . ($number + 1);
            }
            $product->slug = $slug;
        });
    }

    /**
     * Get the category data for the product.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the subcategory data for the product.
     */
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
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
}
