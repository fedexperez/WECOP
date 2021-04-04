@extends('admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('messages.ProductNotExits')</div>
                <div class="card-body">
                    <strong style='color:red;'>@lang('messages.ProductNotFound')</strong>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
