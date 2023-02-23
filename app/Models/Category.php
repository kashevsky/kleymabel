<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Category;
use App\Models\Haracteristics;
use App\Models\CategoryOptions;
use App\Models\CategoryPortfolio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function products()
    {
        return $this->hasMany(Product::class,'category_id');
    }
    public function haracteristics()
    {
        return $this->hasMany(Haracteristics::class, 'category_id','id');
    }
    public function options()
    {
        return $this->hasMany(CategoryOptions::class,'category_id','id');
    }
    public function images()
    {
        return $this->hasMany(Slide::class,'category_id','id');
    }
    public function portfolio()
    {
        return $this->hasMany(CategoryPortfolio::class,'category_id','id');
    }
}
