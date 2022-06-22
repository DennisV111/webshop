@foreach ($items as $item)
    <div class="col-sm-6 col-md-2 wow fadeInUp">
        <div class="products">
            <div class="product">
                <div class="product-image">
                    <div class="image">
                        <a href="{{ route('item.showDetailPage', $item->title) }}"><img
                                src="{{ asset('frontend/assets/img/' . $item->image_name) }}" alt="" /></a>
                    </div>
                    <!-- /.image -->

                    <div class="tag sale"><span>sale</span></div>
                </div>
                <!-- /.product-image -->

                <div class="product-info text-left">
                    <h3 class="name">
                        <a href="{{ route('item.showDetailPage', $item->title) }}">{{ $item->title }}</a>
                    </h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price">
                        <span class="price"> &euro;45.99 </span>
                        <span class="price-before-discount">{{ $item->price }}</span>
                    </div>
                    <!-- /.product-price -->
                </div>
                <!-- /.product-info -->
                <div class="cart clearfix animate-effect">
                    <div class="action">
                        <ul class="list-unstyled">
                            <li class="lnk shoppingcart">
                                <form action="{{ route('orderItem.index') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="item_id" value="{{ $item->id }}">
                                    <button data-toggle="tooltip" type="submit" title="Add Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                </form>
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
