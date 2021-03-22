@extends('review.list')

@section('reviewsfiltered')
<div class="col-md-12">
    <ul id="errors">
    @if($data["filter"] == "0" )
        @foreach($data["reviews"] as $review)
        <li>
            @lang('messages.Review') <a href="{{ route('review.show', $review->getId()) }}"> {{ $review->getId() }} </a>
        </li>
        @endforeach
    @endif
    @if($data["filter"] == "1" )
        @foreach($data["review1"] as $review)
        <li>
            @lang('messages.Review') <a href="{{ route('review.show', $review->getId()) }}"> {{ $review->getId() }} </a>
        </li>
        @endforeach
    @endif
    @if($data["filter"] == "2" )
        @foreach($data["review2"] as $review)
        <li>
            @lang('messages.Review') <a href="{{ route('review.show', $review->getId()) }}"> {{ $review->getId() }} </a>
        </li>
        @endforeach
    @endif
    @if($data["filter"] == "3" )
        @foreach($data["review3"] as $review)
        <li>
            @lang('messages.Review') <a href="{{ route('review.show', $review->getId()) }}"> {{ $review->getId() }} </a>
        </li>
        @endforeach
    @endif
    @if($data["filter"] == "4" )
        @foreach($data["review4"] as $review)
        <li>
            @lang('messages.Review') <a href="{{ route('review.show', $review->getId()) }}"> {{ $review->getId() }} </a>
        </li>
        @endforeach
    @endif
    @if($data["filter"] == "5" )
        @foreach($data["review5"] as $review)
        <li>
            @lang('messages.Review') <a href="{{ route('review.show', $review->getId()) }}"> {{ $review->getId() }} </a>
        </li>
        @endforeach
    @endif
    </ul>
</div>
@endsection