<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

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
        return view('admin.order.index', compact('collection'));
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
