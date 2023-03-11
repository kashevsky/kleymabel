<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\MainPortfolio;
use App\Models\CategoryOptions;
use App\Models\CategoryPortfolio;
use App\Services\GetProductCount;
use App\Models\CategoryHaracteristics;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('orders')->get();
        $menuCategories = $categories->where('show_in_menu',1);
        $portfolio = MainPortfolio::get();
        $countProducts = GetProductCount::getCount();
        return view('index', compact('categories','menuCategories','portfolio','countProducts'));
    }
    public function contacts()
    {
        $countProducts = GetProductCount::getCount();
        return view('contacts','countProducts');
    }
    public function payment()
    {
        $countProducts = GetProductCount::getCount();
        return view('payment','countProducts');
    }
    public function delivery()
    {
        $countProducts = GetProductCount::getCount();
        return view('delivery','countProducts');
    }
    public function show($slug)
    {
        $categories = Category::get();
        $menuCategories = $categories->where('show_in_menu',1);
        $category = $categories->where('slug',$slug)->first();
        if(!isset($category->products))
        {
            return abort(404);
        }
        $products = $category->products()->whereNull('product_id')->orderBy('orders')->get();
        $haracteristics = $category->haracteristics;
        $options = $category->options;
        $images = $category->images;
        $portfolio = $category->portfolio;
        $countProducts = GetProductCount::getCount();
        return view('category.show', compact('category','menuCategories','products','haracteristics','options','images','portfolio','countProducts'));
    }
    public function search(Request $request)
    {
        $word = $request->input('word');
        // $categories = Category::where('title','like',"%$word%")->get();
        $allCategories = Category::get();
        $categories = null;
        foreach($allCategories as $category)
        {
            similar_text($category->title,$word, $per);
            if(similar_text($category->title,$word, $per)>10)
            {
                $categories[] = $category;
            }
        }
        $countProducts = GetProductCount::getCount();
        return view('searched', compact('categories','countProducts'));
    }
}
