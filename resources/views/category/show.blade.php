@extends('layouts.app')

@section('content')
<div class="container">
  <h1>{{ $viewData['category']->name }}</h1>
  <p>{{ $viewData['category']->description }}</p>

  <h3>Associated Products</h3>
  <ul>
    @foreach ($viewData['associatedProducts'] as $product)
    <li>{{ $product->name }} - ${{ $product->price }}</li>
    @endforeach
  </ul>

  <a href="{{ route('category.index') }}" class="btn btn-secondary">Back to Categories</a>
</div>
@endsection