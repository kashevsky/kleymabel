<?php

namespace App\Services;

use App\Models\Basket;
use App\Models\BasketProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GetProductCount
{
    public static function getCount()
    {
        $counProducts = 0;
        if(isset(Basket::where('session_id', session()->getId())->where('is_confirmed',0)->first()->products))
        {
            $basketProducts = Basket::where('session_id', session()->getId())->where('is_confirmed',0)->first()->products;
            foreach($basketProducts as $item)
            {
                $counProducts += $item->count;
            }
        }
        return $counProducts;
    }
}
