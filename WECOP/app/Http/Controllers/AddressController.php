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
use App\Models\User;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Auth;

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

    public function create()
    {
        $data = []; //to be sent to the view
        $data["pageTitle"] = "Add an Address";

        return view('address.create')->with("data", $data);
    }

    public function save(Request $request)
    { 
        Address::validate($request);

        $user = User::findOrFail(Auth::user()->getId());

        $address = new Address;
        $address->postal_code = $request['postal_code'];
        $address->address = $request['address'];
        $address->city = $request['city'];
        $address->country = $request['country'];
        $address->user = $user->getId();
        $address->save();
        
        $message = Lang::get("Succesfully added Address");
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