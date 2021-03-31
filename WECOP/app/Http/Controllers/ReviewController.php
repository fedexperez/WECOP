<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Review;
use Illuminate\Support\Facades\Lang;

class ReviewController extends Controller
{

    public function show($id)
    {
        $data = []; //to be sent to the view
        $review = Review::findOrFail($id);

        $data["review"] = $review;
        $data["title"] = $review->getTitle();

        return view('review.show')->with("data", $data);
    }


    public function create()
    {
        $data = []; //to be sent to the view
        $data["pageTitle"] = "Write your review";

        return view('review.create')->with("data", $data);
    }


    public function save(Request $request)
    {
        Review::create($request->only(["rating", "title", "message"]));
        Review::validate($request);

        $message = Lang::get("messages.SuccesfullReview");
        return back()->with('success', $message);
    }

    public function delete($id)
    {
        $data = Review::find($id);
        $data->delete();
        return redirect()->route('review.list');
    }

    public function list()
    {
        return view('review.list');
    }    
    
    public function all()
    {
        $data = []; //to be sent to the view
        $data["reviews"] = Review::all();

        $filter = 0;
        $data["filter"] = $filter;

        return view('review.filter')->with("data", $data);
    }

    public function oneStar()
    {
        $data = []; //to be sent to the view
        $data["reviews"] = Review::where('rating', 1.00)->get();

        $filter = 1;
        $data["filter"] = $filter;

        return view('review.filter')->with("data", $data);
    }

    public function twoStars()
    {
        $data = []; //to be sent to the view
        $data["reviews"] = Review::where('rating', 2.00)->get();

        $filter = 2;
        $data["filter"] = $filter;

        return view('review.filter')->with("data", $data);
    }

    public function threeStars()
    {
        $data = []; //to be sent to the view
        $data["reviews"] = Review::where('rating', 3.00)->get();

        $filter = 3;
        $data["filter"] = $filter;

        return view('review.filter')->with("data", $data);
    }

    public function fourStars()
    {
        $data = []; //to be sent to the view
        $data["reviews"] = Review::where('rating', 4.00)->get();

        $filter = 4;
        $data["filter"] = $filter;

        return view('review.filter')->with("data", $data);
    }

    public function fiveStars()
    {
        $data = []; //to be sent to the view
        $data["reviews"] = Review::where('rating', 5.00)->get();

        $filter = 5;
        $data["filter"] = $filter;

        return view('review.filter')->with("data", $data);
    }

    public function filter($id, $rating)
    {
        $data = []; //to be sent to the view
        $data["reviews"] = Review::where('eco_product', $id)->where('rating', $rating)->get();

        return view('review.filter')->with("data", $data);
    }
}
