@extends('layouts.master')

@section('content')
<div class="row p-5">
    <div class="col-md-12">
        <ul id="errors">
            @foreach($data["reviews"] as $review)
            @if($loop->index < 2)
            <li>
                @lang('messages.Review') <a href="{{ route('review.show', $review->getId()) }}"> <b> {{ $review->getId() }} </b> </a>
            </li>
            @else 
            <li>
                @lang('messages.Review') <a href="{{ route('review.show', $review->getId()) }}"> {{ $review->getId() }} </a>
            </li>
            @endif
            @endforeach
        </ul>
    </div>
</div>
@endsection