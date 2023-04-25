<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function history() {

        $order = Order::where('user_id', Auth::user()->id)->latest()->get();
        return view('website.ecommerce.history_order', compact('order'));
    }

    public function huy_don_hang(Request $request) {
        $data = $request->all();
        $order = Order::where('invoice_id', $data['invoice_id'])->first();
        $order->status = 2;
        $order->save();
    }   
}
