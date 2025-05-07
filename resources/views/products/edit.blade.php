<!-- resources/views/products/edit.blade.php -->
@extends('layouts.app1')

@section('content')
<div class="container">
    <h1>Edit Product</h1>
    
    <form action="{{ route('products.update', $product->PCode) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="PName">Product Name</label>
            <input type="text" name="PName" id="PName" class="form-control" value="{{ old('PName', $product->PName) }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Update Product</button>
    </form>
</div>
@endsection