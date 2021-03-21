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
                    <strong>Product name:</strong> {{ $data["notEcoProduct"]->getName() }}<br />
                    <strong>Product emision:</strong> {{ $data["notEcoProduct"]->getEmision() }}<br />
                    <strong>Product life:</strong> {{ $data["notEcoProduct"]->getProductLife() }}<br />
                    <ul>
                    </ul>
                    <a href="{{ route('notEcoProduct.delete', ['id' => $data['notEcoProduct']['id']]) }}"> Delete </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
