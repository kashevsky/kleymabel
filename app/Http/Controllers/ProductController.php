<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $categories = Category::get();
        $subProducts = $product->subProducts();
        $haracteristics = $product->haracteristics;
        return view('product.show',compact('product','subProducts','categories','haracteristics'));
    }
    public function showSubProduct(Product $subProduct)
    {
        $categories = Category::get();
        $category = $subProduct->category;
        $product = $category->products()->where('id',$subProduct->product_id)->first();
        return view('subproduct.show',compact('subProduct','categories','category','product'));
    }
}
