<div class="benefits" style="background-image:url('<?=odin_get_image_url( get_post_thumbnail_id( 64 ), '', ''); ?>');">
    <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2>Benefícios</h2>
                </div>
                <?php
                   wp_reset_query();
                    $args = array( 'category_name' => 'beneficios','order'=>'DESC', 'orderby'=>'date','posts_per_page'=>6); 
                    query_posts($args);
                    $i=1;
                    while ( have_posts() ) : the_post();
                    if($i == 5) $cls='hide'; else $cls='';
                ?>
                <div class="col-xs-2 hidden-xs"></div>
                <div class="scrollme animateme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-scale="1.5">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-sm-8 col-lg-8">
                        <div class="col-xs-1 hidden-xs"></div>
                        <div class="col-xs-12 col-md-3 col-sm-3 col-lg-3">
                            <a href="<?php the_permalink(); ?>"><center><img src="<?=get_post_meta(get_the_ID(), 'Icone',true);?>" width="100" height="100"/></center></a>
                        </div>
                        <div class="col-xs-12 col-md-7 col-sm-7 col-lg-7">
                            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                        </div>
                    </div>
                </div>    
                <div class="col-xs-2 hidden-xs"></div>
                <div class="row <?=$cls?>">
                    <div class="col-xs-12 col-md-8 col-sm-8 col-lg-8"> 
                        <hr>
                    </div>
                </div>
                </div>
                <?php
                    $i++;
                    endwhile;
                    wp_reset_query();
                ?>              
            </div>
            <br><br>
        </div>
    </div>
</div>