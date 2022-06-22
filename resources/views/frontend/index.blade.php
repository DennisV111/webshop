@extends('frontend.app')

@section('content')
    <div class="wrap">
        <div id="arrow-left" class="arrow"></div>
        <div id="slider">
            <div class="slide pg1">
                <div class="slide-content">
                    <h1>The Ultimate Guide To Buying A Book</h1>
                    <h3>Choose Your Book</h3>
                    <form action="{{ route('item.showItemPage') }}">
                        <button type="submit" class="btn"> shop now</button>
                    </form>
                </div>

            </div>
            <div class="slide pg2">
                <div class="slide-content">
                    <span>upto 70% off</span>
                    <button type="submit" class="btn">Shop Now</button>
                </div>
            </div>
            <div class="slide pg3">
                <div class="slide-content">
                    <span>Celebration Day</span>
                </div>
            </div>
        </div>
        <div id="arrow-right" class="arrow"></div>
    </div>

    <!-- Search -->

    <div class="box-search">
        @include('frontend.body.search')
    </div>

    <!-- Search End -->


    <!-- Shipping-->


    <section class="icon-container">
        <div class="icons">
            <i class="fas fa-plane"></i>
            <div class="content">
                <h3>free shipping</h3>
                <p>order over &euro;100</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-lock"></i>
            <div class="content">
                <h3>secure payment</h3>
                <p>100 secure payment</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-redo-alt"></i>
            <div class="content">
                <h3>easy returns</h3>
                <p>10 days returns</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-headset"></i>
            <div class="content">
                <h3>24/7 suppurt</h3>
                <p>contact us anytime</p>
            </div>
        </div>
    </section>

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
                        <div class="image">
                            <span class="discount-tag">50% off</span>
                            <img src="{{ asset('frontend/assets/img/' . $item->image_name) }}" alt="">
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

    <!-- Shipping End -->
@endsection
