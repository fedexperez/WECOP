<?php

/** 
 * WECOP
 * 
 * @author fperezm1
 * PHP version: 8.0.2
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Lang;

use App\Models\Order;

class OrderController extends Controller
{

    public function show($id)
    {
        $data = []; //to be sent to the view
        $order = Order::findOrFail($id);
        $data['order'] = $order;
        $title = Lang::get('messages.ShowOrder');
        $id = strval($order->getId());
        echo gettype($id);
        echo gettype($title);
        $data['pageTitle'] = $title." ".$id   ;
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
        $title = Lang::get('messages.Orders');
        $data['pageTitle'] = $title;
        $data['orders'] = Order::all();
        return view('order.list')->with('data', $data);
    }
}