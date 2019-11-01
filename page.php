<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
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

					// Include the page content template.
					get_template_part( 'content', 'page' );

				endwhile;
			?>

	</main><!-- #main -->

<?php
get_footer();
