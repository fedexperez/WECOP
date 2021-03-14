@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('messages.Great')</div>

                <div class="card-body">
                    @lang('messages.SuccesfullReview')
                </div>

                <a class="button" href="{{ route('review.create') }}">
                    @lang('messages.Return')
                </a>
            </div>
        </div>
    </div>
</div>
@endsection