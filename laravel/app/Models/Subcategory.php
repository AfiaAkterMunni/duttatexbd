<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image','category_id'];

     /**
     * Get the comment data for the Blog.
     */
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
