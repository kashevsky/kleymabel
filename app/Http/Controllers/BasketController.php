<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Basket;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubProduct;
use Illuminate\Http\Request;
use App\Models\BasketProduct;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\BasketRequest;
use Illuminate\Support\Facades\Mail;

class BasketController extends Controller
{
    public function show()
    {
        $basket = Basket::where('session_id', session()->getId())->where('is_confirmed',0)->first();
        return view('basket.show',compact('basket'));
    }
    public function addProduct(Product $product)
    {
        $basket = Basket::where('session_id', session()->getId())->where('is_confirmed',0)->first();
        if(is_null($basket))
        {
            $basket = Basket::create([
                'session_id' => session()->getId(),
            ]);
            BasketProduct::create(['title'=> $product->title, 'basket_id'=> $basket->id]);
            return redirect()->back();
        }
        else{
            $basketProduct = BasketProduct::where('basket_id',$basket->id)->get()->last();
            if(!is_null($basketProduct) && $basketProduct->title == $product->title)
            {
                $basketProduct->count++;
                $basketProduct->save();
                return redirect()->back();
            }
            BasketProduct::create(['title'=> $product->title, 'basket_id'=> $basket->id]);
            return redirect()->back();
        }
    }
    public function addCount(BasketProduct $product)
    {
            $basket = Basket::where('session_id', session()->getId())->where('is_confirmed',0)->first();
            $basketProduct = BasketProduct::where('basket_id',$basket->id)->where('title',$product->title)->first();
            $basketProduct->count++;
            $basketProduct->save();
            return redirect()->back();
    }
    public function lowCount(BasketProduct $product)
    {
        $basket = Basket::where('session_id', session()->getId())->where('is_confirmed',0)->first();
        $basketProduct = BasketProduct::where('basket_id',$basket->id)->where('title',$product->title)->first();
        $basketProduct->count--;
        if($basketProduct->count < 1)
        {
            $basketProduct->delete();
            // if(BasketProduct::count() < 1);
            // {
            //     Log::info('Удаление корзины ' . BasketProduct::count());
            //     $basket->delete();
            //     return redirect()->route('basket.show');
            // }
            return redirect()->route('basket.show');
        }
        $basketProduct->save();
        return redirect()->route('basket.show');
    }
    public function confirm(BasketRequest $request)
    {       
            $basket = Basket::where('session_id', session()->getId())->where('is_confirmed',0)->first();
            $basketProducts = BasketProduct::where('basket_id',$basket->id)->get();
            $basket->update($request->only('name','email','phone'));
            $basket->is_confirmed = 1;
            $basket->save();
            if(isset($request->name))
            {
                $data['name'] = $request['name'];
            }
            if(isset($request->email))
            {
                $data['email'] = $request['email'];
            }
            $data['phone'] = $request['phone'];
            if(isset($request->image))
            {
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $data['image'] = $imageName;
            }
            $order = null;
            foreach($basketProducts as $basketProduct)
            {
                $order .= $basketProduct->title . ', ';
            }
            $data['order'] = $order;
            Mail::to('kashevsky.d@yandex.ru')->send(new SendMail($data));
            return redirect()->route('index');
    }
    public function addCategory(Category $product)
    {
        $basket = Basket::where('session_id', session()->getId())->where('is_confirmed',0)->first();
        if(is_null($basket))
        {
            $basket = Basket::create([
                'session_id' => session()->getId(),
            ]);
            BasketProduct::create(['title'=> $product->title, 'basket_id'=> $basket->id]);
            return redirect()->back();
        }
        else{
            $basketProduct = BasketProduct::where('basket_id',$basket->id)->get()->last();
            if(!is_null($basketProduct) && $basketProduct->title == $product->title)
            {
                $basketProduct->count++;
                $basketProduct->save();
                return redirect()->back();
            }
            BasketProduct::create(['title'=> $product->title, 'basket_id'=> $basket->id]);
            return redirect()->back();
        }
    }
}
