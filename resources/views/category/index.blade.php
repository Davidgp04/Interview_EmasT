@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Categories</h1>

  <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">Add New Category</a>

  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($viewData['categories'] as $category)
      <tr>
        <td>{{ $category->name }}</td>
        <td>{{ $category->description }}</td>
        <td>
          <a href="{{ route('category.show', $category->getId()) }}" class="btn btn-info btn-sm">View</a>
          <a href="{{ route('category.edit', $category->getId()) }}" class="btn btn-warning btn-sm">Edit</a>
          <form action="{{ route('category.delete', $category->getId()) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm"
              onclick="return confirm('Are you sure?')">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection