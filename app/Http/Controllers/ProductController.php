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
        $menuCategories = $categories->where('show_in_menu',1);
        $product = Product::where('slug',$slug)->first();
        $subProducts = $product->subProducts;
        $haracteristics = $product->haracteristics;
        $images = $product->images;
        return view('product.show',compact('product','subProducts','menuCategories','categories','haracteristics','images'));
    }
    public function showSubProduct($slug)
    {
        $categories = Category::get();
        $menuCategories = $categories->where('show_in_menu',1);
        $subProduct = Product::where('slug',$slug)->first();
        $images = $subProduct->images;
        $category = $subProduct->product->category;
        $product = $category->products()->where('id',$subProduct->product_id)->first();
        $subProduct = $product->subProducts()->where('slug',$slug)->first();
        return view('subproduct.show',compact('subProduct','menuCategories','category','product','images'));
    }
}
