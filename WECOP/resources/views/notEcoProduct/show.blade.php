@extends('layouts.app')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @include('util.message')
            <div class="card">
                <div class="card-header">{{ $data["notEcoProduct"]["name"] }}</div>
                <div class="card-body">
                    <strong>Product name:</strong> {{ $data["notEcoProduct"]["name"] }}<br />
                    <strong>Product price:</strong> {{ $data["notEcoProduct"]["price"] }}<br />
                    <strong>Product emision:</strong> {{ $data["notEcoProduct"]["emision"] }}<br />
                    <strong>Product life:</strong> {{ $data["notEcoProduct"]["productLife"] }}<br />
                    <ul>
                    </ul>
                    <a href="{{ route('notEcoProduct.delete', ['id' => $data['notEcoProduct']['id']]) }}"> Delete </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
