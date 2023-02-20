<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // public function subProducts()
    // {
    //     return $this->whereIn('id', explode(',',$this->sub_products_ids))->get();
    // }
    public function subProducts()
    {
        return $this->hasMany(static::class,'product_id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

    public function haracteristics()
    {
        return $this->hasMany(Haracteristics::class, 'product_id','id');
    }
    public function images()
    {
        return $this->hasMany(Slide::class,'product_id','id');
    }
}
