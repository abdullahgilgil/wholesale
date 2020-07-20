<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function products()
    {
       return $this->hasMany(Product::class);
    }

    public function categories()
    {
       return $this->belongsToMany(Category::class)->withTimestamps();
    }

}
