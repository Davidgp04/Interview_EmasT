@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container mt-5">
  <div class="text-center">
    <h1 class="mb-4">Welcome to MyShop!</h1>
    <p class="lead">Manage your <strong>Products</strong> and <strong>Categories</strong> with ease.</p>

    <div class="mt-5">
      <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg me-3">
        View Products
      </a>

      <a href="{{ route('category.index') }}" class="btn btn-secondary btn-lg">
        View Categories
      </a>
    </div>
  </div>
</div>
@endsection