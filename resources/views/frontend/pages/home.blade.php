@extends('layouts.frontend.main')

@section('topbar')
    @include('frontend.header.topbar')
@endsection

@section('banner')
    <div id="main-slider" class="main-slider">

        <!-- Item -->
        @foreach($sliders as $slider)
        <div class="item">
            <img src="{{ $slider['image'] }}" alt="">
            <div class="banner-overlay">
                <div class="container position-center-center">

                    <!-- caption -->
                    <div class="caption style-2">
                        <h1>Reading a book is like <span>Re Writing it for yourself</span></h1>
                        <p>A Cambridge academic claims to have found the first use of a ‘brilliant innovation’ that has endured as a mark of incomplete speech</p>
                    </div>
                    <!-- caption -->

                </div>
            </div>
        </div>
        @endforeach
        <!-- Item -->

    </div>
@endsection

@section('content')


    <main class="main-content">

        <!-- Upcoming Release -->
        <section class="upcoming-release">

            <!-- Heading -->
            <div class="container-fluid p-0">
                <div class="release-heading pull-right h-white">
                    <h5>New Arrivals</h5>
                </div>
            </div>
            <!-- Heading -->

            <!-- Upcoming Release Slider -->
            <div class="upcoming-slider">
                <div class="container">

                    <!-- Release Book Detail -->
                    <div class="release-book-detail h-white p-white">
                        <div class="release-book-slider">
                            
                            <?php foreach (StoreProduct::getNewArrivals() as $key => $value) {
                                ?>
                                <div class="item">
                                    <div class="detail">
                                        <h5><a href="book-detail.html"><?php echo $value['title'] ?></a></h5>
                                        <p><?php echo $value['sub_title'] ?></p>
                                        <span>Rs. <?php echo $value['regular_price'] ?></i> <!-- <sup>00</sup> --></span>
                                        <i class="fa fa-angle-double-right"></i>
                                    </div>
                                    <div class="detail-img">
                                        <img src="{{ asset('/frontend/images/upcoming-release/img-01.jpg') }}" alt="">
                                    </div>
                                </div>
                                <?php
                            } ?>
                        </div>
                    </div>
                    <!-- Release Book Detail -->

                    <!-- Thumbs -->
                    <div class="release-thumb-holder">
                        <ul id="release-thumb" class="release-thumb">

                            <li>
                                <a data-slide-index="0" href="">
                                    <span>Summer</span>
                                    <img src="{{ asset('/frontend/images/upcoming-release/thumb/img-01.jpg') }}" alt="">
                                    <img class="b-shadow" src="{{ asset('/frontend/images/upcoming-release/b-shadow.png') }}" alt="">
                                    <span data-toggle="modal" data-target="#quick-view" class="plus-icon">+</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Thumbs -->

                </div>
            </div>
            <!-- Upcoming Release Slider -->

        </section>
        <!-- Upcoming Release -->

        <!-- Best Seller Products -->
        <section class="best-seller tc-padding">
            <div class="container">
                
                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading style-1">
                        <h2>Best <span class="theme-color">Seller</span> Books</h2>
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Best sellers Tabs -->
                <div id="best-sellers-tabs" class="best-sellers-tabs">

                    <!-- Nav tabs -->
                    <div class="tabs-nav-holder">
                        <ul class="tabs-nav">
                            @foreach($categories as $key=>$category)
                                <li><a href="#tab-{{ $key }}">{{ $category['title'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Nav tabs -->

                <!-- Tab panes -->
                <div class="tab-content">

                    <!-- Best Seller Slider -->
                    @foreach($categories as $key=>$category)
                        <div id="tab-{{ $key }}">
                            <div class="best-seller-slider">

                                <!-- Product Box -->
                                @foreach($category['products'] as $key=>$product)
                                    <div class="item">
                                        <div class="product-box">
                                            <div class="product-img">
                                                <img src="{{ asset('/frontend/images/best-seller/img-01.jpg') }}" alt="">
                                                <ul class="product-cart-option position-center-x">
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li>
                                                        <a 
                                                        class="addToCartTrgr" 
                                                        data-product-id="{{ $product['id'] }}"
                                                        data-user-id="{{ ( !empty(session('user_id') ) ) ? session('user_id'): urlencode($_SERVER['REMOTE_ADDR']) }}"
                                                        >
                                                            <i class="fa fa-cart-arrow-down"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                                </ul>
                                                <span class="sale-bacth">sale</span>
                                            </div>
                                            <div class="product-detail">
                                                <span>{{ $category['title'] }}</span>
                                                <h5><a href="book-detail.html">{{ $product['title'] }}</a></h5>
                                                
                                                <div class="rating-nd-price">
                                                    <strong><i class="fa fa-rupee"></i>{{ $product['regular_price'] }}</strong>
                                                    <ul class="rating-stars">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <!-- <div class="aurthor-detail">
                                                    <span><img src="{{ asset('/frontend/images/book-aurthor/img-01.jpg') }}" alt="">Pawel Kadysz</span>
                                                    <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- Product Box -->


                            </div>
                        </div>
                    @endforeach
                    <!-- Best Seller Slider -->


                </div>
                <!-- Tab panes -->

                </div>
                <!-- Best sellers Tabs -->

            </div>
        </section>
        <!-- Best Seller Products -->

        <!-- Add Banners -->
        <section class="add-banners-holder tc-padding-bottom">
            <div class="container">
                <div class="row">

                    <!-- Banner -->
                    <div class="col-lg-6 col-sm-12">
                        <div class="add-banner add-banner-1">
                            <div class="z-inedex-2 p-relative">
                                <h3>Celebrate the Book Authors</h3>
                                <p>How to Write a Book Review Request to Bloggers, a guide for authors</p>
                                <hr>
                                <strong class="font-merriweather">Buy Now 280.99 <sup>$</sup></strong>
                            </div>
                            <img class="adds-book" src="{{ asset('/frontend/images/add-banners/add-books/img-01.png') }}" alt="">
                        </div>
                    </div>
                    <!-- Banner -->

                    <!-- Banner -->
                    <div class="col-lg-6 col-sm-12">
                        <div class="add-banner add-banner-2">
                            <div class="z-inedex-2 p-relative">
                                <strong>Look Books 2016</strong>
                                <h3>Up to 20% off</h3>
                                <hr>
                                <p>of advance enternce exam Books</p>
                            </div>
                            <img class="adds-book" src="{{ asset('/frontend/images/add-banners/add-books/img-02.png') }}" alt="">
                        </div>
                    </div>
                    <!-- Banner -->

                </div>
            </div>
        </section>
        <!-- Add Banners -->

        <!-- Recomend products -->
        <div class="recomended-products tc-padding">
            <div class="container">
                
                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading">
                        <h2>Staff <span class="theme-color">Recomended </span> Books</h2>
                        <p>Whether you’re a large or small employer, enterpreneur, educational institution, professional</p>
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Recomend products Slider -->
                <div class="recomend-slider">

                    <!-- Item -->
                    <div class="item">
                        <a href="#" data-toggle="modal" data-target="#open-book-view"><img src="{{ asset('/frontend/images/recomended-products/img-01.jpg') }}" alt=""></a>
                    </div>
                    <!-- Item -->

                    <!-- Item -->
                    <div class="item">
                        <a href="#" data-toggle="modal" data-target="#open-book-view"><img src="{{ asset('/frontend/images/recomended-products/img-02.jpg') }}" alt=""></a>
                    </div>
                    <!-- Item -->

                    <!-- Item -->
                    <div class="item">
                        <a href="#" data-toggle="modal" data-target="#open-book-view"><img src="{{ asset('/frontend/images/recomended-products/img-03.jpg') }}" alt=""></a>
                    </div>
                    <!-- Item -->

                    <!-- Item -->
                    <div class="item">
                        <a href="#" data-toggle="modal" data-target="#open-book-view"><img src="{{ asset('/frontend/images/recomended-products/img-04.jpg') }}" alt=""></a>
                    </div>
                    <!-- Item -->

                    <!-- Item -->
                    <div class="item">
                        <a href="#" data-toggle="modal" data-target="#open-book-view"><img src="{{ asset('/frontend/images/recomended-products/img-05.jpg') }}" alt=""></a>
                    </div>
                    <!-- Item -->

                </div>
                <!-- Recomend products Slider -->

            </div>
        </div>
        <!-- Recomend products -->

         

        <!-- Services -->
        <section class="services-area tc-padding tc-padding-bottom">
            <div class="container">
                <div class="row">

                    <!-- Services Text -->
                    <div class="col-lg-4 col-xs-12">
                        <div class="services-text"> 
                            <strong>Our Book Shop Service</strong>
                            <h3>Bookselling is the commercial <span class="theme-color">Trading of books</span></h3>
                            <p>Scholars and students spent many hours in these bookshop schools reading, examining, and studying available books . or purchasing favourite selections for their private libraries. 
                            Book dealers traveled to </p>
                            <a href="shop-detail.html" class="btn-1 sm shadow-0">Read more<i aria-hidden="true" class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- Services Text -->

                    <!-- Services -->
                    <div class="col-lg-8 col-xs-12">
                        <div class="Services">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="service-column">
                                        <span class="service-icon"><i class="icon-amazing"></i></span>
                                        <h5><a href="#">Amazing Design Quality</a></h5>
                                        <p>Large online bookstores offer used books for sale, too. Individuals wishing to sell their used books using online bookstores agree</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="service-column">
                                        <span class="service-icon"><i class="icon-intuitive-design"></i></span>
                                        <h5><a href="#">Intuitive Design</a></h5>
                                        <p>Large online bookstores offer used books for sale, too. Individuals wishing to sell their used books using online bookstores agree</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="service-column m-0">
                                        <span class="service-icon"><i class="icon-responsive"></i></span>
                                        <h5><a href="#">Responsive</a></h5>
                                        <p>Large online bookstores offer used books for sale, too. Individuals wishing to sell their used books using online bookstores agree</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="service-column m-0">
                                        <span class="service-icon"><i class="icon-seo-optimized"></i></span>
                                        <h5><a href="#">SEO Optimized</a></h5>
                                        <p>Large online bookstores offer used books for sale, too. Individuals wishing to sell their used books using online bookstores agree</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Services -->

                </div>
            </div>
        </section>
        <!-- Services --> 


    </main>
    <input type="hiddden" name="_token" id="_token" value="{{ csrf_token() }}">
@endsection
