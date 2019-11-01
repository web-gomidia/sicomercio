<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="agend">
	
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
                $args = array( 'category_name' => 'agenda','order'=>'DESC', 'orderby'=>'date','posts_per_page'=>-1); 
                query_posts($args);
                while ( have_posts() ) : the_post();
            ?>
            <div class="row space-notice">
                <a href="<?php the_permalink(); ?>">
                    <div class="col-xs-6 col-md-2 col-sm-2 col-lg-2 text-center">
                        <div class="date">
                            <h3><?=get_post_meta(get_the_ID(), 'Mês',true);?></h3>
                            <h2><strong><?=get_post_meta(get_the_ID(), 'Dia',true);?></strong></h2>
                            <h3><?=get_post_meta(get_the_ID(), 'Ano',true);?></h3>
                        </div>
                    </div>
                </a>
                <div class="col-xs-6 col-md-4 col-sm-4 col-lg-4">
            	    <?=odin_thumbnail( 320, 240, get_the_title(),true); ?>
            	</div>
            	<div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                	<p><?=get_excerpt(250); ?>...</p>
                	<a href="<?php the_permalink(); ?>"><strong>Veja mais</strong></a>
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
