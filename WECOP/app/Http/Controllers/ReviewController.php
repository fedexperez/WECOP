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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

/**
 * Class ReviewController
 * 
 * @package App\Http\Controllers
 */
class ReviewController extends Controller
{

    public function show($id)
    {
        $data = []; //to be sent to the viewS
        $review = Review::findOrFail($id);
        $ecoProduct = EcoProduct::findOrFail($review->getEcoProduct());
        $data['ecoProduct'] = $ecoProduct;

        $data['review'] = $review;
        $data['title'] = $review->getTitle();

        return view('review.show')->with('data', $data);
    }


    public function create()
    {
        $data = []; //to be sent to the view
        $data['pageTitle'] = 'Write your review';

        return view('review.create')->with('data', $data);
    }


    public function save(Request $request)
    {
        Review::create($request->only(['rating', 'title', 'message']));
        Review::validate($request);

        $message = Lang::get('messages.SuccesfullReview');
        return back()->with('success', $message);
    }

}
