<?php

/**
 * WECOP
 * 
 * @author clopezr9
 * PHP: 8.0.2
 */

namespace App\Http\Controllers;

use App\Models\EcoProduct;

/**
 * Class ecoProductController
 * 
 * @package App\Http\Controllers
 */
class EcoProductController extends Controller
{

    public function list($filter)
    {
        $data = [];
        if ($filter == 'All') {
            $data['ecoProducts'] = ecoProduct::all();
        } elseif ($filter == 'Price-Low-High') {
            $ecoProducts = ecoProduct::orderBy('price', 'ASC')->get();
            $data['ecoProducts'] = $ecoProducts;
        } elseif ($filter == 'Price-High-Low') {
            $ecoProducts = ecoProduct::orderBy('price', 'DESC')->get();
            $data['ecoProducts'] = $ecoProducts;
        } elseif ($filter == 'Date-Newest-Oldest') {
            $ecoProducts = ecoProduct::orderBy('created_at', 'DESC')->get();
            $data['ecoProducts'] = $ecoProducts;
        } elseif ($filter == 'Date-Oldest-Newest') {
            $ecoProducts = ecoProduct::orderBy('created_at', 'ASC')->get();
            $data['ecoProducts'] = $ecoProducts;
        } elseif ($filter == 'Emission-Low-High') {
            $ecoProducts = ecoProduct::orderBy('emision', 'ASC')->get();
            $data['ecoProducts'] = $ecoProducts;
        } elseif ($filter == 'Emission-High-Low') {
            $ecoProducts = ecoProduct::orderBy('emision', 'DESC')->get();
            $data['ecoProducts'] = $ecoProducts;
        } elseif ($filter == 'In-Stock') {
            $ecoProducts = ecoProduct::where('stock', '>', '0')->get();
            $data['ecoProducts'] = $ecoProducts;
        } 

        return view('ecoProduct.list')->with("data", $data);
    }

    public function show($id)
    {
        $data = [];
        $ecoProduct = EcoProduct::find($id);
        if ($ecoProduct == null) {
            return redirect() -> route('ecoProduct.notFound', ['id' => $id]);
        } else {
            $data['ecoProduct'] = $ecoProduct;
            return view('ecoProduct.show') -> with('data', $data);
        }
    }

    public function notFound()
    {
        return view('util.notFound');
    }

}
