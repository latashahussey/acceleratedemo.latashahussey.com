<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
				//store custom adv fields in php variable using built in function from ACF Plugin-->
				$service = get_field('service'); //service provided to client
				$client = get_field('client'); //client company name
				$site_link = get_field('site_link');  //stores client url
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$image_3 = get_field('image_3');
				$size = "full";  //show full size image
			?>

			<!--Display custom advanced fields on page-->
			<article class="case-study">
				<aside class="case-study-sidebar">
					<h2><?php the_title(); ?></h2>
					<h5><?php echo $service; ?></h5>
					<h6>Client: <?php echo $client; ?></h6>
					<!--Now display the case study details-->
					<?php the_content(); ?>
					<a href="<?php echo $site_link; ?>" target="_blank">Visit Live Site</a>
				</aside>

				<!--Display case study images--->
				<div class="case-study-images">
					<?php if($image_1) { ?>
						<?php echo wp_get_attachment_image( $image_1, $size ); ?>
				<?php } ?>
				<?php if($image_2) { ?>
						<?php echo wp_get_attachment_image( $image_2, $size ); ?>
				<?php } ?>
				<?php if($image_3) { ?>
					<?php echo wp_get_attachment_image( $image_3, $size ); ?>
				<?php } ?>
				</div>
			</article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
