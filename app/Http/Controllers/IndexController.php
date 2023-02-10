<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\CategoryOptions;
use App\Models\CategoryHaracteristics;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('index', compact('categories'));
    }
    public function show($slug)
    {
        $categories = Category::get();
        $category = $categories->where('slug',$slug)->first();
        $products = $category->products()->whereNull('product_id')->get();
        $haracteristics = $category->haracteristics;
        $options = $category->options;
        return view('category.show', compact('category','categories','products','haracteristics','options'));
    }
}
