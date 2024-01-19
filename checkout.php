<?php
/**
 * Template Name: Checkout Page
 * Description: A Page Template with a darker design.
 */

get_header();


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
                            <a href="<?php bloginfo('url'); ?>/checkout/" class="btn btn-clean-dark"><span class="icon icon-chevron-left"></span> Back to cart</a>
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="<?php bloginfo('url'); ?>/payment/" class="btn btn-main"><span class="icon icon-cart"></span> Go to payment</a>
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
                	<?php

					// Setup variables
					$total_qty = WC()->cart->get_cart_contents_count();
					$cart_total = WC()->cart->get_cart_total();
					$items = WC()->cart->get_cart();

					// If no items in cart
					if ( 0 === $total_qty ) {
						echo '<li class="empty">No products in the cart.</li>';
					} else {
						// Output each item
						foreach ( $items as $item => $values ) {
							$_product = $values['data'];
							$quantity = $values['quantity'];
                            
							echo '<div class="cart-block cart-block-item clearfix">';
							
							echo '<div class="image" > ';
							echo'<a >'.$_product->get_image().'';
							echo '</a> </div>';

							// Product title
							echo '<div class="title">';
							echo '<div>';
							echo '<a href="' . esc_url( $_product->get_permalink( $cart_item ) ) . '">' . $_product->get_name() . '</a>';
							echo '</div>';
							/*echo '<small>Product category</small>';*/
							echo '</div>';
							// Quantity
							echo '<div class="quantity">';
							echo '<strong> ';
                            echo''. $quantity .'';
                            echo '</strong>';
							echo '</div>';
							// Price
							echo '<div class="price">';
							echo '<span class="final">' . WC()->cart->get_product_price( $_product ) . '</span>';
							
							echo '</div>';
							
							/*echo apply_filters( 
								'woocommerce_cart_item_remove_link',
								sprintf(
									'<a href="%s"  aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s">&times;</a>',
									esc_url( wc_get_cart_remove_url( $item ) ),
									
									esc_attr( sprintf( __( 'Remove %s from cart', 'woocommerce' ), wp_strip_all_tags( $product_name ) ) ),
									esc_attr( $product_id ),
									esc_attr( $item),
									esc_attr( $_product->get_sku() )
								),
								$cart_item_key
							);*/
						

							
							echo '</div>';
							
						
						
						}
					}
					do_action( 'woocommerce_mini_cart_contents' );
					?>
				<?php do_action( 'woocommerce_cart_totals_before_shipping' ); ?>

                   
                    </div>

                    <!--cart prices -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>Discount 15%</strong>
                            </div>
                            <div>
                                <span>$ 0,00</span>
                            </div>
                        </div>

                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>Shipping</strong>
                            </div>
                            <div>
                                <span>$ 0,00</span>
                            </div>
                        </div>

                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>VAT</strong>
                            </div>
                            <div>
                                <span>$ 0,00</span>
                            </div>
                        </div>
                    </div>

                    <!--cart final price -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>Total</strong>
                            </div>
                            <div>
                                <div class="h2 title">$<?php echo  WC()->cart->total;?></div>
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
                                                <?php
                                                // Check if there are available payment gateways
                                                if (count($available_gateways) > 0) {
                                                    // Loop through the available payment gateways
                                                    foreach ($available_gateways as $gateway) {
                                                        // Skip gateways that don't have an 'id' and 'title' attribute
                                                        if (!isset($gateway->id) || !isset($gateway->title)) {
                                                            continue;
                                                        }
                                                        ?>
                                                        <span class="checkbox">
                                                            <input type="radio" id="paymentID<?php echo esc_attr($gateway->id); ?>" name="paymentOption" checked="checked">
                                                            <label for="paymentID<?php echo esc_attr($gateway->id); ?>">
                                                                <strong><?php echo esc_html($gateway->title); ?></strong> <br />
                                                                <small><?php echo esc_html($gateway->description); ?></small>
                                                            </label>
                                                        </span>
                                                        <?php
                                                    }
                                                } else {
                                                    // If there are no available payment gateways, display a default message
                                                    ?>
                                                
                                                    <?php
                                                }
                                                ?>
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
                        <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="btn btn-main<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>">
	                    <span class="icon icon-cart"></span><?php esc_html_e( 'Proceed to checkout', 'woocommerce' ); ?>  
                        </a>                        
                    </div>
                        
                    </div>
                </div>


            </div> <!--/container-->

        </section>

       
<?php get_footer(); ?>