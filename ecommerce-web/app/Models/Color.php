<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Color extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function related_products()
    {
        return $this->belongsToMany(Product::class);
    }
}
