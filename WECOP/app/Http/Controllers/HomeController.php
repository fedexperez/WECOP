<?php

/** 
 * @author clopezr9
 * PHP version: 8.0.2
 * */

namespace App\Http\Controllers;

use App\Models\EcoProduct;
use App\Models\NotEcoProduct;
use Illuminate\Http\Request;

/** 
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    public function index()
    {
        $data = [];
        $data['ecoProducts'] = EcoProduct::all();

        return view('home.index')->with("data", $data);
    }

    public function home()
    {
        return redirect()->route('home.index');
    }

    public function calculateEmision(Request $request)
    {
        $ecoProductId = $request->input('eco_product_id');
        $ecoProduct = EcoProduct::find($ecoProductId);
        $ecoProductEmision = floatval($ecoProduct->getEmision());
        $ecoProductLife = floatval($ecoProduct->getProductLife());
        $notEcoProductId = $ecoProduct->getNotEcoProduct();
        $notEcoProduct = EcoProduct::find($notEcoProductId);
        $notEcoProductEmision = floatval($notEcoProduct->getEmision());
        $notEcoProductLife = floatval($notEcoProduct->getProductLife());

        //Calculate emision
        $emision = $notEcoProductEmision * ($ecoProductLife/$notEcoProductLife) - $ecoProductEmision;

        $message = "If you buy a/an " . $ecoProduct->getName() . " you stop ejecting " . strval($emision) . " grams of CO2 to the atmosphere";

        return back()->with('emision', $message);
    }
}
