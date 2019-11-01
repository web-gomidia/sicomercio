<div class="slide-home">
    <div id="HomeCarousel" class="carousel slide" data-ride="carousel">
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
		    <?php
		       wp_reset_query();
		        $args = array( 'category_name' => 'slide','order'=>'DESC', 'orderby'=>'date','posts_per_page'=>4); 
		        query_posts($args);
		        $i=1;
		        while ( have_posts() ) : the_post();
		        $i==1 ? $action = 'active' : $action = '';
		    ?>             
            
            <div class="item <?=$action?>">
                <?=odin_thumbnail( '', '', get_the_title(),true); ?>
                <div class="carousel-caption">
                	<div class="content-slide">
	                	<h3><?php the_content(); ?></h3>
                	</div>
                </div>                
            </div>            

                
            <?php
                $i++;
                endwhile;
                wp_reset_query();
            ?>      
        </div>
        
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#HomeCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#HomeCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    
    </div>
</div>