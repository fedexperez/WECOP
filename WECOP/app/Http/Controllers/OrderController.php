<?php

/** 
 * WECOP
 * 
 * @author fperezm1
 * PHP version: 8.0.2
 */

namespace App\Http\Controllers;

use App\Models\Order;

class OrderController extends Controller
{

    public function show($id)
    {
        $data = []; //to be sent to the view
        $order = Order::findOrFail($id);

        $data['order'] = $order;
        $data['order_id'] = $order->getId();
        

        return view('order.show')->with('data', $data);
    }

    public function return($id)
    {
        $data = [];
        $data = Order::find($id);
        $data->return();
        return redirect()->route('order.list');
    }

    public function list()
    {       
        $data = [];
        $data['orders'] = Order::all();
        
        return view('order.list')->with('data', $data);
    }
}