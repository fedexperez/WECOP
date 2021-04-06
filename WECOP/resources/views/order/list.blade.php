@extends('layouts.app')
@section('title', $data['pageTitle'])
@section('content')
<div class="row p-5">
    <div class="col-md-12">
        <div class="text-center">
            <ul id="errors">
                @if($data['orders']->isNotEmpty())
                @foreach($data['orders'] as $order)
                <li>
                    <a href="{{ route('order.show', $order->getId()) }}"> @lang('messages.Order') {{ $order->getId() }}
                    </a>
                </li>
                @endforeach
                @else
                <div class="text-center row">
                    <div class="text-center col-6 mx-auto">
                        <br><br><br><br><br><br>
                        <h1 class="text-center text-uppercase" style="color:blueviolet">
                            @lang('messages.NotCurrentOrders')
                        </h1>
                        <br><br><br><br><br><br>
                    </div>
                </div>
                @endif
            </ul>
        </div>
    </div>
</div>
@endsection