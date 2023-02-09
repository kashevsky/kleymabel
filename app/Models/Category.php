<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id','id');
    }
    public function categoryHaracteristics()
    {
        return $this->belongTo(Category::class);
    }
}
