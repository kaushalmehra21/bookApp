
<div class="topbar">
    <div class="container">
        
        <!-- Online Option -->
        <div class="online-option">
            <ul>
                <li><a href="#">online store</a></li>
                <li><a href="#">Payment</a></li>
                <li><a href="#">shipping</a></li>
                <li><a href="#">Return</a></li>
            </ul>
        </div>
        <!-- Online Option -->

        <!-- Social Icons -->
        <div class="social-icons pull-right">
            <ul>
                <li><a class="fa fa-facebook" href="#"></a></li>    
                <li><a class="fa fa-twitter" href="#"></a></li> 
                <li><a class="fa fa-google-plus" href="#"></a></li> 
                <li><a class="fa fa-pinterest-p" href="#"></a></li> 
            </ul>
        </div>
        <!-- Social Icons -->

        <!-- Cart Option -->
        <div class="cart-option">
            <ul>
                <li class="add-cart"><a href="{{ url('cart') }}"><i class="fa fa-shopping-bag"></i><span id="cart_num">3</span></a></li>
                <li><a href="#"><i class="fa fa-heart-o"></i>wish List 0 items</a></li>
                <li>
                    <?php
                    if( isset($login_detail) && !empty($login_detail) ) {
                          
                        echo '<div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-toggle="dropdown"><a href="#"><i class="fa fa-user"></i>'.$login_detail['user_email'].'</a>
                                <span class="caret"></span></button>
                                <ul style="background-color:#333" class="dropdown-menu">
                                  <li><a href="#" >Logout</a></li>
                                  
                                </ul>
                              </div>';
                    } else {
                        echo '<a href="#" data-toggle="modal" data-target="#register-modal"><i class="fa fa-user"></i>Login / Register</a>';
                    }
                    ?>
                </li>
            </ul>
        </div>
        <!-- Cart Option -->
    </div>
</div>