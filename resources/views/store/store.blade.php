@extends('store/layout')

@section('banner')
<section class="bg_light_yellow breadcrumb_section background_bg bg_fixed bg_size_contain" data-img-src="/store/images/breadcrumb_bg.png" style="background-image: url(&quot;/store/images/breadcrumb_bg.png&quot;); background-position: center center; background-size: cover;">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-sm-12 text-center">
            	<div class="page-title">
            		<h1>Chiswa Store</h1>
                </div>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')

<!-- START SECTION SHOP -->
<section>
	<div class="container">
    	<div class="row">
            <div class="col-lg-3 order-lg-first mt-5 mt-lg-0">
                <div class="sidebar">
                    <div class="widget">
                        <h5 class="widget_title">Categories</h5>
                        <ul class="list_none widget_categories border_bottom_dash">
                            @foreach ($categories as $category)
                            <li><a href="#"><span class="categories_name">{{ $category->name }}</span><span class="categories_num">(9)</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
            	<div class="row align-items-center justify-content-between pb-1 mb-4">
                	<div class="col-auto">
                    	<div class="custom_select">
                    	<select>
                        	<option value="default">Default sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="date">Sort by newness</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-auto">
                    	<span class="align-middle">Showing 1-9 of 50 results</span>
                    </div>
                </div>
                <div class="row shop_container grid_view">
                    @foreach($products as $product)
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="images/{{ $product->image }}" alt="{{ $product->name }}"></a>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">{{ $product->name }}</a></h6>
                                 <span class="price">${{ $product->amount }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12 mt-3 mt-lg-4">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="ion-ios-arrow-thin-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="ion-ios-arrow-thin-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
    
</section>

@endsection