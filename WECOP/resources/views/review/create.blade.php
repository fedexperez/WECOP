@extends('layouts.app')

@section('title', $data['pageTitle'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <h2 class="text-center text-uppercase text-secondary"> @lang('messages.CreateReview') {{ $data['ecoProduct']->getName() }}</h2>
            @if($errors->any())
            <ul id="errors">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
            <form method="POST" action="{{ route('review.save', ['id' =>  $data['ecoProduct']->getId()]) }}">
                @csrf
                <div class="form-group row">
                    <label for="rating" class="col-md-4 col-form-label text-md-right">@lang('messages.RatingInput')</label>
                    <div class="col-md-6">
                        <input type="text" name="rating" value="{{ old('rating') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">@lang('messages.TitleInput')</label>
                    <div class="col-md-6">
                        <input type="text" placeholder="@lang('messages.TitleInput')" name="title" value="{{ old('title') }}" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="message" class="col-md-4 col-form-label text-md-right">@lang('messages.MessageInput')</label>
                    <div class="col-md-6">
                        <input type="text" placeholder="@lang('messages.MessageInput')" name="message" value="{{ old('message') }}" />
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            @lang('messages.Send')
                        </button>
                    </div>
                </div>
            </form>
            <div class="form-group row mb-0">
                <div class="col-md-3 offset-md-4">
                    <form action="{{ route('ecoProduct.show', ['id' =>  $data['ecoProduct']->getId(), 'filter' => 'All'])}}">
                        <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.Back')</button>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection