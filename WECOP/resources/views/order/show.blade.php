@extends('layouts.app')

@section('title',  $data['pageTitle'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> @lang('messages.order') {{ $data['order']->getId() }}</div>
                <div class="card-body">
                    <b>@lang('messages.status'): </b> {{ $data["order"]->getStatus() }}<br />
                    <b>@lang('messages.payment_type'): </b>{{ $data["order"]->getPaymentType() }}<br />
                    <b>@lang('messages.address'): </b>{{ $data["order"]->getAddress() }}<br />
                    <b>@lang('messages.date'): </b>{{ $data["order"]->getDate() }}<br />
                    <b>@lang('messages.total'): </b>{{ $data["order"]->getTotal() }}<br /><br />
                    <div class="row">
                        <div class="col-5">
                            <form action="{{ route('order.list')}}">
                                <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">@lang('messages.back')</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection