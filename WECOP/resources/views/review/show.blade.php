@extends('layouts.master')

@section("title", $data["review"]->getTitle())

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> @lang('messages.Review') {{ $data["review"]->getId() }}</div>
                <div class="card-body">
                    <b>@lang('messages.Rating'): </b> {{ $data["review"]->getRating() }}<br />
                    <b>@lang('messages.Title'): </b>{{ $data["review"]->getTitle() }}<br />
                    <b>@lang('messages.Message'): </b>{{ $data["review"]->getMessage() }}<br /><br />
                </div>
                <a href="{{ route('review.delete', $data['review']->getId()) }}"> @lang('messages.Delete') </a>
            </div>
        </div>
    </div>
</div>
@endsection