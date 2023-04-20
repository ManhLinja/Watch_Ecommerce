<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index() 
    {
        $order_count = Order::count();
        $revenue = Order::sum('total');
        $collection = Order::where('status',1)->latest()->paginate(10);
        if(request()->date_from && request()->date_to){
            $collection = Order::where('status',1)->whereBetween('invoice_date',[request()->date_from,request()->date_to])->paginate(10);
        }
        return view('admin.index', compact('order_count','collection','revenue'));
    }

    //blank page function

    public function blade_index()
    {
        return view('admin.blank.index');
    }

    public function blade_create()
    {
        return view('admin.blank.create');
    }

    public function blade_view()
    {
        return view('admin.blank.view');
    }
}
