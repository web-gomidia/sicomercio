<?php
/**
 * Template Name: Contato
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

					get_template_part( 'content', 'contact' );

				endwhile;
			?>

	</main><!-- #main -->
	
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', init);

    function init() {

        var mapOptions = {
            zoom: 19,
            scrollwheel: false,
            center: new google.maps.LatLng(-21.762009, -43.345612)
        };

        var mapElement = document.getElementById('map');

        var map = new google.maps.Map(mapElement, mapOptions);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(-21.762009, -43.345612),
            map: map
        });
        
        
    }
</script>
<?php
get_footer();