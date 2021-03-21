@extends('layouts.app')

@section('content')
<div class="row p-5">
    <div class="col-md-12">
        <ul id="errors">
            @foreach($data["reviews"] as $review)
            <li>
                @lang('messages.Review') <a href="{{ route('review.show', $review->getId()) }}"> {{ $review->getId() }} </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection