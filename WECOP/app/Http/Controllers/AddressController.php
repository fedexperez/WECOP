<?php

/** 
 * WECOP
 * 
 * @author Shiroke-013
 * PHP version: 8.0.2
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use Illuminate\Support\Facades\Lang;

class AddressController extends Controller
{

    public function show($id)
    {
        $data = []; //to be sent to the view
        $address = Address::findOrFail($id);

        $data['address'] = $address;
        $data['address_id'] = $address->getId();
        
        return view('address.show')->with('data', $data);
    }

    public function save(Request $request)
    {
        Address::create($request->only(["postal_code", "address", "country", "city"]));
        Address::validate($request);

        $message = Lang::get("messages.SuccesfullAddress");
        return back()->with('success', $message);
    }

    public function delete($id)
    {
        $data = Address::find($id);
        $data->delete();
        return redirect()->route('address.list');
    }

    public function list()
    {       
        $data = [];
        $data["address"] = Address::all();
        
        return view('address.list')->with("data", $data);
    }
}