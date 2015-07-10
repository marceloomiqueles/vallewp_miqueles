<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */
?>
			</div><!-- .col-full -->
		</div><!-- #content -->
		<div id='content'>
		    <div class="col-full">
				<div class="content-area">
					<div class="col-md-12 texto-azul">
						<div class="row">
						  	<div class="col-md-12 titulo-calendario">
						    	<h1>CALENDARIO DE TEMPORADA</h1>
						  	</div>
						</div>
						<br>
						<div class="row">
						  	<div class="col-md-5">"No olvides que si compras en temporada baja y vas en alta, tendras que pagar la diferencia."</div>
						  	<div class="col-md-7">
						    	<div class="row">
						      		<div class="col-md-12"><div class="cuadro1"></div><b>TEMPORADA ALTA:</b> 27 DE JUNIO AL 27 DE SEPTIEMBRE, FIN DE SEMANAS Y FESTIVOS.</div>
						    	</div>
						    	<div class="row">
						      		<div class="col-md-12"><div class="cuadro2"></div><b>TEMPORADA BAJA:</b> LUNES A VIERNES, EXCEPTO TEMPORADA ALTA.</div>
						    	</div>
						  	</div>
						</div>
						<hr>
						<!-- Responsive calendar - START -->
						  <div class="responsive-calendar">
						      <div class="controls">
						          	<a class="pull-left" data-go="prev">
						            	<div class="btn btn-primary">Prev</div>
						          	</a>
						          	<h4 class="calendar-title">
						            	<span data-head-year></span> <span data-head-month></span>
						          	</h4>
						          	<a class="pull-right" data-go="next">
						            	<div class="btn btn-primary">Sig</div>
						          	</a>
						      </div>
						      <hr/>
						      <div class="day-headers">
									<div class="day header">Lun</div>
									<div class="day header">Mar</div>
									<div class="day header">Mié</div>
									<div class="day header">Jue</div>
									<div class="day header">Vie</div>
									<div class="day header">Sáb</div>
						          	<div class="day header">Dom</div>
						      	</div>
						      	<div class="days" data-group="days"></div>
						    </div>
						    <!-- Responsive calendar - END -->
						<div class="cont_btn_ver">
						  <div class="btn_ver_todo"></div>
						</div>
					</div>
					<?php //do_action( 'storefront_before_footer' ); ?>
			    </div>
				<footer id="colophon" class="footer" role="contentinfo">
					<div class="container">
			          	<p align="center" class="text-muted gris-negro">NO OLVIDES QUE SI COMPRAS EN TEMPORADA BAJA, Y VAS EN ALTA TENDRÁS QUE PAGAR LA DIFERENCIA.</p><div class="logo-agua"><a href="http://www.lealtad360.com/" target="_blank"><center><img src="<?php echo get_template_directory_uri(); ?>/images/lealtad_white.png" height="60px"></center></a></div>
			        </div>
				</footer><!-- #colophon -->

				<?php do_action( 'storefront_after_footer' ); ?>

			</div><!-- #page -->
		</div>

		<?php wp_footer(); ?>

	</body>
</html>
