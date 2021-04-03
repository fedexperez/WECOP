<?php

/**
 * WECOP
 * 
 * @author clopezr9
 * PHP: 8.0.2
 */

namespace App\Http\Controllers;

use App\Models\EcoProduct;
use App\Models\Review;

/**
 * class ecoProductController
 * 
 * @package App\Http\Controllers
 */
class EcoProductController extends Controller
{

    public function list()
    {
        $data = [];
        $data["ecoProducts"] = ecoProduct::all();

        return view('ecoProduct.list')->with("data", $data);
    }

    public function show($id)
    {
        $data = [];
        $data["reviews"] = Review::where('eco_product', $id)->get();
        $data["rating"] = [0,1,2,3,4,5];
        $ecoProduct = EcoProduct::find($id);
        if ($ecoProduct == null) {
            return redirect()->route('ecoProduct.notFound', ['id' => $id]);
        } else {
            $data['ecoProduct'] = $ecoProduct;
            return view('ecoProduct.show')->with('data', $data);
        }
    }

    public function notFound()
    {
        return view('ecoProduct.notFound');
    }
}
