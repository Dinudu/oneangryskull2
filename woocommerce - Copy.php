<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package OneAngrySkull
 */

get_header();
?>
 	
	
	 <?php get_template_part('sidebar-left'); ?>	
	


	
	 <div class="container">
<?php woocommerce_content(); ?> 
</div>

</div>
	</section>    
 	
</div>



	
<?php

get_footer();
?>
