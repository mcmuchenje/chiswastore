@extends('admin/layout')

@section('content')

<div class="container mt-5 mr-5">
  <div>
      <form method="POST" action="/admin/category/{{ $category->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="name">Category Name</label>
          <input type="text" class="form-control" value="{{ $category->name }}" id="name" name="name" placeholder="e.g. Drinks">
        </div>

        <div class="mt-2">
          <button type="submit" class="btn btn-warning">Update</button>
        </div>
      </form>
  </div>
</div>

@endsection