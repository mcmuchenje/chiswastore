@extends('admin/layout')

@section('content')

<div class="column auto ml-5 mr-5">
	<a href="{{ route('product.create') }}" class="button is-info mb-5">New Product</a>
  <div class="container">
	  <table class="table is-fullwidth">
		  <thead>
			  <tr>
				  <th>Product ID</th>
				  <th>Product Name</th>
				  <th>Price</th>
				  <th>Image</th>
				  <th class="is-offset-8"></th>
				  <th></th>
			  </tr>
		  </thead>
		  <tbody>
			  @foreach ($products as $product)
			  <tr>
				  <td>{{ $product->id }}</td>
				  <td>{{ $product->name }}</td>
				  <td>{{ $product->amount }}</td>
				  <td>{{ $product->image }}</td>
				  <td><a href="" class="is-rounded has-text-justified button is-warning is-small">Edit</a></td>
				  <td><a href="" class="is-rounded has-text-centered button is-danger is-small">Remove</a></td>
			  </tr>
			  @endforeach
		  </tbody>
		  
	  </table>
  </div>
</div>
@endsection