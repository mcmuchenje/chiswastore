@extends('admin/layout')

@section('content')

<div class="container mt-5 mr-5">
  <div>
      <form method="POST" action="{{ route('category.store') }}" class="box">
        @csrf
          <div class="field">
            <label class="label">Category Name</label>
            <div class="control">
              <input class="input" type="text"  name="name" placeholder="e.g. Drinks">
            </div>
          </div>        
          <button class="button is-primary">Create</button>
        </form>
  </div>
</div>

@endsection