<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<div id="content-404" class="site-content" role="main">
				<h1 class="page-title"><?php _e( '</br>Route 404</br>Whoops! You took a wrong turn.', 'accelerate-theme-child' ); ?>
        </h1>
        <div class="button-404">
          <a class="button" href="<?php echo home_url(); ?>">Take Me Home</a>
        </div>




		</div><!-- #content -->
	</div><!-- #primary -->

<?php

get_footer();
