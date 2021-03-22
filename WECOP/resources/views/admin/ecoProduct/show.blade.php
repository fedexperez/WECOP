@extends('admin.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header">{{ $data["ecoProduct"]->getName() }}</div>
                <div class="card-body">
                    <strong>Product name:</strong> {{ $data["ecoProduct"]->getName() }}<br />
                    <strong>Product price:</strong> {{ $data["ecoProduct"]->getPrice() }}<br />
                    <strong>Product stock:</strong> {{ $data["ecoProduct"]->getStock() }}<br />
                    <strong>Product facts:</strong> {{ $data["ecoProduct"]->getFacts() }}<br />
                    <strong>Product description:</strong> {{ $data["ecoProduct"]->getDescription() }}<br />
                    <strong>Product categories:</strong> {{ $data["ecoProduct"]->getCategories() }}<br />
                    <strong>Product emision:</strong> {{ $data["ecoProduct"]->getEmision() }}<br />
                    <strong>Product life:</strong> {{ $data["ecoProduct"]->getProductLife() }}<br />
                    <strong>Product photo:</strong> {{ $data["ecoProduct"]->getPhoto() }}<br /><br />
                    <form action="{{ route('admin.ecoProduct.delete', $data['ecoProduct']->getId()) }}">
                        <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block"
                            id="button_style1">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
