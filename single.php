<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

		<main id="content" tabindex="-1" role="main">
			
		<div class="title" style="background-image:url('/wp-content/themes/sicomercio/assets/images/banner-title.jpg');">
			<div class="container">
				<div class="row">
					<div class="hidden-xs col-xs-1"></div>
					<div class="col-xs-12 col-md-10 col-sm-10 col-lg-10">
						<h2><?php the_title(); ?></h2>
					</div>
				</div>
			</div>
		</div>				
			
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', 'single' );

				endwhile;
			?>
		</main><!-- #main -->

<?php
get_footer();
