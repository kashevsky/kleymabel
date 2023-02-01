<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function subProducts()
    {
        return $this->hasMany(SubProduct::class,'product_id','id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
