@extends('admin.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header">@lang('messages.CreateNotEcoProducts')</div>
                <div class="card-body">
                    @if($errors->any())
                    <ul id="errors">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    <form method="POST" action="{{ route('admin.notEcoProduct.save') }}">
                        @csrf
                        <input type="text" placeholder="@lang('messages.EnterName')" name="name" value="{{ old('name') }}" />
                        <input type="number" step="0.01" placeholder="@lang('messages.EnterPrice')" name="price"
                            value="{{ old('price') }}" />
                        <input type="number" step="0.01" placeholder="@lang('messages.EnterEmision')" name="emision"
                            value="{{ old('emision') }}" />
                        <input type="number" placeholder="@lang('messages.EnterProductLife')" name="product_life"
                            value="{{ old('product_life') }}" />
                        <input type="submit" value="Send" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
