<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="/css/bulma.min.css">
  </head>
  <body>
	<nav class="navbar" role="navigation" aria-label="main navigation">
		<div class="navbar-brand">
		  <a class="navbar-item" href="https://bulma.io">
			<img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
		  </a>
	  
		  <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
		  </a>
		</div>
	  
		<div id="navbarBasicExample" class="navbar-menu">
		
		  </div>
	  
		  <div class="navbar-end">
			  <a href="" class="bd-tw-button button">
				<span class="icon">
					<i class="fab fa-twitter"></i>
				</span>
			  </a>
			
		  </div>
		</div>
	  </nav>
	  <div>
		  <div class="columns mt-5">
			  <div class="column is-2 ml-5">
				<aside class="menu">
					<p class="menu-label">
					  General
					</p>
					<ul class="menu-list">
					  <li><a href="{{ route('products.index') }}">Dashboard</a></li>
					  <li><a href="{{ route('customers.index') }}">Customers</a></li>
					</ul>
					<p class="menu-label">
					  Store
					</p>
					<ul class="menu-list">
					  <li><a href="{{ route('products.index') }}">Products</a></li>
                      <li><a href="{{ route('orders.index') }}">Orders</a></li>
					  <li><a href="{{ route('category.index') }}">Category</a></li>
					</ul>
					<p class="menu-label">
					  Admin
					</p>
					<ul class="menu-list">
					  <li><a href="{{ route('products.index') }}">Users</a></li>
					</ul>
				  </aside>
			  </div>
			    @yield('content')
			  </div>
		  </div>
	  </div>
	  
  </body>
</html>