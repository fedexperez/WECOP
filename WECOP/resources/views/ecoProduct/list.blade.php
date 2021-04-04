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
    <div class="text-center row">
        <div class="text-center col-6 mx-auto">
            @foreach ($data['ecoProducts'] as $ecoProduct)
            <a href="{{ route('ecoProduct.show', $ecoProduct->getId()) }}">
                <h1 class="text-center text-uppercase text-secondary">{{ $ecoProduct->getName() }}</h1>
            </a>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <a href="{{ route('ecoProduct.show', $ecoProduct->getId()) }}">
                        <img class="img-fluid" src="{{ url('img/ecoProducts/'.$ecoProduct->getPhoto()) }}"
                            alt="product" />
                    </a>
                </div>
                <div class="col-md-6 col-lg-8 mb-5">
                    <p class="lead">{{ $ecoProduct->getDescription() }}</p>
                    <p class="lead">$ {{ $ecoProduct->getPrice() }}</p>
                    @if( $ecoProduct->getStock() > 0)
                    <p class="lead" style="color:green">In stock!</p><br><br>
                    @else
                    <p class="lead" style="color:red">Out of stock :(</p><br><br>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
