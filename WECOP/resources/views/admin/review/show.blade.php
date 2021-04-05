@extends('admin.master')

@section('title', $data['review']->getTitle())

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ $data["ecoProduct"]->getName() }} - @lang('messages.Review') {{ $data["review"]->getId() }}</div>
                <div class="card-body">
                    <b>@lang('messages.Rating'): </b> {{ $data["review"]->getRating() }}<br />
                    <b>@lang('messages.Title'): </b>{{ $data["review"]->getTitle() }}<br />
                    <b>@lang('messages.Message'): </b>{{ $data["review"]->getMessage() }}
                    <div class="row p-2">
                        <div class="col-4">
                            <form action="{{ route('admin.review.list', $data['ecoProduct']->getId()) }}">
                                <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.Back')</button>
                            </form>
                        </div>
                        <div class="col-4">
                            <form action="{{ route('admin.review.delete', $data['review']->getId()) }}">
                                <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.Delete')</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection