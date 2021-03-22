@extends('admin.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @include('util.message')
            <div class="card">
                <div class="card-header">{{ $data["notEcoProduct"]->getName() }}</div>
                <div class="card-body">
                    <strong>Product name:</strong> {{ $data["notEcoProduct"]->getName() }}<br />
                    <strong>Product emision:</strong> {{ $data["notEcoProduct"]->getEmision() }}<br />
                    <strong>Product life:</strong> {{ $data["notEcoProduct"]->getProductLife() }}<br /><br />
                    <form action="{{ route('admin.notEcoProduct.delete', $data['notEcoProduct']->getId()) }}">
                        <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block"
                            id="button_style1">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
