@extends('frontend.app')

@section('content')
    <div class="search-result-container">
        <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active" id="grid-container">
                <div class="item-product">
                    <div class="row">

                        @foreach ($items as $item)
                            <div class="col-sm-6 col-md-2 wow fadeInUp">
                                <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="detail.html"><img
                                                        src="{{ asset('frontend/assets/img/' . $item->image_name) }}"
                                                        alt="" /></a>
                                            </div>
                                            <!-- /.image -->

                                            <div class="tag sale"><span>sale</span></div>
                                        </div>
                                        <!-- /.product-image -->

                                        <div class="product-info text-left">
                                            <h3 class="name">
                                                <a
                                                    href="{{ url('book_details/detail/' . $item->id) }}">{{ $item->title }}</a>
                                            </h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>
                                            <div class="product-price">
                                                <span class="price"> $45.99 </span>
                                                <span class="price-before-discount">{{ $item->price }}</span>
                                            </div>
                                            <!-- /.product-price -->
                                        </div>
                                        <!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="lnk shoppingcart">
                                                        <a class="add-to-cart" href="detail.html" title="Shopping Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="lnk wishlist">
                                                        <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                            <i class="icon fa fa-heart"></i>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <!-- /.action -->
                                        </div>
                                        <!-- /.cart -->
                                    </div>
                                    <!-- /.product -->
                                </div>
                                <!-- /.products -->
                            </div>
                            <!-- /.item -->
                        @endforeach
                    @endsection
