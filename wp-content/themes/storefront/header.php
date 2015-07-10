<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

if( has_term( 'pases', 'product_cat', $post->ID ) ){
	$page = get_page_by_title( 'Pase Temporada' );
	wp_redirect( esc_url( get_page_link( $page->ID ) ) ); exit;
}

if( has_term( 'rental', 'product_cat', $post->ID ) ){
		$page = get_page_by_title( 'Rental' );
	wp_redirect( esc_url( get_page_link( $page->ID ) ) ); exit;
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php storefront_html_tag_schema(); ?>>
	<head>
		<link href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive-calendar.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
	    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-datepicker.min.js"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/js/responsive-calendar.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$(".responsive-calendar").responsiveCalendar({
		          	time: '2015-06',
		          	events: {
		            	"2015-06-27": {},
			            "2015-06-28": {}, 
			            "2015-06-29": {},
		            	"2015-06-30": {},
			            "2015-07-01": {}, 
			            "2015-07-02": {},
		            	"2015-07-03": {},
			            "2015-07-04": {}, 
			            "2015-07-05": {},
		            	"2015-07-06": {},
			            "2015-07-07": {}, 
			            "2015-07-08": {},
		            	"2015-07-09": {},
			            "2015-07-10": {}, 
			            "2015-07-11": {},
		            	"2015-07-12": {},
			            "2015-07-13": {}, 
			            "2015-07-14": {},
		            	"2015-07-15": {},
			            "2015-07-16": {}, 
			            "2015-07-17": {},
		            	"2015-07-18": {},
			            "2015-07-19": {}, 
			            "2015-07-20": {},
		            	"2015-07-21": {},
			            "2015-07-22": {}, 
			            "2015-07-23": {},
		            	"2015-07-24": {},
			            "2015-07-25": {}, 
			            "2015-07-26": {},
		            	"2015-07-27": {},
			            "2015-07-28": {}, 
			            "2015-07-29": {},
		            	"2015-07-30": {},
			            "2015-07-31": {}, 
			            "2015-08-01": {}, 
			            "2015-08-02": {},
		            	"2015-08-03": {},
			            "2015-08-04": {}, 
			            "2015-08-05": {},
		            	"2015-08-06": {},
			            "2015-08-07": {}, 
			            "2015-08-08": {},
		            	"2015-08-09": {},
			            "2015-08-10": {}, 
			            "2015-08-11": {},
		            	"2015-08-12": {},
			            "2015-08-13": {}, 
			            "2015-08-14": {},
		            	"2015-08-15": {},
			            "2015-08-16": {}, 
			            "2015-08-17": {},
		            	"2015-08-18": {},
			            "2015-08-19": {}, 
			            "2015-08-20": {},
		            	"2015-08-21": {},
			            "2015-08-22": {}, 
			            "2015-08-23": {},
		            	"2015-08-24": {},
			            "2015-08-25": {}, 
			            "2015-08-26": {},
		            	"2015-08-27": {},
			            "2015-08-28": {}, 
			            "2015-08-29": {},
		            	"2015-08-30": {},
			            "2015-08-31": {}, 
			            "2015-09-01": {}, 
			            "2015-09-02": {},
		            	"2015-09-03": {},
			            "2015-09-04": {}, 
			            "2015-09-05": {},
		            	"2015-09-06": {},
			            "2015-09-07": {}, 
			            "2015-09-08": {},
		            	"2015-09-09": {},
			            "2015-09-10": {}, 
			            "2015-09-11": {},
		            	"2015-09-12": {},
			            "2015-09-13": {}, 
			            "2015-09-14": {},
		            	"2015-09-15": {},
			            "2015-09-16": {}, 
			            "2015-09-17": {},
		            	"2015-09-18": {},
			            "2015-09-19": {}, 
			            "2015-09-20": {},
		            	"2015-09-21": {},
			            "2015-09-22": {}, 
			            "2015-09-23": {},
		            	"2015-09-24": {},
			            "2015-09-25": {}, 
			            "2015-09-26": {},
		            	"2015-09-27": {}
		        	}
		        });

				$( ".btn_ver_todo" ).click(function() {
				  	$( ".responsive-calendar" ).toggleClass( "calendarBoxIntExt", 1000, "easeOutSine" );
				  	$( ".btn_ver_todo" ).toggleClass( "btn_ver_todo_2", 1000, "easeOutSine" );
				});

				$( ".txt_categoria, .img_menu" ).click(function() {
				  	$( ".header-widget-region" ).toggleClass( "header-widget-region-out", 1000, "easeOutSine" );
				});

			    $(".identifica").click(function(){
			        $("#btl-content-login").fadeToggle("slow");
			        $("#btl-content-registration").fadeOut("slow");
			    });

			    $(".registra").click(function(){
			        $("#btl-content-registration").fadeToggle("slow");
			        $("#btl-content-login").fadeOut("slow");
			    });

			    $("#btn-add-amigos").click(function(){
		            var ran = Math.floor((Math.random() * 10000000) + 1);
		            $( "#form-rental" ).append('<div id="caja-nro-' + ran + '"><div class="row"><div class="col-md-2"><img data-src="holder.js/140x140" class="img-rounded" alt="140x140" src="<?php echo get_template_directory_uri(); ?>/images/ski.png" data-holder-rendered="true" style="width: 121px; height: 114px;"></div><div class="col-md-10"><div class="row"><div class="form-group col-md-3 form-group-sm"><input type="text" class="form-control input-sm" name="nombre[]" placeholder="NOMBRE"></div><div class="form-group col-md-3 form-group-sm"><input type="text" class="form-control input-sm" name="apellido[]" placeholder="APELLIDO"></div><div class="form-group col-md-3 form-group-sm"><input type="text" class="form-control input-sm" name="edad[]" placeholder="EDAD"></div><div class="form-group col-md-3 form-group-sm"><input type="text" class="form-control input-sm" name="estatura[]" placeholder="ESTATURA"></div></div><div class="row"><div class="form-group col-md-3 form-group-sm date"><input type="text" class="form-control input-sm" name="fecha[]" readonly placeholder="FECHA NACIMIENTO"></div><div class="form-group col-md-3 form-group-sm"><input type="text" class="form-control input-sm" name="peso[]" placeholder="PESO"></div><div class="form-group col-md-3 form-group-sm"><select class="form-control input-sm" name="sexo[]" id="sexo' + ran + '" onchange="cambiaTalla(' + ran + ');"><option value="2">FEMENINO</option><option value="1">MASCULINO</option></select></div><div class="form-group col-md-3 form-group-sm"><select id="descr' + ran + '" class="form-control input-sm producto" name="producto[]" onchange="cambiaInfoTextRental(' + ran + ');"><?php $args = array( "post_type" => "product", "posts_per_page" => 10, "product_cat" => "rental");$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?><option value="<?php the_ID(); ?>"><?php the_title(); ?> (<?php echo $product->get_price_html(); ?>)</option><?php endwhile; ?><?php wp_reset_query(); ?></select><input type="hidden" name="precio[]"></div></div><div class="row"><div class="form-group col-md-3 form-group-sm"><select id="skisnow' + ran + '" class="form-control input-sm" name="ski[]" onchange="cambiaDetalle(' + ran + ');"><option value="1">Ski</option><option value="2">Snowboard</option></select></div><div class="form-group col-md-3 form-group-sm"><select id="skisnowval1" class="form-control input-sm" name="tipo[]"><option value="1">Tipo 1: Esquia sin tomar riesgos, prefiere velocidades bajas y elige pendientes suaves.</option><option value="2">Tipo 2: Esquiador medio, prefiere velocidades variadas y terrenos de todo tipo.</option><option value="3">Tipo 3: Esqui de forma agresiva y a  alta velocidad. SE desenvuelve a la perfección en pendientes medias y fuertes y tiene tendencias a llevar regulaciones mas altas de  lo normal.</option></select></div><div class="form-group col-md-3 form-group-sm"><select id="zapatoval' + ran + '" class="form-control input-sm" onchange="cambiaTalla(' + ran + ');"><option value="0">Talla Zapato: 27</option><option value="1">Talla Zapato: 28</option><option value="2">Talla Zapato: 29</option><option value="3">Talla Zapato: 30,5</option><option value="4">Talla Zapato: 31,5</option><option value="5">Talla Zapato: 33</option><option value="6">Talla Zapato: 34</option><option value="7">Talla Zapato: 35</option><option value="8">Talla Zapato: 36</option><option value="9">Talla Zapato: 36,5</option><option value="10">Talla Zapato: 37</option><option value="11">Talla Zapato: 38</option><option value="12">Talla Zapato: 39</option><option value="13">Talla Zapato: 40</option><option value="14">Talla Zapato: 40,5</option><option value="15">Talla Zapato: 41</option><option value="16">Talla Zapato: 41,5</option><option value="17">Talla Zapato: 42</option><option value="18">Talla Zapato: 42,5</option><option value="19">Talla Zapato: 43</option><option value="20">Talla Zapato: 43,5</option><option value="21">Talla Zapato: 44</option><option value="22">Talla Zapato: 45</option><option value="23">Talla Zapato: 46</option><option value="24">Talla Zapato: 46,5</option><option value="25">Talla Zapato: 48</option><option value="26">Talla Zapato: 49</option><option value="27">Talla Zapato: 50</option></select></div><div class="form-group col-md-3 form-group-sm"><input type="text" class="form-control input-sm" id="converttalla' + ran + '" name="talla[]" readonly placeholder="Talla Equipo" value="Talla Ski: 16,5"></div></div><div class="row"><div class="form-group col-md-3 form-group-sm date"><input type="text" class="form-control input-sm" name="fecha_rental[]" readonly placeholder="FECHA RENTAL"></div></div><div class="row"><div class="form-group col-md-12 form-group-sm has-error"><p id="textoinf' + ran + '" class="help-block">Voucher válido por 1 arriendo Set Ski/Snowboard Prestige Adulto (Entre 12 y 65 años) para cualquier día de la temporada de ski 2015. Set Ski: Ski + Bastones + Botas. Set Snowboard: Snowboard + Botas. Acércate a cualquier rental de Valle Nevado y canjea tu voucher</p></div></div></div></div><div class="row"><div class="col-md-10"><hr style="width:100%; float:left; border:1px solid #033d5a !important; position:relative; "></div><div class="col-md-2 text-right"><button type="button" class="single_add_to_cart_button button alt" onclick="elimina_caja(\'nro-' + ran + '\');"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Eliminar</button></div></div></div>');
		            cargaCalendario();
		        });

			    $("#btn-add-pase").click(function(){
		            var ran = Math.floor((Math.random() * 10000000) + 1);
		            $( "#form-pase" ).append('<div id="caja-nro-' + ran + '"><div class="row"><div class="col-md-2"><img data-src="holder.js/140x140" class="img-rounded" alt="140x140" src="<?php echo get_template_directory_uri(); ?>/images/ski.png" data-holder-rendered="true" style="width: 121px; height: 114px;"></div><div class="col-md-10"><div class="row"><div class="form-group col-md-3 form-group-sm"><input type="text" class="form-control input-sm" name="nombre[]" placeholder="NOMBRE"></div><div class="form-group col-md-3 form-group-sm"><input type="text" class="form-control input-sm" name="apellido[]" placeholder="APELLIDO"></div><div class="form-group col-md-3 form-group-sm"><input type="text" class="form-control input-sm" name="rut[]" placeholder="RUT"></div><div class="form-group col-md-3 form-group-sm date"><input type="text" class="form-control input-sm" name="fecha[]" readonly placeholder="FECHA NACIMIENTO"></div></div><div class="row"><div class="form-group col-md-3 form-group-sm"><input type="text" class="form-control input-sm" name="mail[]" placeholder="EMAIL"></div><div class="form-group col-md-3 form-group-sm"><select id="descr' + ran + '" class="form-control input-sm producto" name="producto[]" onchange="cambiaInfoText(' + ran + ')"><?php $args = array( "post_type" => "product", "posts_per_page" => 10, "product_cat" => "pases");$loop = new WP_Query( $args );while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?><option value="<?php the_ID(); ?>"><?php echo $product->get_price_html(); ?> - <?php the_title(); ?></option><?php endwhile; ?><?php wp_reset_query(); ?></select></div><div class="form-group col-md-6 form-group-sm"><p class="help-block">Sube tu foto: </p><input type="file" name="foto[]" value="Abrir" id="exampleInputFile"></div></div><div class="row"><div class="form-group col-md-12 form-group-sm has-error"><p id="textoinf' + ran + '" class="help-block">PASE DE TEMPORADA Adulto (Entre 12 y 65 años) Voucher válido por 1 pase de temporada Adulto (Entre 12 y 65 años). Favor contactarse con <a href="mailto:boleteria@vallenevado.com">boleteria@vallenevado.com</a> para retirar tu pase de temporada</p></div></div></div></div><div class="row"><div class="col-md-10"><hr style="width:100%; float:left; border:1px solid #033d5a !important; position:relative; "></div><div class="col-md-2 text-right"><button type="button" class="single_add_to_cart_button button alt" onclick="elimina_caja(\'nro-' + ran + '\');"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Eliminar</button></div></div></div>');
		            cargaCalendario();
		        });
			<?php if( !is_front_page() ) { ?>
				$('html,body').animate({scrollTop:$("#categorias_tienda").offset().top},1000);
			});
		</script>
		<style type="text/css">
			@media screen and (min-width: 768px) {
				.site-header {
				  height: 802px;
				  background-image: url("<?php echo get_template_directory_uri(); ?>/images/bg-index.jpg");
				  background-repeat-y: no-repeat;
				  background-position: top center;
				  background-position-y: 0px;
				  background-color: #FFF;
				}
			}
		</style>
		<?php } else { ?>
			});
		</script>
		<style type="text/css">
			@media screen and (min-width: 768px) {
				.site-header {
				  height: 802px;
				  background-image: url("<?php echo get_template_directory_uri(); ?>/images/bg-index_bk.jpg");
				  background-repeat-y: no-repeat;
				  background-position: top center;
				  background-position-y: 0px;
				  background-color: #FFF;
				}
			}

			.storefront-sorting {
				display: none;
			}

			.banner_login {
				margin-top: 27em;
			}
		</style>
		<?php } ?>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.bajar').click(function(){
					$('html,body').animate({scrollTop:$("#categorias_tienda").offset().top},1000);
				});

			});
			
	        function cargaCalendario() {
                $('.form-group.date input').datepicker({
                	orientation: "auto",
                    weekStart: 1,
                    language: "es",
                    autoclose: true
                });
	        }

			function cambiaTalla(id) {
				var tallas = [["16,5", "17, 5", "18,5", "19,5", "20", "20,5", "21", "22", "22,5", "23","23,5", "24", "24,5", "25", "25,5", "26", "26,5", "27", "27,5", "28","28,5", "29", "29,5", "30", "30,5", "31", "31,5", "32"],["10C","11C","12C","13C","1","2","3","4","4,5","5","5,5","6","6,5","7","7,5","8","8,5","9","9,5","10","10,5","11","11,5","12","13","14","15","16"], ["NA","NA","NA","NA","NA","NA","4","5","5,5","6","6,5","7","7,5","8","8,5","9","9,5","10","10,5","11","NA","NA","NA","NA","NA","NA","NA","NA"]];
				var tipo = 0;
				var zapato = $("#zapatoval" + id).val();
				var nombre = "Ski: ";
				if ($("#skisnow" + id).val() == 2) {
					tipo = tipo + Number($("#sexo" + id).val());
					nombre = "Snowboard: ";
				}
				$("#converttalla" + id).val("Talla " + nombre + tallas[tipo][zapato]);
			}

			function cambiaDetalle(id) {
				if ($("#skisnow" + id).val() == 1) {
					$("#skisnowval" + id).html('<option value="1">Tipo 1: Esquia sin tomar riesgos, prefiere velocidades bajas y elige pendientes suaves.</option><option value="2">Tipo 2: Esquiador medio, prefiere velocidades variadas y terrenos de todo tipo.</option><option value="3">Tipo 3: Esqui de forma agresiva y a  alta velocidad. SE desenvuelve a la perfección en pendientes medias y fuertes y tiene tendencias a llevar regulaciones mas altas de  lo normal.</option>');
				} else {
					$("#skisnowval" + id).html('<option value="1">Goofy (Derecha adelante)</option><option value="2">Regular (Izquierda adelante)</option>');
				}
				cambiaTalla(id);
			}

            function cambiaInfoTextRental(id) {
            	var texto = [];
            	<?php 
	            $args = array( 'post_type' => 'product', 'posts_per_page' => 10, 'product_cat' => 'rental');
	            $loop = new WP_Query( $args );
	            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
	            texto[<?php the_ID(); ?>] = '<?php echo preg_replace("/\s+/"," ",get_the_content()); ?>';
	            <?php endwhile; ?>
	            <?php wp_reset_query(); ?>
            	<?php for($i = 0; $i < count($datos); $i++) {  ?>
            	texto[<?php echo $id_prod[$i]; ?>] = <?php echo $datos[$i]; ?>
            	<?php } ?>
            	$("#textoinf" + id).html(texto[$("#descr" + id).val()]);
            }

            function cambiaInfoText(id) {
            	var texto = [];
            	<?php 
	            $args = array( 'post_type' => 'product', 'posts_per_page' => 10, 'product_cat' => 'pases');
	            $loop = new WP_Query( $args );
	            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
	            texto[<?php the_ID(); ?>] = '<?php echo preg_replace("/\s+/"," ",get_the_content()); ?>';
	            <?php endwhile; ?>
	            <?php wp_reset_query(); ?>
            	<?php for($i = 0; $i < count($datos); $i++) {  ?>
            	texto[<?php echo $id_prod[$i]; ?>] = <?php echo $datos[$i]; ?>
            	<?php } ?>
            	$("#textoinf" + id).html(texto[$("#descr" + id).val()]);
            }

	        function elimina_caja(id) {
	            $("#caja-" + id).remove();
	        }
		</script>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
		<?php
		do_action( 'storefront_before_header' ); ?>
			<header id="masthead" class="site-header" role="banner" <?php if ( get_header_image() != '' ) { echo 'style="background-image: url(' . esc_url( get_header_image() ) . ');"'; } ?>>
				<div class="col-full">
					<?php
					/**
					 * @hooked storefront_skip_links - 0
					 * @hooked storefront_social_icons - 10
					 * @hooked storefront_site_branding - 20
					 * @hooked storefront_secondary_navigation - 30
					 * @hooked storefront_product_search - 40
					 * @hooked storefront_primary_navigation - 50
					 * @hooked storefront_header_cart - 60
					 */
					do_action( 'storefront_header' ); ?>
				</div>
			</header><!-- #masthead -->
			<?php
			/**
			 * @hooked storefront_header_widget_region - 10
			 */
			do_action( 'storefront_before_content' ); ?>
			<div id="content" class="site-content" tabindex="-1">
				<div class="col-full">
				<?php
				/**
				 * @hooked woocommerce_breadcrumb - 10
				 */
				do_action( 'storefront_content_top' ); ?>