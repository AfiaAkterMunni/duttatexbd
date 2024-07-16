<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image'];

    /**
     * Get the comment data for the Blog.
     */
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
}
