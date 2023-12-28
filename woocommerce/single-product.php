<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

<section class="product">
            <div class="main">
                <div class="container">
                    <div class="row product-flex">

                        <!-- product flex is used only for mobile order -->
                        <!-- on mobile 'product-flex-info' goes bellow gallery 'product-flex-gallery' -->

                        <div class="col-md-4 col-sm-12 product-flex-info">
                            <div class="clearfix">

                                <!-- === product-title === -->

                                <h1 class="title" data-title="<?php the_title(); ?>">
									<?php the_title(); ?>
                                    <small>Free shipping</small>
                                </h1>

                                <div class="clearfix">

                                    <!-- === price wrapper === -->

                                    <div class="price">
                                        <span class="h3">
										<?php echo $product->get_price_html(); ?>
                                            
                                        </span>
                                    </div>
                                    <hr>

                                    <!-- === info-box === -->

                                    <div class="info-box">
                                        <span><strong>Maifacturer</strong></span>
                                        <span>Brand name</span>
                                    </div>

                                    <!-- === info-box === -->

                                    <div class="info-box">
                                        <span><strong>Materials</strong></span>
                                        <span>Wood, Leather, Acrylic</span>
                                    </div>

                                    <!-- === info-box === -->

                                    <div class="info-box">
                                        <span><strong>Availability</strong></span>
                                        <span><i class="fa fa-check-square-o"></i> In stock</span>
                                        <span class="hidden"><i class="fa fa-truck"></i> Out of stock</span>
                                    </div>

                                    <hr>

                                    <div class="info-box info-box-addto added">
                                        <span>
                                            <i class="add"><i class="fa fa-heart-o"></i> Add to favorites</i>
                                            <i class="added"><i class="fa fa-heart"></i> Remove from favorites</i>
                                        </span>
                                    </div>

                                    <div class="info-box info-box-addto">
                                        <span>
                                            <i class="add"><i class="fa fa-eye-slash"></i> Add to Watch list</i>
                                            <i class="added"><i class="fa fa-eye"></i> Remove from Watch list</i>
                                        </span>
                                    </div>

                                    
                                    <hr>

                                    <!-- === info-box === -->

                                    <div class="info-box">
                                        <span><strong>Available Colors</strong></span>
                                        <div class="product-colors clearfix">
                                            <span class="color-btn color-btn-red"></span>
                                            <span class="color-btn color-btn-blue checked"></span>
                                            <span class="color-btn color-btn-green"></span>
                                            <span class="color-btn color-btn-gray"></span>
                                            <span class="color-btn color-btn-biege"></span>
                                        </div>
                                    </div>

                                    <!-- === info-box === -->

                                    <div class="info-box">
                                        <span><strong>Choose size</strong></span>
                                        <div class="product-colors clearfix">
                                            <span class="color-btn color-btn-biege">
                                                <span class="product-size" data-text="">S</span>
                                            </span>
                                            <span class="color-btn color-btn-biege checked">M</span>
                                            <span class="color-btn color-btn-biege">XL</span>
                                            <span class="color-btn color-btn-biege">XXL</span>
                                        </div>
                                    </div>

                                </div> <!--/clearfix-->
                            </div> <!--/product-info-wrapper-->
                        </div> <!--/col-md-4-->
                        <!-- === product item gallery === -->

                        <div class="col-md-8 col-sm-12 product-flex-gallery">

                            <!-- === add to cart === -->

                            <button type="submit" class="btn btn-buy" data-text="Buy"></button>


                            <!-- === product gallery === -->

                            <div class="owl-product-gallery open-popup-gallery owl-carousel owl-theme" style="opacity: 1; display: block;">
                                <div class="owl-wrapper-outer autoHeight" style="height: 562.5px;"><div class="owl-wrapper" style="width: 3000px; left: 0px; display: block;"><div class="owl-item" style="width: 750px;"><a href="assets/images/product-10.png"><img src="assets/images/product-10.png" alt="" height="500"></a></div><div class="owl-item" style="width: 750px;"><a href="assets/images/product-10a.png"><img src="assets/images/product-10a.png" alt="" height="500"></a></div></div></div>
                                
                            <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev"><span class="icon icon-chevron-left"></span></div><div class="owl-next"><span class="icon icon-chevron-right"></span></div></div></div></div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- === product-info === -->

            <div class="info">
                <div class="container">
                    <div class="row">

                        <!-- === product-designer === -->

                        <div class="col-md-3">
                            <div class="brands">
                                <div class="box">
                                    <div class="image">
                                        <img src="assets/images/logo-2.png" alt="Alternate Text">
                                    </div>
                                    <div class="name">
                                        <p>One Angry Skull</p>
                                        <p><a href="#">Brand Url</a></p>
                                        <p><a href="#">More about brand</a></p>
                                    </div> <!--/name-->
                                </div> <!--/box-->
                            </div> <!--/designer-->
                        </div> <!--/col-md-4-->
                        <!-- === nav-tabs === -->

                        <div class="col-md-9">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#about" aria-controls="about" role="tab" data-toggle="tab">
                                        <i class="icon icon-history"></i>
                                        <span>About</span>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#specs" aria-controls="specs" role="tab" data-toggle="tab">
                                        <i class="icon icon-sort-alpha-asc"></i>
                                        <span>Specification</span>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#rating" aria-controls="rating" role="tab" data-toggle="tab">
                                        <i class="icon icon-thumbs-up"></i>
                                        <span>Rating</span>
                                    </a>
                                </li>
                            </ul>

                            <!-- === tab-panes === -->

                            <div class="tab-content">

                                <!-- ============ tab #1 ============ -->

                                <div role="tabpanel" class="tab-pane active" id="about">
                                    <div class="content">
                                        <h3>About this Item</h3>
                                        <p>
                                        <?php 
                                            global $product;
                                            echo $product->get_excerpt(); 
                                        ?>

                                        </p>

                                        <hr>

                                       

                                    </div> <!--/content-->
                                </div> <!--/tab-pane-->
                                <!-- ============ tab #2 ============ -->

                                <div role="tabpanel" class="tab-pane" id="specs">
                                    <div class="content">
                                        <h3>Specification</h3>
                                        <table class="table table-striped specification">
                                            <tbody>
                                                <tr>
                                                    <th>Model</th>
                                                    <td>
                                                        <div>QN65Q7CNAFXZA</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                 
                                                </tr>
                                                <tr>
                                                   
                                                </tr>
                                                <tr>
                                                   
                                                </tr>
                                                <tr>
                                                  
                                                </tr>
                                                <tr>
                                                   
                                                </tr>
                                                <tr>
                                                   
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!--/content-->
                                </div> <!--/tab-pane-->
                                <!-- ============ tab #3 ============ -->

                                <div role="tabpanel" class="tab-pane" id="rating">

                                    <!-- ============ ratings ============ -->

                                    <div class="content">

                                        <h3>Rating</h3>

                                        <div class="row">

                                            <!-- === comments === -->

                                            <div class="col-md-12">
                                                <div class="comments">

                                                    <!-- === rating === -->

                                                    <div class="rating clearfix">
                                                        <div class="rate-box">
                                                            <strong>Quality</strong>
                                                            <div class="rating">
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <span>3</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <span>5</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star"></i>
                                                                <span>0</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <span>2</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <span>1</span>
                                                            </div>
                                                        </div>

                                                        <!-- rate -->
                                                        <div class="rate-box">
                                                            <strong>Design</strong>
                                                            <div class="rating">
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <span>3</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <span>5</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <span>0</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <span>2</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <span>1</span>
                                                            </div>
                                                        </div>

                                                        <!-- rate -->
                                                        <div class="rate-box">
                                                            <strong>General</strong>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <span>3</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <span>5</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <span>0</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <span>2</span>
                                                            </div>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <span>1</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="comment-wrapper">

                                                        <!-- === comment === -->

                                                        <div class="comment-block">
                                                            <div class="comment-user">
                                                                <div>
                                                                    <img src="assets/images/user-2.jpg" alt="Alternate Text" width="70">
                                                                </div>
                                                                <div>
                                                                    <h5>
                                                                        <span>John Doe</span>
                                                                        <span class="pull-right">
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                                        <small>03.05.2017</small>
                                                                    </h5>
                                                                </div>
                                                            </div>

                                                            <!-- comment description -->

                                                            <div class="comment-desc">
                                                                <p>
                                                                    In vestibulum tellus ut nunc accumsan eleifend. Donec mattis cursus ligula, id
                                                                    iaculis dui feugiat nec. Etiam ut ante sed neque lacinia volutpat. Maecenas
                                                                    ultricies tempus nibh, sit amet facilisis mauris vulputate in. Phasellus
                                                                    tempor justo et mollis facilisis. Donec placerat at nulla sed suscipit. Praesent
                                                                    accumsan, sem sit amet euismod ullamcorper, justo sapien cursus nisl, nec
                                                                    gravida
                                                                </p>
                                                            </div>

                                                            <!-- comment reply -->

                                                            <div class="comment-block">
                                                                <div class="comment-user">
                                                                    <div>
                                                                        <img src="assets/images/user-2.jpg" alt="Alternate Text" width="70">
                                                                    </div>
                                                                    <div>
                                                                        <h5>
                                                                            Administrator
                                                                            <small>08.05.2017</small>
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                                <div class="comment-desc">
                                                                    <p>
                                                                        Curabitur sit amet elit quis tellus tincidunt efficitur. Cras lobortis id
                                                                        elit eu vehicula. Sed porttitor nulla vitae nisl varius luctus. Quisque
                                                                        a enim nisl. Maecenas facilisis, felis sed blandit scelerisque, sapien
                                                                        nisl egestas diam, nec blandit diam ipsum eget dolor. Maecenas ultricies
                                                                        tempus nibh, sit amet facilisis mauris vulputate in.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <!--/reply-->
                                                        </div>

                                                        <!-- === comment === -->

                                                        <div class="comment-block">
                                                            <div class="comment-user">
                                                                <div>
                                                                    <img src="assets/images/user-2.jpg" alt="Alternate Text" width="70">
                                                                </div>
                                                                <div>
                                                                    <h5>
                                                                        <span>John Doe</span>
                                                                        <span class="pull-right">
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </span>
                                                                        <small>03.05.2017</small>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                            <div class="comment-desc">
                                                                <p>
                                                                    Cras lobortis id elit eu vehicula. Sed porttitor nulla vitae nisl varius luctus.
                                                                    Quisque a enim nisl. Maecenas facilisis, felis sed blandit scelerisque, sapien
                                                                    nisl egestas diam, nec blandit diam ipsum eget dolor. In vestibulum tellus
                                                                    ut nunc accumsan eleifend. Donec mattis cursus ligula, id iaculis dui feugiat
                                                                    nec. Etiam ut ante sed neque lacinia volutpat. Maecenas ultricies tempus
                                                                    nibh, sit amet facilisis mauris vulputate in. Phasellus tempor justo et mollis
                                                                    facilisis. Donec placerat at nulla sed suscipit. Praesent accumsan, sem sit
                                                                    amet euismod ullamcorper, justo sapien cursus nisl, nec gravida
                                                                </p>
                                                            </div>
                                                        </div>

                                                    </div><!--/comment-wrapper-->

                                                    <div class="comment-header">
                                                        <a href="#" class="btn btn-clean-dark">12 comments</a>
                                                    </div> <!--/comment-header-->
                                                    <!-- === add comment === -->

                                                    <div class="comment-add">

                                                        <div class="comment-reply-message">
                                                            <div class="h3 title">Leave a Reply </div>
                                                            <p>Your email address will not be published.</p>
                                                        </div>

                                                        <form action="#" method="post">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="name" value="" placeholder="Your Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="name" value="" placeholder="Your Email">
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea rows="10" class="form-control" placeholder="Your comment"></textarea>
                                                            </div>
                                                            <div class="clearfix text-center">
                                                                <a href="#" class="btn btn-main">Add comment</a>
                                                            </div>
                                                        </form>

                                                    </div><!--/comment-add-->
                                                </div> <!--/comments-->
                                            </div>


                                        </div> <!--/row-->
                                    </div> <!--/content-->
                                </div> <!--/tab-pane-->
                            </div> <!--/tab-content-->
                        </div>
                    </div> <!--/row-->
                </div> <!--/container-->
            </div> <!--/info-->
        </section>

	
        <?php woocommerce_output_related_products(); ?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
