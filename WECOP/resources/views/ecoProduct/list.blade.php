@extends('layouts.app')

@section('content')
<section class="page-section">
    <div class="container">
        <h1 class="text-center text-uppercase text-secondary">EcoProducts</h1>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-4">
            @foreach ($data['ecoProducts'] as $ecoProduct)
            <a href="{{ route('ecoProduct.show', ['id'=> $ecoProduct->getId() ]) }}">{{ $ecoProduct->getName() }}</a>
            @endforeach
        </div>
    </div>
</section>
@endsection
