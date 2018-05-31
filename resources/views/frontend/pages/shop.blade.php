@extends('layouts.frontend.page')

@section('topbar')
    @include('frontend.header.topbar')
@endsection

@section('content')
    <main class="main-content">

        <!-- Shop Grid -->
        <div class="product-grid-holder tc-padding">
            <div class="container">
                <div class="row">

                    <!-- Content -->
                    <div class="col-lg-9 col-md-8 pull-right pull-none">
                        
                        <!-- Filter Sort -->
                        <div class="product-sort">
                            <div class="sort-dropdown pull-left">
                                <label>Short by:</label>
                                <select>
                                    <option>Sort by popularity</option>
                                    <option>example</option>
                                    <option>example</option>
                                </select>
                            </div>
                            <div class="sort-dropdown pull-right">
                                <label>Short by:</label>
                                <select>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                            </div>
                        </div>
                        <!-- Filter Sort -->

                        <!-- Products -->
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-lg-4 col-xs-6 r-full-width">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img src=" {{ $product['image'] }}" alt="">
                                            <ul class="product-cart-option position-center-x">
                                                <li>
                                                <a href="/product/{{ $product['id'] }}/view">
                                                <i class="fa fa-eye"></i>
                                                </a>
                                                </li>
                                                <li>
                                                    <a 
                                                    class="addToCartTrgr" 
                                                    data-product-id="{{ $product['id'] }}"
                                                    data-user-id="{{ ( !empty(session('user_id') ) ) ? session('user_id'): urlencode($_SERVER['REMOTE_ADDR']) }}"
                                                    >
                                                        <i class="fa fa-cart-arrow-down"></i>
                                                </a>
                                                </li>
                                                <li>
                                                <a href="#">
                                                <i class="fa fa-share-alt"></i>
                                                </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <!-- <span>NOVEL</span> -->
                                            <h5>{{ $product['title'] }}</h5>
                                            <!-- <p>How to Write a Book Review...</p> -->
                                            <div class="rating-nd-price">
                                                <strong><i class="fa fa-rupee">{{ $product['regular_price'] }}</i></strong>
                                                <ul class="rating-stars">
                                                    <li>
                                                        <i class="fa fa-star{{ ($product['avg_rate']<1) ? '-o' : '' }}"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star{{ ($product['avg_rate']<2) ? '-o' : '' }}"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star{{ ($product['avg_rate']<3) ? '-o' : '' }}"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star{{ ($product['avg_rate']<4) ? '-o' : '' }}"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star{{ ($product['avg_rate']<5) ? '-o' : '' }}"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                        </div>
                        <!-- Products -->

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
                    <!-- Content -->

                    <!-- Aside -->
                    <aside class="col-lg-3 col-md-4 pull-left pull-none">

                        <!-- Aside Widget -->
                        <div class="aside-widget">
                            <form class="search-bar style-2 style-3">
                                <input type="text" class="form-control" required="required" placeholder="Search...">
                                <button class="sub-btn fa fa-search"></button>
                            </form>
                        </div>
                        <!-- Aside Widget -->

                        <!-- Aside Widget -->
                        <div class="aside-widget">
                            <h6>Books by Category</h6>
                            <ul class="Category-list">
                                @foreach($categories as $category)
                                <li><a href="#">{{ $category['title'] }} <!-- (25) --> </a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Aside Widget -->

                        <!-- Aside Widget -->
                        <div class="aside-widget">
                            <h6>Books of the Year</h6>
                            <ul class="books-year-list best-seller">
                                <li>
                                    <div class="books-post-widget">
                                        <img src="images/best-seller-aside/img-01.jpg" alt="">
                                        <h6><a href="#">Jewels of Nizam</a></h6>
                                        <ul class="rating-stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                        <div class="offer-price"><sup>$</sup>32.99 <del>$30.99</del></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="books-post-widget">
                                        <img src="images/best-seller-aside/img-02.jpg" alt="">
                                        <h6><a href="#">Jhon Carter of Mars</a></h6>
                                        <ul class="rating-stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                        <div class="offer-price"><sup>$</sup>32.99 <del>$30.99</del></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="books-post-widget">
                                        <img src="images/best-seller-aside/img-03.jpg" alt="">
                                        <h6><a href="#">Trial By Fire</a></h6>
                                        <ul class="rating-stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                        <div class="offer-price"><sup>$</sup>32.99 <del>$30.99</del></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="books-post-widget">
                                        <img src="images/best-seller-aside/img-04.jpg" alt="">
                                        <h6><a href="#">The Zombie Survival</a></h6>
                                        <ul class="rating-stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                        <div class="offer-price"><sup>$</sup>32.99 <del>$30.99</del></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Aside Widget -->

                        <!-- Aside Widget -->
                        <div class="aside-widet">
                            <h4>Filter by Price</h4>
                            <div class="pricing-slider">
                                <div id="slider-range"></div>
                                <p>
                                  <input type="text" id="amount" readonly>
                                </p>
                            </div>
                        </div>
                        <!-- Aside Widget -->

                    </aside>
                    <!-- Aside -->

                </div>
            </div>
        </div>
        <!-- Shop Grid -->

    </main>

    <script type="text/javascript">
        
    </script>
@endsection
