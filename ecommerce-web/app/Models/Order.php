<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderProduct;
use App\Models\User;
use App\Models\Status;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function order_products()
    {
        return $this->hasMany(OrderProduct::class,'order_id','id');
    }
    public function cus()
    {
        return $this->hasOne(User::class,'id', 'user_id');
    }

    public function status_information()
    {
        return $this->belongsTo(Status::class,'status','id');
    }
}
