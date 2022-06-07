@extends('frontend.app')

@section('content')

<div class="wrap">
    <div id="arrow-left" class="arrow"></div>
    <div id="slider">
        <div class="slide slide1">
            <div class="slide-content">
                <h1>The Ultimate Guide To Buying A Book</h1>
                <h3>Choose Your Book</h3>
                <button class="btn"> shop now</button>
            </div>
            
        </div>
        <div class="slide slide2">
            <div class="slide-content">
                <span>upto 70% off</span>
                <button class="btn"> shop now</button>
            </div>
        </div>
        <div class="slide slide3">
            <div class="slide-content">
                <span>Celebration Day</span>
            </div>
        </div>
    </div>
    <div id="arrow-right" class="arrow"></div>
</div>

    <!-- Search -->

 <div class="box-search">
    <form>
        <input type="text" name="" placeholder="Search...">
        <input type="submit" name="" value="Search">
    </form>
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

    <!-- Shipping End -->




    
@endsection