@extends('layouts.app')

@section('content')
<section class="page-section">
    <div class="container">
        <h1 class="text-center text-uppercase text-secondary">{{ $data['ecoProduct']->getName() }}</h1>
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
                <p class="lead" style="color:red">Out of stock :(</p><br>
                @endif
                <p class="lead">{{ $data['ecoProduct']->getFacts() }}</p><br>
            </div>
        </div>
        <div class="row p-5">
            <h2 class="text-center text-uppercase text-secondary">@lang('messages.Reviews')</h2>
        </div>
        <div class="col-md-12">
            @foreach($data["reviews"] as $review)
            <li>
                @lang('messages.Review') <a href="{{ route('review.show', $review->getId()) }}"> {{ $review->getId() }} </a>
            </li>
            @endforeach
        </div>
    </div>
</section>
@endsection