<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HelperController extends Controller
{
    public static function discount_price($main_price,$discount,$expiration_date)
    {
        $today_date = Carbon::now()->format('Y-m-d');

        if($expiration_date > $today_date){
            $discount_price = $main_price - ( $main_price * ( $discount / 100 ));
            return ceil($discount_price);
        }else{
            return 0;
        }

    }
}
