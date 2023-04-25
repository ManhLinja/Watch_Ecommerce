<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\User;
use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class AdminController extends Controller
{
    public function index() 
    {
        $order_count = Order::count();
        $revenue = Order::where('status',1)->sum('total');
        $customer = User::where('role_id',4)->count();
        $collection = Order::latest()->paginate(8);
        if(request()->date_from && request()->date_to){
            $collection = Order::whereBetween('invoice_date',[request()->date_from,request()->date_to])->paginate(8);
        }
        $revenue_from_to = Order::where('status',1)->whereBetween('invoice_date',[request()->date_from,request()->date_to])->orderBy('invoice_date','ASC')->sum('total');
        $count_order = Order::where('status',1)->whereBetween('invoice_date',[request()->date_from,request()->date_to])->count();
        return view('admin.index', compact('order_count','collection','revenue','customer','revenue_from_to','count_order'));
    }

    public function view($id){
        $collection = OrderProduct::where('order_id',$id)->get();
        $username = Order::find($id);
        return view('admin.view', compact('collection','username'));
    }

    public function edit($id)
    {
        $status_order = Status::orderBy('serial','DESC')->get();
        $order = Order::find($id);
        return view('admin.edit',compact('status_order','order',));
    }

    public function update(Request $request, Order $order){

        // $order = Order::find($request->id);
        
        // $order->user_id = $request->user_id;
        // $order->invoice_id = $request->invoice_id;
        // $order->invoice_date = $request->invoice_date;
        // $order->total = $request->total;
        $order->status = $request->status;
        $order->save();

        return 'success';
        
        // return $order;
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

    public function updateStatus($id){
        $getStatus = Order::select('status')->where('id', $id)->first();
        if($getStatus->status == 3){
            $status = 1;
        }elseif($getStatus->status == 1){
            $status = 3;
        }
        Order::where('id', $id)->update(['status'=>$status]);
        return redirect()->back();
    }

    // public function giao_hang(Request $request) {
    //     $data = $request->all();
        
    //     $order = Order::where('invoice_id', $data['invoice_id'])->first();
    //     $order->status = 1;
    //     $order->save();
    // }  
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
