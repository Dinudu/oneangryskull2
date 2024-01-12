<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>



<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>



<section class="product">
            <div class="main">
                <div class="container">
                    <div class="row product-flex">

                        <!-- product flex is used only for mobile order -->
                        <!-- on mobile 'product-flex-info' goes bellow gallery 'product-flex-gallery' -->

                        <div class="col-md-4 col-sm-12 product-flex-info">
                            <div class="clearfix">

                                <!-- === product-title === -->

                                <h1 class="title" data-title="">
									
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

                                    
                                        <?php
                                            global $product;
                                            $stock_status = $product->get_stock_status();
                                        ?>
                                        <div class="info-box">
                                            <span><strong>Availability</strong></span>
                                            <?php if ( 'instock' === $stock_status ) : ?>
                                            <span><i class="fa fa-check-square-o"></i> In stock</span>
                                            <?php elseif ( 'outofstock' === $stock_status ) : ?>
                                            <span><i class="fa fa-truck"></i> Out of stock</span>
                                            <?php endif; ?>
                                      
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
                                    <span><strong>Choose size</strong></span>
                                    <?php
                                        $attributes = $product->get_attributes();

                                        // Assuming that 'Size' is the name of the attribute for sizes
                                        if( ! empty( $attributes['pa_size'] ) ) {
                                            $attribute = $attributes['pa_size'];
                                            $terms = $attribute->get_terms();

                                            echo '<div class="product-colors clearfix">';
                                            foreach ( $terms as $term ) {
                                                echo '<span class="color-btn color-btn-biege">' . $term->name . '</span>';
                                            }
                                            echo '</div>';
                                        }
                                    ?>
                                </div>

                                <!--start add to cart Function -->
                               




                                

</form>

<a href="<?php echo esc_url( $product->add_to_cart_url() ); ?>" class="btn btn-buy" data-text="Buy">
   
</a>

                               




                                <!--End Add to cart -->
                                </div> <!--/clearfix-->
                            </div> <!--/product-info-wrapper-->
                        </div> <!--/col-md-4-->
                        <!-- === product item gallery === -->

                        <div class="col-md-8 col-sm-12 product-flex-gallery">

                            <!-- === add to cart === -->



                            <!-- === product gallery === -->

                            <div class="owl-product-gallery open-popup-gallery owl-carousel owl-theme" style="opacity: 1; display: block;">
                             <div class="owl-wrapper-outer autoHeight" style="height: 562.5px;">
                              <div class="owl-wrapper" style="width: 3000px; left: 0px; display: block;"> 
                              <?php global $product; $attachment_ids = $product->get_gallery_image_ids(); if ($attachment_ids) { foreach ($attachment_ids as $attachment_id) { echo '<div class="owl-item" style="width: 750px;">
                                <a href="' . wp_get_attachment_url($attachment_id) . '">'; echo wp_get_attachment_image($attachment_id, 'shop_catalog'); echo '</a></div>'; } } else { echo '<div class="owl-item" style="width: 750px;"><a href="' . get_the_post_thumbnail_url($product->get_id(), 'shop_catalog') . '">'; echo woocommerce_get_product_thumbnail(); echo '</a>
                                </div>'; } ?> </div> </div> <div class="owl-controls clickable"> <div class="owl-pagination"> <div class="owl-page active">
                                    <span class=""></span></div> <div class="owl-page">
                                        <span class=""></span></div> </div> <div class="owl-buttons">
                                             <div class="owl-prev"><span class="icon icon-chevron-left"></span></div>
                                              <div class="owl-next"><span class="icon icon-chevron-right"></span></div>
                                             </div> 
                                            </div> 
                                        </div>
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
                                        <?php echo $product->get_description(); ?>                                        </p>

                                        <hr>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <h3>Key Features</h3>
                                                <ul>
                                                    <li>Diagonal Screen Size: 64.5"</li>
                                                    <li>Backlight Type: QLED</li>
                                                    <li>Resolution: 2160P</li>
                                                    <li>Effective Refresh Rate: 240Hz</li>
                                                    <li>Smart Functionality: yes</li>
                                                </ul>
                                            </div>
                                           
                                        </div> <!--/row-->

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
                                                    <th>Screen Size</th>
                                                    <td>
                                                        <div>65\"</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Brand</th>
                                                    <td>
                                                        <div>Brandname</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Assembled Product Weight</th>
                                                    <td>
                                                        <div>87.1 oz</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Condition</th>
                                                    <td>
                                                        <div>New</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>ID</th>
                                                    <td>
                                                        <div>qn65q7cnafxza</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Dimensions (L x W x H)</th>
                                                    <td>
                                                        <div>8.30 x 63.70 x 37.80 Inches</div>
                                                    </td>
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
</div>
</div>

<?php woocommerce_output_related_products(); ?>