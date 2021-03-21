<?php

/** 
 * @author Shiroke-013
 * PHP version: 8.0.2
 * */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Lang;

class UserController extends Controller
{

    public function show($user_name)
    {
        $data = []; //to be sent to the view
        $user = User::findOrFail($user_name);

        $data["user"] = $user;
        $data["title"] = $user->getTitle();

        return view('user.show')->with("data", $data);
    }


    public function create()
    {
        $data = [];
        $data["pageTitle"] = "Create your User";

    }


    public function save(Request $request)
    {
        User::create($request->only(["user_name","name","credit_card","email","password"]));
        User::validate($request);

        $message = Lang::get("messages.SuccesfullUser");
        return back()->with('success', $message);
    }

    public function delete($user_name)
    {
        $data = User::find($user_name);
        $data->delete();
    }
}