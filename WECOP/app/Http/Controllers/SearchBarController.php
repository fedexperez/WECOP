<?php

/** 
 * WECOP
 * 
 * @author Shiroke-013
 * PHP version: 8.0.2
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\EcoProduct;

class SearchBarController extends Controller
{
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the name and id columns from the EcoProduct table
        $ecoProducts = EcoProduct::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('categories', 'LIKE', "%{$search}%")
            ->orWhere('emision', 'LIKE', "%{$search}%")
            ->get();
    
            echo $ecoProducts;
        // Return the search view with the results compacted
        return view('searchBar.results', compact('ecoProducts'));
    }

}