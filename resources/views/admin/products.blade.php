@extends('admin/layout')

@section('content')

<a href="{{ route('products.create') }}" class=" mt-2 px-2 btn btn-primary">New Product</a>
				<div class="mt-2 px-2">
					<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">ID</th>
					      <th scope="col">Name</th>
					      <th scope="col">Price</th>
					      <th scope="col">Image</th>
					      <th scope="col"></th>
					      <th scope="col"></th>
					    </tr>
					  </thead>
					  <tbody>
						@foreach($products as $product)
					    <tr>
  					      <th scope="row">{{ $product->id }}</th>
					      <td>{{ $product->name }}</td>
					      <td>{{ $product->amount }}</td>
					      <td><a href="{{ $product->image }}">{{ $product->image }}</a></td>					      
							  <form action="/admin/products/{{ $product->id }}" method="POST">
								@csrf
								@method('DELETE')

								<td><a href="/admin/products/{{ $product->id}}/edit" class="btn btn-sm btn-warning">Edit</a></td>
								<td><button class="btn btn-sm btn-danger">Remove</button></td>
							  </form>
					    </tr>
						@endforeach
					  </tbody>
					</table>
				</div>
				<div class="container">
					<nav aria-label="Page navigation example">
					  <ul class="pagination justify-content-center">
					    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
					    <li class="page-item"><a class="page-link" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item"><a class="page-link" href="#">Next</a></li>
					  </ul>
					</nav>
				</div>
@endsection