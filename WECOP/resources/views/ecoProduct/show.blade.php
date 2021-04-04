@extends('layouts.app')

@section('content')
<section class="page-section">
    <div class="container">
        <h1 class="text-center text-uppercase text-secondary">{{ $data['ecoProduct']->getName() }}
        </h1>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <img class="img-fluid" src="{{ url('img/ecoProducts/'.$data['ecoProduct']->getPhoto()) }}" alt="product" />
            </div>
            <div class="col-md-6 col-lg-8 mb-5">
                <p class="lead">{{ $data['ecoProduct']->getDescription() }}</p>
                <p class="lead">$ {{ $data['ecoProduct']->getPrice() }}</p>
                @if( $data['ecoProduct']->getStock() > 0)
                    <p class="lead" style="color:green">In stock!</p><br>
                @else
                    <p class="lead" style="color:red">Out of stock</p><br>
                @endif
                <p class="lead">{{ $data['ecoProduct']->getFacts() }}</p><br>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row p-5">
                <div class="col-2">
                    <form action="{{ route('review.all', $data['ecoProduct']->getId())}}">
                        <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.All')</button>
                    </form>
                </div>
                <div class="col-2">
                    <form action="{{ route('review.filter', ['id' =>  $data['ecoProduct']->getId(), 'filter' => '1'])}}">
                        <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.Review1')</button>
                    </form>
                </div>
                <div class="col-2">
                    <form action="{{ route('review.filter', ['id' =>  $data['ecoProduct']->getId(), 'filter' => '2'])}}">
                        <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.Review2')</button>
                    </form>
                </div>
                <div class="col-2">
                    <form action="{{ route('review.filter', ['id' =>  $data['ecoProduct']->getId(), 'filter' => '3'])}}">
                        <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.Review3')</button>
                    </form>
                </div>
                <div class="col-2">
                    <form action="{{ route('review.filter', ['id' =>  $data['ecoProduct']->getId(), 'filter' => '4'])}}">
                        <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.Review4')</button>
                    </form>
                </div>
                <div class="col-2">
                    <form action="{{ route('review.filter', ['id' =>  $data['ecoProduct']->getId(), 'filter' => '5'])}}">
                        <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.Review5')</button>
                    </form>
                </div>
            </div>
        </div>
        @yield('reviewsfiltered')
    </div>
    
</section>
@endsection