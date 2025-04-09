@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Create Category</h1>

  <form action="{{ route('category.save') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" required>
    </div>
    <div class="mb-3">
      <label for="description">Description:</label>
      <textarea class="form-control" name="description"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
  </form>
</div>
@endsection