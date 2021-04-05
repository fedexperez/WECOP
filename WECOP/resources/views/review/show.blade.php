@extends('layouts.app')

@section('title', $data['review']->getTitle())

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <h2 class="text-center text-uppercase text-secondary"> @lang('messages.ReviewOf') {{ $data['ecoProduct']->getName() }}</h2>
            <div class="card-body">
                <b>@lang('messages.Rating'): </b> {{ $data['review']->getRating() }}<br>
                <b>@lang('messages.Title'): </b>{{ $data['review']->getTitle() }}<br>
                <b>@lang('messages.Message'): </b>{{ $data['review']->getMessage() }}<br><br>
            </div>
        </div>
    </div>
</div>
@endsection