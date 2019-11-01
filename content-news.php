<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="news">
	
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
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$args = array( 'category_name' => 'noticias','order'=>'DESC', 'orderby'=>'date', 'paged' => $paged ); 
				query_posts($args);
				while ( have_posts() ) : the_post();
			?>
            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 space">
            <div class="row">
                <div class="col-xs-12">
                	<a href="<?php the_permalink(); ?>">
            			<?=odin_thumbnail( 480, 320, get_the_title(),true); ?>
            	    </a>
            	</div>
            	<div class="col-xs-12">
                	<a href="<?php the_permalink(); ?>"><h3 style="min-height:80px"><?php the_title(); ?></h3></a>
                	<p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_modified_date('j, F Y'); ?></p>
                	<p><?=get_excerpt(250); ?>...</p>
                	<a href="<?php the_permalink(); ?>"><strong>Leia mais</strong></a>
            	</div>
            </div>
            </div>
			<?php endwhile; ?>	
			<div class="row">
				<div class="col-xs-12">
					<?php
						odin_paging_nav();
						wp_reset_query();						
					?>
				</div>
			</div>	
			</div>
		</div>
	</div>

</article><!-- #post-## -->
