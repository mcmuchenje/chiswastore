@extends('store/layout')

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
                            <li><a href="#"><span class="categories_name">Drinks</span><span class="categories_num">(9)</span></a></li>
                            <li><a href="#"><span class="categories_name">Vegetables</span><span class="categories_num">(6)</span></a></li>
                            <li><a href="#"><span class="categories_name">Fruits Fresh</span><span class="categories_num">(4)</span></a></li>
                            <li><a href="#"><span class="categories_name">Juice</span><span class="categories_num">(7)</span></a></li>
                            <li><a href="#"><span class="categories_name">Fresh Meal</span><span class="categories_num">(12)</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row align-items-center justify-content-between pb-1 mb-4">
                    <div class="col-auto">
                        <span class="align-middle">Showing 1-9 of 50 results</span>
                    </div>
                </div>
                <div class="row shop_container grid_view">
                    <div class="row shop_container grid_view">
                        @foreach ($products as $product) 
                        <div class="col-lg-4 col-sm-6">
                            <div class="product">
                                <div class="product_img">
                                    <a href="#"><img src="/store/images/resize-16286808731881414729test.jpg" alt="product_img1"></a>
                                </div>
                                <div class="product_info">
                                    <h6><a href="#">{{ $product->name }}</a></h6>
                                    <span class="price">${{ $product->amount }}</span>
                                </div>
                                <div>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <input type="hidden" name="name" value="{{ $product->name }}">
                                        <input type="hidden" name="price" value="{{ $product->amount }}">
                                        <button class="button" type="submit">Add to Cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>  
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
    
</section>

@endsection