@extends('layouts.app')

@section('content')
<!-- emision calculator Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
            @lang('messages.EmisionCalculator')</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <h4 class="text-center  text-secondary mb-0">@lang('messages.CalculatorInstructions')</h2><br>
            <div class="text-center lead">
                <!-- EmsionCalculator-->
                <form method="POST" action="{{ route('home.emisionCalculator') }}">
                    @csrf
                    <label for="eco_product">@lang('messages.CalculatorChooseProduct')</label>
                    <select name="eco_product_id" id="eco_product_id">
                        @foreach($data['ecoProducts'] as $ecoProduct)
                        <option value="{{ $ecoProduct->getId() }}"> {{ $ecoProduct->getName() }} </option>
                        @endforeach
                    </select><br>
                    <input class="btn btn-primary" type="submit" value="Calculate" />
                </form><br>
                @include('util.emision')
            </div>
    </div>
</section>
<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">@lang('messages.About')</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <p class="lead">@lang('messages.AboutMessage1')</p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p class="lead">@lang('messages.AboutMessage2')</p>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Some producs Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">@lang('messages.SomeProducts')
        </h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Some Products-->
        <div class="col-12 mx-auto">
            <div class="row">
                <div class="col-4 text-center">
                    <a href="{{ route('ecoProduct.show', $data['someEcoProducts']['0']->getId()) }}">
                        <img class="img-fluid"
                            src="{{ url('img/ecoProducts/'.$data['someEcoProducts']['0']->getPhoto() ) }}"
                            alt="product" />
                        <strong class="lead">{{ $data['someEcoProducts']['0']->getName() }}</strong>
                    </a>
                </div>
                <div class="col-4 text-center">
                    <a href="{{ route('ecoProduct.show', $data['someEcoProducts']['1']->getId()) }}">
                        <img class="img-fluid"
                            src="{{ url('img/ecoProducts/'.$data['someEcoProducts']['1']->getPhoto() ) }}"
                            alt="product" />
                        <strong class="lead">{{ $data['someEcoProducts']['1']->getName() }}</strong>
                    </a>
                </div>
                <div class="col-4 text-center">
                    <a href="{{ route('ecoProduct.show', $data['someEcoProducts']['2']->getId()) }}">
                        <img class="img-fluid"
                            src="{{ url('img/ecoProducts/'.$data['someEcoProducts']['2']->getPhoto() ) }}"
                            alt="product" />
                        <strong class="lead">{{ $data['someEcoProducts']['2']->getName() }}</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
