<?php

/**
 * WECOP
 *
 * @author fperezm1
 * PHP version: 8.0.2
 */

namespace App\Http\Controllers;

use App\Models\EcoProduct;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function show($id)
    {
        $data = []; //to be sent to the view
        $order = Order::findOrFail($id);
        $data['order'] = $order;
        $title = Lang::get('messages.show_order');
        $id = strval($order->getId());
        $data['pageTitle'] = $title." ".$id;
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
        $title = Lang::get('messages.orders');
        $data['pageTitle'] = $title;
        $data['orders'] = Order::all();
        return view('order.list')->with('data', $data);
    }

    public function add($id, Request $request)
    {
        $ecoProducts = $request->session()->get('ecoProducts');
        $ecoProducts[$id] = $request->input('quantity');
        $request->session()->put('ecoProducts', $ecoProducts);
        return back();
    }

    public function removeAll(Request $request)
    {
        $request->session()->forget('ecoProducts');
        return back();
    }

    public function showTempOrder(Request $request)
    {
        $data = []; //to be sent to the view
        $title = Lang::get('order.order');
        $data['pageTitle'] = $title;
        $listProducts = array();
        $total = 0;
        $ids = $request->session()->get('ecoProducts');
        if ($ids) {
            $listProducts = EcoProduct::findMany(array_keys($ids));
            foreach ($listProducts as $ecoProduct) {
                $qnty = $ids[$ecoProduct->getId()];
                $total = $total + ($ecoProduct->getPrice()*$qnty);
            }
        }

        $data['ids'] = $ids;
        $data['ecoProducts'] = $listProducts;
        $data['total'] = $total;
        

        return view('order.temp')->with('data', $data);
    }
}
