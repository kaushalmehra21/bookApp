@extends('layouts.frontend.page')


@section('content')
    <!-- Shop Detail -->
    <div class="product-grid-holder">
        <div class="container">
            
            <!-- Alert -->
            <div class="add-cart-alert">
                <p><i class="fa fa-check-circle"></i>The Complete Book of Vegetables </p>
                <a class="btn-1 sm pull-right shadow-0" href="#">view cart</a>
            </div>
            <!-- Alert -->

            <!-- Single Product Detail -->
            <div class="single-product-detail">
                <div class="row">
                    
                    <!-- Product Thumnbnail -->
                    <div class="col-lg-4 col-md-5">
                        <div class="product-thumnbnail">
                            <ul class="product-slider">
                                <li>
                                    <img src="images/product-thumbnail/img-01.jpg" alt="">
                                    <a class="expand" href="#"><i class="fa fa-expand"></i></a>
                                </li>
                                <li>
                                    <img src="images/product-thumbnail/img-02.jpg" alt="">
                                    <a class="expand" href="#"><i class="fa fa-expand"></i></a>
                                </li>
                                <li>
                                    <img src="images/product-thumbnail/img-03.jpg" alt="">
                                    <a class="expand" href="#"><i class="fa fa-expand"></i></a>
                                </li>
                            </ul>
                            <div id="product-thumbs">
                                <a data-slide-index="0" href=""><img src="images/product-thumbnail/thumbs/img-01.jpg" alt="" /></a>
                                <a data-slide-index="1" href=""><img src="images/product-thumbnail/thumbs/img-02.jpg" alt="" /></a>
                                <a data-slide-index="2" href=""><img src="images/product-thumbnail/thumbs/img-03.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Thumnbnail -->

                    <!-- Product Detail -->
                    <div class="col-lg-8 col-md-7">
                        <div class="single-product-detail">
                            <span class="availability">Availability :<strong>Stock<i class="fa fa-check-circle"></i></strong></span>
                            <h3>The Complete Book of Vegetables </h3>
                            <ul class="rating-stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                                <li>1 customer review</li>
                            </ul>
                            <h4>Overview</h4>
                            <p>With this highly anticipated new novel, the author of the bestselling Life of Pi returns to the storytelling power and luminous wisdom of his master novel. The High Mountains of Portugal is a suspenseful. dinary journey through the last century. We begin in the early 1900s, when Tomás discovers an ancient journal and sets out from Lisbon. in one of the very first motor cars</p>
                            <p>Thirty-five years later, a pathologist devoted to the novels of Agatha Christie, whose wife has possibly been murdered, finds himself drawn into Tomás’s quest. Fifty years later, Senator Peter. Tovy of Ottawa, grieving the death of his own beloved wife, rescues a chimpanzee from an Oklahoma research facility and takes.</p>
                            <div class="quantity-box">
                                <label>Qty :</label>
                                <div class="sp-quantity">
                                    <div class="sp-minus fff"><a class="ddd" data-multi="-1">-</a></div>
                                    <div class="sp-input">
                                        <input type="text" class="quntity-input" value="1" />
                                    </div>
                                    <div class="sp-plus fff"><a class="ddd" data-multi="1">+</a></div>
                                </div>
                            </div>
                            <ul class="btn-list">
                                <li><a class="btn-1 sm shadow-0 " href="#">add to cart</a></li>
                                <li><a class="btn-1 sm shadow-0 blank" href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a class="btn-1 sm shadow-0 blank" href="#"><i class="fa fa-repeat"></i></a></li>
                                <li><a class="btn-1 sm shadow-0 blank" href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Product Detail -->

                </div>
            </div>
            <!-- Single Product Detail -->

            <!-- Disc Nd Reviews -->
            <div class="disc-nd-reviews tc-padding-bottom">
                <div class="row">
                    <div id="disc-reviews-tabs" class="disc-reviews-tabs">

                        <!-- Tabs Nav -->
                        <div class="col-lg-3 col-xs-12">
                            <div class="tabs-nav">
                                <ul>
                                    <li><a href="#tab-1">Reviews</a></li>
                                    <li><a href="#tab-2">Description</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Tabs Nav -->

                        <!-- Tabs Content -->
                        <div class="col-lg-9 col-xs-12">
                            <div class="tabs-content">
                                
                                <!-- Reviews -->
                                <div id="tab-1">
                                    <div class="reviews">
                                        
                                        <!-- Reviews List -->
                                        <div class="reviews-list">
                                            <ul>
                                                <li>
                                                    <img src="images/reviews/img-01.jpg" alt="">
                                                    <div class="comment">
                                                        <div class="reviews-detail">
                                                            <h6>Andy Patrick <span>October 12, 2015</span></h6>
                                                            <ul class="rating-stars">
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star-half-o"></i></li>
                                                            </ul>
                                                        </div>
                                                        <p>With this highly anticipated new novel, the author of the bestselling Life of Pi returns to the storytelling power and luminous.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="images/reviews/img-02.jpg" alt="">
                                                    <div class="comment">
                                                        <div class="reviews-detail">
                                                            <h6>Tonda Kus<span>October 12, 2015</span></h6>
                                                            <ul class="rating-stars">
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star-half-o"></i></li>
                                                            </ul>
                                                        </div>
                                                        <p>With this highly anticipated new novel, the author of the bestselling Life of Pi returns to the storytelling power and luminous.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <img src="images/reviews/img-03.jpg" alt="">
                                                    <div class="comment">
                                                        <div class="reviews-detail">
                                                            <h6>Alexander Zaytsev<span>October 12, 2015</span></h6>
                                                            <ul class="rating-stars">
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star-half-o"></i></li>
                                                            </ul>
                                                        </div>
                                                        <p>With this highly anticipated new novel, the author of the bestselling Life of Pi returns to the storytelling power and luminous.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Reviews List -->

                                        <!-- Form -->
                                        <div class="form-holder add-review">
                                            <h5>Add a Review</h5>
                                            <h6>Your Rating</h6>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                            <form class="sending-form">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" required="required" rows="3" placeholder="Text here..."></textarea>
                                                            <i class="fa fa-pencil-square-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control" required="required" placeholder="Full name">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control" required="required" placeholder="Email">
                                                            <i class="fa fa-envelope"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <button class="btn-1 shadow-0 sm">submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Form -->

                                        <!-- Related Products -->
                                        <div class="related-products">
                                            <h5>You May <span>also like this</span></h5>
                                            <div class="related-produst-slider">
                                                <div class="item">
                                                    <div class="product-box">
                                                        <div class="product-img">
                                                            <img src="images/best-seller/img-01.jpg" alt="">
                                                            <ul class="product-cart-option position-center-x">
                                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-detail">
                                                            <span>Novel</span>
                                                            <h5>Jewels of Nizam</h5>
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-box">
                                                        <div class="product-img">
                                                            <img src="images/best-seller/img-02.jpg" alt="">
                                                            <ul class="product-cart-option position-center-x">
                                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-detail">
                                                            <span>Novel</span>
                                                            <h5>Jewels of Nizam</h5>
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-box">
                                                        <div class="product-img">
                                                            <img src="images/best-seller/img-03.jpg" alt="">
                                                            <ul class="product-cart-option position-center-x">
                                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-detail">
                                                            <span>Novel</span>
                                                            <h5>Jewels of Nizam</h5>
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Related Products -->

                                    </div>
                                </div>
                                <!-- Reviews -->

                                <!-- Description -->
                                <div id="tab-2">
                                    <div class="description">
                                        <p>With this highly anticipated new novel, the author of the bestselling Life of Pi returns to the storytelling power and luminous wisdom of his master novel. The High Mountains of Portugal is a suspenseful.</p>
                                        <p>Thirty-five years later, a pathologist devoted to the novels of Agatha Christie, whose wife has possibly been murdered, finds himself drawn into Tomás’s quest. Fifty years later, Senator Peter Tovy of Ottawa, grieving the death of his own beloved wife, rescues a chimpanzee from an Oklahoma research facility and takes it to live with him in his ancestral village in northern Portugal, where the strands of all three stories miraculously mesh together.</p>
                                        <ul class="check-list">
                                            <li>Share this book</li>
                                            <li>Book club notes</li>
                                            <li>Openbook</li>
                                            <li>High resolution cover</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Description -->

                            </div>
                        </div>
                        <!-- Tabs Content -->

                    </div>
                </div>
            </div>
            <!-- Disc Nd Reviews -->

        </div>
    </div>
    <!-- Shop Detail -->

    <script type="text/javascript">
        
    </script>
@endsection
