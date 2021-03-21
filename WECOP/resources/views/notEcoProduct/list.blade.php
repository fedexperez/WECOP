@extends('layouts.app')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">list of notEcoProducts</div>
                <div class="card-body">
                    @foreach($data["notEcoProducts"] as $notEcoProduct)
                    <li>
                    <a href="{{ route('notEcoProduct.show', ['id'=> $notEcoProduct->getId() ]) }}"> {{ $notEcoProduct->getId() }} </a>
                    </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
