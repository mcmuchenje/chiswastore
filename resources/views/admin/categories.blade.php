@extends('admin/layout')

@section('content')

<div class="column auto ml-5 mr-5">
	<a href="{{ route('category.create') }}" class="button is-info mb-5">New Category</a>
  <div class="container">
	  <table class="table is-fullwidth">
		  <thead>
			  <tr>
				  <th>Category ID</th>
				  <th>Category Name</th>
				  <th class="is-offset-8"></th>
				  <th></th>
			  </tr>
		  </thead>
		  <tbody>
			  @foreach ($categories as $category)
			  <tr>
				  <td>{{ $category->id }}</td>
				  <td>{{ $category->name }}</td>
				  <td><a href="" class="is-rounded has-text-justified button is-warning is-small">Edit</a></td>
				  <td><a href="" class="is-rounded has-text-centered button is-danger is-small">Remove</a></td>
			  </tr>
			  @endforeach
		  </tbody>
		  
	  </table>
  </div>
</div>

@endsection