@extends('admin/layout')

@section('content')
<a href="{{ route('category.create') }}" class=" mt-2 px-2 btn btn-primary">New Category</a>
				<div class="mt-2 px-2">
					<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">ID</th>
					      <th scope="col">Name</th>
					      <th scope="col"></th>
					      <th scope="col"></th>
					    </tr>
					  </thead>
					  <tbody>
						@foreach($categories as $category)
					    <tr>
  					      <th scope="row">{{ $category->id }}</th>
					      <td>{{ $category->name }}</td>
					      <td><a href="/admin/category/{{ $category->id }}/edit" class="btn btn-sm btn-warning">Edit</a></td>
  					      <td><form action="/admin/category/{{ $category->id }}" method="POST">
							  	@csrf
								@method('DELETE')

								<button class="btn btn-sm btn-danger">Remove</button>
							  </form>
						  </td>
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