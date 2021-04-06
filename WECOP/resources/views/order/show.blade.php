@extends('layouts.app')

@section('title',  $data['pageTitle'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> @lang('messages.Order') {{ $data['order']->getId() }}</div>
                <div class="card-body">
                    <b>@lang('messages.Status'): </b> {{ $data["order"]->getStatus() }}<br />
                    <b>@lang('messages.PaymentType'): </b>{{ $data["order"]->getPaymentType() }}<br />
                    <b>@lang('messages.Address'): </b>{{ $data["order"]->getAddress() }}<br />
                    <b>@lang('messages.Date'): </b>{{ $data["order"]->getDate() }}<br />
                    <b>@lang('messages.Total'): </b>{{ $data["order"]->getTotal() }}<br /><br />
                    <div class="row">
                        <div class="col-5">
                            <form action="{{ route('order.list')}}">
                                <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.Back')</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection