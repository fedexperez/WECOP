@extends('layouts.app')

@section("title", $data["pageTitle"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header">Create an Address</div>
                <div class="card-body">
                    @if($errors->any())
                    <ul id="errors">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    <form method="POST" action="{{ route('address.save') }}">
                        @csrf
                        <input type="text" placeholder="Enter country" name="country" value="{{ old('country') }}" /> <br>
                        <input type="text" placeholder="Enter city" name="city" value="{{ old('city') }}" /> <br>
                        <input type="text" placeholder="Enter address" name="address" value="{{ old('address') }}" /> <br>
                        <input type="text" placeholder="Enter postal code" name="postal_code" value="{{ old('postal_code') }}" />
                        <input type="submit" value="@lang('messages.Send')" />
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection