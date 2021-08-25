@extends('admin/layout')

@section('content')

<div class="container mt-5 mr-5">
  <div>
      <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data" class="box">
        @csrf
        <div class="form-group">
          <label for="name">Product Name</label>
          <input type="text" class="form-control" id="name" name="amount" placeholder="eg. Pfuko Maheu">
        </div>
        
        <div class="form-group">
          <label for="amount">Product Name</label>
            <input class="form-control" type="number" id="amount" name="amount" min="1" step="any" placeholder="4.99">
        </div>

          <div class="field">
            <label for="category" class="label">Category</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Choose...</option>
                @foreach($categories as $category)
                 <option value="1">{{ $category->name }}</option>
                @endforeach
              </select>
            </div>                     
          </div>

          <div class="form-group">
            <label for="image">Product Name</label>
              <input class="form-control" type="file" id="image" name="image">
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit">Create</button>
          </div>
        </form>
  </div>
</div>

@endsection