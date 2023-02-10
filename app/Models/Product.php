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
    public function subProducts()
    {
        return $this->whereIn('id', explode(',',$this->sub_products_ids))->get();
    }
    public function haracteristics()
    {
        return $this->hasMany(Haracteristics::class, 'product_id','id');
    }
}
