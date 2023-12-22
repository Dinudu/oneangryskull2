<?php
/**
 * Template Name: Category Page
 * Description: A Page Template with a darker design.
 */
get_header();
?>



   <!-- ========================  Main header ======================== -->

   <section class="main-header" style="background-image:url(assets/images/gallery-2.jpg)">
            <header class="hidden">
                <div class="container">
                    <h1 class="h2 title">Category</h1>
                </div>
            </header>
        </section>

        <!-- ========================  Products ======================== -->

        <section class="products">
            <header>
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <h2 class="title">Product categories</h2>
                        <div class="text">
                            <p>Select category</p>
                        </div>
                    </div>
                </div>
            </header>

            <div class="row row-clean">

                <!-- === product-item === -->

                <div class="col-xs-6 col-sm-4 col-md-3">
                    <article>
                        <div class="figure-block">
                            <div class="image">
                                <a href="http://localhost/WP/tw-p1/index.php/product-grid/">
                                    <img src=<?php echo get_theme_file_uri( 'assets/images/product-1.png' );  ?> alt="" width="360" />
                                </a>
                            </div>
                            <div class="text">
                                <h2 class="title h4"><a href="http://localhost/WP/tw-p1/index.php/product-grid/">MEN</a></h2>
                                <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- === product-item === -->

                <div class="col-xs-6 col-sm-4 col-md-3">
                    <article>
                        <div class="figure-block">
                            <div class="image">
                                <a href="http://localhost/WP/tw-p1/index.php/product-grid/">
                                    <img src=<?php echo get_theme_file_uri( 'assets/images/product-2.png' );  ?> alt="" width="360" />
                                </a>
                            </div>
                            <div class="text">
                                <h2 class="title h4"><a href="http://localhost/WP/tw-p1/index.php/product-grid/">WOMAN</a></h2>
                                <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- === product-item === -->

                <div class="col-xs-6 col-sm-4 col-md-3">
                    <article>
                        <div class="figure-block">
                            <div class="image">
                                <a href="http://localhost/WP/tw-p1/index.php/product-grid/">
                                    <img src=<?php echo get_theme_file_uri( 'assets/images/product-3.png' );  ?> alt="" width="360" />
                                </a>
                            </div>
                            <div class="text">
                                <h2 class="title h4"><a href="http://localhost/WP/tw-p1/index.php/product-grid/">ACCESORIES</a></h2>
                                <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- === product-item === -->

                <div class="col-xs-6 col-sm-4 col-md-3">
                    <article>
                        <div class="figure-block">
                            <div class="image">
                                <a href="http://localhost/WP/tw-p1/index.php/product-grid/">
                                    <img src=<?php echo get_theme_file_uri( 'assets/images/product-4.png' );  ?> alt="" width="360" />
                                </a>
                            </div>
                            <div class="text">
                                <h2 class="title h4"><a href="http://localhost/WP/tw-p1/index.php/product-grid/">SPORTWEAR</a></h2>
                                <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                            </div>
                        </div>
                    </article>
                </div>

               
              





            </div><!--/row--><!--/container-->
        </section>




<?php get_footer(); ?>