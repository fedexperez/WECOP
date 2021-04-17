@extends('admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('messages.reviews_of') {{ $data["ecoProduct"]->getName() }}</div>
                <div class="card-body">
                    <ul id="errors">
                        @foreach($data["reviews"] as $review)
                        <li>
                            @lang('messages.Review') {{ $review->getId() }}<a href="{{ route('admin.review.show', $review->getId()) }}"> {{ $review->getTitle() }} - Rating: {{ $review->getRating() }} </a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="col-4">
                        <form action="{{ route('admin.ecoProduct.show', $data['ecoProduct']->getId()) }}">
                            <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.back')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection