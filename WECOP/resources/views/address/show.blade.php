@extends('layouts.app')
@section('title', $data['pageTitle'])
@section('content')
<section class="page-section">
    @include('util.breadcrumbs')
    <div class="container">
        <h1 class="text-center text-uppercase text-secondary">{{ $data['address']->getAddress() }}</h1>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-globe-americas"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="text-center">
            <div class="col-md-6 col-lg-8 mb-5">
                <p class="lead">@lang('messages.country'): {{ $data['address']->getCountry() }}</p>
                <p class="lead">@lang('messages.city'): {{ $data['address']->getCity() }}</p>
                <p class="lead">@lang('messages.postal_code'): {{ $data['address']->getPostalCode() }}</p><br>
            </div>
        </div>
        <div class="text-center">
            <form action="{{ route('address.delete', $data['address']->getId()) }}">
                <button type="submit" class="btn btn-primary">
                    @lang('messages.delete')
                </button>
            </form>
        </div>
    </div>
</section>
@endsection