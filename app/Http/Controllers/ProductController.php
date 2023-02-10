<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug)
    {
        $categories = Category::get();
        $product = Product::where('slug',$slug)->first();
        $subProducts = $product->subProducts();
        $haracteristics = $product->haracteristics;
        return view('product.show',compact('product','subProducts','categories','haracteristics'));
    }
    public function showSubProduct($slug)
    {
        $categories = Category::get();
        $subProduct = Product::where('slug',$slug)->first();
        $category = $subProduct->category;
        $product = $category->products()->where('id',$subProduct->product_id)->first();
        $subProduct = $product->subProducts()->where('slug',$slug)->first();
        return view('subproduct.show',compact('subProduct','categories','category','product'));
    }
}
