<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-1 hidden-xs"></div>
            <div class="col-xs-12 col-md-10 col-sm-10 col-lg-10 text-center">
                <h2>Contato</h2><br>                
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 text-center">
                    <div class="contacts">
                        <h3>Telefone</h3>
                        <hr>
                        <i class="fa fa-mobile fa-5x" aria-hidden="true"></i>
                        <h4><?=get_post_meta(15, 'Telefone',true);?></h4>
                    </div>
                </div>              
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 text-center">
                    <div class="contacts">
                        <h3>E-mail</h3>
                        <hr>
                        <i class="fa fa-envelope-o fa-5x" aria-hidden="true"></i>
                        <h4><?=get_post_meta(15, 'E-mail',true);?></h4>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <div id="map"></div>     
        
        <div class="newsletter">
            <div class="container">
        	<div class="row">
        	    <div class="col-xs-12 text-center">
        	        <h2>Receba nossas novidades.</h2>
        			<form action="#" method="post" class="form" id="contact" name="contact">
        			    <input type="hidden" name="captcha" id="cod_captcha" value="" class="captcha" />
        			    <input type="hidden" name="c_utmz" id="c_utmz" value="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - <?php echo esc_url( home_url( '/contato' ) ); ?>" />
        			    <input type="hidden" value="contact" name="format">
        			    <input value="interiores" name="emp" type="hidden">
        			    <input value="send" name="action" type="hidden">
        			    <input value="contato@interiores.com.br" name="from_email" type="hidden">
        			    <input value="INTERIORES" name="from_name" type="hidden">
        			    <input value="http://interiores.com.br" name="site_url" type="hidden">
        			    
                        <input type="text" name="name" placeholder="Nome" class="form-control"/>
                        <input type="text" name="email" placeholder="E-mail" class="form-control"/>
                        <button class="btn"><strong>Enviar</strong></button>
                    </form>
                </div>      
            </div> 
        </div>
    </div>
</div>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', init);

    function init() {

        var mapOptions = {
            zoom: 17,
            scrollwheel: false,
            center: new google.maps.LatLng(-22.130209, -43.2362014)
        };

        var mapElement = document.getElementById('map');

        var map = new google.maps.Map(mapElement, mapOptions);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(-22.130209, -43.2362014),
            map: map,
            title: 'Sicomercio - Três Rios'
        });
        
        
    }
</script>