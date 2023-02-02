<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubProduct;
use Illuminate\Http\Request;

class SubProductController extends Controller
{
    public function show(SubProduct $subProduct)
    {
        $categories = Category::get();
        return view('subproduct.show',compact('subProduct','categories'));
    }
}
