<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function products()
    {
       return $this->belongsToMany(Product::class)->withTimestamps();
    }

    public function brands()
    {
       return $this->belongsToMany(Brand::class)->withTimestamps();
    }

    public function subcategory()
    {
       return $this->hasMany(Category::class, 'parent_category');
    }
}
