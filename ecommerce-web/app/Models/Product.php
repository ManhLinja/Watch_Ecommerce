<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;
use App\Models\Brand;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\MainCategory;
use App\Models\Color;
use App\Models\Publication;
use App\Models\Size;
use App\Models\Unit;
use App\Models\Image;
use App\Models\Vendor;
use App\Models\Writer;
use carbon\Carbon;


class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = ['discount_price'];

    public function getDiscountPriceAttribute()
    {
        $today_date = Carbon::now()->format('Y-m-d');
        if($this->expiration_date > $today_date){
            $discount_price = $this->price - ( $this->price * ( $this->discount / 100 ));
            return $this->attributes['discount_price'] = ceil($discount_price);
        }else{
            return 0;
        }
    }

    public static function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status', 'serial');
    }

    public function brand_info()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function creator_info()
    {
        return $this->belongsTo(User::class, 'creator');
    }

    public function category()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function sub_category()
    {
        return $this->belongsToMany(SubCategory::class)->withTimestamps();
    }

    public function main_category()
    {
        return $this->belongsToMany(MainCategory::class)->withTimestamps();
    }

    public function color()
    {
        return $this->belongsToMany(Color::class)->withTimestamps();
    }

    public function image()
    {
        return $this->belongsToMany(Image::class)->withTimestamps();
    }

    public function publication()
    {
        return $this->belongsToMany(Publication::class)->withTimestamps();
    }

    public function size()
    {
        return $this->belongsToMany(Size::class)->withTimestamps();
    }

    public function unit()
    {
        return $this->belongsToMany(Unit::class)->withTimestamps();
    }

    public function vendor()
    {
        return $this->belongsToMany(Vendor::class)->withTimestamps();
    }

    public function writer()
    {
        return $this->belongsToMany(Writer::class)->withTimestamps();
    }
    public function products_order()
    {
        return $this->hasMany(OrderProduct::class);
    }
    
}
