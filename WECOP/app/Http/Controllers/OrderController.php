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
        $route = [];
        $route[0] = [Lang::get('breadcrumbs.show'), 'order.show'];
        $data['route'] = $route;
        $order = Order::findOrFail($id);
        $data['order'] = $order;
        $title = Lang::get('messages.show_order');
        $id = strval($order->getId());
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
        $route = [];
        $route[0] = [Lang::get('breadcrumbs.orders'), 'order.list'];
        $data['route'] = $route;
        $title = Lang::get('messages.Orders');
        $data['pageTitle'] = $title;
        $data['orders'] = Order::all();
        return view('order.list')->with('data', $data);
    }
}