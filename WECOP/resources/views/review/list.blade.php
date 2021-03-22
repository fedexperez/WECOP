@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="row p-5">
        <div class="col-1">
            <form action="{{ route('review.filter')}}">
                <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.All')</button>
            </form>
        </div>
        <div class="col-1">
            <form action="{{ route('review.filter1')}}">
                <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.Review1')</button>
            </form>
        </div>
        <div class="col-1">
            <form action="{{ route('review.filter2')}}">
                <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.Review2')</button>
            </form>
        </div>
        <div class="col-1">
            <form action="{{ route('review.filter3')}}">
                <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.Review3')</button>
            </form>
        </div>
        <div class="col-1">
            <form action="{{ route('review.filter4')}}">
                <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.Review4')</button>
            </form>
        </div>
        <div class="col-1">
            <form action="{{ route('review.filter5')}}">
                <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.Review5')</button>
            </form>
        </div>
    </div>
</div>

@yield('reviewsfiltered')

@endsection