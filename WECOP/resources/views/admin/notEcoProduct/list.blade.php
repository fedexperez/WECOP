@extends('admin.master')

@section('title', $data['title'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('messages.list_not_eco_products')</div>
                <div class="card-body">
                    @foreach($data['notEcoProducts'] as $notEcoProduct)
                    <li>
                    <a href="{{ route('admin.notEcoProduct.show',  $notEcoProduct->getId()) }}"> {{ $notEcoProduct->getName() }} </a>
                    </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
