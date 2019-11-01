<div class="services" style="background-image:url('<?=odin_get_image_url( get_post_thumbnail_id( 2 ), '', ''); ?>');">
    <div class="bg">
        <div class="container">
            <div class="row">
			<div class="col-xs-1 hidden-xs"></div>
			<div class="col-xs-12 col-md-10 col-sm-10 col-lg-10">                
                <div class="col-xs-12 text-center">
                    <h2>Serviços</h2>
                </div>
                <?php
                   wp_reset_query();
                    $args = array( 'category_name' => 'servicos','order'=>'DESC', 'orderby'=>'date','posts_per_page'=>6); 
                    query_posts($args);
                    while ( have_posts() ) : the_post();
                ?>
                    <div class="col-xs-12 col-md-4 col-sm-4 col-lg-4 alt">
                        <center>
                            <a href="<?php the_permalink(); ?>"><img src="<?=get_post_meta(get_the_ID(), 'Icone',true);?>" width="150" height="150" class="hvr-float"/></a>
                            <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                        </center>
                    </div>
                <?php
                    endwhile;
                    wp_reset_query();
                ?>              
            </div>
        </div>
    </div>
    </div>
</div>