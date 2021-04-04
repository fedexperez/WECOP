@extends('layouts.app')

@section('content')
<section class="page-section">
    <div class="container">
        <h1 class="text-center text-uppercase text-secondary">@lang('messages.EcoProducts')</h1>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
    </div>
    <div class="text-center col-9 mx-auto">
        <div class="row">
            <div class="col-3">
                <form action="{{ route('ecoProduct.list', 'All')}}">
                    <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block"
                        id="button_style1">@lang('messages.All')</button>
                </form>
            </div>
            <div class="col-3">
                <form action="{{ route('ecoProduct.list', 'Emission-Low-High')}}">
                    <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block"
                        id="button_style1">@lang('messages.EmissionLowHigh')</button>
                </form>
            </div>
            <div class="col-3">
                <form action="{{ route('ecoProduct.list', 'Emission-High-Low')}}">
                    <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block"
                        id="button_style1">@lang('messages.EmissionHighLow')</button>
                </form>
            </div>
            <div class="col-3">
                <form action="{{ route('ecoProduct.list', 'Price-Low-High')}}">
                    <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block"
                        id="button_style1">@lang('messages.PriceLowHigh')</button>
                </form>
            </div>
            <div class="col-3">
                <form action="{{ route('ecoProduct.list', 'Price-High-Low')}}">
                    <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block"
                        id="button_style1">@lang('messages.PriceHighLow')</button>
                </form>
            </div>
            <div class="col-3">
                <form action="{{ route('ecoProduct.list', 'Date-Newest-Oldest')}}">
                    <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block"
                        id="button_style1">@lang('messages.DateNewestOldest')</button>
                </form>
            </div>
            <div class="col-3">
                <form action="{{ route('ecoProduct.list', 'Date-Oldest-Newest')}}">
                    <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block"
                        id="button_style1">@lang('messages.DateOldestNewest')</button>
                </form>
            </div>
            <div class="col-3">
                <form action="{{ route('ecoProduct.list', 'In-Stock')}}">
                    <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block"
                        id="button_style1">@lang('messages.InStock')</button>
                </form>
            </div>
        </div>
    </div>
    <br><br>
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
                    <p class="lead" style="color:green">@lang('messages.InStock')</p><br><br>
                    @else
                    <p class="lead" style="color:red">@lang('messages.OutStock')</p><br><br>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
