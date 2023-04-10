<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MainCategory;
use App\Models\SubCategory;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function main_category_info()
    {
        return $this->belongsTo(Maincategory::class,'main_category_id');
    }

    public function related_sub_categories()
    {
        return $this->hasMany(SubCategory::class,'category_id');
    }

    public function related_products()
    {
        return $this->belongsToMany(Product::class);
    }
}
