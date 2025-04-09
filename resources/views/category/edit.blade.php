@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Edit Category</h1>

  <form action="{{ route('category.update', $viewData['category']->getId()) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" value="{{ $viewData['category']->getName() }}" required>
    </div>
    <div class="mb-3">
      <label for="description">Description:</label>
      <textarea class="form-control" name="description">{{ $viewData['category']->getDescription() }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@endsection