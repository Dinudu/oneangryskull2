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


<style>
	.product {
    position: relative;
    padding: 0;
    overflow: hidden;
}

.product .container {
    padding-left: 15px;
    padding-right: 15px;
}

.product .main {
    padding: 20px 0;
}

.product .product-info-wrapper {
    position: relative;
    margin-bottom: 10px;
}

.product .title {
    color: black;
    font-weight: 600;
    position: relative;
}

.product .title:before {
    content: attr(data-title);
    font-size: 550%;
    color: rgba(99, 99, 99, 0.07);
    position: absolute;
    width: inherit;
    white-space: nowrap;
    left: -30%;
    top: -100%;
    z-index: 1;
}

.product .title small {
    display: block;
    text-transform: none;
    color: black;
    font-size: 40%;
    margin: 5px 0;
}

.product .price {
    margin-bottom: 20px;
}

.product .price small {
    text-decoration: line-through;
    margin-left: 10px;
}

.product .info-box {
    margin-bottom: 2px;
    padding: 5px 0;
    display: table;
    width: 100%;
}

.product .info-box > span {
    display: table-cell;
    vertical-align: middle;
    text-align: left;
}

.product .info-box > span:first-child {
    width: 35%;
}

.product .info-box > span:last-child {
    width: 65%;
}

.product .info-box:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
}

.product .info-box .checked {
    border-color: black;
}

.product .info-box strong {
    display: block;
    font-weight: 500;
}

.product .info-box.info-cell {
    display: table;
    width: 100%;
}

.product .info-box.info-cell > span {
    display: table-cell;
    vertical-align: middle;
}

.product .info-box.info-box-addto {
    cursor: pointer;
}

.product .info-box.info-box-addto i {
    font-style: normal;
}

.product .info-box.info-box-addto .added {
    display: none;
    color: #2e73bb;
}

.product .info-box.info-box-addto .add {
    display: block;
}

.product .info-box.info-box-addto.added .added {
    display: block;
}

.product .info-box.info-box-addto.added .add {
    display: none;
}

.product .product-colors {
    display: block;
}

.product .info {
    background-color: #e2e2e2;
    padding: 20px 0;
    z-index: 1;
}

.product .info .content {
    padding: 30px 0;
}

.product .info .content hr {
    border-color: #c1c1c1;
}

.product .info .content .full-image {
    width: 100%;
}

.product .info .content h3 {
    position: relative;
    padding-bottom: 20px;
    margin-bottom: 20px;
}

.product .info .content h3:after {
    background: #2e73bb;
    content: "";
    width: 50px;
    height: 1px;
    position: absolute;
    top: 100%;
    left: 0;
}

.product .info .products {
    background-color: transparent;
}

.product .owl-product-gallery.owl-theme .owl-controls .owl-buttons div span {
    background-color: rgba(0, 0, 0, 0.5);
}

@media (min-width: 992px) {
    .product .main {
        padding: 50px 0;
        margin-bottom: 50px;
    }
    .product .title {
        margin-top: 0;
    }
    .product .product-info-wrapper {
        padding-top: 30px;
        margin-bottom: 50px;
    }
}

@media (max-width: 991px) {
    .product .product-flex {
        display: flex;
        flex-flow: column;
    }
    .product .product-flex .product-flex-gallery {
        order: 1;
    }
    .product .product-flex .product-flex-info {
        order: 2;
    }
}
</style>
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
