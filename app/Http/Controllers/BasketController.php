<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use App\Models\SubProduct;
use Illuminate\Http\Request;
use App\Models\BasketProducts;

class BasketController extends Controller
{
    public function show()
    {
        $basket = Basket::where('session_id', session()->getId())->first();
        return view('basket.show',compact('basket'));
    }
    public function addProduct(Product $product)
    {
        $basket = Basket::where('session_id', session()->getId())->first();
        if(is_null($basket))
        {
            $basket = Basket::create([
                'session_id' => session()->getId(),
            ]);
            BasketProducts::create(['product'=> $product->title, 'basket_id'=> $basket->id]);
            return redirect()->back();
        }
        else{
            $basketProduct = BasketProducts::where('basket_id',$basket->id)->get()->last();
            if($basketProduct->product == $product->title)
            {
                $basketProduct->count++;
                $basketProduct->save();
                return redirect()->back();
            }
            BasketProducts::create(['product'=> $product->title, 'basket_id'=> $basket->id]);
            return redirect()->back();
        }
    }
    public function addSubProduct(SubProduct $subProduct)
    {
        $basket = Basket::where('session_id', session()->getId())->first();
        if(is_null($basket))
        {
            $basket = Basket::create([
                'session_id' => session()->getId(),
            ]);
            BasketProducts::create(['product'=> $subProduct->title, 'basket_id'=> $basket->id]);
            return redirect()->back();
        }
        else{
            $basketProduct = BasketProducts::where('basket_id',$basket->id)->get()->last();
            if($basketProduct->product == $subProduct->title)
            {
                $basketProduct->count++;
                $basketProduct->save();
                return redirect()->back();
            }
            BasketProducts::create(['product'=> $subProduct->title, 'basket_id'=> $basket->id]);
            return redirect()->back();
        }
    }
    public function addCount(BasketProducts $product)
    {
            $basket = Basket::where('session_id', session()->getId())->first();
            $basketProduct = BasketProducts::where('basket_id',$basket->id)->where('product',$product->product)->first();
            $basketProduct->count++;
            $basketProduct->save();
            return redirect()->back();
    }
    public function lowCount(BasketProducts $product)
    {
        $basket = Basket::where('session_id', session()->getId())->first();
        $basketProduct = BasketProducts::where('basket_id',$basket->id)->where('product',$product->product)->first();
        $basketProduct->count--;
        if($basketProduct->count < 1)
        {
            $basketProduct->delete();
            return redirect()->back();
        }
        $basketProduct->save();
        return redirect()->back();
    }
}
