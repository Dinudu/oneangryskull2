<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OneAngrySkull
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php echo bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <!--Title-->
    <title><?php echo bloginfo('title')?></title>

    <!--CSS bundle -->
    <link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" />
    <link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" />
  
    <link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/linear-icons.css" />
    <link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" />
    <link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" />
    <link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ion-range-slider.css" />
   
	
	
	
	<link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/theme.css" />
	<!--
	<link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css.css" />
-->
 <!--Font Awesome CDN CDN-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
	
	<!--
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
-->
	<!-- Latest compiled and minified CSS -->
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    
	
	<!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		#fb_head,#fq_head,#hp_head i{
			color: #fff;
		}
		#qqqsst:hover{
			color: #fff;
		}
		#fb_head:hover{
			background-color: #f6f7f8 !important;
			color: #000;
		}
		#fq_head:hover{
			background-color: #f6f7f8 !important;
			color: #000;
		}
		#hp_head:hover{
			background-color: #f6f7f8 !important;
			color: #000;
		}
		

		/*@keyframes burn {
      0% { opacity: 1; }
      25% { opacity: 0.8; transform: scale(1.2); }
      50% { opacity: 0.6; transform: scale(1.4); }
      75% { opacity: 0.4; transform: scale(1.6); }
      100% { opacity: 0; transform: scale(1.8); }
    }*/
	@keyframes burn {
		0% { text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff; }
      25% { text-shadow: 0 0 10px #AC0507, 0 0 15px #AC0507, 0 0 20px #AC0507; }
      50% { text-shadow: 0 0 15px #AC0507, 0 0 20px #AC0507, 0 0 25px #AC0507; }
      75% { text-shadow: 0 0 20px #AC0507, 0 0 25px #AC0507, 0 0 30px #AC0507; }
      100% { text-shadow: 0 0 25px #AC0507, 0 0 30px #AC0507, 0 0 35px #AC0507; }
    }
	.burn-text {
      font-weight: bold;
      animation: burn 3s ease-in-out infinite;
    }
		@media (max-width: 767px){
			#heddt{
        margin-left: 10px;
        margin-top: -5px;
        font-size: 16px;
    }
          
            }
		
	</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div class="wrapper">
     <!-- ======================== Navigation ======================== -->

	 <nav>

<div class="clearfix" >

	
	<a href="<?php bloginfo('url'); ?>" class="logo" id="headlg">
	
	
		<span  id="heddt" style="font-family: headFont;" class="burn-text">One Angry Skull</span>

	</a>

	<!-- ==========  Pre navigation ========== -->

	<div class="navigation navigation-pre clearfix" style="z-index: -1;" id="top_fd">
		<div class="row" >
		<div class="col-md-3" >
				<a href="#" > </a>
			</div>
			<div class="col-md-3">
				<a href="#" id="fb_head" ><i class="fa-solid fa-comment" ></i>&nbsp;&nbsp; Feedback </a>
			</div>
			<div class="col-md-3">
				<a href="#" id="fq_head"><i class="fa-solid fa-circle-info" ></i>&nbsp;&nbsp; FAQ</a>
			</div>
			<div class="col-md-3">
				<a href="#" id="hp_head"><i class="fa-solid fa-circle-question" id="qqqsst"></i>&nbsp;&nbsp; Help Center </a>
			</div>
		</div>
	</div>

	<!-- ==========  Top navigation ========== -->

	<div class="navigation navigation-top clearfix">
		<ul >
			<!--add active class for current page-->
			<li class="left-side" style="background-color: #000;" >
			<a href="<?php bloginfo('url'); ?>/" class="logo-icon" >
			<img src=<?php echo get_theme_file_uri( 'img/ona.JPG' );  ?>  id="lglg" alt="Alternate Text" /></a></li>
			 <li><a href="javascript:void(0);" class="open-login"><i class="icon icon-user"></i></a></li>
			<li class="r-side"><a href="javascript:void(0);" class="open-search"><i class="icon icon-magnifier"></i></a></li>
			<li class="r-side"><a href="javascript:void(0);" class="open-cart" ><i class="icon icon-cart" ></i> <span>0</span></a></li> 
		</ul>
	</div>

	<!-- ==========  Main navigation ========== -->

	<div class="navigation navigation-main">
		<a href="#" class="open-login"><i class="icon icon-user"></i></a>
		<a href="#" class="open-search"><i class="icon icon-magnifier"></i></a>
		<a href="#" class="open-cart"><i class="icon icon-cart"></i> <span>4</span></a>
		<a href="#" class="open-menu"><i class="icon icon-menu"></i></a>
		<div class="floating-menu">
			<!--mobile toggle menu trigger-->
			<div class="close-menu-wrapper">
				<span class="close-menu"><i class="icon icon-cross"></i></span>
			</div>
			<!--<ul style="margin-left: -100px;">-->
				<ul style="margin-left: 40px;">
				<li>
					<a href="<?php bloginfo('url'); ?>/">Home <!--<i class="fa fa-angle-down"></i></span>--></a>
					
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/index.php/about-us/">About us <!--<span class="open-dropdown"><i class="fa fa-angle-down"></i></span>--></a>
					
				</li>
				<!--<li>
					<a href="#">Shop <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
					<div class="navbar-dropdown navbar-dropdown-single">
						<div class="navbar-box">
							<div class="box-full">
								<div class="box clearfix">
									<ul>
									
										<li><a href="<?php bloginfo('url'); ?>/category/">Products categories</a></li>
										<li><a href="<?php bloginfo('url'); ?>/product-grid/">Products grid</a></li>
										<li><a href="<?php bloginfo('url'); ?>/product-list/">Products list</a></li>
										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>-->
				
				<li>
					<a href="<?php bloginfo('url'); ?>/product-grid/">SHOP <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
					<div class="navbar-dropdown navbar-dropdown-single">
						<div class="navbar-box">
							<div class="box-full">
								<div class="box clearfix">
									<ul>
										
										<li><a href="<?php bloginfo('url'); ?>/product-category/men/">MEN</a></li>
										<li><a href="<?php bloginfo('url'); ?>/product-category/women/">WOMAN</a></li>
										<li><a href="<?php bloginfo('url'); ?>/product-category/accesories/">ACCESSORIES</a></li>
										<li><a href="<?php bloginfo('url'); ?>/product-category/sportswear/">SPORTWEAR</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/index.php/blog-grid/">Blog <!--<span class="open-dropdown"><i class="fa fa-angle-down"></i></span>--></a>
					
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/index.php/contact-us/">Contact us </a>
					
				</li>

				<li class="nav-settings">
					<a href="javascript:void(0);"><span class="nav-settings-value">USD</span> <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
					<div class="navbar-dropdown navbar-dropdown-single">
						<div class="navbar-box">
							<div class="box-full">
								<div class="box clearfix">
									<ul class="nav-settings-list">
										<li><a href="javascript:void(0);">USD</a></li>
										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="nav-settings">
					<a href="javascript:void(0);"><span class="nav-settings-value">ENG</span> <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
					<div class="navbar-dropdown navbar-dropdown-single">
						<div class="navbar-box">
							<div class="box-full">
								<div class="box clearfix">
									<ul class="nav-settings-list">
										<li><a href="javascript:void(0);">ENG</a></li>
									
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<!-- ==========  Search wrapper ========== -->

	<div class="search-wrapper">
		<input class="form-control" placeholder="Search..." />
		<button class="btn btn-main">Go!</button>
	</div>

	<!-- ==========  Login wrapper ========== -->

	<div class="login-wrapper">
		<div class="h4">Sign in</div>
		<form>
			<div class="form-group">
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<div class="form-group">
				<a href="#forgotpassword" class="open-popup">Forgot password?</a>
				<a href="#createaccount" class="open-popup">Don't have an account?</a>
			</div>
			<button type="submit" class="btn btn-block btn-main">Submit</button>
		</form>
	</div>

	<!-- ==========  Cart wrapper ========== -->

	<div class="cart-wrapper">
		<div class="checkout">
			<div class="clearfix">
			<?php custom_added_to_cart_message(); ?>

				
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
							echo '<div class="row">';
							echo '<div class="image">';
							echo '</div>';

							// Product title
							echo '<div class="title">';
							echo '<div>';
							echo '<a href="' . esc_url( $_product->get_permalink( $cart_item ) ) . '">' . $_product->get_name() . '</a>';
							echo '</div>';
							echo '<small>Product category</small>';
							echo '</div>';
							// Quantity
							echo '<div class="quantity">';
							echo '<input type="number" class="form-control form-quantity" value='. $quantity .'>';
							echo '</div>';
							// Price
							echo '<div class="price">';
							echo '<span class="final">' . WC()->cart->get_product_price( $_product ) . '</span>';
							echo '<span class="discount">' . WC()->cart->get_product_price( $_product ) . '</span>';
							echo '</div>';
							// Remove from cart link
							echo '<a href="' . esc_url( wc_get_cart_remove_url( $cart_item_key ) ) . '" class="icon icon-cross icon-delete" </a>';
							
							echo '</div>';
							echo '</div>';
						
						
						}
					}
					?>
					<div class="cart-block cart-block-item clearfix">
					<?php do_action( 'woocommerce_cart_totals_before_shipping' ); ?>

				

					
					
					
				</div>

				<hr />

				<!--cart prices -->

				<div class="clearfix">
					<div class="cart-block cart-block-footer clearfix">
						<div>
							<strong>Discount 0%</strong>
						</div>
						<div>
							<span></span>
						</div>
					</div>

					<div class="cart-block cart-block-footer clearfix">
						<div>
							<strong>Shipping</strong>
						</div>
						<div>
							<span></span>
						</div>
					</div>

					<div class="cart-block cart-block-footer clearfix">
						<div>
							<strong>TAX</strong>
						</div>
						<div>
							<span><?php wc_cart_totals_taxes_total_html(); ?></span>
						</div>
					</div>
				</div>

				<hr />

				<!--cart final price -->

				<div class="clearfix">
					<div class="cart-block cart-block-footer clearfix">
						<div>
							<strong>Total</strong>
						</div>
						<div>
							<div class="h4 title"><?php echo 'Current Cart Total: ' . WC()->cart->total;?>
</div>
						</div>
					</div>
				</div>


				<!--cart navigation -->

				<div class="cart-block-buttons clearfix">

					<div class="row">
						<div class="col-xs-6">
							<a href="<?php echo wc_get_page_permalink( 'cart' ); ?>" class="btn btn-clean-dark">To cart</a>
						</div>
						<div class="col-xs-6 text-right">
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
</nav>

	


 