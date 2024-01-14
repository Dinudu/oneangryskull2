<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OneAngrySkull
 */

?>

	 <!-- ================== Footer  ================== -->

	 <footer>
            <!--footer showroom-->
            <div class="footer-showroom hidden">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>Visit our showroom</h2>
                        <p>200 12th Ave, New York, NY 10001, USA</p>
                        <p>Mon - Sat: 10 am - 6 pm &nbsp; &nbsp; | &nbsp; &nbsp; Sun: 12pm - 2 pm</p>
                    </div>
                    <div class="col-sm-4 text-center">
                        <a href="#" class="btn btn-clean"><span class="icon icon-map-marker"></span> Get directions</a>
                        <div class="call-us h4"><span class="icon icon-phone-handset"></span> 333.278.06622</div>
                    </div>
                </div>
            </div>

            <!--footer links-->
            <div class="footer-links">
                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <!--<h3><span   style="font-family: headFont;">One Angry Skull</span>-->
		</h3>
                    <img src=<?php echo get_theme_file_uri( 'img/ona3.png' );  ?>  id="lglg" alt="Alternate Text" style="width:200px;height:200px" /></a>
                    </div>
                    <!--<div class="col-sm-4 col-md-2">
                        <h5>Quick links</h5>
                        <ul>
                            <li><a href="#">In-Store Pickup</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Afterpay</a></li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Store Locator</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>-->
                    <div class="col-sm-4 col-md-2">
                    <h5>Browse by</h5>
                        <ul>
                            <li><a href="<?php bloginfo('url'); ?>/product-category/men/">Men</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/product-category/women/">Woman</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/product-category/accessories/">Accessories</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/product-category/sportwear/">Sportwear</a></li>
                        
                            
                           
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-2">
                        <h5>Customer Service</h5>
                        <ul>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Feedback</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/shipping/">Shipping</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/index.php/faq/">FAQ</a></li>
                            <!--<li><a href="#">Store Pickup</a></li>-->
                            <li><a href="<?php bloginfo('url'); ?>/index.php/contact-us/">Contact us</a></li>
                            <li></li>
                          
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <h5>Sign Up For Our Newsletter</h5>
                        <p><i style="color: #666666;">Add your email address to sign up for our monthly emails and to receive promotional offers.</i></p>
                        <div class="form-group form-newsletter">
                            <input class="form-control" type="text" name="email" value="" style="color: #fff;" placeholder="Email address" />
                            <input type="submit" class="btn btn-main btn-sm" value="Subscribe" />
                        </div>
                    </div>
                </div>
            </div>

            <!--footer social-->

            <div class="footer-social">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="<?php bloginfo('url'); ?>/sitemap/">Sitemap</a> &nbsp; | &nbsp; <a href="<?php bloginfo('url'); ?>/index.php/privacy-policy/">Privacy policy</a> | &nbsp; <a href="<?php bloginfo('url'); ?>/index.php/terms-and-conditions/">Terms and Conditions</a>
                    </div>
                    <div class="col-sm-6 links">
                        <ul>
                            <li><a href="https://www.facebook.com/profile.php?id=100091380727029"><i class="fa-brands fa-facebook" style="color: #666666;"></i></a></li>
                            <li><a href="https://www.instagram.com/oneangryskull/"><i class="fa-brands fa-instagram" style="color: #666666;"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

    </div> <!--/wrapper-->
<!-- Latest compiled and minified JavaScript -->
<!--Plugin JavaScript file-->
<!--<script src="jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
<script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
    <!--JS files-->

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bootstrap.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.owl.carousel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.ion.rangeSlider.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
	<?php wp_footer(); ?>
</body>

</html>
