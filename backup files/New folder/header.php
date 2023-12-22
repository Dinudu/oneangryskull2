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
	
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<!-- Latest compiled and minified CSS -->
	
	
    
	
	<!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div class="wrapper">
     <!-- ======================== Navigation ======================== -->

	 <nav>

<div class="clearfix">

	
	<a href="<?php bloginfo('url'); ?>" class="logo" id="headlg">
	
	
		<span  id="heddt">One Angry Skull</span>
	</a>

	<!-- ==========  Pre navigation ========== -->

	<div class="navigation navigation-pre clearfix">
		<div class="row">
			<div class="col-md-3">
				<a href="#"><i class="icon icon-heart-pulse"></i> Help center</a>
			</div>
			<div class="col-md-3">
				<a href="#"><i class="icon icon-cart"></i> Shipping & Returns</a>
			</div>
			<div class="col-md-3">
				<a href="#"><i class="icon icon-cog"></i> Gift cards</a>
			</div>
			<div class="col-md-3">
				<a href="#"><i class="icon icon-map"></i> Store locator</a>
			</div>
		</div>
	</div>

	<!-- ==========  Top navigation ========== -->

	<div class="navigation navigation-top clearfix">
		<ul>
			<!--add active class for current page-->
			<li class="left-side"><a href="<?php bloginfo('url'); ?>/" class="logo-icon" ><img src=<?php echo get_theme_file_uri( 'img/ona.JPG' );  ?>  alt="Alternate Text" width="80px" /></a></li>
			<li class="left-side"><a href="<?php bloginfo('url'); ?>/product-grid/">Men </a></li>
			<!--
				
				// Use active class for current state

				<li class="left-side active"><a href="#">Man</a></li>

			-->
			<li class="left-side"><a href="<?php bloginfo('url'); ?>/product-grid/">Woman</a></li>
			<li class="left-side"><a href="<?php bloginfo('url'); ?>/product-grid/">ACCESSORIES</a></li>
			<li class="left-side"><a href="<?php bloginfo('url'); ?>/product-grid/">SPORTWEAR</a></li>
			<li><a href="javascript:void(0);" class="open-login"><i class="icon icon-user"></i></a></li>
			<li><a href="javascript:void(0);" class="open-search"><i class="icon icon-magnifier"></i></a></li>
			<li><a href="javascript:void(0);" class="open-cart"><i class="icon icon-cart"></i> <span>4</span></a></li>
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
			<ul>
				<li>
					<a href="<?php bloginfo('url'); ?>/">Home <span class="open-dropdown"><!--<i class="fa fa-angle-down"></i></span>--></a>
					<!--<div class="navbar-dropdown navbar-dropdown-single">
						<div class="navbar-box">
							<div class="box-full">
								<div class="box clearfix">
									<ul>
										<li class="label">Homepages</li>
										<li><a href="index.html">Home - Slider</a></li>
										<li><a href="index-2.html">Home - Tabsy</a></li>
										<li><a href="index-3.html">Home intro</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>-->
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/about-us/">About us <!--<span class="open-dropdown"><i class="fa fa-angle-down"></i></span>--></a>
					<!--<div class="navbar-dropdown navbar-dropdown-single">
						<div class="navbar-box">
							<div class="box-full">
								<div class="box clearfix">
									<ul>
										<li class="label">Single dropdown</li>
										
										<li><a href="http://localhost/WP/tw-p1/index.php/about-us/">About us</a></li>
										<li><a href="contactus">Contact Us</a></li>
										<li><a href="/404">Not found 404</a></li>
										<li><a href="#">Login & Register</a></li>
										<li><a href="#">Email - Receipt template</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>-->
				</li>
				<li>
					<a href="#">Shop <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
					<div class="navbar-dropdown navbar-dropdown-single">
						<div class="navbar-box">
							<div class="box-full">
								<div class="box clearfix">
									<ul>
										<!--<li class="label">Product page</li>-->
										<li><a href="<?php bloginfo('url'); ?>/category/">Products categories</a></li>
										<li><a href="<?php bloginfo('url'); ?>/product-grid/">Products grid</a></li>
										<li><a href="<?php bloginfo('url'); ?>/product-list/">Products list</a></li>
										<!--<li><a href="products-grid-intro.html">Products grid intro</a></li>
										<li><a href="products-topbar.html">Products topbar filter</a></li>-->
										<!--<li><a href="<?php //bloginfo('url'); ?>/products/">Product overview</a></li>-->
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/blog-grid/">Blog <!--<span class="open-dropdown"><i class="fa fa-angle-down"></i></span>--></a>
					<!--<div class="navbar-dropdown navbar-dropdown-single">
						<div class="navbar-box">
							<div class="box-full">
								<div class="box clearfix">
									<ul>
										<li class="label">Blog pages</li>
										<li><a href="http://localhost/WP/tw-p1/index.php/blog-grid/">Blog grid</a></li>
										<li><a href="blog-list.html">Blog list</a></li>
										<li><a href="blog-grid-fullpage.html">Blog fullpage</a></li>
										<li><a href="ideas.html">Blog ideas</a></li>
										<li><a href="article.html">Article</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>-->
				</li>
				<!--<li>
					<a href="#">Checkout <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
					<div class="navbar-dropdown navbar-dropdown-single">
						<div class="navbar-box">
							<div class="box-full">
								<div class="box clearfix">
									<ul>
										<li class="label">Checkout</li>
										<li><a href="<?php // bloginfo('url'); ?>/checkout/">Checkout - Cart items</a></li>
										<li><a href="<?php// bloginfo('url'); ?>/delivery/">Checkout - Delivery</a></li>
										<li><a href="<?php //bloginfo('url'); ?>/payment/">Checkout - Payment</a></li>
										<li><a href="<?php// bloginfo('url'); ?>/recept/">Checkout - Receipt</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>-->
				<li>
					<a href="index.html">CATEGORY  <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
					<div class="navbar-dropdown">
						<div class="navbar-box">
							<div class="box-lg">
								<div class="box clearfix">
									<div class="row">
										<div class="col-lg-6">
											<ul>
												<li class="label"><i class="icon icon-star"></i> Mens</li>
												<!--<li><a href="#">T Shirt</a></li>
												<li><a href="#">Ovens & Ranges</a></li>
												<li><a href="#">Irons & Ironing Boards</a></li>
												<li><a href="#">Heating & Cooling</a></li>
												<li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>-->
											</ul>
										</div>
										<div class="col-lg-6">
											<ul>
												<li class="label"><i class="icon icon-star"></i> Womens</li>
												<!--<li><a href="#">T Shirt</a></li>
												<li><a href="#">Microwaves</a></li>
												<li><a href="#">Blenders</a></li>
												<li><a href="#">Slow Cookers</a></li>
												<li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>-->
											</ul>
										</div>
										<!--<div class="col-lg-4">
											<ul>
												<li class="label"><i class="icon icon-star"></i> Accessories</li>
												<li><a href="#">Mini Freezers</a></li>
												<li><a href="#">Ice Makers</a></li>
												<li><a href="#">Chest Freezers</a></li>
												<li><a href="#">Upright Freezers</a></li>
												<li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
											</ul>
										</div>-->
										<div class="col-lg-6">
											<ul>
												<li class="label"><i class="icon icon-star"></i> Sportware</li>
												<!--<li><a href="#">Bag</a></li>
												<li><a href="#">DVD & Blu-ray Players</a></li>
												<li><a href="#">Home Audio & Theater</a></li>
												<li><a href="#">TVs Accessories</a></li>
												<li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>-->
											</ul>
										</div>
										<div class="col-lg-6">
											<ul>
												<li class="label"><i class="icon icon-star"></i> Accessories</li>
												<!--<li><a href="#">Straight Talk Phones</a></li>
												<li><a href="#">Unlocked Phones</a></li>
												<li><a href="#">Contract Phones</a></li>
												<li><a href="#">No-Contract Phones</a></li>
												<li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>-->
											</ul>
										</div>
										
									</div>
								</div>
							</div>
							<!--<div class="box-sm">
								<div class="image">
									<img src=<?php //echo get_theme_file_uri( 'assets/images/menu-item-1.jpg' );  ?> alt="Alternate Text" />
									<img src=<?php //echo get_theme_file_uri( 'assets/images/menu-item-2.jpg' );  ?> alt="Alternate Text" />
								</div>
								<div class="box">
									<div class="h2">Shop Electronics</div>
									<div class="clearfix">
										<p>Homes that differ in terms of style, concept and architectural solutions have been furnished by Furniture Factory. These spaces tell of an international lifestyle that expresses modernity, research and a creative spirit.</p>
										<a class="btn btn-clean btn-big" href="products-grid.html">Shop now</a>
									</div>
								</div>
							</div>-->

						</div>
					</div>
				</li>

				<!--<li>
					<a href="#">Megamenu <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
					<div class="navbar-dropdown">
						<div class="navbar-box">
							<div class="box-full">
								<div class="box clearfix">
									<div class="row">
										<div class="clearfix">
											<div class="col-lg-3">
												<ul>
													<li class="label"><i class="icon icon-star"></i> Computers</li>
													<li><a href="#">Laptops</a></li>
													<li><a href="#">Desktops</a></li>
													<li><a href="#">PC Gaming</a></li>
													<li><a href="#">Printers & Supplies</a></li>
													<li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
												</ul>
											</div>
											<div class="col-lg-3">
												<ul>
													<li class="label"><i class="icon icon-star"></i> Vacuums</li>
													<li><a href="#">Upright Vacuums</a></li>
													<li><a href="#">Stick Vacuums</a></li>
													<li><a href="#">Robotic Vacuums</a></li>
													<li><a href="#">Handheld Vacuums</a></li>
													<li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
												</ul>
											</div>
											<div class="col-lg-3">
												<ul>
													<li class="label"><i class="icon icon-star"></i> Refrigerators</li>
													<li><a href="#">Mini Fridges</a></li>
													<li><a href="#">Kegerators</a></li>
													<li><a href="#">Beverage Refrigerators</a></li>
													<li><a href="#">Wine Refrigerators</a></li>
													<li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
												</ul>
											</div>
											<div class="col-lg-3">
												<ul>
													<li class="label"><i class="icon icon-star"></i> Appliances & Accessories</li>
													<li><a href="#">Dishwasher Parts</a></li>
													<li><a href="#">Oven & Ranges Parts</a></li>
													<li><a href="#">Refrigerator & Freezer Parts</a></li>
													<li><a href="#">Washer & Dryer Parts</a></li>
													<li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
												</ul>
											</div>
										</div>
										<div class="clearfix">
											<div class="col-lg-3">
												<ul>
													<li class="label"><i class="icon icon-star"></i> Freezers</li>
													<li><a href="#">Mini Freezers</a></li>
													<li><a href="#">Ice Makers</a></li>
													<li><a href="#">Chest Freezers</a></li>
													<li><a href="#">Upright Freezers</a></li>
													<li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
												</ul>
											</div>
											<div class="col-lg-3">
												<ul>
													<li class="label"><i class="icon icon-star"></i> TV & Video</li>
													<li><a href="#">TVs</a></li>
													<li><a href="#">DVD & Blu-ray Players</a></li>
													<li><a href="#">Home Audio & Theater</a></li>
													<li><a href="#">TVs Accessories</a></li>
													<li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
												</ul>
											</div>
											<div class="col-lg-3">
												<ul>
													<li class="label"><i class="icon icon-star"></i> Cell phones</li>
													<li><a href="#">Straight Talk Phones</a></li>
													<li><a href="#">Unlocked Phones</a></li>
													<li><a href="#">Contract Phones</a></li>
													<li><a href="#">No-Contract Phones</a></li>
													<li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
												</ul>
											</div>
											<div class="col-lg-3">
												<ul>
													<li class="label"><i class="icon icon-star"></i> iPad & Tablets</li>
													<li><a href="#">iPad</a></li>
													<li><a href="#">Windows Tablets</a></li>
													<li><a href="#">Android Tablets</a></li>
													<li><a href="#">Accessories</a></li>
													<li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li><a href="shortcodes.html">Shortcodes</a></li>-->

				<li class="nav-settings">
					<a href="javascript:void(0);"><span class="nav-settings-value">USD</span> <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
					<div class="navbar-dropdown navbar-dropdown-single">
						<div class="navbar-box">
							<div class="box-full">
								<div class="box clearfix">
									<ul class="nav-settings-list">
										<li><a href="javascript:void(0);">USD</a></li>
										<li><a href="javascript:void(0);">EUR</a></li>
										<li><a href="javascript:void(0);">GBP</a></li>
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
										<li><a href="javascript:void(0);">GER</a></li>
										<li><a href="javascript:void(0);">لعربية</a></li>
										<li><a href="javascript:void(0);">עִבְרִית</a></li>
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

				<!--cart item-->

				<div class="row">

					<div class="cart-block cart-block-item clearfix">
						<div class="image">
							<a href="product.html"><img src=<?php echo get_theme_file_uri( 'assets/images/product-1.png' );  ?> alt="" /></a>
						</div>
						<div class="title">
							<div><a href="product.html">Product item</a></div>
							<small>Product category</small>
						</div>
						<div class="quantity">
							<input type="number" value="2" class="form-control form-quantity" />
						</div>
						<div class="price">
							<span class="final">$ 1.998</span>
							<span class="discount">$ 2.666</span>
						</div>
						<!--delete-this-item-->
						<span class="icon icon-cross icon-delete"></span>
					</div>

					<!--cart item-->

					<div class="cart-block cart-block-item clearfix">
						<div class="image">
							<a href="product.html"><img src=<?php echo get_theme_file_uri( 'assets/images/product-2.png' );  ?> alt="" /></a>
						</div>
						<div class="title">
							<div><a href="product.html">Product item</a></div>
							<small>Product category</small>
						</div>
						<div class="quantity">
							<input type="number" value="2" class="form-control form-quantity" />
						</div>
						<div class="price">
							<span class="final">$ 1.998</span>
							<span class="discount">$ 2.666</span>
						</div>
						<!--delete-this-item-->
						<span class="icon icon-cross icon-delete"></span>
					</div>

					<!--cart item-->

					<div class="cart-block cart-block-item clearfix">
						<div class="image">
							<a href="product.html"><img src=<?php echo get_theme_file_uri( 'assets/images/product-3.png' );  ?> alt="" /></a>
						</div>
						<div class="title">
							<div><a href="product.html">Product item</a></div>
							<small>Product category</small>
						</div>
						<div class="quantity">
							<input type="number" value="2" class="form-control form-quantity" />
						</div>
						<div class="price">
							<span class="final">$ 1.998</span>
							<span class="discount">$ 2.666</span>
						</div>
						<!--delete-this-item-->
						<span class="icon icon-cross icon-delete"></span>
					</div>

					<!--cart item-->

					<div class="cart-block cart-block-item clearfix">
						<div class="image">
							<a href="product.html"><img src=<?php echo get_theme_file_uri( 'assets/images/product-4.png' );  ?> alt="" /></a>
						</div>
						<div class="title">
							<div><a href="product.html">Product item</a></div>
							<small>Product category</small>
						</div>
						<div class="quantity">
							<input type="number" value="2" class="form-control form-quantity" />
						</div>
						<div class="price">
							<span class="final">$ 1.998</span>
							<span class="discount">$ 2.666</span>
						</div>
						<!--delete-this-item-->
						<span class="icon icon-cross icon-delete"></span>
					</div>
				</div>

				<hr />

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

				<hr />

				<!--cart final price -->

				<div class="clearfix">
					<div class="cart-block cart-block-footer clearfix">
						<div>
							<strong>Total</strong>
						</div>
						<div>
							<div class="h4 title">$ 1259,00</div>
						</div>
					</div>
				</div>


				<!--cart navigation -->

				<div class="cart-block-buttons clearfix">
					<div class="row">
						<div class="col-xs-6">
							<a href="products-grid.html" class="btn btn-clean-dark">Continue shopping</a>
						</div>
						<div class="col-xs-6 text-right">
							<a href="checkout-1.html" class="btn btn-main"><span class="icon icon-cart"></span> Checkout</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
</nav>

	


 