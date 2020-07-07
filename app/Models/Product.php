<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function categories()
    {
       return $this->belongsToMany(Product::class)->withTimestamps();
    }

    public function brand()
    {
       return $this->belongsTo(Brand::class);
    }

    public function images()
    {
       return $this->hasMany(ProductImages::class);
    }
}
