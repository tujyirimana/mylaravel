<!-- resources/views/products/create.blade.php -->
@extends('layouts.app1')

@section('content')
<div class="container">
    <h1>Create New Product</h1>
    
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="PName">Product Name:</label>
        <input type="text" name="PName" id="PName" required>
    
        <label for="PCode">Product Code:</label>
        <input type="text" name="PCode" id="PCode" required> <!-- Add this input field for PCode -->
    
        <button type="submit">Create Product</button>
    </form>
</div>
@endsection