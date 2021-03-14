@extends('layouts.app')

@section("title", $data["pageTitle"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header">@lang('messages.CreateReview')</div>
                <div class="card-body">
                    @if($errors->any())
                    <ul id="errors">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    <form method="POST" action="{{ route('review.save') }}">
                        @csrf
                        <input type="text" placeholder="@lang('messages.RatingInput')" name="rating" value="{{ old('rating') }}" />
                        <input type="text" placeholder="@lang('messages.TitleInput')" name="title" value="{{ old('title') }}" />
                        <input type="text" placeholder="@lang('messages.MessageInput')" name="message" value="{{ old('message') }}" />
                        <input type="submit" value="@lang('messages.Send')" />
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection