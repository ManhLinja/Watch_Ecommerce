<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index() 
    {
        $order_count = Order::count();
        $revenue = Order::sum('total');
        $customer = User::where('role_id',4)->count();
        $collection = Order::where('status',1)->latest()->paginate(8);
        if(request()->date_from && request()->date_to){
            $collection = Order::where('status',1)->whereBetween('invoice_date',[request()->date_from,request()->date_to])->paginate(8);
        }
        $revenue_from_to = Order::where('status',1)->whereBetween('invoice_date',[request()->date_from,request()->date_to])->orderBy('invoice_date','ASC')->sum('total');
        $count_order = Order::whereBetween('invoice_date',[request()->date_from,request()->date_to])->count();
        return view('admin.index', compact('order_count','collection','revenue','customer','revenue_from_to','count_order'));
    }

    public function view($id){
        $collection = OrderProduct::where('order_id',$id)->get();
        $username = Order::find($id);
        return view('admin.view', compact('collection','username'));
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

    // public function filter_by_date(Request $request)
    // {
    //     $data = $request->all();
    //     $from_date = $data['from_date'];
    //     $to_date = $data['to_date'];

    //     $get = Order::whereBetween('invoice_date',[$from_date, $to_date])->orderBy('invoice_date', 'ASC')->get();
    //     $count_order = Order::whereBetween('invoice_date',[$from_date, $to_date])->count();
    //     foreach ($get as $key => $value) {
    //         $chart_data[] = array(
    //             'total' => $value->total,
    //             'invoice_date' => $value->invoice_date,
    //         );
    //     }

    //     echo $data = json_encode($chart_data);
    // }
}
