<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryPortfolio extends Category
{
    use HasFactory;
    protected $guarded = false;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
