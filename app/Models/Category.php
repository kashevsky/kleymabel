<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Category;
use App\Models\CategoryOptions;
use App\Models\CategoryHaracteristics;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function haracteristics()
    {
        return $this->hasMany(CategoryHaracteristics::class, 'category_id','id');
    }
    public function options()
    {
        return $this->hasMany(CategoryOptions::class,'category_id','id');
    }
}
