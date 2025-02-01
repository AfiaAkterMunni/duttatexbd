<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'gallery_id',
        'category_id',
        'subcategory_id',
        'description'
    ];

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
}
