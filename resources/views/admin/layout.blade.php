<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<title></title>
	<style type="text/css">
		a {
			color: #555;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-light bg-scondary" style="background-color: #e2e3e5; border: 1px solid rgba(0,0,0,.125);">
	  <div class="container-fluid">
	    <span class="navbar-brand mb-0 h1">Admin Panel</span>
	    <button class="btn btn-outline-success btn-sm" type="submit">Munyaradzi</button>
	  </div>
	</nav>
	<div>
		<div class="row">
			<div class="col col-lg-2">
				<div class="mt-2 px-2">
					<ul class="list-group">
					  <li class="list-group-item list-group-item-secondary">General</li>
					  <a href=""><li class="list-group-item">Dashboard</li></a>
					  <a href=""><li class="list-group-item">Customers</li></a>
					</ul>
				</div>
				<div class="mt-2 px-2">
					<ul class="list-group">
					  <li class="list-group-item list-group-item-secondary">Store</li>
					  <a href=""><li class="list-group-item active">Products</li></a>
					  <a href=""><li class="list-group-item">Orders</li></a>
					  <a href=""><li class="list-group-item">Categories</li></a>
					</ul>
				</div>
				<div class="mt-2 px-2">
					<ul class="list-group">
						<li class="list-group-item list-group-item-secondary">Users</li>
				  		<a href=""><li class="list-group-item">Admins</li></a>
					</ul>
				</div>
			</div>
			<div class="col">
				@yield('content')
			</div>			
		</div>
			
	</div>
</body>
</html>