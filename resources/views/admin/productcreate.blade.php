@extends('admin/layout')

@section('content')

<div class="container mt-5 mr-5">
  <div>
      <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data" class="box">
        @csrf
          <div class="field">
            <label class="label">Product Name</label>
            <div class="control">
              <input class="input" type="text"  name="name" placeholder="e.g. Pfuko Maheu">
            </div>
          </div>
        
          <div class="field">
            <label class="label">Amount</label>
            <div class="control">
              <input class="input" type="number" name="amount" min="1" step="any" placeholder="4.99">
            </div>
          </div>

          <div class="field">
            <label for="category" class="label">Category</label>
            <div class="dropdown">
              <div class="dropdown-trigger">
                <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                  <span>Category</span>
                  <span class="icon is-small">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                  </span>
                </button>
              </div>
              <div class="dropdown-menu" id="dropdown-menu" role="menu">
                <div class="dropdown-content">
                  <a href="#" class="dropdown-item">
                    Food
                  </a>
                  <a class="dropdown-item">
                    Drinks
                  </a>
                </div>
            </div>                     
          </div>

          <div class="field">
            <label class="label">Image</label>
            <div class="control">
              <input class="input" type="file" name="image" placeholder="4.99">
            </div>
          </div>
        
          <button class="button is-primary">Create</button>
        </form>
  </div>
</div>

@endsection