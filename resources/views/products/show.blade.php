@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
<div class="container py-4">
  <div class="card shadow-lg rounded-4">
    <div class="card-body">
      <h1 class="card-title">{{ $product->name }}</h1>
      <p class="text-muted">Category: {{ $product->category->name ?? 'Uncategorized' }}</p>

      <hr>

      <p><strong>Description:</strong></p>
      <p>{{ $product->description }}</p>

      <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
      <p><strong>Stock:</strong> {{ $product->stock }}</p>

      <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back to Products</a>
      <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary mt-3">Edit Product</a>
    </div>
  </div>
</div>
@endsection