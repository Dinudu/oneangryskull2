<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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
// Get the product image ID
$image_id = get_post_thumbnail_id( $product->get_id() );

// Get the product image path
$image_path = wp_get_attachment_image_src( $image_id, 'full' );
$image_url = wp_get_attachment_url($image_id);


// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>




<div class="col-xs-6 col-sm-4 col-lg-3">
<div class="row row-clean">

<article>
        <div class="info" style="display:block;">
            <span class="add-favorite">
                    <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                </span>
                <span>
                    <a href="#<?php echo $image_id ?>" class="mfp-open" data-title="Quick View"><i class="icon icon-eye"></i></a>
                </span>
            </div>
            <div class="btn btn-add">
                <i class="icon icon-cart"></i>
            </div>
            <div class="figure-grid">
                <div class="">
                    <a href="#<?php echo $image_id ?>" class="mfp-open">
                        <img class="imgbot" src="<?php echo $image_url ?>" alt="" width="360">
                    </a>
                </div>
                <div class="text">
                    <h2 class="title h4">
                        <a href="<?php  the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <sub><?php echo $product->get_price_html(); ?></sub>
                    <span class="description clearfix"></span>
                </div>
            </div>
</article>
<div class="popup-main mfp-hide" id="<?php echo $image_id ?>">



	<div class="product">
		<div class="popup-title">
				<div class="h1 title">
					<small>product category</small>
					<?php the_title(); ?>
					</div>
				</div>


				<div class="owl-product-gallery">
					<img src="<?php echo $image_url ?>" alt="" width="640" />
				</div>


				<div class="popup-content">
				<div class="product-info-wrapper">
						<div class="row">


						<div class="col-sm-6">
						<div class="info-box">
						<strong>Maifacturer</strong>
						<span>Brand name</span>
						</div>
						<div class="info-box">
						<strong>Materials</strong>
						<span>Wood, Leather, Acrylic</span>
						</div>
						<div class="info-box">
							<strong>Availability</strong>
								<span><i class="fa fa-check-square-o"></i> in stock</span>
							</div>
						</div>


						<div class="col-sm-6">
						<div class="info-box">
							<strong>Available Colors</strong>
								<div class="product-colors clearfix">
									<span class="color-btn color-btn-red"></span>
									
								</div>
								</div>
								<div class="info-box">
									<strong>Choose size</strong>
									<div class="product-colors clearfix">
										
									</div>
								</div>
							</div>

						</div>
					</div> 
				</div> 


			<div class="popup-table">
					<div class="popup-cell">
						<div class="price">
							<span class="h3"></span>
						</div>
					</div>
					<div class="popup-cell">
						<div class="popup-buttons">
							<a href="<?php  the_permalink(); ?>"><span class="icon icon-eye"></span> <span class="hidden-xs">View more</span></a>
							<a href="<?php  the_permalink(); ?>"><span class="icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
						</div>
					</div>
				</div>

		</div>
	</div>


	
</div>
</div>
