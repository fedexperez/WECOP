@extends('layouts.master')

@section('content')
<div class="row p-5">
    <div class="col-md-12">
        <ul id="errors">
            @foreach($data['orders'] as $order)
            <li>
                <a href="{{ route('order.show', $order->getId()) }}"> @lang('messages.Order') {{ $order->getId() }} </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection