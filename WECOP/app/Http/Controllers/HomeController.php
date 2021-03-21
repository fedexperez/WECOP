<?php

/** 
 * @author clopezr9
 * PHP version: 8.0.2
 * */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/** 
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function home()
    {
        return redirect()->route('home.index');
    }
}
