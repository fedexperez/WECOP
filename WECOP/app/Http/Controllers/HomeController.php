<?php

/** 
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

    /*public function home()
    {
        return redirect()->route('home.index');
    }*/

    public function calculateEmision(Request $request)
    {
        $ecoProductId = $request->input('eco_product_id');
        $ecoProduct = EcoProduct::find($ecoProductId);
        $ecoProductEmision = floatval($ecoProduct->getEmision());
        $ecoProductLife = floatval($ecoProduct->getProductLife());
        $notEcoProductId = $ecoProduct->getNotEcoProduct();
        echo $notEcoProductId;
        $notEcoProduct = NotEcoProduct::find($notEcoProductId);
        echo $notEcoProduct;
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
