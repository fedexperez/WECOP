@extends('layouts.app')

@section('title', $data['pageTitle'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('messages.CreateAddress')</div>
                    <div class="card-body">
                        <div class="aParent">
                            <div>
                                <form action="{{ route('address.create') }}">
                                    <button type="submit" class="btn btn-primary">
                                        @lang('messages.Create')
                                    </button>
                                </form>
                            </div>
                            <div>
                                <form action="{{ route('address.list') }}">
                                    <button type="submit" class="btn btn-primary">
                                        @lang('messages.List')
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection