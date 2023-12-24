<?php
/**
 * Template Name: Home Page
 * Description: A Page Template with a darker design.
 */

get_header();
?>



<section class="header-content">

<div class="clearifx">

<video autoplay loop muted plays-inline id="back-video" width="100%" >
       <source src=<?php echo get_theme_file_uri( 'assets/images/OneAngrySkull.mp4' );  ?>>
      
    </video>


</div>

</section>



  <!-- ========================  Blog Block ======================== -->

  <section class="blog blog-block blog-intro">

<div class="container">

    <!-- === blog header === -->

    <header class="hidden">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 text-center">
                <h2 class="title">Check out our featured news</h2>
                <div class="text">
                    <p>Keeping things minimal</p>
                </div>
            </div>
        </div>
    </header>

    <div class="row row-clean">

        <!-- === blog item === -->

        <div class="col-xs-6 col-sm-3">
            <article>
                <a href="https://newoneangryskull.testingsites.xyz/wp/product-category/men/">
                    <div class="image">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/2.png' );  ?> alt="" />
                    </div>
                    <div class="entry entry-block">
                        
                        <div class="description">
                        <div class="date">2023 Collection</div>
                        <div class="title">
                            <h2 class="h3">MEN</h2>
                        </div>
                            <p>
                                Top picks four your desire
                            </p>
                        </div>
                    </div>
                    <div class="show-more">
                        <span class="btn btn-clean">Shop now</span>
                    </div>
                </a>
            </article>
        </div>

        <!-- === blog item === -->

        <div class="col-xs-6 col-sm-3">
            <article>
                <a href="https://newoneangryskull.testingsites.xyz/wp/product-category/women/">
                    <div class="image">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/1.png' );  ?> alt="" />
                    </div>
                    <div class="entry entry-block">
                       
                        <div class="description">
                        <div class="date">New arrivals</div>
                        <div class="title">
                            <h2 class="h3">WOMAN</h2>
                        </div>
                            <p>
                                Explore popular devices
                            </p>
                        </div>
                    </div>
                    <div class="show-more">
                        <span class="btn btn-clean">Shop now</span>
                    </div>
                </a>
            </article>
        </div>

        <!-- === blog item === -->

        <div class="col-xs-6 col-sm-3">
            <article>
                <a href="https://newoneangryskull.testingsites.xyz/wp/product-category/accesories">
                    <div class="image">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/3.png' );  ?> alt="" />
                    </div>
                    <div class="entry entry-block">
                       
                        <div class="description">
                        <div class="date">Up to 50% off</div>
                        <div class="title">
                            <h2 class="h3">ACCESORIES</h2>
                        </div>
                            <p>
                                Available for quick shipping
                            </p>
                        </div>
                    </div>
                    <div class="show-more">
                        <span class="btn btn-clean">Shop now</span>
                    </div>
                </a>
            </article>
        </div>

        <!-- === blog item === -->

        <div class="col-xs-6 col-sm-3">
            <article>
                <a href="https://newoneangryskull.testingsites.xyz/wp/product-category/sportswear/">
                    <div class="image">
                        <img src=<?php echo get_theme_file_uri( 'assets/images/4.png' );  ?> alt="" />
                    </div>
                    <div class="entry entry-block">
                       
                        <div class="description">
                        <div class="date">Save big on</div>
                        <div class="title">
                            <h2 class="h3">SPORTSWEAR</h2>
                        </div>
                            <p>
                                Fun to explore
                            </p>
                        </div>
                    </div>
                    <div class="show-more">
                        <span class="btn btn-clean">Shop now</span>
                    </div>
                </a>
            </article>
        </div>

    </div> <!--/row-->

    <!-- === button more === -->

    <div class="wrapper-more">
        <a href="https://newoneangryskull.testingsites.xyz/wp/shop/" class="btn btn-lg">View All Collection</a>
    </div>

</div> <!--/container-->
</section>

<!-- ========================  Block banner category ======================== -->

<section class="blog blog-block">

<!-- === header === -->

<header class="hidden">
    <div class="text-center"><h2 class="title">Categories</h2></div>
</header>

<div class="row row-clean">

    <!-- === blog item === -->

    <div class="col-md-6">
        <article>
            <div>
                <div class="image">

                    <!--Desktop image-->
                    <img src=<?php echo get_theme_file_uri( 'assets/images/shop-1.png' );  ?> alt="" class="hidden-xs" />

                    <!--Mobile image-->
                    <img src=<?php echo get_theme_file_uri( 'assets/images/shop-1.png' );  ?> alt="" class="visible-xs" />

                </div>
                <div class="entry entry-block">
                    <div class="date">Shop for</div>
                    <div class="title">
                        <h2 class="h3">Men's Items</h2>
                    </div>
                    <div class="description">
                      
                    </div>
                </div>
            </div>
        </article>
    </div>

    <!-- === blog item === -->

    <div class="col-md-6">
        <article>
            <div>
                <div class="image">

                    <!--Desktop image-->
                    <img src=<?php echo get_theme_file_uri( 'assets/images/shop-2.png' );  ?> alt="" class="hidden-xs" />

                    <!--Mobile image-->
                    <img src=<?php echo get_theme_file_uri( 'assets/images/shop-2.png' );  ?> alt="" class="visible-xs" />

                </div>
                <div class="entry entry-block">
                    <div class="date">Shop for</div>
                    <div class="title">
                        <h2 class="h3">Women's Items</h2>
                    </div>
                    <div class="description">
                        
                    </div>
                </div>
            </div>
        </article>
    </div>

</div> <!--/row-->
</section>

<!-- ========================  Icons slider ======================== -->

<section class="owl-icons-wrapper">

<!-- === header === -->

<header class="hidden">
    <div class="text-center"><h2 class="title">Product categories</h2></div>
</header>

<div class="clearfix">

    <div class="owl-icons owl-icons-rounded owl-icons-frontpage">

        <!-- === icon item === -->

        <a href="#">
            <figure>
                <img src=<?php echo get_theme_file_uri( 'assets/images/product-1.png' );  ?> alt="Alternate Text" />
                <figcaption>Cotton T-Shirt</figcaption>
            </figure>
        </a>

        <!-- === icon item === -->

        <a href="#">
            <figure>
                <img src=<?php echo get_theme_file_uri( 'assets/images/product-2.png' );  ?> alt="Alternate Text" />
                <figcaption>Fitted Hoodie</figcaption>
            </figure>
        </a>

        <!-- === icon item === -->

        <a href="#">
            <figure>
                <img src=<?php echo get_theme_file_uri( 'assets/images/product-3.png' );  ?> alt="Alternate Text" />
                <figcaption>Wine Tumbler </figcaption>
            </figure>
        </a>

        <!-- === icon item === -->

        <a href="#">
            <figure>
                <img src=<?php echo get_theme_file_uri( 'assets/images/product-4.png' );  ?> alt="Alternate Text" />
                <figcaption>ZipUp Windbreaker</figcaption>
            </figure>
        </a>

        <!-- === icon item === -->

        <a href="#">
            <figure>
                <img src=<?php echo get_theme_file_uri( 'assets/images/product-5.png' );  ?> alt="Alternate Text" />
                <figcaption>Foam Trucker Hat</figcaption>
            </figure>
        </a>

        <!-- === icon item === -->

        <a href="#">
            <figure>
                <img src=<?php echo get_theme_file_uri( 'assets/images/product-6.png' );  ?> alt="Alternate Text" />
                <figcaption>Cotton Tote Bag</figcaption>
            </figure>
        </a>

        <!-- === icon item === -->

        <a href="#">
            <figure>
                <img src=<?php echo get_theme_file_uri( 'assets/images/product-7.png' );  ?> alt="Alternate Text" />
                <figcaption>Embroidered Backpack</figcaption>
            </figure>
        </a>

        <!-- === icon item === -->

        <a href="#">
            <figure>
                <img src=<?php echo get_theme_file_uri( 'assets/images/product-8.png' );  ?> alt="Alternate Text" />
                <figcaption>Black Glossy Mug</figcaption>
            </figure>
        </a>

        <!-- === icon item === -->

        <a href="#">
            <figure>
                <img src=<?php echo get_theme_file_uri( 'assets/images/product-9.png' );  ?> alt="Alternate Text" />
                <figcaption>Duffle Bag</figcaption>
            </figure>
        </a>




    </div> <!--/owl-icons-->
</div> <!--/container-->
</section>

<!-- ========================  Best seller ======================== -->

<section class="products">

<!-- === header title === -->

<header>
    <div class="row">
        <div class="col-md-offset-2 col-md-8 text-center">
            <h2 class="title">Best seller Items</h2>
            <div class="text">
                <p>Check out our latest collections</p>
            </div>
        </div>
    </div>
</header>

<div class="row row-clean">

    <!-- === product-item === -->
<?php echo do_shortcode('[display_home_products]'); ?>
 

  

</div> <!--/row-->
<!-- === button more === -->

<div class="wrapper-more">
    <a href="https://newoneangryskull.testingsites.xyz/wp/shop/" class="btn btn-lg">View all</a>
</div>

<!-- ========================  Product info popup - quick view ======================== -->

<!--popup-main--> <!--/container-->

</section>

<!-- ========================  Block banner fashion ======================== -->

<section class="blog blog-block">

<!-- === header === -->

<header class="hidden">
    <div class="text-center"><h2 class="title">Fashion</h2></div>
</header>

<div class="row row-clean">

    <!-- === blog item === -->

    <div class="col-sm-4" style=" border: 15px solid #171717;">
        <article>
            <div>
                <div class="image">
                    <img src=<?php echo get_theme_file_uri( 'assets/images/o1.jpg' );  ?> alt="" />
                </div>
                <div class="entry entry-block">
                    <div class="date">Shop for</div>
                    <div class="title">
                        <h2 class="h3">Men's</h2>
                    </div>
                    <div class="description">
                      
                    </div>
                </div>
            </div>
        </article>
    </div>

    <!-- === blog item === -->

    <div class="col-sm-4" style=" border: 15px solid #171717;">
        <article>
            <div>
                <div class="image">
                    <img src=<?php echo get_theme_file_uri( 'assets/images/o2.jpg' );  ?> alt="" />
                </div>
                <div class="entry entry-block">
                    <div class="date">Shop for</div>
                    <div class="title">
                        <h2 class="h3">Woman's</h2>
                    </div>
                    <div class="description">
                      
                    </div>
                </div>
            </div>
        </article>
    </div>

    <!-- === blog item === -->

    <div class="col-sm-4" style=" border: 15px solid #171717;">
        <article>
            <div>
                <div class="image">
                    <img src=<?php echo get_theme_file_uri( 'assets/images/o3.jpg' );  ?> alt="" />
                </div>
                <div class="entry entry-block">
                    <div class="date">Shop for</div>
                    <div class="title">
                        <h2 class="h3">Accesories</h2>
                    </div>
                    <div class="description">
                       
                    </div>
                </div>
            </div>
        </article>
    </div>

</div> <!--/row-->
</section>

<!-- ========================  Products widget ======================== -->

<section class="products">

<!-- === header title === -->

<header>
    <div class="row">
        <div class="col-md-offset-2 col-md-8 text-center">
            <h2 class="title">Clothing & Accesories</h2>
            <div class="text">
                <p>Check out our latest collections</p>
            </div>
        </div>
    </div>
</header>

<div class="row row-clean">
<?php echo do_shortcode('[display_home_products]'); ?>

 
</div>

<!-- === button more === -->

<div class="wrapper-more">
    <a href="https://newoneangryskull.testingsites.xyz/wp/shop/" class="btn btn-lg">View store</a>
</div>
</section>

<!-- ========================  Block banner shop  ======================== -->

<section class="blog blog-block">

<!-- === header === -->

<header class="hidden">
    <div class="text-center"><h2 class="title">Banner</h2></div>
</header>

<div class="row row-clean">

    <!-- === blog item === -->

    <div class="col-lg-6">
        <article>
            <div>
                <div class="image">
                    <img src=<?php echo get_theme_file_uri( 'assets/images/cc2.png' );  ?> alt="" />
                </div>
                <div class="entry entry-block">
                    <div class="date">Shop for</div>
                    <div class="title">
                        <h2 class="h3"></h2>
                    </div>
                    <div class="description">
                        <ul>
                            <li>
                                <a href="#">New arrivals</a>
                            </li>
                            <!--<li>
                                <a href="#">Doscount sale collection</a>
                            </li>-->
                            <li class="more">
                                <a href="#">More</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
    </div>

    <!-- === blog item === -->

    <div class="col-lg-6">
        <article>
            <div>
                <div class="image">
                    <img src=<?php echo get_theme_file_uri( 'assets/images/cc3.png' );  ?> alt="" />
                </div>
                <div class="entry entry-block">
                    <div class="date">Shop for</div>
                    <div class="title">
                        <h2 class="h3"></h2>
                    </div>
                    <div class="description">
                        <ul class="col">
                            <li>
                                <a href="#">New arrivals</a>
                            </li>
                            <!--<li>
                                <a href="#">Doscount sale collection</a>
                            </li>-->
                            <li class="more">
                                <a href="#">More</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
    </div>


</div> <!--/row-->
</section>


<!-- ========================  Stretcher widget ======================== -->

<section class="stretcher-wrapper">

<!-- === stretcher header === -->

<header>
    <div class="row">
        <div class="col-md-offset-2 col-md-8 text-center">
            <h1 class="h2 title">Latest Designs</h1>
            <div class="text">
                <p>Give the gift of polished punctuality</p>
            </div>
        </div>
    </div>
</header>

<!-- === stretcher === -->

<ul class="stretcher">

    <!-- === stretcher item === -->

    <li class="stretcher-item" style="background-image:url(<?php echo get_theme_file_uri('assets/images/pw1.png');  ?>);">
        <!--logo-item-->
        <div class="stretcher-logo">
            <div class="text">
                <span class="text-intro" ></span>
            </div>
        </div>
        <!--main text-->
        <figure>
            <h4>Men's</h4>
            <figcaption></figcaption>
        </figure>
        <!--anchor-->
        <a href="https://newoneangryskull.testingsites.xyz/wp/product-category/men/">Anchor link</a>
    </li>

    <!-- === stretcher item === -->

    <li class="stretcher-item" style="background-image:url(<?php echo get_theme_file_uri('assets/images/pw2.png');  ?>);">
        <!--logo-item-->
        <div class="stretcher-logo">
            <div class="text">
                <span class="text-intro"></span>
            </div>
        </div>
        <!--main text-->
        <figure>
            <h4>Woman's</h4>
            <figcaption></figcaption>
        </figure>
        <!--anchor-->
        <a href="https://newoneangryskull.testingsites.xyz/wp/product-category/women/">Anchor link</a>
    </li>

    <!-- === stretcher item === -->

    <li class="stretcher-item" style="background-image:url(<?php echo get_theme_file_uri('assets/images/pw3.png');  ?>);">
        <!--logo-item-->
        <div class="stretcher-logo">
            <div class="text">
                <span class="text-intro"></span>
            </div>
        </div>
        <!--main text-->
        <figure>
            <h4>Accesories</h4>
            <figcaption></figcaption>
        </figure>
        <!--anchor-->
        <a href="https://newoneangryskull.testingsites.xyz/wp/product-category/accesories">Anchor link</a>
    </li>

    <!-- === stretcher item === -->

    <li class="stretcher-item" style="background-image:url(<?php echo get_theme_file_uri('assets/images/pw4.png');  ?>);">
        <!--logo-item-->
        <div class="stretcher-logo">
            <div class="text">
                <span class="text-intro"></span>
            </div>
        </div>
        <!--main text-->
        <figure>
            <h4>SportWear</h4>
            <figcaption></figcaption>
        </figure>
        <!--anchor-->
        <a href="https://newoneangryskull.testingsites.xyz/wp/product-category/sportswear/">Anchor link</a>
    </li>

    <!-- === stretcher item more=== -->

    <li class="stretcher-item more">
        <div class="more-icon">
            <span data-title-show="Show more" data-title-hide="+"></span>
        </div>
        <a href="https://newoneangryskull.testingsites.xyz/wp/shop/"></a>
    </li>

</ul>
</section>

<!-- ========================  Cards ======================== -->
<section id="page-interiors" class="cards">
<div class="wrapper-more">
                <a href="https://newoneangryskull.testingsites.xyz/wp/shop/" class="btn btn-lg">View more</a>
            </div>
        </section>


<!-- ========================  Banner ======================== -->

<section class="banner">

<!-- === header === -->

<h2 class="hidden">Banner</h2>

<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 text-center">
            <h2 class="title">Our story</h2>
            <p>
                We believe in creativity as one of the major forces of progress. With this idea, we traveled throughout Italy to find exceptional
                artisans and bring their unique handcrafted objects to connoisseurs everywhere.
            </p>
            <p>
                <a href="<?php bloginfo('url'); ?>/index.php/about-us/" class="btn btn-clean">Read full story</a>
            </p>
        </div>
    </div>
</div>
</section>

<!-- ========================  Instagram ======================== -->
  <!-- ========================  Instagram ======================== -->

  <section class="instagram">

<!-- === instagram header === -->

<header>
<a href="https://www.instagram.com/oneangryskull/"><h2 class="h3 title">
        Follow us<br>
        <br>
        <i class="fa-brands fa-instagram fa-2xl" style="color: #6f7071;"></i><br><br>
        Instagram
    </h2>
    <div class="text">
        <p>@oneangryskull</p>
    </div></a>
</header>

<!-- === instagram gallery === -->

<div class="gallery clearfix">
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/ins1.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/ins2.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/ins3.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/ins4.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/ins5.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/ins6.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/ins6.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/ins8.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/ins9.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/ins10.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/ins11.jpg' );  ?> alt="Alternate Text" />
    </a>
    <a class="item" href="#">
        <img src=<?php echo get_theme_file_uri( 'assets/images/ins12.jpg' );  ?> alt="Alternate Text" />
    </a>
</div> <!--/gallery-->

</section>



<?php get_footer(); ?>