<?php
/**
 * The template for displaying all archive case studies
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
		<div id="archive-content" role="main">
			<?php while ( have_posts() ) : the_post();
					//store custom adv fields in php variable using built in function from ACF Plugin-->
					$service = get_field('service'); //service provided to client
					$image_1 = get_field('image_1');
					$size = "small";  //show full size image

			 ?>

			 <!--Display custom advanced fields on page-->
			 <article class="case-study">
				 <aside class="case-study-sidebar">
					 <h2><a href="<?php the_permalink();?>" target="_blank"><?php the_title(); ?></a></h2>
					 <h5><?php echo $service; ?></h5>

					 <!--Now display the case study details-->
					  <p>
							<?php the_excerpt(); ?>
						</p>
					 <a href="<?php the_permalink();?>" target="_blank">View Project ></a>
				 </aside>

				 <!--Display case study images--->
				 <div class="case-study-archive-images">
					 <?php if($image_1) { ?>
						 <?php echo wp_get_attachment_image( $image_1, $size ); ?>
				 <?php } ?>
				 </div>
			 </article>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
