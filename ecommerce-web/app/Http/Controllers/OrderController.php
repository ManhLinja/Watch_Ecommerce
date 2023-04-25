<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function history() {

        $order = Order::where('user_id', Auth::user()->id)->latest()->paginate(10);
        return view('website.ecommerce.history_order', compact('order'));
    }

    public function huy_don_hang(Request $request) {
        $data = $request->all();
        $order = Order::where('invoice_id', $data['invoice_id'])->first();
        $order->status = 2;
        $order->order_destroy = $data['lydo'];
        $order->save();
    }   

    public function xem_chi_tiet($id) {
        $collection =OrderProduct::where('order_id',$id)->get();
        $username = Order::find($id);
        return view('website.ecommerce.view_order', compact('collection','username'));
    }
}
