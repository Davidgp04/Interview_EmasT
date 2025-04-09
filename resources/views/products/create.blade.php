<!-- resources/views/products/create.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Create Product</h1>

<form action="{{ route('products.store') }}" method="POST">
  @csrf

  <div class="mb-3">
    <label>Name:</label>
    <input type="text" name="name" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Description:</label>
    <textarea name="description" class="form-control"></textarea>
  </div>

  <div class="mb-3">
    <label>Price ($):</label>
    <input type="number" step="0.01" name="price" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Stock:</label>
    <input type="number" name="stock" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Category:</label>
    <select name="category_id" class="form-control" required>
      @foreach ($viewData['categories'] as $category)
      <option value="{{ $category->getId() }}">{{ $category->getName() }}</option>
      @endforeach
    </select>
  </div>

  <button type="submit" class="btn btn-success">Create</button>
  <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection