@extends('store/layout')

@section('banner')
<section class="bg_light_yellow breadcrumb_section background_bg bg_fixed bg_size_contain" data-img-src="/store/images/breadcrumb_bg.png" style="background-image: url(&quot;/store/images/breadcrumb_bg.png&quot;); background-position: center center; background-size: cover;">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-sm-12 text-center">
            	<div class="page-title">
            		<h1>Cart</h1>
                </div>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('store.index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('store.index')}}">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')

<section>
    <div class="container">
        <div class="row">
        	<div class="col-12">    
            	<div class="table-responsive shop_cart_table">
                	<table class="table">
                    	<thead>
                        	<tr>
                            	<th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                                <th class="product-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( Cart::content() as $cart )
                        	<tr>
                            	<td class="product-thumbnail"><a href="#"><img src="{{ $cart->model->image }}" alt="product1"></a></td>
                                <td class="product-name" data-title="Product"><a href="#">{{ $cart->name }}</a></td>
                                <td class="product-price" data-title="Price">{{ $cart->price }}</td>
                                <td class="product-quantity" data-title="Quantity"><div class="quantity">
                                <input type="button" value="-" class="minus">
                                <input type="text" name="quantity" value="{{ $cart->qty }}" title="Qty" class="qty" size="4">
                                <input type="button" value="+" class="plus">
                              </div></td>
                              	<td class="product-subtotal" data-title="Total">{{ $cart->subtotal }}</td>
                                <td class="product-remove" data-title="Remove"><a href="#"><i class="ti-close"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        	<tr>
                            	<td colspan="6" class="px-0">
                                	<div class="row no-gutters align-items-center">
                                    	<div class="col-lg-4 col-md-6 mb-3 mb-md-0">
                                    	</div>
                                        <div class="col-lg-8 col-md-6 text-left text-md-right">
                                            <a href="#" class="btn btn-default btn-sm">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="small_divider clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            	<div class="heading_s2">
            		<h5>Cart Totals</h5>
                </div>
                <div class="table-responsive">
                	<table class="table">
                        <tbody><tr>
                            <td class="cart_total_label">Cart Subtotal</td>
                            <td class="cart_total_amount">${{ Cart::total() }}</td>
                        </tr>
                        <tr>
                            <td class="cart_total_label">Shipping</td>
                            <td class="cart_total_amount">Free Shipping</td>
                        </tr>
                        <tr>
                            <td class="cart_total_label">Total</td>
                            <td class="cart_total_amount"><strong>${{ Cart::total() }}</strong></td>
                        </tr>
                    </tbody></table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection