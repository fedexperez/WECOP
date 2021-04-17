@extends('layouts.app')

@section('title', $data['review']->getTitle())

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <h2 class="text-center text-uppercase text-secondary"> @lang('review.ReviewOf') {{ $data['ecoProduct']->getName() }}</h2>
            <div class="card-body">
                <b>@lang('review.Rating'): </b> {{ $data['review']->getRating() }}<br>
                <b>@lang('review.Title'): </b>{{ $data['review']->getTitle() }}<br>
                <b>@lang('review.Message'): </b>{{ $data['review']->getMessage() }}<br><br>
            </div>
        </div>
    </div>
</div>
@endsection