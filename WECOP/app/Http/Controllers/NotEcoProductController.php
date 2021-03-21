<?php

/** 
 * @author clopezr9
 * PHP version: 8.0.2
 * */

namespace App\Http\Controllers;

use App\Models\NotEcoProduct;

/** 
 * Class NotEcoProductController
 * @package App\Http\Controllers
 */
class NotEcoProductController extends Controller
{

    public function list()
    {
        $data = []; //to be sent to the view
        $data["title"] = "List of NotEcoProduct";
        $data["notEcoProducts"] = NotEcoProduct::all();

        return view('notEcoProduct.list')->with("data",$data);
    }

    public function show($id)
    {
        $data = []; //to be sent to the view
        $notEcoProduct = NotEcoProduct::find($id);
        if($notEcoProduct == NULL){
            return redirect()->route('notEcoProduct.notFound', ['id' => $id]);
        } else {
            $data["title"] = $notEcoProduct->getName();
            $data["notEcoProduct"] = $notEcoProduct;
            return view('notEcoProduct.show')->with("data",$data);
        }
    }

    public function notFound(){
        return view('notEcoProduct.notFound');
    }

}
