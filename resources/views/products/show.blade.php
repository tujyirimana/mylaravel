<!-- resources/views/products/show.blade.php -->
@extends('layouts.app1')

@section('content')
<div class="container">
    <h1>Product Details</h1>
    
    <div class="form-group">
        <label for="PName">Product Name</label>
        <input type="text" class="form-control" value="{{ $product->PName }}" disabled>
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back to Product List</a>
</div>
@endsection