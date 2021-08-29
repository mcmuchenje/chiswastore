@extends('admin/layout')

@section('content')

<div class="container mt-5 mr-5">
  <div>
      <form method="POST" action="{{ route('category.store') }}">
        @csrf
        <div class="form-group">
          <label for="name">Category Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="e.g. Drinks">
        </div>

        <div class="mt-2">
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </form>
  </div>
</div>

@endsection