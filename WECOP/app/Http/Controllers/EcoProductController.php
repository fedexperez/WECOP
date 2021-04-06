<?php

/**
 * WECOP
 * 
 * @author clopezr9
 * PHP version: 8.0.2
 */

namespace App\Http\Controllers;

use App\Models\EcoProduct;
use App\Models\Review;

/**
 * Class ecoProductController
 * 
 * @package App\Http\Controllers
 */
class EcoProductController extends Controller
{
    
    /**
     * This function list the ecoProducts depending on the specified filter.
     * 
     * @param filter is the condition to be aplied.
     * @return back with a view and data.
     */
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

        return view('ecoProduct.list')->with('data', $data);
    }


    /**
     * This function shows the EcoProduct selected and the reviews filtered according the selection of stars.
     * 
     * @param id is the id of th EcoProduct.
     * @param filter is the characteristic to filter the reviews of the EcoProduct
     * @return view with a data array.
     */
    public function show($id, $filter)
    {
        $data = [];
        $ecoProduct = EcoProduct::find($id);
        $data['ecoProduct'] = $ecoProduct;
        if ($ecoProduct == null) {
            return redirect() -> route('ecoProduct.notFound', ['id' => $id]);
        } else {
            if ($filter == 'Some-Reviews') {
                $reviews = Review::where('eco_product', $id)->get()->take(5);
                $data['reviews'] = $reviews;
            } else if ( $filter == 'All' ){
                $reviews = Review::where('eco_product', $id)->get();
                $data['reviews'] = $reviews;
            } else {
                $reviews = Review::where('rating', $filter)->where('eco_product', $id)->get();
                $data['reviews'] = $reviews;
            }
            
            return view('ecoProduct.show') -> with('data', $data);
        }
    }

    public function notFound()
    {
        return view('util.notFound');
    }

}
