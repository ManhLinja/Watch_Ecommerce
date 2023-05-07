<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainCategory;

class ProductCategory extends Controller
{
    public function maincategory($slug){
        $main_category = MainCategory::where('slug', $slug)->first();
        return view('website.ecommerce.product_category');
    }
}
