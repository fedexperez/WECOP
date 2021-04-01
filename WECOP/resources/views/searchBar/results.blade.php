@extends('layouts.app')
@section('content')

<section class="page-section">
    <div class="text-center">
        @if($ecoProducts->isNotEmpty())
            @foreach ($ecoProducts as $ecoProduct)
                <div>
                    <li>
                        <a href="{{ route('ecoProduct.show', $ecoProduct->getId()) }}">{{ $ecoProduct->getName() }}</a>
                    </li>
                </div>
            @endforeach
        @else 
            <div>
                <a>Not EcoProducts found</a>
            </div>
        @endif
    </div>
</section>