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
        $subProducts = Product::whereIn('id', explode(',',$product->sub_products_ids))->get();
        return view('product.show',compact('product','subProducts','categories'));
    }
    public function showSubProduct(Product $subProduct)
    {
        $categories = Category::get();
        $category = $subProduct->category;
        $product = Product::where('sub_products_ids', $subProduct->id)->first();

        return view('subproduct.show',compact('subProduct','categories','category','product'));
    }
}
