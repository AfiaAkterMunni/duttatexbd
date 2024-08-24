<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image','category_id'];

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
}
