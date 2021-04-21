@extends('layouts.app')

@section('title',  $data['pageTitle'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> @lang('order.order') {{ $data['order']->getId() }}</div>
                <div class="card-body">
                    <b>@lang('order.status'): </b> {{ $data['order']->getStatus() }}<br />
                    <b>@lang('order.payment_type'): </b>{{ $data['order']->getPaymentType() }}<br />
                    <b>@lang('order.address'): </b>{{ $data['address']->getAddress() }}<br />
                    <b>@lang('order.date'): </b>{{ $data['order']->getDate() }}<br />
                    <b>@lang('order.total'): </b>{{ $data['order']->getTotal() }}<br /><br />
                    <div class="row">
                        <div class="col-5">
                            <form action="{{ route('order.list')}}">
                                <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('order.back')</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection