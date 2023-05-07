<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;


class OrderManagementController extends Controller
{
    // protected $collection;
    // public function __construct(Order $collection)
    // {
    //     $this->collection = $collection;
    // }

    public function index()
    {
        // $collection = $this->collection->getWithPaginateBy(auth()->user()->id);
        $collection = Order::latest()->paginate(8);
        if(request()->date_from && request()->date_to){
            $collection = Order::whereBetween('invoice_date',[request()->date_from,request()->date_to])->paginate(8);
        }
        $revenue_from_to = Order::where('status',1)->whereBetween('invoice_date',[request()->date_from,request()->date_to])->orderBy('invoice_date','ASC')->sum('total');
        $count_order = Order::where('status',1)->whereBetween('invoice_date',[request()->date_from,request()->date_to])->count();
        return view('admin.order.index', compact('collection','revenue_from_to','count_order'));
    }

    public function view($id){
        $collection = OrderProduct::where('order_id',$id)->get();
        $username = Order::find($id);
        $receiver = Order::where('id',$id)->get();
        return view('admin.order.view', compact('collection','username','receiver'));
    }

    // public function updateStatus(Request $request, $id)
    // {
    //     $collection = $this->collection->findOrFail($id); 
    //     $collection->update(['status' => $request->status]);
    //     return 'success';
    // }
    // public function GiaoHang(Request $request) 
    // {
    //     $data = $request->all();
        
    //     $order = Order::where('invoice_id', $data['invoice_id'])->first();
    //     $order->status = 1;
    //     $order->save();
    // }
    public function changeStatus($id) {
        $getStatus = Order::select('status')->where('id', $id)->first();
        if($getStatus->status == 3){
            $status = 1;
        }elseif($getStatus->status == 1){
            $status = 3;
        }
        Order::where('id', $id)->update(['status'=>$status]);
        return redirect()->back();
    }
}
