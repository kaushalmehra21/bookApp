@extends('layouts.frontend.main')

@section('content')
    <main class="main-content">

        <!-- Upcoming Release -->
        <section class="upcoming-release">

            <!-- Heading -->
            <div class="container-fluid p-0">
                <div class="release-heading pull-right h-white">
                    <h5>New and Upcoming Release</h5>
                </div>
            </div>
            <!-- Heading -->

            <!-- Upcoming Release Slider -->
            <div class="upcoming-slider">
                <div class="container">

                    <!-- Release Book Detail -->
                    <div class="release-book-detail h-white p-white">
                        <div class="release-book-slider">
                            <div class="item">
                                <div class="detail">
                                    <h5><a href="book-detail.html">Summer Festival</a></h5>
                                    <p>A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.</p>
                                    <span>$25.<sup>00</sup></span>
                                    <i class="fa fa-angle-double-right"></i>
                                </div>
                                <div class="detail-img">
                                    <img src="{{ asset('/frontend/images/upcoming-release/img-01.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="detail">
                                    <h5><a href="book-detail.html">Ramdan Kareem</a></h5>
                                    <p>A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.</p>
                                    <span>$25.<sup>00</sup></span>
                                    <i class="fa fa-angle-double-right"></i>
                                </div>
                                <div class="detail-img">
                                    <img src="{{ asset('/frontend/images/upcoming-release/img-02.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="detail">
                                    <h5><a href="book-detail.html">Rcok Fastival</a></h5>
                                    <p>A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.</p>
                                    <span>$25.<sup>00</sup></span>
                                    <i class="fa fa-angle-double-right"></i>
                                </div>
                                <div class="detail-img">
                                    <img src="{{ asset('/frontend/images/upcoming-release/img-03.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="detail">
                                    <h5><a href="book-detail.html">Cover Design</a></h5>
                                    <p>A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.</p>
                                    <span>$25.<sup>00</sup></span>
                                    <i class="fa fa-angle-double-right"></i>
                                </div>
                                <div class="detail-img">
                                    <img src="{{ asset('/frontend/images/upcoming-release/img-04.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="detail">
                                    <h5><a href="book-detail.html">Festa Junnia</a></h5>
                                    <p>A masterpiece. This is the best book I everyone interested in business. Lorem ipsum. dolor sit amet, consectetur adipisicing.</p>
                                    <span>$25.<sup>00</sup></span>
                                    <i class="fa fa-angle-double-right"></i>
                                </div>
                                <div class="detail-img">
                                    <img src="{{ asset('/frontend/images/upcoming-release/img-05.jpg') }}" alt="">
                                </div>
                            </div>
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
                            <li>
                                <a data-slide-index="1" href="" class="active">
                                    <span>Ramdan</span>
                                    <img src="{{ asset('/frontend/images/upcoming-release/thumb/img-02.jpg') }}" alt="">
                                    <img class="b-shadow" src="{{ asset('/frontend/images/upcoming-release/b-shadow.png') }}" alt="">
                                    <span data-toggle="modal" data-target="#quick-view" class="plus-icon">+</span>
                                </a>
                            </li>
                            <li> 
                                <a data-slide-index="2" href="">
                                    <span>Rcok</span>
                                    <img src="{{ asset('/frontend/images/upcoming-release/thumb/img-03.jpg') }}" alt="">
                                    <img class="b-shadow" src="{{ asset('/frontend/images/upcoming-release/b-shadow.png') }}" alt="">
                                    <span data-toggle="modal" data-target="#quick-view" class="plus-icon">+</span>
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="3" href="">
                                    <span>Cover</span>
                                    <img src="{{ asset('/frontend/images/upcoming-release/thumb/img-04.jpg') }}" alt="">
                                    <img class="b-shadow" src="{{ asset('/frontend/images/upcoming-release/b-shadow.png') }}" alt="">
                                    <span data-toggle="modal" data-target="#quick-view" class="plus-icon">+</span>
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="4" href="">
                                    <span>Festa</span>
                                    <img src="{{ asset('/frontend/images/upcoming-release/thumb/img-05.jpg') }}" alt="">
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
                            <li><a href="#tab-1">Novel</a></li>
                            <li><a href="#tab-2">Leadership</a></li>
                            <li><a href="#tab-3">Peotry</a></li>
                            <li><a href="#tab-4">Mathmatics</a></li>
                            <li><a href="#tab-5">Kids Books</a></li>
                        </ul>
                    </div>
                    <!-- Nav tabs -->

                <!-- Tab panes -->
                <div class="tab-content">

                    <!-- Best Seller Slider -->
                    <div id="tab-1">
                        <div class="best-seller-slider">

                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="{{ asset('/frontend/images/best-seller/img-01.jpg') }}" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                        <span class="sale-bacth">sale</span>
                                    </div>
                                    <div class="product-detail">
                                        <span>Novel</span>
                                        <h5><a href="book-detail.html">Mars Club</a></h5>
                                        <p>How to Write a Book Review...</p>
                                        <div class="rating-nd-price">
                                            <strong>$280.99</strong>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="aurthor-detail">
                                            <span><img src="{{ asset('/frontend/images/book-aurthor/img-01.jpg') }}" alt="">Pawel Kadysz</span>
                                            <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box -->

                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="{{ asset('/frontend/images/best-seller/img-02.jpg') }}" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <span>Novel</span>
                                        <h5><a href="book-detail.html">Beer Fastival</a></h5>
                                        <p>How to Write a Book Review...</p>
                                        <div class="rating-nd-price">
                                            <strong>$280.99</strong>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="aurthor-detail">
                                            <span><img src="{{ asset('/frontend/images/book-aurthor/img-02.jpg') }}" alt="">Pawel Kadysz</span>
                                            <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box -->

                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="{{ asset('/frontend/images/best-seller/img-03.jpg') }}" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <span>Novel</span>
                                        <h5><a href="book-detail.html">Cover Design</a></h5>
                                        <p>How to Write a Book Review...</p>
                                        <div class="rating-nd-price">
                                            <strong>$280.99</strong>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="aurthor-detail">
                                            <span><img src="{{ asset('/frontend/images/book-aurthor/img-03.jpg') }}" alt="">Pawel Kadysz</span>
                                            <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box -->

                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="{{ asset('/frontend/images/best-seller/img-04.jpg') }}" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                        <span class="sale-bacth">sale</span>
                                    </div>
                                    <div class="product-detail">
                                        <span>Novel</span>
                                        <h5><a href="book-detail.html">Festa Junnia</a></h5>
                                        <p>How to Write a Book Review...</p>
                                        <div class="rating-nd-price">
                                            <strong>$280.99</strong>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="aurthor-detail">
                                            <span><img src="{{ asset('/frontend/images/book-aurthor/img-04.jpg') }}" alt="">Pawel Kadysz</span>
                                            <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box -->

                        </div>
                    </div>
                    <!-- Best Seller Slider -->

                    <!-- Best Seller Slider -->
                    <div id="tab-2">
                        <div class="best-seller-slider">

                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="{{ asset('/frontend/images/best-seller/img-04.jpg') }}" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                        <span class="sale-bacth">sale</span>
                                    </div>
                                    <div class="product-detail">
                                        <span>Novel</span>
                                        <h5><a href="book-detail.html">Rebel Spring</a></h5>
                                        <p>How to Write a Book Review...</p>
                                        <div class="rating-nd-price">
                                            <strong>$280.99</strong>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="aurthor-detail">
                                            <span><img src="{{ asset('/frontend/images/book-aurthor/img-01.jpg') }}" alt="">Pawel Kadysz</span>
                                            <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box -->

                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="{{ asset('/frontend/images/best-seller/img-03.jpg') }}" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <span>Novel</span>
                                        <h5><a href="book-detail.html">Slow Travel</a></h5>
                                        <p>How to Write a Book Review...</p>
                                        <div class="rating-nd-price">
                                            <strong>$280.99</strong>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="aurthor-detail">
                                            <span><img src="{{ asset('/frontend/images/book-aurthor/img-02.jpg') }}" alt="">Pawel Kadysz</span>
                                            <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box -->

                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="{{ asset('/frontend/images/best-seller/img-02.jpg') }}" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <span>Novel</span>
                                        <h5><a href="book-detail.html">Trial by Fire</a></h5>
                                        <p>How to Write a Book Review...</p>
                                        <div class="rating-nd-price">
                                            <strong>$280.99</strong>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="aurthor-detail">
                                            <span><img src="{{ asset('/frontend/images/book-aurthor/img-03.jpg') }}" alt="">Pawel Kadysz</span>
                                            <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box -->

                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="{{ asset('/frontend/images/best-seller/img-01.jpg') }}" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <span>Novel</span>
                                        <h5><a href="book-detail.html">Jewels of Nizam</a></h5>
                                        <p>How to Write a Book Review...</p>
                                        <div class="rating-nd-price">
                                            <strong>$280.99</strong>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="aurthor-detail">
                                            <span><img src="{{ asset('/frontend/images/book-aurthor/img-04.jpg') }}" alt="">Pawel Kadysz</span>
                                            <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box -->

                        </div>
                    </div>
                    <!-- Best Seller Slider -->

                    <!-- Best Seller Slider -->
                    <div id="tab-3">
                        <div class="best-seller-slider">

                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="{{ asset('/frontend/images/best-seller/img-01.jpg') }}" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                        <span class="sale-bacth">sale</span>
                                    </div>
                                    <div class="product-detail">
                                        <span>Novel</span>
                                        <h5><a href="book-detail.html">Jewels of Nizam</a></h5>
                                        <p>How to Write a Book Review...</p>
                                        <div class="rating-nd-price">
                                            <strong>$280.99</strong>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="aurthor-detail">
                                            <span><img src="{{ asset('/frontend/images/book-aurthor/img-01.jpg') }}" alt="">Pawel Kadysz</span>
                                            <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box -->

                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="{{ asset('/frontend/images/best-seller/img-02.jpg') }}" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                        <span class="sale-bacth">sale</span>
                                    </div>
                                    <div class="product-detail">
                                        <span>Novel</span>
                                        <h5><a href="book-detail.html">Trial by Fire</a></h5>
                                        <p>How to Write a Book Review...</p>
                                        <div class="rating-nd-price">
                                            <strong>$280.99</strong>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="aurthor-detail">
                                            <span><img src="{{ asset('/frontend/images/book-aurthor/img-02.jpg') }}" alt="">Pawel Kadysz</span>
                                            <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box -->

                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="{{ asset('/frontend/images/best-seller/img-03.jpg') }}" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <span>Novel</span>
                                        <h5><a href="book-detail.html">Slow Travel</a></h5>
                                        <p>How to Write a Book Review...</p>
                                        <div class="rating-nd-price">
                                            <strong>$280.99</strong>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="aurthor-detail">
                                            <span><img src="{{ asset('/frontend/images/book-aurthor/img-03.jpg') }}" alt="">Pawel Kadysz</span>
                                            <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box -->

                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="{{ asset('/frontend/images/best-seller/img-04.jpg') }}" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <span>Novel</span>
                                        <h5><a href="book-detail.html">Rebel Spring</a></h5>
                                        <p>How to Write a Book Review...</p>
                                        <div class="rating-nd-price">
                                            <strong>$280.99</strong>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="aurthor-detail">
                                            <span><img src="{{ asset('/frontend/images/book-aurthor/img-04.jpg') }}" alt="">Pawel Kadysz</span>
                                            <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box -->

                        </div>
                    </div>
                    <!-- Best Seller Slider -->

                    <!-- Best Seller Slider -->
                    <div id="tab-4">
                        <div class="best-seller-slider">

                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="{{ asset('/frontend/images/best-seller/img-04.jpg') }}" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <span>Novel</span>
                                        <h5><a href="book-detail.html">Rebel Spring</a></h5>
                                        <p>How to Write a Book Review...</p>
                                        <div class="rating-nd-price">
                                            <strong>$280.99</strong>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="aurthor-detail">
                                            <span><img src="{{ asset('/frontend/images/book-aurthor/img-01.jpg') }}" alt="">Pawel Kadysz</span>
                                            <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box -->

                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="{{ asset('/frontend/images/best-seller/img-03.jpg') }}" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                        <span class="sale-bacth">sale</span>
                                    </div>
                                    <div class="product-detail">
                                        <span>Novel</span>
                                        <h5><a href="book-detail.html">Slow Travel</a></h5>
                                        <p>How to Write a Book Review...</p>
                                        <div class="rating-nd-price">
                                            <strong>$280.99</strong>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="aurthor-detail">
                                            <span><img src="{{ asset('/frontend/images/book-aurthor/img-02.jpg') }}" alt="">Pawel Kadysz</span>
                                            <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box -->

                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="{{ asset('/frontend/images/best-seller/img-02.jpg') }}" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <span>Novel</span>
                                        <h5><a href="book-detail.html">Trial by Fire</a></h5>
                                        <p>How to Write a Book Review...</p>
                                        <div class="rating-nd-price">
                                            <strong>$280.99</strong>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="aurthor-detail">
                                            <span><img src="{{ asset('/frontend/images/book-aurthor/img-03.jpg') }}" alt="">Pawel Kadysz</span>
                                            <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box -->

                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="{{ asset('/frontend/images/best-seller/img-01.jpg') }}" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                        <span class="sale-bacth">sale</span>
                                    </div>
                                    <div class="product-detail">
                                        <span>Novel</span>
                                        <h5><a href="book-detail.html">Jewels of Nizam</a></h5>
                                        <p>How to Write a Book Review...</p>
                                        <div class="rating-nd-price">
                                            <strong>$280.99</strong>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="aurthor-detail">
                                            <span><img src="{{ asset('/frontend/images/book-aurthor/img-04.jpg') }}" alt="">Pawel Kadysz</span>
                                            <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box -->

                        </div>
                    </div>
                    <!-- Best Seller Slider -->

                    <!-- Best Seller Slider -->
                    <div id="tab-5">
                        <div class="best-seller-slider">

                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="{{ asset('/frontend/images/best-seller/img-04.jpg') }}" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                        <span class="sale-bacth">sale</span>
                                    </div>
                                    <div class="product-detail">
                                        <span>Novel</span>
                                        <h5><a href="book-detail.html">Rebel Spring</a></h5>
                                        <p>How to Write a Book Review...</p>
                                        <div class="rating-nd-price">
                                            <strong>$280.99</strong>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="aurthor-detail">
                                            <span><img src="{{ asset('/frontend/images/book-aurthor/img-01.jpg') }}" alt="">Pawel Kadysz</span>
                                            <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box -->

                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="{{ asset('/frontend/images/best-seller/img-03.jpg') }}" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <span>Novel</span>
                                        <h5><a href="book-detail.html">Slow Travel</a></h5>
                                        <p>How to Write a Book Review...</p>
                                        <div class="rating-nd-price">
                                            <strong>$280.99</strong>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="aurthor-detail">
                                            <span><img src="{{ asset('/frontend/images/book-aurthor/img-02.jpg') }}" alt="">Pawel Kadysz</span>
                                            <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box -->

                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="{{ asset('/frontend/images/best-seller/img-02.jpg') }}" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <span>Novel</span>
                                        <h5><a href="book-detail.html">Trial by Fire</a></h5>
                                        <p>How to Write a Book Review...</p>
                                        <div class="rating-nd-price">
                                            <strong>$280.99</strong>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="aurthor-detail">
                                            <span><img src="{{ asset('/frontend/images/book-aurthor/img-03.jpg') }}" alt="">Pawel Kadysz</span>
                                            <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box -->

                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="{{ asset('/frontend/images/best-seller/img-01.jpg') }}" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <span>Novel</span>
                                        <h5><a href="book-detail.html">Jewels of Nizam</a></h5>
                                        <p>How to Write a Book Review...</p>
                                        <div class="rating-nd-price">
                                            <strong>$280.99</strong>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="aurthor-detail">
                                            <span><img src="{{ asset('/frontend/images/book-aurthor/img-04.jpg') }}" alt="">Pawel Kadysz</span>
                                            <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box -->

                        </div>
                    </div>
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

        <!-- Book Collections -->
        <section class="book-collection">
            <div class="container">
                <div class="row">

                    <!-- Book Collections Tabs -->
                    <div id="book-collections-tabs">

                        <!-- collection Name -->
                        <div class="col-lg-3 col-sm-12">
                            <div class="sidebar">
                                <h4>Top Books Catagories</h4>
                                <ul>
                                    <li><a href="#">Science fiction</a></li>
                                    <li><a href="#">Satire</a></li>
                                    <li><a href="#">Drama</a></li>
                                    <li><a href="#">Action and Adventure</a></li>
                                    <li><a href="#">Self help</a></li>
                                    <li><a href="#">Health</a></li>
                                    <li><a href="#">Guide</a></li>
                                    <li><a href="#">Religion, Spirituality &amp; New Age</a></li>
                                    <li><a href="#">Encyclopedias</a></li>
                                    <li><a href="#">Dictionaries</a></li>
                                    <li><a href="#">Cookbooks</a></li>
                                    <li><a href="#">Autobiographies</a></li>
                                    <li><a href="#">Biographies</a></li>
                                    <li><a href="#">Fantasy</a></li>
                                    <li><a href="#">Horror</a></li>
                                    <li><a href="#">Mystery</a></li>
                                    <li><a href="#">Solipsist</a></li>
                                    <li><a href="#">The Zombie Survival</a></li>
                                    <li><a href="#">I Am Legend</a></li>
                                    <li><a href="#">Everything i Never Told</a></li>
                                    <li><a href="#">Big Little Lies</a></li>
                                    <li><a href="#">The Bone Clocks</a></li>
                                    <li><a href="#">Revival</a></li>
                                    <li><a href="#">Station Eleven</a></li>
                                    <li><a href="#">The American Lady</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- collection Name -->

                        <!-- Collection Content -->
                        <div class="col-lg-9 col-sm-12">
                            <div class="collection">

                                <!-- Secondary heading -->
                                <div class="sec-heading">
                                    <h3>Shop <span class="theme-color">Books</span> Collection</h3>
                                    <a class="view-all" href="#">View All<i class="fa fa-angle-double-right"></i></a>
                                </div>
                                <!-- Secondary heading -->

                                <!-- Collection Content -->
                                <div class="collection-content">
                                    <ul>
                                        <li>
                                            <div class="s-product">
                                                <div class="s-product-img">
                                                    <img src="{{ asset('/frontend/images/products-collection/img-01.jpg') }}" alt="">
                                                    <div class="s-product-hover">
                                                        <div class="position-center-x">
                                                            <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span>
                                                            <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" href="#">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><a href="book-detail.html">Ramadan Kareem</a></h6>
                                                <span>Richard Matherson</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="s-product">
                                                <div class="s-product-img">
                                                    <img src="{{ asset('/frontend/images/products-collection/img-02.jpg') }}" alt="">
                                                    <div class="s-product-hover">
                                                        <div class="position-center-x">
                                                            <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span>
                                                            <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" href="#">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><a href="book-detail.html">Mars Club</a></h6>
                                                <span>Eden Lepucki</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="s-product">
                                                <div class="s-product-img">
                                                    <img src="{{ asset('/frontend/images/products-collection/img-03.jpg') }}" alt="">
                                                    <div class="s-product-hover">
                                                        <div class="position-center-x">
                                                            <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span>
                                                            <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" href="#">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><a href="book-detail.html">Festa Junnai</a></h6>
                                                <span>George R.R. Martin</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="s-product">
                                                <div class="s-product-img">
                                                    <img src="{{ asset('/frontend/images/products-collection/img-04.jpg') }}" alt="">
                                                    <div class="s-product-hover">
                                                        <div class="position-center-x">
                                                            <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span>
                                                            <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" href="#">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><a href="book-detail.html">Beer Fsstivak</a></h6>
                                                <span>Micheal Circhton</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="s-product">
                                                <div class="s-product-img">
                                                    <img src="{{ asset('/frontend/images/products-collection/img-05.jpg') }}" alt="">
                                                    <div class="s-product-hover">
                                                        <div class="position-center-x">
                                                            <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span>
                                                            <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" href="#">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><a href="book-detail.html">Rock Festival</a></h6>
                                                <span>Richard Matherson</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="s-product">
                                                <div class="s-product-img">
                                                    <img src="{{ asset('/frontend/images/products-collection/img-06.jpg') }}" alt="">
                                                    <div class="s-product-hover">
                                                        <div class="position-center-x">
                                                            <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span>
                                                            <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" href="#">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><a href="book-detail.html">Summer Festival</a></h6>
                                                <span>Edgar Rice Burroghs</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="s-product">
                                                <div class="s-product-img">
                                                    <img src="{{ asset('/frontend/images/products-collection/img-07.jpg') }}" alt="">
                                                    <div class="s-product-hover">
                                                        <div class="position-center-x">
                                                            <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span>
                                                            <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" href="#">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><a href="book-detail.html">Festa JUnnai</a></h6>
                                                <span>Max Brooks</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="s-product">
                                                <div class="s-product-img">
                                                    <img src="{{ asset('/frontend/images/products-collection/img-08.jpg') }}" alt="">
                                                    <div class="s-product-hover">
                                                        <div class="position-center-x">
                                                            <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span>
                                                            <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" href="#">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><a href="book-detail.html">Summer Festival</a></h6>
                                                <span>J.R.R. Tolkien</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="s-product">
                                                <div class="s-product-img">
                                                    <img src="{{ asset('/frontend/images/products-collection/img-09.jpg') }}" alt="">
                                                    <div class="s-product-hover">
                                                        <div class="position-center-x">
                                                            <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span>
                                                            <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" href="#">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><a href="book-detail.html">New Year Collection</a></h6>
                                                <span>Henry Rollins</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="s-product">
                                                <div class="s-product-img">
                                                    <img src="{{ asset('/frontend/images/products-collection/img-10.jpg') }}" alt="">
                                                    <div class="s-product-hover">
                                                        <div class="position-center-x">
                                                            <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span>
                                                            <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="#quick-view" href="#">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6><a href="book-detail.html">Happy Halloween</a></h6>
                                                <span>Lily King</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Collection Content -->

                                <!-- Pagination -->
                                <div class="pagination-holder">
                                    <ul class="pagination">
                                        <li><a href="#" aria-label="Previous">Prev</a></li>
                                        <li><a href="#">1</a></li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">6</a></li>
                                        <li><a href="#">7</a></li>
                                        <li><a href="#">...</a></li>
                                        <li><a href="#">23</a></li>
                                        <li><a href="#" aria-label="Next">Next</a></li>
                                    </ul>
                                </div>
                                <!-- Pagination -->

                            </div>
                        </div>
                        <!-- Collection Content -->

                    </div>
                    <!-- Book Collections Tabs -->

                </div>
            </div>
        </section>
        <!-- Book Collections --> 

        <!-- Services -->
        <section class="services-area tc-padding-bottom">
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

        <!-- Timeline -->
        <section class="timeline-area tc-padding">
            <div class="container">
                <div class="row">

                    <!-- Aurthor -->
                    <div class="col-lg-3 col-sm-12">
                        <div class="aurthor-img">
                            <img src="{{ asset('/frontend/images/aurthors/img-01.jpg') }}" alt="">
                        </div>
                    </div>
                    <!-- Aurthor -->

                    <!-- Aurthor History -->
                    <div class="col-lg-9 col-sm-12 h-white">
                        <h2>Author <span class="theme-color">History</span> of Inovation</h2>
                        <div id="timeline">
                            <ul id="dates">
                                <li><a href="#1985">1985</a></li>
                                <li><a href="#1988">1988</a></li>
                                <li><a href="#1981">1981</a></li>
                                <li><a href="#1992">1992</a></li>
                                <li><a href="#1995">1995</a></li>
                                <li><a href="#2000">2000</a></li>
                            </ul>
                            <ul id="issues">
                                <li id="1985">
                                    <div class="text-box">
                                        <div class="left-box">
                                            <h5><span class="theme-color">July James</span> Books Writer</h5>
                                            <p>Melanie Raabe was born in 1981 in a small village in Germany and studied media scien
                                            ce and comparative literature in Bochum. After completing a traineeship for a Cologne city magazine, she became an actor, blogger, interviewer, stage play and screenplay writer. She has her own interview blog (www.biographilia.com) and has received several prizes for her scripts and short stories.</p>
                                            <div class="follow">
                                                <ul class="social-icons">
                                                    <li>Follow us</li>
                                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="s-related-products">
                                            <li>
                                                <img src="{{ asset('/frontend/images/s-related-products/img-01.jpg') }}" alt="">
                                                <h6 class="name">Electro</h6> 
                                            </li>
                                            <li>
                                                <img src="{{ asset('/frontend/images/s-related-products/img-02.jpg') }}" alt="">
                                                <h6 class="name">Summer</h6> 
                                            </li>
                                            <li>
                                                <img src="{{ asset('/frontend/images/s-related-products/img-03.jpg') }}" alt="">
                                                <h6 class="name">Party</h6> 
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="1988">
                                    <div class="text-box">
                                        <div class="left-box">
                                            <h5><span class="theme-color">July James</span> Books Writer</h5>
                                            <p>Melanie Raabe was born in 1981 in a small village in Germany and studied media scien
                                            ce and comparative literature in Bochum. After completing a traineeship for a Cologne city magazine, she became an actor, blogger, interviewer, stage play and screenplay writer. She has her own interview blog (www.biographilia.com) and has received several prizes for her scripts and short stories.</p>
                                            <div class="follow">
                                                <ul class="social-icons">
                                                    <li>Follow us</li>
                                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="s-related-products">
                                            <li>
                                                <img src="{{ asset('/frontend/images/s-related-products/img-01.jpg') }}" alt="">
                                                <h6 class="name">Electro</h6> 
                                            </li>
                                            <li>
                                                <img src="{{ asset('/frontend/images/s-related-products/img-02.jpg') }}" alt="">
                                                <h6 class="name">Summer</h6> 
                                            </li>
                                            <li>
                                                <img src="{{ asset('/frontend/images/s-related-products/img-03.jpg') }}" alt="">
                                                <h6 class="name">Party</h6> 
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="1981">
                                    <div class="text-box">
                                        <div class="left-box">
                                            <h5><span class="theme-color">July James</span> Books Writer</h5>
                                            <p>Melanie Raabe was born in 1981 in a small village in Germany and studied media scien
                                            ce and comparative literature in Bochum. After completing a traineeship for a Cologne city magazine, she became an actor, blogger, interviewer, stage play and screenplay writer. She has her own interview blog (www.biographilia.com) and has received several prizes for her scripts and short stories.</p>
                                            <div class="follow">
                                                <ul class="social-icons">
                                                    <li>Follow us</li>
                                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="s-related-products">
                                            <li>
                                                <img src="{{ asset('/frontend/images/s-related-products/img-01.jpg') }}" alt="">
                                                <h6 class="name">Electro</h6> 
                                            </li>
                                            <li>
                                                <img src="{{ asset('/frontend/images/s-related-products/img-02.jpg') }}" alt="">
                                                <h6 class="name">Summer</h6> 
                                            </li>
                                            <li>
                                                <img src="{{ asset('/frontend/images/s-related-products/img-03.jpg') }}" alt="">
                                                <h6 class="name">Party</h6> 
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="1992">
                                    <div class="text-box">
                                        <div class="left-box">
                                            <h5><span class="theme-color">July James</span> Books Writer</h5>
                                            <p>Melanie Raabe was born in 1981 in a small village in Germany and studied media scien
                                            ce and comparative literature in Bochum. After completing a traineeship for a Cologne city magazine, she became an actor, blogger, interviewer, stage play and screenplay writer. She has her own interview blog (www.biographilia.com) and has received several prizes for her scripts and short stories.</p>
                                            <div class="follow">
                                                <ul class="social-icons">
                                                    <li>Follow us</li>
                                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="s-related-products">
                                            <li>
                                                <img src="{{ asset('/frontend/images/s-related-products/img-01.jpg') }}" alt="">
                                                <h6 class="name">Electro</h6> 
                                            </li>
                                            <li>
                                                <img src="{{ asset('/frontend/images/s-related-products/img-02.jpg') }}" alt="">
                                                <h6 class="name">Summer</h6> 
                                            </li>
                                            <li>
                                                <img src="{{ asset('/frontend/images/s-related-products/img-03.jpg') }}" alt="">
                                                <h6 class="name">Party</h6> 
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="1995">
                                    <div class="text-box">
                                        <div class="left-box">
                                            <h5><span class="theme-color">July James</span> Books Writer</h5>
                                            <p>Melanie Raabe was born in 1981 in a small village in Germany and studied media scien
                                            ce and comparative literature in Bochum. After completing a traineeship for a Cologne city magazine, she became an actor, blogger, interviewer, stage play and screenplay writer. She has her own interview blog (www.biographilia.com) and has received several prizes for her scripts and short stories.</p>
                                            <div class="follow">
                                                <ul class="social-icons">
                                                    <li>Follow us</li>
                                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="s-related-products">
                                            <li>
                                                <img src="{{ asset('/frontend/images/s-related-products/img-01.jpg') }}" alt="">
                                                <h6 class="name">Electro</h6> 
                                            </li>
                                            <li>
                                                <img src="{{ asset('/frontend/images/s-related-products/img-02.jpg') }}" alt="">
                                                <h6 class="name">Summer</h6> 
                                            </li>
                                            <li>
                                                <img src="{{ asset('/frontend/images/s-related-products/img-03.jpg') }}" alt="">
                                                <h6 class="name">Party</h6> 
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="200">
                                    <div class="text-box">
                                        <div class="left-box">
                                            <h5><span class="theme-color">July James</span> Books Writer</h5>
                                            <p>Melanie Raabe was born in 1981 in a small village in Germany and studied media scien
                                            ce and comparative literature in Bochum. After completing a traineeship for a Cologne city magazine, she became an actor, blogger, interviewer, stage play and screenplay writer. She has her own interview blog (www.biographilia.com) and has received several prizes for her scripts and short stories.</p>
                                            <div class="follow">
                                                <ul class="social-icons">
                                                    <li>Follow us</li>
                                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="s-related-products">
                                            <li>
                                                <img src="{{ asset('/frontend/images/s-related-products/img-01.jpg') }}" alt="">
                                                <h6 class="name">Electro</h6> 
                                            </li>
                                            <li>
                                                <img src="{{ asset('/frontend/images/s-related-products/img-02.jpg') }}" alt="">
                                                <h6 class="name">Summer</h6> 
                                            </li>
                                            <li>
                                                <img src="{{ asset('/frontend/images/s-related-products/img-03.jpg') }}" alt="">
                                                <h6 class="name">Party</h6> 
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Aurthor History -->

                </div>
            </div>
        </section>
        <!-- Timeline --> 

        <!-- Blog Nd Gallery-->
        <section class="tc-padding">
            <div class="container">
              <div class="row">

                <!-- Blog -->
                    <div class="col-lg-4 col-xs-12">

                    <!-- Secondary heading -->
                    <div class="sec-heading">
                        <h3>Latest <span class="theme-color">Blog</span> Post</h3>
                    </div>
                    <!-- Secondary heading -->

                    <!-- Blog list -->
                    <div class="blog-style-1">
                         <div class="post-box">
                            <div class="thumb"><img src="{{ asset('/frontend/images/blog/img-01.jpg') }}" alt=""></div>
                            <div class="text-column"> <strong><i class="fa fa-user" aria-hidden="true"></i>Justin Greene</strong>
                            <a href="blog-detail.html">24 Images About Bookstores That Every Reader </a> <span><i class="fa fa-clock-o" aria-hidden="true"></i>2 hour ago</span>
                            <em><i class="fa fa-heart" aria-hidden="true"></i>125</em> </div>
                         </div>
                         <div class="post-box">
                            <div class="thumb"><img src="{{ asset('/frontend/images/blog/img-02.jpg') }}" alt=""></div>
                            <div class="text-column"> <strong><i class="fa fa-user" aria-hidden="true"></i>Rodolpho Henrique</strong>
                            <a href="blog-detail.html">The 30 Best Places To Be If You Love Books Mark</a> <span><i class="fa fa-clock-o" aria-hidden="true"></i>2 hour ago</span>
                            <em><i class="fa fa-heart" aria-hidden="true"></i>125</em> </div>
                         </div>
                         <div class="post-box">
                            <div class="thumb"><img src="{{ asset('/frontend/images/blog/img-03.jpg') }}" alt=""></div>
                            <div class="text-column"> <strong><i class="fa fa-user" aria-hidden="true"></i>Anderson jhon</strong>
                            <a href="blog-detail.html">The Old Butcher's Bookshop, a rare books store</a> <span><i class="fa fa-clock-o" aria-hidden="true"></i>2 hour ago</span>
                            <em><i class="fa fa-heart" aria-hidden="true"></i>125</em> </div>
                         </div>
                    </div>
                    <!-- Blog list -->

                    </div>
                    <!-- Blog -->

                    <!-- Gallery -->
                    <div class="col-lg-8 col-xs-12">
                    <div class="gallery">

                        <!-- Secondary heading -->
                        <div class="sec-heading">
                            <h3>Gallery <span class="theme-color">Bookshop</span></h3>
                            <a class="view-all" href="#">View All<i class="fa fa-angle-double-right"></i></a>
                        </div>
                        <!-- Secondary heading -->

                        <!-- Gallery List -->
                        <ul>
                            <li>
                                <div class="gallery-figure"> 
                                    <img src="{{ asset('/frontend/images/gallery/img-01.jpg') }}" alt="">
                                    <div class="overlay">
                                        <ul class="position-center-x">
                                            <li><a href="#"><i class="fa fa-heart"></i>Likes</a></li>
                                            <li><a href="{{ asset('/frontend/images/gallery/img-01.jpg') }}" data-rel="prettyPhoto[gallery]"><i class="fa fa-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="gallery-figure">
                                    <img src="{{ asset('/frontend/images/gallery/img-02.jpg') }}" alt="">
                                    <div class="overlay">
                                        <ul class="position-center-x">
                                            <li><a href="#"><i class="fa fa-heart"></i>Likes</a></li>
                                            <li><a href="{{ asset('/frontend/images/gallery/img-02.jpg') }}" data-rel="prettyPhoto[gallery]"><i class="fa fa-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="gallery-figure">
                                    <img src="{{ asset('/frontend/images/gallery/img-03.jpg') }}" alt="">
                                    <div class="overlay">
                                        <ul class="position-center-x">
                                            <li><a href="#"><i class="fa fa-heart"></i>Likes</a></li>
                                            <li><a href="{{ asset('/frontend/images/gallery/img-03.jpg') }}" data-rel="prettyPhoto[gallery]"><i class="fa fa-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="gallery-figure">
                                    <img src="{{ asset('/frontend/images/gallery/img-04.jpg') }}" alt="">
                                    <div class="overlay">
                                        <ul class="position-center-x">
                                            <li><a href="#"><i class="fa fa-heart"></i>Likes</a></li>
                                            <li><a href="{{ asset('/frontend/images/gallery/img-04.jpg') }}" data-rel="prettyPhoto[gallery]"><i class="fa fa-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="gallery-figure">
                                    <img src="{{ asset('/frontend/images/gallery/img-05.jpg') }}" alt="">
                                    <div class="overlay">
                                        <ul class="position-center-x">
                                            <li><a href="#"><i class="fa fa-heart"></i>Likes</a></li>
                                            <li><a href="{{ asset('/frontend/images/gallery/img-05.jpg') }}" data-rel="prettyPhoto[gallery]"><i class="fa fa-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="gallery-figure">
                                    <img src="{{ asset('/frontend/images/gallery/img-06.jpg') }}" alt="">
                                    <div class="overlay">
                                        <ul class="position-center-x">
                                            <li><a href="#"><i class="fa fa-heart"></i>Likes</a></li>
                                            <li><a href="{{ asset('/frontend/images/gallery/img-06.jpg') }}" data-rel="prettyPhoto[gallery]"><i class="fa fa-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- Gallery List -->

                    </div>
                    </div>
                    <!-- Gallery -->

              </div>
            </div>
        </section>
        <!-- Blog Nd Gallery--> 

        <!-- Related Products -->
        <section class="related-product tc-padding-bottom hori-scroll">
          <div class="container">

              <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading">
                        <h2>Bookshop <span class="theme-color">Related</span> Products</h2>
                        <p>Have a reading loft in my house I will make this happen with</p>
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Content -->
              <div class="content scroll-x">
                <ul>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-01.png') }}" alt="">
                        <h5><a href="shop-detail.html">Business card</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-02.png') }}" alt="">
                        <h5><a href="shop-detail.html">Basket Books</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-03.png') }}" alt="">
                        <h5><a href="shop-detail.html">Cd Cover</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-04.png') }}" alt="">
                        <h5><a href="shop-detail.html">File Folder</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-05.png') }}" alt="">
                        <h5><a href="shop-detail.html">Books Rack</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-01.png') }}" alt="">
                        <h5><a href="shop-detail.html">Stationary</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-01.png') }}" alt="">
                        <h5><a href="shop-detail.html">Business card</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-02.png') }}" alt="">
                        <h5><a href="shop-detail.html">Basket Books</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-03.png') }}" alt="">
                        <h5><a href="shop-detail.html">Cd Cover</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-04.png') }}" alt="">
                        <h5><a href="shop-detail.html">File Folder</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-05.png') }}" alt="">
                        <h5><a href="shop-detail.html">Books Rack</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-01.png') }}" alt="">
                        <h5><a href="shop-detail.html">Stationary</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-01.png') }}" alt="">
                        <h5><a href="shop-detail.html">Business card</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-02.png') }}" alt="">
                        <h5><a href="shop-detail.html">Basket Books</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-03.png') }}" alt="">
                        <h5><a href="shop-detail.html">Cd Cover</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-04.png') }}" alt="">
                        <h5><a href="shop-detail.html">File Folder</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-05.png') }}" alt="">
                        <h5><a href="shop-detail.html">Books Rack</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-01.png') }}" alt="">
                        <h5><a href="shop-detail.html">Stationary</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-01.png') }}" alt="">
                        <h5><a href="shop-detail.html">Business card</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-02.png') }}" alt="">
                        <h5><a href="shop-detail.html">Basket Books</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-03.png') }}" alt="">
                        <h5><a href="shop-detail.html">Cd Cover</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-04.png') }}" alt="">
                        <h5><a href="shop-detail.html">File Folder</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-05.png') }}" alt="">
                        <h5><a href="shop-detail.html">Books Rack</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                    <li>
                            <span class="price"><sup>$</sup>12.00</span>
                        <img src="{{ asset('/frontend/images/related-products/img-01.png') }}" alt="">
                        <h5><a href="shop-detail.html">Stationary</a></h5>
                        <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                    </li>
                </ul>
              </div>
              <!-- Content -->

          </div>
        </section>
        <!-- Related Products --> 

        <!-- Tweet Slider -->
        <div class="tweet">
            <div class="container">
              <div id="tweet-slider" class="tweet-slider">
                    <div class="item">
                        <span class="twit-icon"><i class="fa fa-twitter"></i></span>
                        <p><strong>@jhonrogie</strong> Woohoo! Check out the Twitter Search Plugin I just released with UpThemes! <a href="#"> htttp://upthem.es/twitter</a></p>
                        <ul>
                            <li><i class="fa fa-clock-o"></i>45 minutes ago from</li>
                            <li><i class="fa fa-map-marker"></i>Tower of Terror</li>
                        </ul>
                    </div>
                    <div class="item">
                        <span class="twit-icon"><i class="fa fa-twitter"></i></span>
                        <p><strong>@jhonrogie</strong> Woohoo! Check out the Twitter Search Plugin I just released with UpThemes! <a href="#"> htttp://upthem.es/twitter</a></p>
                        <ul>
                            <li><i class="fa fa-clock-o"></i>45 minutes ago from</li>
                            <li><i class="fa fa-map-marker"></i>Tower of Terror</li>
                        </ul>
                    </div>
              </div>
            </div>
        </div>
        <!-- Tweet Slider --> 

    </main>
@endsection