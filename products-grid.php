<?php
/**
 * Template Name: Product Grid Page
 * Description: A Page Template with a darker design.
 */
get_header();
?>

 <!-- ======================== Main header ======================== -->

 <section class="main-header">
            <header>
                <div class="container">
                    <h1 class="h2 title">Shop </h1>
                    <ol class="breadcrumb breadcrumb-inverted">
                        <li><a href="index.html"><span class="icon icon-home"></span></a></li>
                        <li><a href="category.html">Product Category</a></li>
                        <li><a class="active" href="products-grid.html">Product Sub-category</a></li>
                    </ol>
                </div>
            </header>
        </section>

        <!-- ======================== Products ======================== -->

        <section class="products">
            <header class="hidden">
                <h3 class="h3 title">Product category grid</h3>
            </header>

            <div class="row row-clean">

                <!-- === product-filters === -->

                <div class="col-md-3 col-xs-12">
                    <div class="filters">
                     
                       
                        <!--close filters on mobile / update filters-->
                        <div class="toggle-filters-close btn btn-main">
                            Update search
                        </div>

                    </div> <!--/filters-->
                </div>

                <!--product items-->

                <div class="col-md-9 col-xs-12">

                    <div class="sort-bar clearfix">
                        <div class="sort-results pull-left">
                            <!--Showing result per page-->
                            <select>
                                <option value="1">10</option>
                                <option value="2">50</option>
                                <option value="3">100</option>
                                <option value="4">All</option>
                            </select>
                            <!--Items counter-->
                            <span>Showing all <strong>50</strong> of <strong>3,250</strong> items</span>
                        </div>
                        <!--Sort options-->
                        <div class="sort-options pull-right">
                            <span class="hidden-xs">Sort by</span>
                            <select>
                                <option value="1">Name</option>
                                <option value="2">Popular items</option>
                                <option value="3">Price: lowest</option>
                                <option value="4">Price: highest</option>
                            </select>
                            <!--Grid-list view-->
                            <span class="grid-list">
                                <a href="http://localhost/WP/tw-p1/index.php/product-grid/"><i class="fa fa-th-large"></i></a>
                                <a href="http://localhost/WP/tw-p1/index.php/product-list/"><i class="fa fa-align-justify"></i></a>
                                <a href="javascript:void(0);" class="toggle-filters-mobile"><i class="fa fa-search"></i></a>
                            </span>
                        </div>
                    </div>

                    <div class="row row-clean">

                        <!-- === product-item === -->

<ul class="products">

	<?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 12
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				wc_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>
</ul>
<!-- === End product-item === -->
                       

                    </div><!--/row-->
                    <!--Pagination-->
                    <div class="pagination-wrapper">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div> <!--/product items-->

            </div><!--/row-->

            <!-- ========================  Product info popup - quick view ======================== -->

            <div class="popup-main mfp-hide" id="productid1">

                <!-- === product popup === -->

                <div class="product">

                    <!-- === popup-title === -->

                    <div class="popup-title">
                        <div class="h1 title">
                            Headphones Wireless
                            <small>product category</small>
                        </div>
                    </div>

                    <!-- === product gallery === -->

                    <div class="owl-product-gallery">
                        <img src="assets/images/product-10.png" alt="" width="640" />
                        <img src="assets/images/product-10a.png" alt="" width="640" />
                    </div>

                    <!-- === product-popup-info === -->

                    <div class="popup-content">
                        <div class="product-info-wrapper">
                            <div class="row">

                                <!-- === left-column === -->

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

                                <!-- === right-column === -->

                                <div class="col-sm-6">
                                    <div class="info-box">
                                        <strong>Available Colors</strong>
                                        <div class="product-colors clearfix">
                                            <span class="color-btn color-btn-red"></span>
                                            <span class="color-btn color-btn-blue checked"></span>
                                            <span class="color-btn color-btn-green"></span>
                                            <span class="color-btn color-btn-gray"></span>
                                            <span class="color-btn color-btn-biege"></span>
                                        </div>
                                    </div>
                                    <div class="info-box">
                                        <strong>Choose size</strong>
                                        <div class="product-colors clearfix">
                                            <span class="color-btn color-btn-biege">S</span>
                                            <span class="color-btn color-btn-biege checked">M</span>
                                            <span class="color-btn color-btn-biege">XL</span>
                                            <span class="color-btn color-btn-biege">XXL</span>
                                        </div>
                                    </div>
                                </div>

                            </div> <!--/row-->
                        </div> <!--/product-info-wrapper-->
                    </div> <!--/popup-content-->
                    <!-- === product-popup-footer === -->

                    <div class="popup-table">
                        <div class="popup-cell">
                            <div class="price">
                                <span class="h3">$ 1999,00 <small>$ 2999,00</small></span>
                            </div>
                        </div>
                        <div class="popup-cell">
                            <div class="popup-buttons">
                                <a href="product.html"><span class="icon icon-eye"></span> <span class="hidden-xs">View more</span></a>
                                <a href="javascript:void(0);"><span class="icon icon-cart"></span> <span class="hidden-xs">Buy</span></a>
                            </div>
                        </div>
                    </div>

                </div> <!--/product-->
            </div> <!--popup-main--> <!--/container-->

        </section>




<?php get_footer(); ?>