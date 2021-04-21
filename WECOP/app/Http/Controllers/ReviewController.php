<?php

/**
 * WECOP
 *
 * @author fperezm1
 * PHP version: 8.0.2
 */

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\EcoProduct;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Auth;

/**
 * Class ReviewController
 *
 * @package App\Http\Controllers
 */
class ReviewController extends Controller
{

    public function show($id)
    {
        $data = []; //to be sent to the views

        $review = Review::findOrFail($id);
        $data['review'] = $review;
        $data['title'] = $review->getTitle();
        
        $data['ecoProduct'] = $review->ecoProduct;

        return view('review.show')->with('data', $data);
    }


    public function create($id)
    {
        $data = []; //to be sent to the view
        $data['pageTitle'] = Lang::get('messages.write_review');
        $data['ecoProduct'] = EcoProduct::findOrFail($id);

        return view('review.create')->with('data', $data);
    }


    public function save($id, Request $request)
    {
        Review::validate($request);

        $user = User::findOrFail(Auth::user()->getId());
        $review = new Review();
        $review->rating = $request['rating'];
        $review->title = $request['title'];
        $review->message = $request['message'];
        $review->eco_product_id = $id;
        $review->user_id = $user->getId();
        $review->created_at = date('Y-m-d H:i:s');
        $review->save();

        $message = Lang::get('review.succesfull_review');
        return back()->with('success', $message);
    }
}
