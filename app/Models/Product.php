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
    public static function addToCart($product_id)
    {
        if($cart = self::where(["session_id" => session()->getId(), "product_id" => $product->id])->first())
        {
            $cart->count++;
            $cart->save();
        }
        else
        {
            $cart = self::create(
                [
                    "session_id" => session()->getId(),
                    "product)id" => $product->id,
                    "count" => 1,
                    "price" => $product->price,
                ]
                );
            return $cart;
        }
    }
}
