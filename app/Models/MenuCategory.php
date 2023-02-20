<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuCategory extends Category
{
    use HasFactory;
    protected $guarded = false;
    protected $table = 'categories';
}
