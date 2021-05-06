@extends('layouts.app')

@section('title',  $data['pageTitle'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <h2 class="text-center text-uppercase text-secondary"> @lang('order.order') {{ $data['order']->getId() }}</h2>
            <div class="card-body">
                <b>@lang('order.status'): </b> {{ $data['order']->getStatus() }}<br />
                <b>@lang('order.payment_type'): </b>{{ $data['order']->getPaymentType() }}<br />
                <b>@lang('order.address'): </b>{{ $data['address']->getAddress() }}<br />
                <b>@lang('order.date'): </b>{{ $data['order']->getDate() }}<br />
                <b>@lang('order.total'): </b>{{ $data['order']->getTotal() }}<br /><br />
            </div>
        </div>
    </div>
</div>
@endsection