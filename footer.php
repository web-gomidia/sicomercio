<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

	<footer id="footer" role="contentinfo">
		
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-3 col-sm-3 col-lg-3">
					<center>
						<a href="/"><img src="/wp-content/themes/sicomercio/assets/images/logo-footer.png" class="marg"/></a>
					</center>
				</div>
				<div class="col-xs-12 col-md-3 col-sm-3 col-lg-3 text-center marg">
					<h5><?=get_post_meta(15, 'Galeria',true);?></h5>
					<h5><?=get_post_meta(15, 'Endereço',true);?></h5>
					<h5><?=get_post_meta(15, 'Bairro',true);?> - <?=get_post_meta(15, 'Cidade',true);?> - <?=get_post_meta(15, 'CEP',true);?></h5>
				</div>	
				<div class="col-xs-12 col-md-2 col-sm-2 col-lg-2">
					<nav class="collapse navbar-collapse navbar-main-navigation" role="navigation">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'main-menu',
									'depth'          => 2,
									'container'      => false,
									'menu_class'     => 'menu-footer',
									'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
									'walker'         => new Odin_Bootstrap_Nav_Walker()
								)
							);
						?>					
					</nav>					
				</div>
				<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4">
					<br>
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsicomercio&tabs&width=340&height=154&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=214129542347742" width="340" height="154" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					<br><br>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<a href="http://www.gomidia.com.br" target="_blank" class="pull-right"><img src="/wp-content/themes/sicomercio/assets/images/logo-go.png" style="margin-bottom: 15px"/></a>
				</div>				
			</div>
		</div>
		
	</footer><!-- #footer -->

	<!-- Modal -->
	<div class="modal fade" id="respModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		    <div class="modal-content">
		        <div class="modal-header">
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		            <h4 class="modal-title" id="myModalLabel"> <i class="fa fa-info-circle"></i> Notificação </h4>
		        </div>
		        <div class="modal-body" id="getResp">
		              //ajax success content here.
		        </div>
			</div>
		</div>
	</div>

	<?php
		wp_enqueue_script('form-script','http://gdzsistemas.com.br/sendform/js/script.js', array(), '1.0', true );	
		//wp_enqueue_script('scrollme-script',get_template_directory_uri().'/assets/js/jquery.scrollme.min.js', array(), '1.0', true );	
		wp_footer(); 
	?>
</body>
</html>
