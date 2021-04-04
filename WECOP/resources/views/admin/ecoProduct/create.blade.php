@extends('admin.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header">Create EcoProduct</div>
                <div class="card-body">
                    @if($errors->any())
                    <ul id="errors">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    <form method="POST" action="{{ route('admin.ecoProduct.save') }}">
                        @csrf
                        <input type="text" placeholder="Enter name" name="name" value="{{ old('name') }}" />
                        <input type="number" step="0.01" placeholder="Enter price" name="price"
                            value="{{ old('price') }}" />
                        <input type="number" placeholder="Enter stock" name="stock" value="{{ old('stock') }}" />
                        <input type="text" placeholder="Enter facts" name="facts" value="{{ old('facts') }}" />
                        <input type="text" placeholder="Enter description" name="description"
                            value="{{ old('description') }}" />
                        <input type="text" placeholder="Enter categories" name="categories"
                            value="{{ old('categories') }}" />
                        <input type="number" step="0.01" placeholder="Enter emision" name="emision"
                            value="{{ old('emision') }}" />
                        <input type="number" placeholder="Enter product life" name="product_life"
                            value="{{ old('product_life') }}" />
                        <input type="text" placeholder="Enter photo name" name="photo" value="{{ old('photo') }}" />
                        <label for="not_eco_product">Choose a NotEcoProduct:</label>
                        <select name="not_eco_product" id="not_eco_product">
                            @foreach($data["notEcoProducts"] as $notEcoProduct)
                            <option value="{{ $notEcoProduct->getId() }}">{{ $notEcoProduct->getName() }}</option>
                            @endforeach
                        </select>
                        <input type="submit" value="Send" />
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
