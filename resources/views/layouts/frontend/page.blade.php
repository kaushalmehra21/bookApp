<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content=""/>
<!-- Document Title -->
<title>Bookstore HTML5 Template</title>

<!-- StyleSheets -->
<link rel="stylesheet" href="{{ asset('/frontend/css/bootstrap/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('/frontend/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('/frontend/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('/frontend/css/icomoon.css') }}">
<link rel="stylesheet" href="{{ asset('/frontend/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('/frontend/css/color-1.css') }}">
<link rel="stylesheet" href="{{ asset('/frontend/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('/frontend/css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('/frontend/css/transition.css') }}">

<!-- Online Lib -->
<link rel="stylesheet" href="http://www.atlasestateagents.co.uk/css/tether.min.css">
<script src="http://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>

<!-- Switcher CSS -->
<link href="{{ asset('/frontend/css/default.css') }}" rel="stylesheet" type="text/css"/> 
<link rel="stylesheet" id="skins" href="{{ asset('/frontend/css/default.css') }}" type="text/css" media="all">

<!-- FontsOnline -->
<link href='https://fonts.googleapis.com/css?family=Merriweather:300,300italic,400italic,400,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900italic,900,100italic,100' rel='stylesheet' type='text/css'>

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="{{ asset('/frontend/js/vendor/modernizr.js') }}"></script>
</head>
<body>

<!-- Preloader -->
<!-- <div id="status">
    <div id="preloader">
        <div class="preloader position-center-center">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div> -->
<!-- Preloader -->

<!-- Wrapper -->
<div class="wrapper push-wrapper">

    <!-- Header -->
    @section('header')
        @component('frontend.header.page')
        @endcomponent
    @show
    <!-- Header -->

    <!-- breadcrumb -->
    <div class="breadcrumb-holder white-bg">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>About</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb -->

    <!-- Main Content -->
    @yield('content')
    <!-- Main Content -->

    <!-- Footer -->
    @section('footer')
        @component('frontend.footer.main')
        @endcomponent
    @show
    <!-- Footer -->

</div>
<!-- Wrapper -->

<!-- Slide Menu -->
<nav id="menu" class="responive-nav">
    <a class="r-nav-logo" href="index.html"><img src="{{ asset('/frontend/images/logo-1.png') }}" alt=""></a>
    <ul class="respoinve-nav-list">
        <li>
            <a class="triple-eff" data-toggle="collapse" href="#list-1"><i class="pull-right fa fa-angle-down"></i>Home</a>
            <ul class="collapse" id="list-1">
                <li><a href="index.html">home 1</a></li>
                <li><a href="index-2.html">home 2</a></li>
            </ul>
        </li>
        <li>
            <a class="triple-eff" data-toggle="collapse" href="#list-2"><i class="pull-right fa fa-angle-down"></i>Shop</a>
            <ul class="collapse" id="list-2">
                <li><a href="shop.html">shop</a></li>
                <li><a href="shop-detail.html">shop Detail</a></li>
            </ul>
        </li>
        <li>
            <a class="triple-eff" data-toggle="collapse" href="#list-3"><i class="pull-right fa fa-angle-down"></i>Blog</a>
            <ul class="collapse" id="list-3">
                <li><a href="blog-all-views.html">blog all views</a></li>
                <li><a href="blog-larg.html">blog Larg</a></li>
                <li><a href="blog-list.html">blog List</a></li>
                <li><a href="blog-grid.html">blog Grid</a></li>
                <li><a href="blog-detail.html">blog detail</a></li>
            </ul>
        </li>
        <li>
            <a class="triple-eff" data-toggle="collapse" href="#list-4"><i class="pull-right fa fa-angle-down"></i>Pages</a>
            <ul class="collapse" id="list-4">
                <li><a href="about.html">about</a></li>
                <li><a href="gallery.html">gallery</a></li>
                <li><a href="event-list.html">event list</a></li>
                <li><a href="event-detail.html">event detail</a></li>
                <li><a href="book-list.html">blog list</a></li>
                <li><a href="book-detail.html">book detail</a></li>
                <li><a href="404.html">404</a></li>
            </ul>
        </li>
        <li>
            <a class="triple-eff" data-toggle="collapse" href="#list-5"><i class="pull-right fa fa-angle-down"></i>author</a>
            <ul class="collapse" id="list-5">
                <li><a href="author.html">author</a></li>
                <li><a href="author-detail.html">author detail</a></li>
            </ul>
        </li>
        <li><a href="contact.html">Contact</a></li>                       
    </ul>
</nav>
<!-- Slide Menu -->

<!-- View Pages -->
<div class="modal fade open-book-view" id="open-book-view" role="dialog">
    <div class="position-center-center" role="document">
        <div class="modal-content">
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div id="magazine">
                <div style="background-image:url({{ asset('/frontend/images/pages/01.jpg') }});"></div>
                <div style="background-image:url({{ asset('/frontend/images/pages/02.jpg') }});"></div>
                <div style="background-image:url({{ asset('/frontend/images/pages/03.jpg') }});"></div>
                <div style="background-image:url({{ asset('/frontend/images/pages/04.jpg') }});"></div>
                <div style="background-image:url({{ asset('/frontend/images/pages/04.jpg') }});"></div>
                <div style="background-image:url({{ asset('/frontend/images/pages/05.jpg') }});"></div>
                <div style="background-image:url({{ asset('/frontend/images/pages/05.jpg') }});"></div>
                <div style="background-image:url({{ asset('/frontend/images/pages/06.jpg') }});"></div>
            </div>
        </div>
    </div>
</div>
<!-- View Pages -->

<!-- regstration Modal -->
<div class="modal fade login-modal" id="login-modal" role="dialog">
    <div class="position-center-center" role="document">
        <div class="modal-content">
            <strong>Register</strong>
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="social-options">
                <ul>
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i>Register with facebook</a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i>Register with twitter</a></li>
                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i>Register with gmail+</a></li>
                </ul>
            </div>
            <form class="sending-form">
                <div class="form-group">
                    <input class="form-control" required="required" placeholder="Full name">
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group">
                    <input class="form-control" required="required" placeholder="Email Address">
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" required="required" placeholder="Password">
                    <i class="fa fa-user"></i>
                </div>
                <p class="terms">You agree to the hldy.hr <a href="#">Terms &amp; Conditions</a></p>
                <button class="btn-1 shadow-0 full-width">Register account</button>
            </form>
        </div>
    </div>
</div>
<!-- reg Modal -->



<!-- Quick View -->
<div class="modal fade quick-view" id="quick-view" role="dialog">
    <div class="position-center-center" role="document">
        <div class="modal-content">
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="single-product-detail">
                <div class="row">

                    <!-- Product Thumnbnail -->
                    <div class="col-sm-5">
                        <div class="product-thumnbnail">
                            <img src="{{ asset('/frontend/images/qiuck-view/img-01.jpg') }}" alt="">
                        </div>
                    </div>
                    <!-- Product Thumnbnail -->

                    <!-- Product Detail -->
                    <div class="col-sm-7">
                        <div class="single-product-detail">
                            <span class="availability">Availability :<strong>Stock<i class="fa fa-check-circle"></i></strong></span>
                            <h3>Land the Earth Beach</h3>
                            <ul class="rating-stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                                <li>1 customer review</li>
                            </ul>
                            <div class="prics"><del class="was">$32.00</del><span class="now">$30.99</span></div>
                            <h4>Overview</h4>
                            <p>With this highly anticipated new novel, the author of the bestselling Life of Pi returns to the storytelling power and luminous wisdom of his master novel. The High Mountains of Portugal.</p>
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

        </div>
    </div>
</div>
<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
<!-- Quick View -->


<!-- Java Script -->
<!-- <script src="{{ asset('/frontend/js/vendor/jquery.js') }}"></script>  -->       
<script src="{{ asset('/frontend/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('/frontend/http://maps.google.com/maps/api/js?sensor=false') }}"></script>
<script src="{{ asset('/frontend/js/gmap3.min.js') }}"></script>                 
<script src="{{ asset('/frontend/js/datepicker.js') }}"></script>                    
<script src="{{ asset('/frontend/js/contact-form.js') }}"></script>                  
<script src="{{ asset('/frontend/js/bigslide.js') }}"></script>                          
<script src="{{ asset('/frontend/js/3d-book-showcase.js') }}"></script>                  
<script src="{{ asset('/frontend/js/turn.js') }}"></script>                          
<script src="{{ asset('/frontend/js/jquery-ui.js') }}"></script>                             
<script src="{{ asset('/frontend/js/mcustom-scrollbar.js') }}"></script>                 
<script src="{{ asset('/frontend/js/timeliner.js') }}"></script>                 
<script src="{{ asset('/frontend/js/parallax.js') }}"></script>               
<script src="{{ asset('/frontend/js/countdown.js') }}"></script> 
<script src="{{ asset('/frontend/js/countTo.js') }}"></script>       
<script src="{{ asset('/frontend/js/owl-carousel.js') }}"></script>  
<script src="{{ asset('/frontend/js/bxslider.js') }}"></script>  
<script src="{{ asset('/frontend/js/appear.js') }}"></script>                
<script src="{{ asset('/frontend/js/sticky.js') }}"></script>                    
<script src="{{ asset('/frontend/js/prettyPhoto.js') }}"></script>           
<script src="{{ asset('/frontend/js/isotope.pkgd.js') }}"></script>                   
<script src="{{ asset('/frontend/js/wow-min.js') }}"></script>           
<script src="{{ asset('/frontend/js/classie.js') }}"></script>                   
<script src="{{ asset('/frontend/js/main.js') }}"></script>      
<script src="{{ asset('/frontend/js/bootstrap-notify.min.js') }}"></script> 
<!-- Switcher JS -->
<script type="text/javascript" src="{{ asset('/frontend/switcher/cookie.js') }}"></script>
<script type="text/javascript" src="{{ asset('/frontend/switcher/colorswitcher.js') }}"></script>
<!-- Switcher JS -->

<script type="text/javascript">

    $(document).ready(function(){
        $(document).on('click', '.addToCartTrgr', function(){
            var product_id = $(this).attr('data-product-id');
            var user_id = $(this).attr('data-user-id');
            var user_ip = '<?php echo urlencode($_SERVER['REMOTE_ADDR'])  ?>';
            var _token = $('#_token').val();
            var cart = parseInt($('#cart_num').text());
            alert(cart);
            $.ajax({
                type: "GET",
                url: "<?php echo url('/cart/ajax-add') ?>",
                data: {
                    'product_id' : product_id,
                    'user_id' : user_id,
                    'user_ip' : user_ip,
                    'quantity' : 1,
                    'token' : _token
                },
                //dataType: 'json',
                success: function(data) {
                    if(data==1) {
                        var msg = 'success fully added to cart';
                        $('#cart_num').text(cart+1);
                    } else {
                        var msg = 'already added to cart';
                    }
                    notify_msg(msg);
                }
            });
        });


        $(document).on('click', '.sp-plus, .sp-minus', function() {

            var id      = $(this).attr('data-id');
            var cart_id = $(this).attr('data-cart-id');
            var rp      = parseInt($('#rp_'+id).val());
            var qty     = parseInt($('#qty_'+id).val());
            var rp_qty  = rp*qty;
            var _token  = $('#_token').val();

            $('#rp_qty_'+id).val(rp_qty);
            $('#rp_qty_spn_'+id).html(rp_qty);

            $.ajax({
                type: "GET",
                url: "<?php echo url('/cart/ajax-update') ?>",
                data: {
                    'cart_id' : cart_id,
                    'quantity' : qty,
                    'token' : _token
                },
                success: function(data) {
                    /*alert(data);
                    console.log(data);*/
                    updateCart();
                    var msg = 'cart updated';
                    notify_msg(msg);
                }
            });
 
        });

        $(document).on('click', '#removeCartTrgr', function(){

            var cart_id = $(this).attr('data-cart-id');
            var _token = $('#_token').val();

            $.ajax({
                type: "GET",
                url: "<?php echo url('/cart/ajax-delete') ?>",
                data: {
                    'cart_id' : cart_id,
                    'token' : _token
                },
                //dataType: 'json',
                success: function(data) {
                    //alert(data);
                    $('#removeCartTrgr').closest("tr").remove();
                    var msg = 'success fully deleted from cart';
                    notify_msg(msg);
                }
            });
        });

        $(document).on('click', '#updateCartTrgr', function(){
            updateCart();
        });

        function updateCart()
        {
            var total_amount_arr = [];
            var total_amount = 0;
            $(".rp_qty_cls").each(function(index) {
                var amount = $(this).val();
                total_amount_arr.push(amount);
                total_amount += amount << 0;
            });
            //console.log(total_amount);

            $('#total_amount_span').html(total_amount);
            $('#grand_total_amount_strong').html(total_amount);
            $('#total_amount_hidd_inpt').val(total_amount);
        }

        /*$(document).on('click', '#cart_form_submit_btn_trgr', function(){
            $('#cart-form').submit();
        });*/


        // checkout address page
        <?php if($_SERVER['REQUEST_URI']=='/checkout/address') { ?>
            $('#co_collapse2').collapse('show');
        <?php }

        if($_SERVER['REQUEST_URI']=='/checkout/review-cart') { ?>
            $('#co_collapse3').collapse('show');
        <?php } ?>


        function notify_msg(msg)
        {
            
            $.notify({
                //title: "Update Complete : ",
                message: msg,
                icon: 'fa fa-check'
            },{
                type: "info",
                placement: {
                    from: "top",
                    align: "right"
                },
                offset: {
                    x: 50,
                    y: 100
                }
            });
        }


        /*$(document).on('blur', '#model_isEmailExistTrgr', function(){

            var email = $(this).val();
            var _token = $('#_token').val();
            //alert(email);


            $.ajax({
                url     : '<?php // echo url('/users/is-email-exist') ?>',
                data: { 
                    'email' : email,
                    '_token' : _token
                },
                //dataType: 'json',
                success: function(data){
                    alert(data);
                    console.log(email);
                }
            });
        });*/
    });
</script>

</body>
</html>