<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('index', compact('categories'));
    }
    public function show(Category $category)
    {
        $categories = Category::get();
        $products = $category->products()->whereNull('product_id')->get();
        return view('category.show', compact('category','categories','products'));
    }
}
