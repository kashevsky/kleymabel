<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\GetProductCount;

class ProductController extends Controller
{
    public function show($slug)
    {
        $categories = Category::get();
        $menuCategories = $categories->where('show_in_menu',1);
        $product = Product::where('slug',$slug)->first();
        if(!isset($product))
        {
            return abort(404);
        }
        $subProducts = $product->subProducts()->orderBy('orders')->get();
        $haracteristics = $product->haracteristics;
        $images = $product->images;
        $countProducts = GetProductCount::getCount();
        return view('product.show',compact('product','subProducts','menuCategories','categories','haracteristics','images','countProducts'));
    }
    public function showSubProduct($slug)
    {
        $categories = Category::get();
        $menuCategories = $categories->where('show_in_menu',1);
        $subProduct = Product::where('slug',$slug)->first();
        if(!isset($subProduct))
        {
            return abort(404);
        }
        $images = $subProduct->images;
        $category = $subProduct->product->category;
        $product = $category->products()->where('id',$subProduct->product_id)->first();
        $subProduct = $product->subProducts()->where('slug',$slug)->first();
        $countProducts = GetProductCount::getCount();
        return view('subproduct.show',compact('subProduct','menuCategories','category','product','images','countProducts'));
    }
}
