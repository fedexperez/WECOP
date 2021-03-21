@extends('layouts.app')

@section("title", $data["order"]->getId())

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> @lang('messages.Order') {{ $data["order"]->getId() }}</div>
                <div class="card-body">
                    <b>@lang('messages.Status'): </b> {{ $data["order"]->getStatus() }}<br />
                    <b>@lang('messages.PaymentType'): </b>{{ $data["order"]->getPaymentType() }}<br />
                    <b>@lang('messages.Address'): </b>{{ $data["order"]->getAddress() }}<br />
                    <b>@lang('messages.Date'): </b>{{ $data["order"]->getDate() }}<br />
                    <b>@lang('messages.Total'): </b>{{ $data["order"]->getTotal() }}<br /><br />
                </div>
                <a href="{{ route('order.delete', $data['order']->getId()) }}"> @lang('messages.Delete') </a>
            </div>
        </div>
    </div>
</div>
@endsection