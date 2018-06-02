@extends('layouts.frontend.page')


@section('content')

    <main class="main-content">

        <!-- Service And Mission -->
        <section class="service-nd-mission tc-padding-top white-bg">
            <div class="container">
                
                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading style-1">
                        <h2>Best Online <span class="theme-color">Buying &amp; Selling Book Platform</span></h2>
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Services -->
                <div class="our-service tc-padding-bottom">
                    <div class="row">
                        
                        <!-- Service Column -->
                        <div class="col-lg-3 col-xs-6 r-full-width">
                            <div class="service-column style-2">
                                <span class="service-icon"><i class="icon-amazing"></i></span>
                                <h4><a href="#">BUY A BOOK</a></h4>
                                <p>Books Stock advance search has made it easier for you to get a book you are looking for. We have always focused on making the Customer satisfaction hence we have made sure that even a kid can search for the book he is looking for.</p>
                            </div>
                        </div>
                        <!-- Service Column -->

                        <!-- Service Column -->
                        <div class="col-lg-3 col-xs-6 r-full-width">
                            <div class="service-column style-2">
                                <span class="service-icon"><i class="icon-intuitive-design"></i></span>
                                <h4><a href="#">SELL YOUR BOOK</a></h4>
                                <p>Selling of books is equally hectic as it is buying one. Books Stock has created an easy 4 step process by which you can register yourself on Books Stock and sell your books globally to earn great profits while sitting in your couch.</p>
                            </div>
                        </div>
                        <!-- Service Column -->

                        <!-- Service Column -->
                        <div class="col-lg-3 col-xs-6 r-full-width">
                            <div class="service-column style-2">
                                <span class="service-icon"><i class="icon-responsive"></i></span>
                                <h4><a href="#">RENT YOUR BOOKS</a></h4>
                                <p>Got a lot of books at your home but not want to sell them all and still thinking of a way to handle those books. Books Stock is the perfect place for you, now you can rent your books with authenticate readers and earn some money and also your books will come back to you anyways</p>
                            </div>
                        </div>
                        <!-- Service Column -->

                        <!-- Service Column -->
                        <div class="col-lg-3 col-xs-6 r-full-width">
                            <div class="service-column style-2">
                                <span class="service-icon"><i class="icon-seo-optimized"></i></span>
                                <h4><a href="#">MANAGE YOUR ACCOUNT</a></h4>
                                <p>We have an exaggerated market for books and also a platform where you can establish yourself as a professional book seller now you can manage all your accounts on books stock with easy to use interface we have made sure you get every possible benefit of being a part of Books stock.</p>
                            </div>
                        </div>
                        <!-- Service Column -->

                    </div>
                </div>
                <!-- Services -->

                <!-- Mission & values -->
                <div class="mission tc-padding-bottom">
                    <div class="row">

                        <!-- Mission Disc -->
                        <div class="col-lg-6 col-xs-12">
                            <div class="mission-disc">
                                <h4>Mission <span>&amp; values</span></h4>
                                <p><b>Mission :</b> “Life is good with a book“ To provide the best book reading experience to every customer at revolutionary price and speed.</br></br>
                                 <b>Values:</b> “We value our people, we work together to uphold highest standard and best customer experience.“</br>In 2018, Books stock.com become an online book market place where readers can get the book of their taste and sell the books which they feel are of less use, The India's most advanced online Book store, Books stock's search engine enables customers to locate books by boards, school, or class in a few seconds at most. Customers with a general idea of what they want can use our Browse pages to sift through hundreds of categories to find exactly the right book. To further assist users, we offer descriptions and reviews, and our exotic collection of all genres of books are categorized in a manner that even a small kid can search a book. We also offer editor recommendations and customer reviews on hundreds of thousands of titles.
                                </p>
                                <a href="#" class="btn-1 shadow-0">Read more<i aria-hidden="true" class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- Mission Disc -->

                        <!-- Laptop Img -->
                        <div class="col-sm-6">
                            <div class="laptop-img">
                                <img class="floating" src="{{ asset('/frontend/images/laptop.png') }}" alt="">
                            </div>
                        </div>
                        <!-- Laptop Img -->

                    </div>
                </div>
                <!-- Mission & values -->

            </div>
        </section>
        <!-- Service And Mission -->

        <!-- Statistic -->
        <section class="statistic tc-padding overlay-dark" style="background: url({{ asset('/frontend/images/statistic-bg.jpg') }}) 100% 100%;">
            <div class="container p-relative z-index-2">

                <!-- Simple Heading -->
                <div class="simple-heading-holder">
                    <div class="simple-heading h-white p-white">
                        <h2>Statistic</h2>
                        <p>We publish a very broad range of fiction and non-fiction, international and</p>
                    </div>
                </div>
                <!-- Simple Heading -->

                <!-- Facts List -->
                <div class="facts-list">
                    <ul class="row" id="tc-counters"> 
                        <li class="col-sm-3">
                            <i class="fa fa-book"></i>
                            <strong class="tc-timer" data-from="0" data-to="20000" data-speed="3000" data-refresh-interval="10"></strong>
                            <span>Reading Skills</span>
                        </li>
                        <li class="col-sm-3">
                            <i class="fa fa-bank"></i>
                            <strong class="tc-timer" data-from="0" data-to="2500" data-speed="3000" data-refresh-interval="10"></strong>
                            <span>Books Library</span>
                        </li>
                        <li class="col-sm-3">
                            <i class="fa fa-laptop"></i>
                            <strong class="tc-timer" data-from="0" data-to="1700" data-speed="3000" data-refresh-interval="10"></strong>
                            <span>Writing Skills</span>
                        </li>
                        <li class="col-sm-3">
                            <i class="fa fa-lightbulb-o"></i>
                            <strong class="tc-timer" data-from="0" data-to="33000" data-speed="3000" data-refresh-interval="10"></strong>
                            <span>Critical Thinking</span>
                        </li>
                    </ul>
                </div>
                <!-- Facts List -->

            </div>
        </section>
        <!-- Statistic -->

        <!-- Team -->
        <section class="tc-padding white-bg">
            <div class="container">
                
                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading style-2">
                        <h2>Our <span class="theme-color">Creative Team</span></h2>
                        <p>We are committed to providing first-class services to the writers who trust us</p>
                    </div>
                </div>
                <!-- Main Heading -->   

                <!-- Team Slider -->
                <div class="team-slider">
                    
                    <!-- Team Colmun -->
                    <div class="item">
                        <div class="team-column">
                            <div class="team-img">
                                <img src="{{ asset('/frontend/images/team/img-01.jpg') }}" alt="">
                                <div class="overlay-padding">
                                    <div class="overlay">
                                        <ul class="position-center-center">
                                            <li>Tel: 12 0123 4567</li>
                                            <li>Mob 12 0123 4567</li>
                                            <li>Email: ch.jackson@live.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="team-detail">
                                <h5>Jhon Doe</h5>
                                <span>Art Director CEO</span>
                            </div>
                            <div class="team-btm">
                                <ul class="social-icons"> 
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Team Colmun -->

                    <!-- Team Colmun -->
                    <div class="item">
                        <div class="team-column">
                            <div class="team-img">
                                <img src="{{ asset('/frontend/images/team/img-02.jpg') }}" alt="">
                                <div class="overlay-padding">
                                    <div class="overlay">
                                        <ul class="position-center-center">
                                            <li>Tel: 12 0123 4567</li>
                                            <li>Mob 12 0123 4567</li>
                                            <li>Email: ch.jackson@live.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="team-detail">
                                <h5>Elizabeth Mitchell</h5>
                                <span>Graphic Designer</span>
                            </div>
                            <div class="team-btm">
                                <ul class="social-icons"> 
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Team Colmun -->

                    <!-- Team Colmun -->
                    <div class="item">
                        <div class="team-column">
                            <div class="team-img">
                                <img src="{{ asset('/frontend/images/team/img-03.jpg') }}" alt="">
                                <div class="overlay-padding">
                                    <div class="overlay">
                                        <ul class="position-center-center">
                                            <li>Tel: 12 0123 4567</li>
                                            <li>Mob 12 0123 4567</li>
                                            <li>Email: ch.jackson@live.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="team-detail">
                                <h5>Barrett Wilson</h5>
                                <span>Book Writter</span>
                            </div>
                            <div class="team-btm">
                                <ul class="social-icons"> 
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Team Colmun -->

                    <!-- Team Colmun -->
                    <div class="item">
                        <div class="team-column">
                            <div class="team-img">
                                <img src="{{ asset('/frontend/images/team/img-04.jpg') }}" alt="">
                                <div class="overlay-padding">
                                    <div class="overlay">
                                        <ul class="position-center-center">
                                            <li>Tel: 12 0123 4567</li>
                                            <li>Mob 12 0123 4567</li>
                                            <li>Email: ch.jackson@live.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="team-detail">
                                <h5>Josh Martin</h5>
                                <span>Josh Martin</span>
                            </div>
                            <div class="team-btm">
                                <ul class="social-icons"> 
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Team Colmun -->

                </div>
                <!-- Team Slider -->

            </div>
        </section>
        <!-- Team -->

        <!-- Partners -->
        <section class="partners tc-padding-bottom">
            <div class="container">

                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading style-2">
                        <h2>Our <span class="theme-color">Creative Team</span></h2>
                        <p>We are committed to providing first-class services to the writers who trust us</p>
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Partners Logos -->
                <ul class="logos-slider">
                    <li><img src="{{ asset('/frontend/images/partners/img-01.jpg') }}" alt=""></li>
                    <li><img src="{{ asset('/frontend/images/partners/img-02.jpg') }}" alt=""></li>
                    <li><img src="{{ asset('/frontend/images/partners/img-03.jpg') }}" alt=""></li>
                    <li><img src="{{ asset('/frontend/images/partners/img-04.jpg') }}" alt=""></li>
                    <li><img src="{{ asset('/frontend/images/partners/img-05.jpg') }}" alt=""></li>
                    <li><img src="{{ asset('/frontend/images/partners/img-06.jpg') }}" alt=""></li>
                </ul>
                <!-- Partners Logos -->

            </div>
        </section>
        <!-- Partners -->

        <!-- Call Action -->
        <section class="call-action">
            <div class="container">     
                <div class="action-text">   
                    <h3>30% Off <span>Onlinebookshop</span> Top 100 Bestsellers</h3>
                    <strong>Get the bestselling books of 2016 and save!</strong>
                </div>
                <a class="btn-1 shadow-0" href="#">View Books</a>
            </div>
        </section>
        <!-- Call Action --> 

    </main>
@endsection
