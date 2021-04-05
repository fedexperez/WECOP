@extends('admin.master')

@section('title', $data['title'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header">{{ $data['ecoProduct']->getName() }}</div>
                <div class="card-body">
                    <strong>@lang('messages.ProductName')</strong> {{ $data['ecoProduct']->getName() }}<br />
                    <strong>@lang('messages.ProductPrice')</strong> {{ $data['ecoProduct']->getPrice() }}<br />
                    <strong>@lang('messages.ProductStock')</strong> {{ $data['ecoProduct']->getStock() }}<br />
                    <strong>@lang('messages.ProductFact')</strong> {{ $data['ecoProduct']->getFacts() }}<br />
                    <strong>@lang('messages.ProductDescp')</strong> {{ $data['ecoProduct']->getDescription() }}<br />
                    <strong>@lang('messages.ProductCategories')</strong> {{ $data['ecoProduct']->getCategories() }}<br />
                    <strong>@lang('messages.ProductEmision')</strong> {{ $data['ecoProduct']->getEmision() }}<br />
                    <strong>@lang('messages.ProductLife')</strong> {{ $data['ecoProduct']->getProductLife() }}<br />
                    <strong>@lang('messages.ProductPhoto')</strong> {{ $data['ecoProduct']->getPhoto() }}<br /><br /> 
                    <form action="{{ route('admin.review.list', $data['ecoProduct']->getId()) }}">
                        <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block"
                            id="button_style1">@lang('messages.Reviews')</button>
                    </form>
                    <form action="{{ route('admin.ecoProduct.delete', $data['ecoProduct']->getId()) }}">
                        <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block"
                            id="button_style1">@lang('messages.Delete')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
