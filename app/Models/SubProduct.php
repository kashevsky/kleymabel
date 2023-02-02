<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubProduct extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
