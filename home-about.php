<div class="about">
    <div class="container">
        <div class="row">
            <?php
               wp_reset_query();
                $args = array( 'category_name' => 'institucional','order'=>'ASC', 'orderby'=>'date','posts_per_page'=>1); 
                query_posts($args);
                while ( have_posts() ) : the_post();
            ?>	
            <div class="col-xs-1 hidden-xs"></div>
            <div class="scrollme">
                <div class="animateme" data-when="enter" data-from="1" data-to="0" data-opacity="0" data-translatey="400">
                    <div class="col-xs-12 col-md-4 col-sm-4 col-lg-4">
                        <?=odin_thumbnail( '300', '300', get_the_title(),true); ?>
                    </div>
                    <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                        <h2>Conheça o Sicomércio</h2>
                        <?php the_content(); ?>
                    </div>
               </div> 
           </div> 
            <?php
                endwhile;
                wp_reset_query();
            ?>              
        </div>
    </div>
</div>