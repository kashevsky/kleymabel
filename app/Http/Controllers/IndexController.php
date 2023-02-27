<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\MainPortfolio;
use App\Models\CategoryOptions;
use App\Models\CategoryPortfolio;
use App\Models\CategoryHaracteristics;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $menuCategories = $categories->where('show_in_menu',1);
        $portfolio = MainPortfolio::get();
        return view('index', compact('categories','menuCategories','portfolio'));
    }
    public function contacts()
    {
        return view('contacts');
    }
    public function payment()
    {
        return view('payment');
    }
    public function delivery()
    {
        return view('delivery');
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
        $products = $category->products()->whereNull('product_id')->get();
        $haracteristics = $category->haracteristics;
        $options = $category->options;
        $images = $category->images;
        $portfolio = $category->portfolio;
        return view('category.show', compact('category','menuCategories','products','haracteristics','options','images','portfolio'));
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
            if(similar_text($category->title,$word, $per)>25)
            {
                $categories[] = $category;
            }
        }
        return view('searched', compact('categories'));
    }
}
