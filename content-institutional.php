<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<div id="institutional">

	<div class="container">
		<div class="row">
			<div class="col-xs-1 hidden-xs"></div>
			<div class="col-xs-12 col-md-10 col-sm-10 col-lg-10">
				<ol class="breadcrumb">
					<li><a href="/"><i class="fa fa-home"></i> Home</a></li>
					<li class="active"><?php the_title(); ?></li>
				</ol>
			</div>
		</div>	
	</div>

	<?php
		$args = array('child_of' => 3);		
		$categories = get_categories( $args );
		$i = 1;
		$r = 1;
		sort($categories);
	?>	
	<div class="menu">
		<div class="container">
			<div class="row">
				<div class="col-xs-1 hidden-xs"></div>
				<div class="col-xs-12 col-md-10 col-sm-10 col-lg-10">				
					<ul class="nav navbar-nav">
						<?php
							foreach($categories as $category) {
								if($i == 1){ $cls = 'active'; }else{ $cls = ''; }
						?>				
							<li class="<?=$cls?>"><a data-toggle="tab" href="#<?=$category->slug?>"><h4><?=$category->name?></h4></a></li>
						<?php $i++; } ?>
					</ul>
				</div>
			</div>
		</div>	
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-1 hidden-xs"></div>
			<div class="col-xs-12 col-md-10 col-sm-10 col-lg-10">		
				<div class="tab-content">
					<?php
						foreach($categories as $category) {
							if($r == 1){ $cls = 'active'; }else{ $cls = ''; }
					?>					  	
						<div id="<?=$category->slug?>" class="tab-pane fade in <?=$cls?>">
							<div class="row">
						        <?php
						           wp_reset_query();
						            $args = array( 'category_name' => $category->slug,'order'=>'ASC', 'orderby'=>'date','posts_per_page'=>-1); 
						            query_posts($args);
						            while ( have_posts() ) : the_post();
						        ?>
						        	<div class="col-xs-12">
						                <?php the_content(); ?>
						        	</div>
						        <?php
						            endwhile;
						            wp_reset_query();
						        ?>
						    </div>
						</div>
					<?php $r++; } ?>
				</div>
			</div>
		</div>
	</div>				
</div>