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
use App\Models\EcoProduct;

/** 
 * Class SearchBarController
 * 
 * @package App\Http\Controllers
 */
class SearchBarController extends Controller
{

    /**
     * Searchs the input of the search bar in the database table eco_products
     * and returns the a view with all the elements that match the input.
     *
     * @param  $request
     * @return view
     */
    public function search(Request $request)
    {

        $data = [];

        // Get the search value from the request.
        $search = $request->input('search');

        // Search in the name, categories and emision columns from the EcoProduct table.
        $ecoProducts = EcoProduct::query()->where('name', 'LIKE', "%{$search}%")
            ->orWhere('categories', 'LIKE', "%{$search}%")
            ->orWhere('emision', 'LIKE', "%{$search}%")
            ->get();

        $data ['ecoProducts'] = $ecoProducts;

        return view('searchBar.results') -> with('data', $data);
    }

}