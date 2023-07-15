<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $todayDate =Carbon::now()->format('Y-m-d');
        $orders = Order::where($request->date !=null,function($q) use ($request){
                    return  $q->whereDate('created_at' ,$request->date);
                       } ,function($q) use ($todayDate){

                               return $q->whereDate('created_at' ,$todayDate);

                          })
                          ->where($request->status !=null,function($q) use ($request){
                          return  $q->where('status_message' ,$request->status);


                           });
                            // ->paginate(10);
        return view('admin.orders.index',compact('orders'));
    }

    public function show(int $orderId)
    {
        // $todayDate =Carbon::now();
        $order = Order::where('id',$orderId)->first();
        if( $order ){
            return view('admin.orders.view',compact('order'));


        }else{
            return redirect('admin/orders')->with('message','Order Id not found');
        }
    }

    public function updateOrderStatus(int $orderId, Request $request)
    {
        $order = Order::where('id',$orderId)->first();
        if( $order ){
            $order->DB::update([
                'status_message'=>$request->order_status
            ]);
            return redirect('admin/orders/'.$orderId)->with('message' ,'Order Status Update');


        }else{
            return redirect('admin/orders/'.$orderId)->with('message','Order Id not found');
        }
    }



}
