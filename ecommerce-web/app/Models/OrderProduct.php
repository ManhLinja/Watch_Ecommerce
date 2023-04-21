<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
class OrderProduct extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function order()
    {
        return $this->hasOne(Order::class,'id','order_id');
    }

    public function products(){
        return $this->belongsTo(Order::class);
    }
}
