<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @package Odin
 * @since 2.2.0
 */
$cat = get_the_category();
?>
<link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example1/colorbox.css" />
<div id="single">
	<div class="container">
		<div class="row">
			<div class="col-xs-1 hidden-xs"></div>
			<div class="col-xs-12 col-md-10 col-sm-10 col-lg-10">
				<ol class="breadcrumb">
					<li><a href="/"><i class="fa fa-home"></i> Home</a></li>
					<li><a href="/<?=$cat[0]->slug?>"><?=$cat[0]->name?></a></li>
					<li class="active"><?php the_title(); ?></li>
				</ol>
			<?php 
		        if ( get_post_gallery() ) {
		            $gallery = get_post_gallery( get_the_ID(), false );
		            $ids = explode(',', $gallery['ids']);
		            
		            //display($ids);
		            /* Loop through all the image and output them one by one */
		            foreach( $ids as $idg ) : ?>
		            <div class="col-xs-12 col-md-3 col-sm-3 col-lg-3">
		            	<a href="<?=odin_get_image_url($idg, '800', '600' ); ?>" rel="gallery"  class="gallery">
		                	<img src="<?=odin_get_image_url($idg, '320', '240' ); ?>" class="img-responsive img-thumbnail" />
		            	</a>
		            </div> 
		                <?php
		            endforeach;			
		            }else
		            the_content();
			?>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/jquery.colorbox.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/i18n/jquery.colorbox-pt-BR.js"></script>
<script> jQuery('a.gallery').colorbox({rel:'gallery', current: null}); </script>
