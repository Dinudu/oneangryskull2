<?php
/**
 * Template Name: Checkout Page
 * Description: A Page Template with a darker design.
 */

get_header();

wc_print_notices();

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is enabled, show the registration form.
if ( get_option( 'woocommerce_enable_signup_and_login_from_checkout' ) === 'yes' ) {
    do_action( 'woocommerce_before_checkout_registration_form', $checkout );
    ?>
    <div class="col-2">
        <?php if ( ! is_user_logged_in() ) : ?>
            <div class="woocommerce-checkout-before">
                <h3 id="registration_title"><?php _e( 'Register', 'woocommerce' ); ?></h3>
                <p><?php _e( 'Create an account by entering the information below. If you are a returning customer please login at the top of the page.', 'woocommerce' ); ?></p>
                <?php do_action( 'woocommerce_checkout_before_registration_form', $checkout ); ?>
            </div>
        <?php endif; ?>
        <div class="woocommerce-checkout-after">
            <?php do_action( 'woocommerce_checkout_after_registration_form', $checkout ); ?>
        </div>
    </div>
    <?php
    do_action( 'woocommerce_after_checkout_registration_form', $checkout );
}

// Checkout login form
if ( ! is_user_logged_in() && get_option( 'woocommerce_enable_signup_and_login_from_checkout' ) === 'yes' ) {
    do_action( 'woocommerce_before_checkout_login_form', $checkout );
    ?>
    <div class="col-2">
        <div class="woocommerce-checkout-before">
            <h3 id="login_title"><?php _e( 'Login', 'woocommerce' ); ?></h3>
            <p><?php _e( 'If you have shopped with us before, please enter your details below. If you are a new customer please proceed to the registration form.', 'woocommerce' ); ?></p>
            <?php do_action( 'woocommerce_checkout_before_login_form', $checkout ); ?>
        </div>
        <div class="woocommerce-checkout-after">
            <?php do_action( 'woocommerce_checkout_after_login_form', $checkout ); ?>
        </div>
    </div>
    <?php
    do_action( 'woocommerce_after_checkout_login_form', $checkout );
}

// Checkout Coupon form
if ( WC()->cart->coupons_enabled() ) {
    do_action( 'woocommerce_before_checkout_coupon_form', $checkout );
    ?>
    <div class="col-2">
        <div class="woocommerce-checkout-before">
            <h3 id="coupon_title"><?php _e( 'Coupon', 'woocommerce' ); ?></h3>
            <p><?php _e( 'If you have a coupon code, please apply it below.', 'woocommerce' ); ?></p>
            <?php do_action( 'woocommerce```php _e( 'Coupon', 'woocommerce' ); ?></hphp _e( 'Coupon', 'woocommerce' ); ?></h3>
           php _e( 'Coupon', 'woocommerce' ); ?></h3>
3>
            <p><?php _e( 'If you havephp _e( 'Coupon', 'woocommerce' ); ?></h3>
            <p <p><?php _e( 'If you have a coupon code, please apply it below.', 'woocommerce' ); ?></p>
                       <p><?php _e( 'If you have a cou a coupon code, please apply it below.', 'woocommerce' ); ?></p>
            <?pon code, please apply it below.', 'wophp do_action( 'woocommerce_checkout><?php _e( 'If you have a coupon code, please apply it below.', 'woocommerce' ); <?php do_action( 'woocommerce_checkout_before_coupon_form', $checkout ); ?>
        </div>
       ocommerce' ); ?></p>
            <?php do_action( 'woocommerce_checkout_before_coupon_form', $checkout ); ?>
        </div_before_coupon_form', $>
        <div class="woocommerce- ?></p>
            <?php do_action( 'woocommerce_checkout_before_coupon_form', $checkout <div class="woocommerce-checkout-after">
            <?php do_action( 'woocommerce_checkout_after_coupon_form', $checkout ); ?>
        </div>
    </div>
   checkout ); ?>
        </div>
        <div class="woocommerce-checkout-aftercheckout-after">
            <?php do_action( 'woocommerce_checkout_after_coupon_form', $checkout ); ?>
       ">
            <?php do_action( </div>
    </div>
    <?php
 ); ?>
        </div>
        <div class="woocommerce-checkout-after">
            <?php do_action( 'woocommerce_checkout_after <?php
    do_action( 'woocommerce_after_checkout_coupon_form', $checkout );
}

// Checkout Billing form
do_action( 'woocommerce_before_checkout_b 'woocommerce_    do_action( 'woocommerce_after_check_coupon_form', $checkout ); ?>
        </div>
    </div>
    <?php
illing_form', $checkout );

// Check if billing address is set, if not display the form
if ( ! is_user_logged_in() && ( ! get_option( 'woocommerce_checkout_afterenable_guest_checkout' ) || wc_ship_to_billing_address_only() ) ) {
    echo '<div id="billing_address_fieldsout_coupon_form', $checkout );
}

// Check" class="col-2">';
} else {
    echo '<div id="billing_address_fields" class="col-2"out Billing form
do_action( 'woocommerce_before_checkout_billing_form', $checkout );

// Checkout Billing form
do_action    do_action( 'woocommerce_after_checkout_coupon_form', $checkout );
}

// Check style="display: none;">';
}

woocommerce_form_billing();

_coupon_form', $checkout );echo '</div>';

do_action( 'woocommerce_after_checkout_b( 'woocommerce_checkout_billing', $checkout );

// Checkout Shipping form
if ( WC()->cart->needs_shipping() ) {
    do_action( 'out Billing form
do_action( 'woocommerce_before_checkout_billing_form', $checkout );

// Check if billing address is set, if not display the form
if (illing_form', $checkout );

// Checkout Shipping form
do_action( 'woocommerce_before_checkout_shipping_form', $checkout );

// Check if shippingwoocommerce_before_checkout_shipping_form', $checkout );
    do_action( 'woocommerce_checkout_shipping', $checkout );
    do_action( 'woocommerce_after_checkout_shipping_ ! is address is set, if not display the form
if ( wc_ship_to_billing_address_only() && WC()->cart->needs_ship ?>
        </div>
    </div>
    <?php
    do_action( 'woocommerce_after_checkout_coupon_form', $checkout );
}ping() ) {
    echo '<div id="shipping_address_fields" class="col-2">';
} else {
   form', $checkout );
}

// Checkout Order Review form
do_action( 'woocommerce_checkout_before_order_review', $checkout );

// Checkout Order Review form
do_action( 'woocommerce_checkout_order_review', $checkout );

// Checkout Payment echo '<div id="shipping_address_fields" class="col-2" style="display: none;">';
}



// Checkout Billing form
do_action( 'woocommerce_before_checkout_billing_form', $woocommerce_form_shipping();

echo '</div>';

do_action( 'woocommerce_after_user_logged_in() && ( ! get_option( 'woocommerce_enable_guest_checkout' ) || wc_ship_to form
do_action( 'woocommerce_checkout_before_payment_form', $checkout );

// Checkout Payment form
do_action( 'woocommerce_checkout_payment', $checkout );

// Checkout Place Order form
do_action( 'woocommerce_checkout_before_place__checkout_shipping_form', $checkout );

// Checkout Order Review form
do_action( 'woocommerce_before_order_review', $checkout );

?>
_billing_address_only() ) ) {
    echo '<div id="billing_address_fields" class="col-2">';
} elsecheckout );

// Check if billing address is set, if not display the form
if ( ! is_user_logged_in() &&order', $checkout );

// Checkout Place Order form
do_action( 'woocommerce_checkout_place_order', $checkout );

do_action( 'woocommerce_after_checkout_form', $checkout );
?>

<!-- ========================  Main header ======================== -->

<section class="main-header" style="background-image:url(assets/images/gallery-2.jpg)">
            <header>
                <div class="container text-center">
                    <h2 class="h2 title">Checkout</h2>
                    <ol class="breadcrumb breadcrumb-inverted">
                        <li><a href="index.html"><span class="icon icon-home"></span></a></li>
                        <li><a href="checkout-1.html">Cart items</a></li>
                        <li><a class="active" href="checkout-2.html">Delivery</a></li>
                        <li><a href="checkout-3.html">Payment</a></li>
                        <li><a href="checkout-4.html">Receipt</a></li>
                    </ol>
                </div>
            </header>
        </section>

        <!-- ========================  Step wrapper ======================== -->

        <div class="step-wrapper">
            <div class="container">

                <div class="stepper">
                    <ul class="row">
                        <li class="col-md-3 active">
                            <span data-text="Cart items"></span>
                        </li>
                        <li class="col-md-3 active">
                            <span data-text="Delivery"></span>
                        </li>
                        <li class="col-md-3 ">
                            <span data-text="Payment"></span>
                        </li>
                        <li class="col-md-3">
                            <span data-text="Receipt"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ========================  Checkout ======================== -->

        <section class="checkout">
            <div class="container">

                <header class="hidden">
                    <h3 class="h3 title">Checkout - Step 2</h3>
                </header>

                <!-- ========================  Cart navigation ======================== -->

                <div class="clearfix">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="checkout-1.html" class="btn btn-clean-dark"><span class="icon icon-chevron-left"></span> Back to cart</a>
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="checkout-3.html" class="btn btn-main"><span class="icon icon-cart"></span> Go to payment</a>
                        </div>
                    </div>
                </div>

                <!-- ========================  Delivery ======================== -->

                <div class="cart-wrapper">

                    <div class="note-block">
                        <div class="row">

                            <!-- === left content === -->

                            <div class="col-md-6">

                                <!-- === login-wrapper === -->

                                <div class="login-wrapper">

                                    <div class="white-block">

                                        <!--signin-->

                                        <div class="login-block login-block-signin">

                                            <div class="h4">Sign in <a href="javascript:void(0);" class="btn btn-main btn-xs btn-register pull-right">create an account</a></div>

                                            <hr />

                                            <div class="row">


                                            <form id="custom-login-form" method="post">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" value="" class="form-control" name="username" id="username" value="<?php echo ! empty( $_POST['username'] ) ? esc_attr( $_POST['username'] ) : ''; ?>">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="password" value="" class="form-control" name="password" id="password">
                                                    </div>
                                                </div>

                                                <div class="col-xs-6">
                                                    <span class="checkbox">
                                                        <input type="checkbox" id="checkBoxId3">
                                                        <label for="checkBoxId3">Remember me</label>
                                                    </span>
                                                </div>

                                                <div class="col-xs-6 text-right">
                                                    <a href="#" class="btn btn-main">Login</a>
                                                </div>
                                                </div>
                                            </form>
                                        </div> <!--/signin-->
                                        <!--signup-->

                                        <div class="login-block login-block-signup">

                                            <div class="h4">Register now <a href="javascript:void(0);" class="btn btn-main btn-xs btn-login pull-right">Log in</a></div>

                                            <hr />
                                        <form method="POST">
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" value="" class="form-control" placeholder="First name: *">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" value="" class="form-control" placeholder="Last name: *">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <input type="text" value="" class="form-control" placeholder="Company name:">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" value="" class="form-control" placeholder="Zip code: *">
                                                    </div>
                                                </div>

                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" value="" class="form-control" placeholder="City: *">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" value="" class="form-control" placeholder="Email: *">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" value="" class="form-control" placeholder="Phone: *">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <hr />
                                                    <span class="checkbox">
                                                        <input type="checkbox" id="checkBoxId1">
                                                        <label for="checkBoxId1">I have read and accepted the <a href="#">terms</a>, as well as read and understood our terms of <a href="#">business contidions</a></label>
                                                    </span>
                                                    <span class="checkbox">
                                                        <input type="checkbox" id="checkBoxId2">
                                                        <label for="checkBoxId2">Subscribe to exciting newsletters and great tips</label>
                                                    </span>
                                                    <hr />
                                                </div>

                                                <div class="col-md-12">
                                                    <a href="#" class="btn btn-main btn-block">Create account</a>
                                                </div>

                                            </div>
                                        </form>

                                        </div> <!--/signup-->
                                    </div>
                                </div> <!--/login-wrapper-->
                            </div> <!--/col-md-6-->
                            <!-- === right content === -->

                            <div class="col-md-6">

                                <div class="white-block">

                                    <div class="h4">Choose delivery</div>

                                    <hr />

                                    <span class="checkbox">
                                        <input type="radio" id="deliveryId1" name="deliveryOption">
                                        <label for="deliveryId1">Delivery 1-3 Days - <strong>$50,00</strong></label>
                                    </span>

                                    <span class="checkbox">
                                        <input type="radio" id="deliveryId2" name="deliveryOption">
                                        <label for="deliveryId2">Fast delivery - <strong>$199,00</strong></label>
                                    </span>

                                    <span class="checkbox">
                                        <input type="radio" id="deliveryId3" name="deliveryOption">
                                        <label for="deliveryId3">Pick up in the store - <strong>Free</strong></label>
                                    </span>

                                    <hr />

                                    <div class="clearfix">
                                        <p>A frequently overlooked, powerful fulfillment option is offering local pick-up. If you have a physical location and can allow your customers to forgo paying shipping costs altogether, you should!</p>                            <p><strong>Benefits:</strong></p>
                                        <ul>
                                            <li>Avoid both shipping and packaging costs</li>
                                            <li>Develop a face-to-face relationship with your customers</li>
                                            <li>Potential for additional purchases while customers are at your store</li>
                                        </ul>
                                        <p><strong>Challenges:</strong></p>
                                        <ul>
                                            <li>Limited business hours can sometimes make it difficult to coordinate pickup</li>
                                            <li>Shoppers who cross state lines or ZIP codes may not know the sales tax rates in your area</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <!-- ========================  Cart wrapper ======================== -->

                <div class="cart-wrapper">
                    <!--cart header -->

                    <div class="cart-block cart-block-header clearfix">
                        <div>
                            <span>Product</span>
                        </div>
                        <div>
                            <span>&nbsp;</span>
                        </div>
                        <div>
                            <span>Quantity</span>
                        </div>
                        <div class="text-right">
                            <span>Price</span>
                        </div>
                    </div>

                    <!--cart items-->

                    <div class="clearfix">
                        <div class="cart-block cart-block-item clearfix">
                            <div class="image">
                                <a href="product.html"><img src="assets/images/product-7.png" alt="" /></a>
                            </div>
                            <div class="title">
                                <div class="h4"><a href="product.html">Coffee machine</a></div>
                                <div>Electronics</div>
                            </div>
                            <div class="quantity">
                                <strong>2</strong>
                            </div>
                            <div class="price">
                                <span class="final h3">$ 150,00</span>
                                <span class="discount">$ 190,00</span>
                            </div>
                        </div>

                     
                       
                    </div>

                    <!--cart prices -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>Discount 15%</strong>
                            </div>
                            <div>
                                <span>$ 159,00</span>
                            </div>
                        </div>

                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>Shipping</strong>
                            </div>
                            <div>
                                <span>$ 30,00</span>
                            </div>
                        </div>

                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>VAT</strong>
                            </div>
                            <div>
                                <span>$ 59,00</span>
                            </div>
                        </div>
                    </div>

                    <!--cart final price -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>Promo code included!</strong>
                            </div>
                            <div>
                                <div class="h2 title">$ 1259,00</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                                <div class="white-block">

                                    <div class="h4">Choose payment</div>

                                    <hr />

                                    <form>
                                        <!-- Other form fields here -->

                                        <fieldset>
                                            <legend>Payment Method</legend>
                                    
                                            <div class="payment_method_radio">
                                                <span class="checkbox">
                                                    <input type="radio" id="paymentID1" name="paymentOption" checked="checked">
                                                    <label for="paymentID1">
                                                        <strong>Pay via credit cart</strong> <br />
                                                        <small>(MasterCard, Maestro, Visa, Visa Electron, JCB and American Express)</small>
                                                    </label>
                                                </span>

                                                <!-- Additional payment methods here -->
                                            </div>
                                        </fieldset>

                                        <!-- Other form fields here -->
                                        </form>

                                   

                                    <hr />

                                    <p>Please allow three working days for the payment confirmation to reflect in your <a href="#">online account</a>. Once your payment is confirmed, we will generate your e-invoice, which you can view/print from your account or email.</p>
                                </div>
                            </div>
                <!-- ========================  Cart navigation ======================== -->

                <div class="clearfix">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="checkout-1.html" class="btn btn-clean-dark"><span class="icon icon-chevron-left"></span> Back to cart</a>
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="checkout-3.html" class="btn btn-main"><span class="icon icon-cart"></span> Go to payment</a>
                        </div>
                    </div>
                </div>


            </div> <!--/container-->

        </section>

       
<?php get_footer(); ?>