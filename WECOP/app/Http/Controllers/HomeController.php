<?php

/** 
 * WECOP
 * 
 * @author clopezr9
 * PHP version: 8.0.2
 * */

namespace App\Http\Controllers;

use App\Models\EcoProduct;
use App\Models\NotEcoProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

/** 
 * Class HomeController
 * 
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    public function index()
    {
        $data = [];
        $data['ecoProducts'] = EcoProduct::all();

        return view('home.index')->with('data', $data);
    }

    /**
     * This function calculates the emision not emited when selecting any EcoProduct. 
     * Using the next fromula: notEcoProductEmison * (ecoProductLife/notEcoProductLife) - ecoProductEmision
     * 
     * @param request is an ecoProduct colected from a form.
     * @return back with a messages.
     */
    public function calculateEmision(Request $request)
    {
        $ecoProductId = $request->input('eco_product_id');
        $ecoProduct = EcoProduct::find($ecoProductId);
        $ecoProductEmision = floatval($ecoProduct->getEmision());
        $ecoProductLife = floatval($ecoProduct->getProductLife());
        $notEcoProductId = $ecoProduct->notEcoProduct;
        $notEcoProduct = NotEcoProduct::find($notEcoProductId->getId());
        $notEcoProductEmision = floatval($notEcoProduct->getEmision());
        $notEcoProductLife = floatval($notEcoProduct->getProductLife());

        //Calculate emision
        $emision = $notEcoProductEmision * ($ecoProductLife/$notEcoProductLife) - $ecoProductEmision;
        $IfCalculateMessage = Lang::get('messages.IfCalculateMessage');
        $StopCalculateMessage = Lang::get('messages.StopCalculateMessage');
        $GramsCalculateMessage = Lang::get('messages.GramsCalculateMessage');
        $message = $IfCalculateMessage . $ecoProduct->getName() . $StopCalculateMessage . strval($emision) . $GramsCalculateMessage;

        return back()->with('emision', $message);
    }
}
