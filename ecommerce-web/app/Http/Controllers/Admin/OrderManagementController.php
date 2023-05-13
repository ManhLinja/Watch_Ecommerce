<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;


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
        // if($getStatus->status == 3){
        //     $status = 1;
        // }elseif($getStatus->status == 1){
        //     $status = 3;
        // }
        Order::where('id', $id)->update(['status'=>1]);

        // Order::where('id', $id)->update(['status'=>$status]);
        // if($getStatus->status == 1){

            $order_sell = OrderProduct::where('order_id', $id)->get();
            // dd($order_sell);
            // $list_product_id = Product::where('id',$order_sell->product_id)->get();
            // dd($list_product_id);
            $list_product = [];
            $qty_arr = [];
            $product_id = [];
            // $abc = '';
            
            foreach ($order_sell as $item){
                
                $product = Product::where('id', $item->product_id)->get();
                // dd($product);
                array_push($qty_arr,$item->qty); 
                
                // dd($product_stock);
                
                
                // array_push($list_product,$product); 

                foreach($product as $item2) {
                    array_push($product_id,$item2->id); 
                }
            }
            // dd($qty_arr, $product_id);
            foreach ($product_id as $key1 => $id) {
                $product1 = Product::find($id);
                $product1_stock = $product1->stock;
                foreach($qty_arr as $key2 => $qty){
                    if($key1 == $key2){
                        $abc = $product1_stock - $qty;
                        $product1->stock = $abc;
                        $product1->save();
                    }
                }
            }

            
        

        return redirect()->back();
    }
}
