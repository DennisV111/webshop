    {{-- Featured Start --}}

    <section class="featured" id="featured">
        <h1 class="heading"><span>featured books</span> </h1>


        <div class="featured-slider">
            @foreach ($featuredBooks as $item)
                <div class="wrapper">

                    <div class="box-book">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="{{ route('item.showDetailPage', $item->title) }}" class="fas fa-eye"></a>
                        </div>
                        <span class="discount-tag">50% off</span>
                        <div class="image">
                            <a href="{{ route('item.showDetailPage', $item->title) }}"><img
                                    src="{{ asset('frontend/assets/img/' . $item->image_name) }}"
                                    alt="" /></a>
                        </div>
                        <div class="content">
                            <h5>{{ $item->title }}</h5>
                            <div class="price">&euro;15 <span class="actual-price">{{ $item->price }}</span></div>
                            <a href="#" class="btn">add to cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Featured End --}}
