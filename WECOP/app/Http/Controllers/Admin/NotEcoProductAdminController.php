<?php

/** 
 * @author clopezr9
 * PHP version: 8.0.2
 * */

namespace App\Http\Controllers\Admin;

use App\Models\NotEcoProduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/** 
 * Class NotEcoProductAdminController
 * @package App\Http\Controllers
 */
class NotEcoProductAdminController extends Controller
{

    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create EcoProduct";

        return view('admin.notEcoProduct.create')->with("data",$data);
    }

    public function save(Request $request)
    {
        NotEcoProduct::validate($request);
        NotEcoProduct::create($request->only(['name', 'price', 'emision', 'product_life']));

        return back()->with('success','Item created successfully!');
    }

    public function list()
    {
        $data = []; //to be sent to the view
        $data["title"] = "List of NotEcoProduct";

        $notEcoProducts = NotEcoProduct::All();
        $data["notEcoProducts"] = $notEcoProducts;

        return view('admin.notEcoProduct.list')->with("data",$data);
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
            return view('admin.notEcoProduct.show')->with("data",$data);
        }
    }

    public function notFound(){
        return view('admin.notEcoProduct.notFound');
    }

    public function delete($id)
    {
        $notEcoProduct = NotEcoProduct::findOrFail($id);
        $notEcoProduct->delete();

        return redirect()->route('admin.notEcoProduct.list');
    }

}
