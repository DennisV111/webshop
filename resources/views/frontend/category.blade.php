@extends('frontend.app')

@section('content')
    <div class="category-container">
        <div class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-inner">
                    <ul class="list-inline list-unstyled">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="active">Category</li>
                    </ul>
                </div>
                <!-- /.breadcrumb-inner -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.breadcrumb -->
        <div class="body-content outer-top-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 sidebar">
                        <!-- ================================== TOP NAVIGATION ================================== -->
                        <div class="side-menu animate-dropdown outer-bottom-lg">
                            <div class="head">
                                <i class="icon fa fa-align-justify fa-fw"></i> Categories
                            </div>
                            <nav class="yamm megamenu-horizontal">


                                @foreach ($item_categories as $item_category)
                                    <ul class="nav">
                                        <li class="dropdown menu-item">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                    class="icon fa fa-building"
                                                    aria-hidden="true"></i>{{ $item_category->name }}</a>
                                            <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                            <ul class="dropdown-menu mega-menu">
                                                <li class="yamm-content">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-3">
                                                            <ul class="links list-unstyled">

                                                                <li>
                                                                    <a href="#">Architectural Structure & Design</a>
                                                                </li>
                                                                <li><a href="#">History Of Architecture </a></li>
                                                                <li>
                                                                    <a href="#">Individual Architects & Architectural
                                                                        Firms</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Architecture: Professional Practice</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Landscape Art & Architecture</a>
                                                                </li>
                                                                <li><a href="#">Public Buildings</a></li>
                                                                <li><a href="#">Theory Of Architecture</a></li>
                                                                <li>
                                                                    <a href="#">Residential & Domestic Buildings</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- /.row -->
                                                </li>
                                                <!-- /.yamm-content -->
                                            </ul>
                                            <!-- /.dropdown-menu -->
                                        </li>
                                        <!-- /.menu-item -->


                                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                        <!-- /.dropdown-menu -->
                                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                        </li>
                                        <!-- /.menu-item -->

                                        <!-- /.menu-item -->
                                    </ul>
                                @endforeach
                                <!-- /.nav -->
                            </nav>
                            <!-- /.megamenu-horizontal -->
                        </div>
                        <!-- /.side-menu -->
                        <!-- ================================== TOP NAVIGATION : END ================================== -->
                        <div class="sidebar-module-container">
                            <div class="sidebar-filter">

                                <!-- ============================================== PRICE SILDER============================================== -->
                                <div class="sidebar-widget wow fadeInUp">
                                    <div class="widget-header">
                                        <h4 class="widget-title">Price Slider</h4>
                                    </div>
                                    <div class="sidebar-widget-body m-t-10">
                                        <div class="price-range-holder">
                                            <span class="min-max">
                                                <span class="pull-left">$50.00</span>
                                                <span class="pull-right">$300.00</span>
                                            </span>
                                            <input type="text" id="amount"
                                                style="
                                                                                                                                                                                                                        border: 0;
                                                                                                                                                                                                                        color: #666666;
                                                                                                                                                                                                                        font-weight: bold;
                                                                                                                                                                                                                        text-align: center;
                                                                                                                                                                                                                    " />
                                            <input type="text" class="price-slider" value="" />
                                        </div>
                                        <!-- /.price-range-holder -->
                                        <a href="#" class="lnk btn btn-primary">Show Now</a>
                                    </div>
                                    <!-- /.sidebar-widget-body -->
                                </div>
                                <!-- /.sidebar-widget -->
                                <!-- ============================================== PRICE SILDER : END ============================================== -->
                                <!-- ============================================== AUTHERS============================================== -->


                                <div class="sidebar-widget wow fadeInUp">
                                    <div class="widget-header">
                                        <h4 class="widget-title">AUTHORS</h4>
                                    </div>
                                    <div class="sidebar-widget-body">
                                        <ul class="list">
                                            @foreach ($authors as $author)
                                                <li style="color: black"><a href="">{{ $author->author }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- /.sidebar-widget-body -->
                                </div>
                                <!-- /.sidebar-widget -->
                                <!-- ============================================== AUTHERS: END ============================================== -->
                                <!----------- Testimonials------------->
                                <div class="sidebar-widget wow fadeInUp outer-top-vs">
                                    <div id="advertisement" class="advertisement">
                                        <div class="item">
                                            <div class="avatar">
                                                <img src="assets/images/testimonials/member1.png" alt="Image" />
                                            </div>
                                            <div class="testimonials">
                                                <em>"</em> Vtae sodales aliq uam morbi non sem lacus
                                                port mollis. Nunc condime tum metus eud molest sed
                                                consectetuer.<em>"</em>
                                            </div>
                                            <div class="clients_author">
                                                John Doe <span>Abc Company</span>
                                            </div>
                                            <!-- /.container-fluid -->
                                        </div>
                                        <!-- /.item -->

                                        <div class="item">
                                            <div class="avatar">
                                                <img src="assets/images/testimonials/member3.png" alt="Image" />
                                            </div>
                                            <div class="testimonials">
                                                <em>"</em>Vtae sodales aliq uam morbi non sem lacus port
                                                mollis. Nunc condime tum metus eud molest sed
                                                consectetuer.<em>"</em>
                                            </div>
                                            <div class="clients_author">
                                                Stephen Doe <span>Xperia Designs</span>
                                            </div>
                                        </div>
                                        <!-- /.item -->

                                        <div class="item">
                                            <div class="avatar">
                                                <img src="assets/images/testimonials/member2.png" alt="Image" />
                                            </div>
                                            <div class="testimonials">
                                                <em>"</em> Vtae sodales aliq uam morbi non sem lacus
                                                port mollis. Nunc condime tum metus eud molest sed
                                                consectetuer.<em>"</em>
                                            </div>
                                            <div class="clients_author">
                                                Saraha Smith <span>Datsun &amp; Co</span>
                                            </div>
                                            <!-- /.container-fluid -->
                                        </div>
                                        <!-- /.item -->
                                    </div>
                                    <!-- /.owl-carousel -->
                                </div>

                                <!-- ============================================== Testimonials: END ============================================== -->

                            </div>
                            <!-- /.sidebar-filter -->
                        </div>
                        <!-- /.sidebar-module-container -->
                    </div>
                    <!-- /.sidebar -->
                    <!-- ========================================== SECTION – HERO ========================================= -->
                    <div class="col-md-9">

                        <div id="category" class="category-carousel hidden-xs">
                            <div class="item">
                                <div class="image">
                                    <img src="{{ asset('frontend/assets/img/Background/cat1.jpg') }}" alt=""
                                        class="img-responsive" />
                                </div>
                                <div class="container-fluid">
                                    <div class="caption vertical-top text-left">
                                        <div class="big-text">Big Sale</div>
                                        <div class="excerpt hidden-sm hidden-md">
                                            Save up to 49% off
                                        </div>
                                        <div class="excerpt-normal hidden-sm hidden-md">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        </div>
                                    </div>
                                    <!-- /.caption -->
                                </div>
                                <!-- /.container-fluid -->
                            </div>
                        </div>

                        <div class="clearfix filters-container m-t-10">
                            <div class="row">
                                <div class="col col-sm-6 col-md-2">
                                    <div class="filter-tabs">
                                        <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                                            <li class="active">
                                                <a data-toggle="tab" href="#grid-container"><i
                                                        class="icon fa fa-th-large"></i>Grid</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.filter-tabs -->
                                </div>
                                <!-- /.col -->
                                <div class="col col-sm-12 col-md-6">
                                    <div class="col col-sm-3 col-md-6 no-padding">
                                        <div class="lbl-cnt">
                                            <span class="lbl">Sort by</span>
                                            <div class="fld inline">
                                                <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                                    <button data-toggle="dropdown" type="button"
                                                        class="btn dropdown-toggle">
                                                        Position <span class="caret"></span>
                                                    </button>
                                                    <ul role="menu" class="dropdown-menu">
                                                        <li role="presentation">
                                                            <a href="#">position</a>
                                                        </li>
                                                        <li role="presentation">
                                                            <a href="#">Price:Lowest first</a>
                                                        </li>
                                                        <li role="presentation">
                                                            <a href="#">Price:HIghest first</a>
                                                        </li>
                                                        <li role="presentation">
                                                            <a href="#">Product Name:A to Z</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /.fld -->
                                        </div>
                                        <!-- /.lbl-cnt -->
                                    </div>
                                    <!-- /.col -->

                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <div class="search-result-container">
                            <div id="myTabContent" class="tab-content category-list">
                                <div class="tab-pane active" id="grid-container">
                                    <div class="category-product">
                                        <div class="row">

                                            @foreach ($items as $item)
                                                <div class="col-sm-6 col-md-3 wow fadeInUp">
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
                                                                    <a href="detail.html">{{ $item->name }}</a>
                                                                </h3>
                                                                <div class="rating rateit-small"></div>
                                                                <div class="description"></div>
                                                                <div class="product-price">
                                                                    <span class="price"> $45.99 </span>
                                                                    <span
                                                                        class="price-before-discount">{{ $item->price }}</span>
                                                                </div>
                                                                <!-- /.product-price -->
                                                            </div>
                                                            <!-- /.product-info -->
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="lnk shoppingcart">
                                                                            <a class="add-to-cart" href="detail.html"
                                                                                title="Shopping Cart">
                                                                                <i class="fa fa-shopping-cart"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li class="lnk wishlist">
                                                                            <a class="add-to-cart" href="detail.html"
                                                                                title="Wishlist">
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

                                            {{ $items->links() }}



                                            <!-- /.product-info -->
                                            <!-- /.cart -->
                                        </div>
                                        <!-- /.product -->
                                    </div>
                                    <!-- /.products -->
                                </div>
                                <!-- /.item -->


                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.category-product -->
                    </div>
                    <!-- /.tab-pane -->


                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.search-result-container -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container -->
    </div>
    <!-- /.body-content -->

    </div>
@endsection
<!-- ============================================================= FOOTER ============================================================= -->
