<header id="header">
    
    <!-- Top Bar -->
    @yield('topbar')
    <!-- Top Bar -->

    <!-- Nav -->
    <nav class="nav-holder style-1">
        <div class="container">
            <div class="mega-dropdown-wrapper">

                <!-- Logo -->
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('/frontend/images/logo-1.png') }}" alt=""></a>
                </div>
                <!-- Logo -->

                <!-- Search bar -->
                <div class="search-bar">
                    <a href="#"><i class="fa fa-search"></i></a>
                </div>
                <!-- Search bar -->

                <!-- Responsive Button -->
                <div class="responsive-btn">
                    <a href="#menu" class="menu-link circle-btn"><i class="fa fa-bars"></i></a>
                </div>
                <!-- Responsive Button -->

                <!-- Navigation -->
                <div class="navigation">
                    <ul>
                        <li>
                            <a href="/"><i class="fa fa-home"></i>HOME</a>
                        </li>
                        <li>
                            <a href="/about-us"><i class="fa fa-pencil"></i>ABOUT US</a>
                        </li>
                        <li>
                            <a href="/shop"><i class="fa fa-shopping-bag"></i>SHOP</a>
                            <!-- <ul>
                                <li><a href="blog-all-views.html">blog all views</a></li>
                                <li><a href="blog-larg.html">blog Larg</a></li>
                                <li><a href="blog-list.html">blog List</a></li>
                                <li><a href="blog-grid.html">blog Grid</a></li>
                                <li><a href="blog-detail.html">blog detail</a></li>
                            </ul>   --> 
                        </li>
                        <li class="dropdown-icon mega-dropdown-holder">
                            <a href="#"><i class="fa fa-book"></i>CATEGORY</a>
                            <ul>
                                <li>
                                    <div class="mega-dropdown">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="categories-list">
                                                    <h6>Categories</h6>
                                                    <a href="#">Technology</a>
                                                    <a href="#">Fiction</a>
                                                    <a href="#">Health &amp; fitness</a>
                                                    <a href="#">History</a>
                                                    <a href="#">Mystery</a>
                                                    <a href="#">Politics &amp; current Affairs</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="categories-list">
                                                    <h6>Eduacation</h6>
                                                    <a href="#">The Rosie Effect</a>
                                                    <a href="#">Accounting Coach</a>
                                                    <a href="#">Al-Islam</a>
                                                    <a href="#">American Literature</a>
                                                    <a href="#">Antique Books</a>
                                                    <a href="#">Baby School</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="categories-list">
                                                    <h6>print top 10</h6>
                                                    <a href="#">My Brilliant Friend</a>
                                                    <a href="#">Everywhere I Look</a>
                                                    <a href="#">The Rosie Project</a>
                                                    <a href="#">The Trap</a>
                                                    <a href="#">The High Mountains of</a>
                                                    <a href="#">The Rosie Effect</a>
                                                </div>
                                            </div>
                                            <!-- <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="s-product">
                                                            <div class="s-product-img">
                                                                <img src="{{ asset('/frontend/images/products-collection/img-01.jpg') }}" alt="">
                                                            </div>
                                                            <span>James oliver</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="s-product">
                                                            <div class="s-product-img">
                                                                <img src="{{ asset('/frontend/images/products-collection/img-02.jpg') }}" alt="">
                                                            </div>
                                                            <span>James oliver</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="s-product">
                                                            <div class="s-product-img">
                                                                <img src="{{ asset('/frontend/images/products-collection/img-03.jpg') }}" alt="">
                                                            </div>
                                                            <span>James oliver</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-icon">
                            <a href="#"><i class="fa fa-files-o"></i>MORE</a>
                            <ul>
                                <li><a href="/sell-on-booksstock">Sell on Books Stock</a></li>
                                <li><a href="/term-and-conditions">Terms &amp; Conditions</a></li>
                                <li><a href="/privacy-policy">Privacy &amp; Policy</a></li>
                                <li><a href="/faq">FAQ</a></li>
                            </ul>
                        </li>
                        <!-- <li class="dropdown-icon">
                            <a href="#"><i class="fa fa-file-text"></i>author</a>
                            <ul>
                                <li><a href="author.html">author</a></li>
                                <li><a href="author-detail.html">author detail</a></li>
                            </ul>
                        </li> -->
                        <li><a href="/contact-us"><i class="fa fa-fax"></i>contact</a></li>
                    </ul>
                </div>
                <!-- Navigation -->

            </div>
        </div>
    </nav>
    <!-- Nav -->



    <!--BANNER-->
    @yield('banner')
    <!--BANNER-->
</header>