@extends('admin/layout')

@section('content')

<div class="container mt-5 mr-5">
  <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="name">Product Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="e.g Pfuko Maheu">
    </div>

    <div class="form-group">
      <label for="amount">Price</label>
      <input type="number" class="form-control" id="amount" name="amount" min="1" step="any" placeholder="4.99">
    </div>
    
    <div class="field">
      <label for="category" class="label">Category</label>
      <select class="form-select" name="category" id="category">
        <option selected>Choose...</option>
        @foreach($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group mt-2">
      <input type="file" class="form-control-file" id="image" name="image">
    </div>     

    <div class="mt-2">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </form>
</div>

@endsection