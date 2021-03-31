@extends('layouts.app')

@section('content')
<div class="col-md-12">
    @foreach($data["reviews"] as $review)
    <li>
        @lang('messages.Review') <a href="{{ route('review.show', $review->getId()) }}"> {{ $review->getId() }} </a>
    </li>
    @endforeach
</div>

@endsection