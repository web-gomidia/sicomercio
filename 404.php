<?php
/**
 * The template for displaying 404 pages (Not Found).
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
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<center>
					<img src="/wp-content/themes/sicomercio/assets/images/404.jpg"/>
				</center>
			</div>
			<div class="col-xs-12">
				<center>
					<a href="/"><button class="btn-primary"><i class="fa fa-home"></i> Home</button></a>	
					<a href="/contato"><button class="btn-primary"><i class="fa fa-user"></i> Contato</button></a>	
				</center>
			</div>
		</div>
	</div>
	<br>
	</main><!-- #main -->

<?php
get_footer();
