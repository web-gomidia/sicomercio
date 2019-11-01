<div class="activities">
    <div class="container">
        <div class="row">
            <?php
                wp_reset_query();
                $args = array( 'post_type' => 'page', 'post__in' => array( 67, 80, 83 ), 'order'=>'DESC' );
                query_posts($args);
                while ( have_posts() ) : the_post();
            ?>
            <a href="<?php the_permalink(); ?>">
                <div class="col-xs-12 col-md-4 col-sm-4 col-lg-4 text-center">
                    <div class="bg" style="height:auto">
                        <?=odin_thumbnail( 640, 480, get_the_title(),true); ?>
                        <div class="titles"><h3 class="hvr-grow"><?php the_title(); ?></h3></div>
                    </div>
                </div>
            </a>
            <?php
                endwhile;
                wp_reset_query();
            ?>
        </div>
    </div>
</div>