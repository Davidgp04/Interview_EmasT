<!-- resources/views/products/edit.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Edit Product</h1>

<form action="{{ route('products.update', $viewData['product']->getId()) }}" method="POST">
  @csrf
  @method('PUT')

  <div class="mb-3">
    <label>Name:</label>
    <input type="text" name="name" class="form-control" value="{{ $viewData['product']->getName() }}" required>
  </div>

  <div class="mb-3">
    <label>Description:</label>
    <textarea name="description" class="form-control">{{ $viewData['product']->getDescription() }}</textarea>
  </div>

  <div class="mb-3">
    <label>Price ($):</label>
    <input type="number" step="0.01" name="price" class="form-control" value="{{ $viewData['product']->getPrice() }}" required>
  </div>

  <div class="mb-3">
    <label>Stock:</label>
    <input type="number" name="stock" class="form-control" value="{{ $viewData['product']->getStock() }}" required>
  </div>

  <div class="mb-3">
    <label>Category:</label>
    <select name="category_id" class="form-control">
      @foreach ($viewData['categories'] as $category)
      <option value="{{ $category->id }}" {{ $viewData['product']->category_id == $category->getId() ? 'selected' : '' }}>
        {{ $category->getName() }}
      </option>
      @endforeach
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
  <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection