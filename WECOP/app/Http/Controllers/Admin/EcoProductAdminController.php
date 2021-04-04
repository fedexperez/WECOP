<?php

/**
 * WECOP
 * 
 * @author clopezr9
 * PHP: 8.0.2
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EcoProduct;  
use App\Models\NotEcoProduct;  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use App\Models\User;  

/**
 * class ecoProductAdminController
 * 
 * @package App\Http\Controllers
 */
class EcoProductAdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if(Auth::user()->getRole() == "client"){
                return redirect()->route('home.index');
            }
    
            return $next($request);
        });
    }

    public function create()
    {
        $data = []; //to be sent to the view
        $title = Lang::get('messages.CreateEcoProducts');
        $data['title'] = $title;
      
        $notEcoProducts = NotEcoProduct::all();
        $data["notEcoProducts"] = $notEcoProducts;

        return view('admin.ecoProduct.create')->with("data",$data);
    }

    public function save(Request $request)
    {
        EcoProduct::validate($request);
        EcoProduct::create($request->only(['name', 'price', 'stock', 'facts', 'description', 'categories', 'emision', 'not_eco_product', 'product_life', 'photo']));

        return back()->with('success','Item created successfully!');
    }

    public function delete($id)
    {
        $notEcoProduct = EcoProduct::find($id);
        $notEcoProduct->delete();

        return redirect()->route('admin.ecoProduct.list');
    }

    public function list()
    {
        $data = [];
        $title = Lang::get('messages.ListEcoProducts');
        $data["title"] = $title;
        $data["ecoProducts"] = ecoProduct::all();

        return view('admin.ecoProduct.list')->with("data", $data);
    }

    public function show($id)
    {
        $data = []; //to be sent to the view
        $ecoProduct = EcoProduct::find($id);
        if($ecoProduct == NULL){
            return redirect()->route('admin.ecoProduct.notFound', ['id' => $id]);
        } else {
            $data["title"] = $ecoProduct->getName();
            $data["ecoProduct"] = $ecoProduct;
            return view('admin.ecoProduct.show')->with("data",$data);
        }
    }

    public function notFound(){
        return view('admin.notFound');
    }

}
