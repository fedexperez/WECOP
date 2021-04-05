@extends('layouts.app')

@section("title", $data["pageTitle"])

@section('content')
<section class="page-section">
    <div class="container">
        <h1 class="text-center text-uppercase text-secondary">@lang('messages.WhatToDo')</h1>
        <!-- Icon Divider-->
    </div>
    <br><br>
    <div class="text-center col-9 mx-auto">
        <div class="row">
            <div class="col-3 mx-auto">
                <form action="{{ route('address.create') }}">
                    <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">
                        @lang('messages.CreateAddress')
                    </button>
                </form>
            </div>
            <div class="col-3 mx-auto">
                <form action="{{ route('address.list') }}">
                    <button type="submit" class="btn btn-primary mt-3 btn-lg btn-block" id="button_style1">
                        @lang('messages.ListAddress')
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection