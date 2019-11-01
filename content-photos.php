<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="photos">
	

	<div class="container">	
	<div class="row">
	    <div class="hidden-xs col-xs-1"></div>
	    <div class="col-xs-12 col-md-10 col-sm-10 col-lg-10">	
	
		<ol class="breadcrumb">
			<li><a href="/"><i class="fa fa-home"></i> Home</a></li>
			<li class="active"><?php the_title(); ?></li>
		</ol>
		<div class="category-photos">	
		    <?php
		       wp_reset_query();
		        $args = array( 'category__in' => array(16, 17, 18, 19),'order'=>'DESC', 'orderby'=>'date'); 
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
					$the_query->the_post();
		    ?> 	
		    
				<div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
					<div class="photo">
						<a href="<?php the_permalink(); ?>">
								<?=odin_thumbnail( 640, 320, get_the_title(),true); ?>
							<div class="title-photos">
								<center><h3><?php the_title(); ?></h3></center>
							</div>
						</a>
					</div>
				</div>
			
			<?php
					}
				wp_reset_postdata();
				}
			?> 
		</div>
	</div>
</div>
	</div>
</article>
