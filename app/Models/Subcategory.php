<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
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
}
