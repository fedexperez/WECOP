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

    public function delete($id)
    {
        $data = Review::find($id);
        $data->delete();
        return redirect()->route('review.list');
    }

    /**
     * This function shows all the reviews from an ecoProduct. 
     * 
     * @param request is an id colected from a form
     * @return back with the reviews.
     */
    public function all($id)
    {
        $data = []; //to be sent to the view
        $data['reviews'] = Review::where('eco_product', $id)->get();
        $data['ecoProduct'] = EcoProduct::find($id);

        $filter = 0;
        $data['filter'] = $filter;

        return view('review.filter')->with('data', $data);
    }

    /**
     * This function shows the reviews from an ecoProduct filtered by stars.
     * 
     * @param request is an id colected from a form.
     * @return back with the reviews filtered.
     */
    public function filter($id,$filter)
    {
        $data = []; //to be sent to the view
        $data['filter'] = $filter;
        $data['reviews'] = Review::where('rating', $filter)->where('eco_product', $id)->get();
        $data['ecoProduct'] = EcoProduct::find($id);

        return view('review.filter')->with('data', $data);
    }

}
