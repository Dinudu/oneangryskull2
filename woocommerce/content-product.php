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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="col-xs-6 col-sm-4 col-lg-4">
<article>
                                <div class="info">
                                    <span class="add-favorite">
                                        <a href="javascript:void(0);" data-title="Add to favorites" data-title-added="Added to favorites list"><i class="icon icon-heart"></i></a>
                                    </span>
                                    <span>
                                        <a href="#' . $image_id . '" class="mfp-open" data-title="Quick wiew"><i class="icon icon-eye"></i></a>
                                    </span>
                                </div>
                                <div class="btn btn-add">
                                    <i class="icon icon-cart"></i>
                                </div>
                                <div class="figure-grid">
                                    <div class="image">
                                        <a href="#' . $image_id . '" class="mfp-open">
                                            <img src="" alt="" width="360">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h2 class="title h4">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h2>
                                        <sub><?php $product->get_price_html(); ?></sub>
                                        <sup>$ 139,-</sup>
                                        <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                    </div>
                                </div>
                            </article>

</div>
