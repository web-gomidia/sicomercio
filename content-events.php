<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="events">
	
	<div class="container">
		<div class="row">
			<div class="col-xs-1 hidden-xs"></div>
			<div class="col-xs-12 col-md-10 col-sm-10 col-lg-10">
        		<ol class="breadcrumb">
        			<li><a href="/"><i class="fa fa-home"></i> Home</a></li>
        			<li class="active"><?php the_title(); ?></li>
        		</ol>			    
            <?php
               wp_reset_query();
                $args = array( 'category_name' => 'eventos','order'=>'DESC', 'orderby'=>'date','posts_per_page'=>-1); 
                query_posts($args);
                while ( have_posts() ) : the_post();
            ?>
            <div class="row space-notice">
                <div class="col-xs-12 col-md-5 col-sm-5 col-lg-5">
            	    <?=odin_thumbnail( 640, 480, get_the_title(),true); ?>
            	</div>
            	<div class="col-xs-12 col-md-7 col-sm-7 col-lg-7">
                	<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                	<p><?=get_excerpt(250); ?>...</p>
                	<a href="<?php the_permalink(); ?>"><strong>Leia mais</strong></a>
            	</div>
            </div>
            <hr>
            <?php
                endwhile;
                wp_reset_query();
            ?>
			</div>
		</div>
	</div>

</article><!-- #post-## -->
