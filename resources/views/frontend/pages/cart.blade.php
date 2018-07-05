@extends('layouts.frontend.page')

@section('topbar')
    @include('frontend.header.topbar')
@endsection

@section('content')
    <?php
    OrderSession::SetOrderSession();
    ?>
    <main class="main-content">

        <!-- Service And Mission -->
        <section class="service-nd-mission tc-padding-top white-bg">
            <div class="container">
                
                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading style-1">
                        <h2>Book <span class="theme-color">Cart</span></h2>
                    </div>
                </div>
                
                <div class="container">
                    <div class="shop-cart">
                        <div class="table table-condensed table-striped table-responsive">
                            <?php
                            if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
                            {
                                $cart_form_url = 'checkout';
                            } else {
                                $cart_form_url = 'checkout/login';
                            }
                            ?>
                            <form action="<?php echo $cart_form_url ?>" name="cart-form" id="cart-form" method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th width="5%" class="cart-product-remove"></th>
                                            <th width="20%" class="cart-product-thumbnail">Product</th>
                                            <th width="25%" class="cart-product-name">Description</th>
                                            <th width="15%" class="cart-product-price">Unit Price</th>
                                            <th width="25%" class="cart-product-quantity">Quantity</th>
                                            <th width="10%" class="cart-product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $total_ammount_arr = []; 

                                        foreach($carts as $cart)
                                        {
                                            $total_ammount_arr[] = $cart['product']['sale_price']*$cart['quantity'];
                                            ?>
                                            <tr>
                                                <td class="cart-product-remove">
                                                    <a id="removeCartTrgr" data-cart-id="{{ $cart['id'] }}" style="cursor: pointer;">
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                </td>

                                                <td class="cart-product-thumbnail">
                                                    <!-- <a href="#">
                                                        <img src="images/shop/products/1.jpg" alt="Bolt Sweatshirt">
                                                    </a> -->
                                                    <div class="cart-product-thumbnail-name">{{ $cart['product']['title'] }}</div>
                                                </td>

                                                <td class="cart-product-description">

                                                    <p><span>{{ $cart['product']['sub_title'] }}</span>
                                                        <!-- <span>Size: M</span>
                                                        <span>Color: Blue</span>
                                                        <span>Gender: Women</span> -->
                                                    </p>
                                                </td>

                                                <td class="cart-product-price">
                                                    <span class="amount">
                                                        <i class="fa fa-rupee"></i>
                                                        {{ $cart['product']['sale_price'] }}
                                                        <input type="hidden" name="cart[rp]" id="rp_{{ $cart['product']['id'] }}" value="{{ $cart['product']['sale_price'] }}">
                                                    </span>
                                                </td>

                                                <td class="cart-product-quantity">
                                                    <div class="quantity-box">
                                                        <!-- <label>Qty :</label> -->
                                                        <div class="sp-quantity">
                                                            <div class="sp-minus fff" data-id="{{ $cart['product']['id'] }}" data-cart-id="{{ $cart['id'] }}">
                                                                <a class="ddd" data-multi="-1">-</a>
                                                            </div>
                                                            <div class="sp-input">
                                                                <input 
                                                                type="text"
                                                                class="quntity-input" 
                                                                value="{{ $cart['quantity'] }}" 
                                                                id="qty_{{ $cart['product']['id'] }}">
                                                            </div>
                                                            <div class="sp-plus fff" data-id="{{ $cart['product']['id'] }}" data-cart-id="{{ $cart['id'] }}">
                                                                <a class="ddd" data-multi="1">+</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="cart-product-subtotal">
                                                    <span class="amount">
                                                        <i class="fa fa-rupee"></i>
                                                        <span id="rp_qty_spn_{{ $cart['product']['id'] }}">{{ ($cart['product']['sale_price']*$cart['quantity']) }}</span>
                                                        <input class="rp_qty_cls" type="hidden" name="cart[rp_qty]" id="rp_qty_{{ $cart['product']['id'] }}"" value="{{ $cart['product']['sale_price'] }}">
                                                    </span>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        $total_amount = array_sum($total_ammount_arr);
                                        ?>
                                    </tbody>
                                </table>
                                <input type="hidden" name="total_amount" id="total_amount_hidd_inpt" value="<?php echo $total_amount ?>">
                                <input type="hidden" name="_token" id="cartToken" value="{{ csrf_token() }}">
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- <form class="form-inline">
                                    <div class="form-group">
                                        <input type="text" placeholder="Coupon Code" id="CouponCode" class="form-control">
                                        <a href="#" class="button border"><span>Apply</span> </a>
                                        <p class="small">Enter any valid coupon or promo code here to redeem your discount.</p>
                                    </div>
                                </form> -->
                            </div>
                            <div class="col-md-8 text-right">
                                <button type="button" class="btn btn-default" id="updateCartTrgr" >Update Card</button>
                            </div>
                        </div>
                        <div class="row">
                            <hr class="space">
                            <div class="col-md-6">
                                <!-- <h4>Calculate Shipping</h4>
                                <form class="row">
                                    <div class="col-md-12 m-b-20">
                                        <select class="form-control">
                                            <option value="Isl">Islands</option>
                                            <option value="Ind">India</option>
                                            
                                        </select></br>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" placeholder="State / County" class="form-control">
                                    </div>

                                    <div class="col-md-6  form-group">
                                        <input type="text" class="form-control" placeholder="Post Code / Zip">
                                    </div>
                                </form> -->
                            </div>
                            <div class="col-md-6 p-r-10 ">
                                <div class="table-responsive">
                                    <h4>Cart Subtotal</h4>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="cart-product-name">
                                                    <strong>Cart Subtotal</strong>
                                                </td>

                                                <td class="cart-product-name text-right">
                                                    <span class="amount" id="total_amount_span">
                                                        <!-- <i class="fa fa-rupee"></i> -->
                                                        <?php echo $total_amount ?>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="cart-product-name">
                                                    <strong>Shipping</strong>
                                                </td>

                                                <td class="cart-product-name text-right">
                                                    <span class="amount">Free Shipping</span>
                                                </td>
                                            </tr>
                                            <!-- <tr>
                                                <td class="cart-product-name">
                                                    <strong>Coupon</strong>
                                                </td>

                                                <td class="cart-product-name  text-right">
                                                    <span class="amount">-20%</span>
                                                </td>
                                            </tr> -->
                                            <tr>
                                                <td class="cart-product-name">
                                                    <strong>Total</strong>
                                                </td>

                                                <td class="cart-product-name text-right">
                                                    <span class="amount color lead">
                                                        <strong id="grand_total_amount_strong">
                                                        <!-- <i class="fa fa-rupee"></i> -->
                                                        <?php echo $total_amount ?>
                                                        </strong>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a style="cursor: pointer;" id="cart_form_submit_btn_trgr" class="btn btn-default icon-left float-right">
                                    <span>Proceed to Checkout</span>
                                </a>
                                </br></br></br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service And Mission -->
    </main>
    <!-- Main Content -->
@endsection