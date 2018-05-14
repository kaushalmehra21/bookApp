@extends('layouts.frontend.page')


@section('content')

    <main class="main-content">

        <!-- Service And Mission -->
        <section class="service-nd-mission tc-padding-top white-bg">
            <div class="container">
                
                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading style-1">
                        <h2>Help us Improve <span class="theme-color">our Service</span></h2>
                    </div>
                </div>
                
                <div class="container">
                    <div class="shop-cart">
                        <div class="table table-condensed table-striped table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-product-remove"></th>
                                        <th class="cart-product-thumbnail">Product</th>
                                        <th class="cart-product-name">Description</th>
                                        <th class="cart-product-price">Unit Price</th>
                                        <th class="cart-product-quantity">Quantity</th>
                                        <th class="cart-product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="cart-product-remove">
                                            <a href="#"><i class="fa fa-close"></i></a>
                                        </td>

                                        <td class="cart-product-thumbnail">
                                            <a href="#">
                                                <img src="images/shop/products/1.jpg" alt="Bolt Sweatshirt">
                                            </a>
                                            <div class="cart-product-thumbnail-name">Bolt Sweatshirt</div>
                                        </td>

                                        <td class="cart-product-description">

                                            <p><span>Bolt Sweatshirt</span>
                                                <span>Size: M</span>
                                                <span>Color: Blue</span>
                                                <span>Gender: Women</span>
                                            </p>
                                        </td>

                                        <td class="cart-product-price">
                                            <span class="amount">$20.00</span>
                                        </td>

                                        <td class="cart-product-quantity">
                                            <div class="quantity-box">
                                                    <label>Qty :</label>
                                                    <div class="sp-quantity">
                                                        <div class="sp-minus fff"><a class="ddd" data-multi="-1">-</a></div>
                                                        <div class="sp-input">
                                                            <input type="text" class="quntity-input" value="1">
                                                        </div>
                                                        <div class="sp-plus fff"><a class="ddd" data-multi="1">+</a></div>
                                                    </div>
                                                </div>
                                        </td>

                                        <td class="cart-product-subtotal">
                                            <span class="amount">$20.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cart-product-remove">
                                            <a href="#"><i class="fa fa-close"></i></a>
                                        </td>

                                        <td class="cart-product-thumbnail">
                                            <a href="#">
                                                <img alt="Consume Tshirt" src="images/shop/products/2.jpg">
                                            </a>
                                            <div class="cart-product-thumbnail-name">Consume Tshirt</div>
                                        </td>

                                        <td class="cart-product-description">
                                            <p><span>Consume Tshirt</span>
                                                <span>Size: S</span>
                                                <span>Color: Blue</span>
                                                <span>Gender: Women</span>
                                            </p>
                                        </td>

                                        <td class="cart-product-price">
                                            <span class="amount">$18.99</span>
                                        </td>

                                        <td class="cart-product-quantity">
                                            <div class="quantity-box">
                                                    <label>Qty :</label>
                                                    <div class="sp-quantity">
                                                        <div class="sp-minus fff"><a class="ddd" data-multi="-1">-</a></div>
                                                        <div class="sp-input">
                                                            <input type="text" class="quntity-input" value="1">
                                                        </div>
                                                        <div class="sp-plus fff"><a class="ddd" data-multi="1">+</a></div>
                                                    </div>
                                                </div>
                                        </td>

                                        <td class="cart-product-subtotal">
                                            <span class="amount">$18.99</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cart-product-remove">
                                            <a href="#"><i class="fa fa-close"></i></a>
                                        </td>

                                        <td class="cart-product-thumbnail">
                                            <a href="#">
                                                <img src="images/shop/products/3.jpg" alt="Logo Tshirt">
                                            </a>
                                            <div class="cart-product-thumbnail-name">Logo Tshirt</div>
                                        </td>

                                        <td class="cart-product-description">

                                            <p><span>Logo Tshirt</span>
                                                <span>Size: L</span>
                                                <span>Color: Grey</span>
                                                <span>Gender: Man</span>
                                            </p>
                                        </td>

                                        <td class="cart-product-price">
                                            <span class="amount">$9.00</span>
                                        </td>

                                        <td class="cart-product-quantity">
                                            <div class="quantity-box">
                                                    <label>Qty :</label>
                                                    <div class="sp-quantity">
                                                        <div class="sp-minus fff"><a class="ddd" data-multi="-1">-</a></div>
                                                        <div class="sp-input">
                                                            <input type="text" class="quntity-input" value="1">
                                                        </div>
                                                        <div class="sp-plus fff"><a class="ddd" data-multi="1">+</a></div>
                                                    </div>
                                                </div>
                                        </td>

                                        <td class="cart-product-subtotal">
                                            <span class="amount">$18.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cart-product-remove">
                                            <a href="#"><i class="fa fa-close"></i></a>
                                        </td>

                                        <td class="cart-product-thumbnail">
                                            <a href="#">
                                                <img src="images/shop/products/5.jpg" alt="Grey Sweatshirt">
                                            </a>
                                            <div class="cart-product-thumbnail-name">Grey Sweatshirt</div>
                                        </td>

                                        <td class="cart-product-description">

                                            <p><span>Grey Sweatshirt</span>
                                                <span>Size: L</span>
                                                <span>Color: Grey</span>
                                                <span>Gender: Man</span>
                                            </p>
                                        </td>

                                        <td class="cart-product-price">
                                            <span class="amount">$22.99</span>
                                        </td>

                                        <td class="cart-product-quantity">
                                            <div class="quantity-box">
                                                    <label>Qty :</label>
                                                    <div class="sp-quantity">
                                                        <div class="sp-minus fff"><a class="ddd" data-multi="-1">-</a></div>
                                                        <div class="sp-input">
                                                            <input type="text" class="quntity-input" value="1">
                                                        </div>
                                                        <div class="sp-plus fff"><a class="ddd" data-multi="1">+</a></div>
                                                    </div>
                                                </div>
                                        </td>

                                        <td class="cart-product-subtotal">
                                            <span class="amount">$68.97</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <input type="text" placeholder="Coupon Code" id="CouponCode" class="form-control">
                                        <a href="#" class="button border"><span>Apply</span> </a>
                                        <p class="small">Enter any valid coupon or promo code here to redeem your discount.</p>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-8 text-right">
                                <button type="button" class="btn btn-default">Update Card</button>
                            </div>
                        </div>
                        <div class="row">
                            <hr class="space">
                            <div class="col-md-6">
                                <h4>Calculate Shipping</h4>
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
                                </form>
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
                                                    <span class="amount">$125.96</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="cart-product-name">
                                                    <strong>Shipping</strong>
                                                </td>

                                                <td class="cart-product-name  text-right">
                                                    <span class="amount">Free Shipping</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="cart-product-name">
                                                    <strong>Coupon</strong>
                                                </td>

                                                <td class="cart-product-name  text-right">
                                                    <span class="amount">-20%</span>
                                                </td>
                                            </tr><tr>
                                                <td class="cart-product-name">
                                                    <strong>Total</strong>
                                                </td>

                                                <td class="cart-product-name text-right">
                                                    <span class="amount color lead"><strong>$100.76</strong></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="#" class="btn btn-default icon-left float-right">
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
