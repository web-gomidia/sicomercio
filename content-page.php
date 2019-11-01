<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<div id="single">
	<div class="container">
		<div class="row">
			<div class="col-xs-1 hidden-xs"></div>
			<div class="col-xs-12 col-md-10 col-sm-10 col-lg-10">
				<ol class="breadcrumb">
					<li><a href="/"><i class="fa fa-home"></i> Home</a></li>
					<li class="active"><?php the_title(); ?></li>
				</ol>
				<div class="col-xs-12 col-md-7 col-sm-7 col-lg-7">
					<?php the_content(); ?>
				</div>
				<div class="col-xs-12 col-md-5 col-sm-5 col-lg-5">
					<img src="<?=get_post_meta(get_the_ID(), 'Imagem 1',true);?>" class="img-responsive" width="320" height="240"/>
					<img src="<?=get_post_meta(get_the_ID(), 'Imagem 2',true);?>" class="img-responsive pull-right" width="320" height="240"/>
					<img src="<?=get_post_meta(get_the_ID(), 'Imagem 3',true);?>" class="img-responsive" width="320" height="240"/>
				</div>
				
			</div>
		</div>
	</div>
</div>