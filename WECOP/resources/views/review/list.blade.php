@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="row p-5">
        <div class="col-1">
            <form action="{{ route('review.filter'), ['id'=> $data['ecoProduct']->getId(), 'rating' => '1']}}">
                <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.Review1')</button>
            </form>
        </div>
        <div class="col-1">
            <form action="{{ route('review.filter'), ['id'=> $data['ecoProduct']->getId(), 'rating' => '2']}}">
                <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.Review2')</button>
            </form>
        </div>
        <div class="col-1">
            <form action="{{ route('review.filter'), ['id'=> $data['ecoProduct']->getId(), 'rating' => '3']}}">
                <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.Review3')</button>
            </form>
        </div>
        <div class="col-1">
            <form action="{{ route('review.filter'), ['id'=> $data['ecoProduct']->getId(), 'rating' => '4']}}">
                <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.Review4')</button>
            </form>
        </div>
        <div class="col-1">
            <form action="{{ route('review.filter'), ['id'=> $data['ecoProduct']->getId(), 'rating' => '5']}}">
                <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.Review5')</button>
            </form>
        </div>
    </div>
    @foreach($data["reviews"] as $review)
    <li>
        @lang('messages.Review') <a href="{{ route('review.show', $review->getId()) }}"> {{ $review->getId() }} </a>
    </li>
    @endforeach
</div>

@endsection