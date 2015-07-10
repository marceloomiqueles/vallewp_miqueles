<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
              </div>
              <div class="hidden-xs col-md-2"></div>
          </div>
      </div>
      </div>
    <hr>
      <div class="row">
        <div class="col-md-2"></div>
      <div class="col-md-8 texto-azul">
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
      <div class="col-md-1"></div>
    </div>
    <footer class="footer">
        <div class="container">
          <p align="center" class="text-muted">NO OLVIDES QUE SI COMPRAS EN TEMPORADA BAJA, Y VAS EN ALTA TENDRÁS QUE PAGAR LA DIFERENCIA.</p>
        </div>
    </footer>
    <?php //wp_footer(); ?>
    <!-- jQuery is called via the WordPress-friendly way via functions.php -->
    <!-- this is where we put our custom functions -->
    <!-- <script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script> -->
    <!-- Asynchronous google analytics; this is the official snippet.
             Replace UA-XXXXXX-XX with your site's ID and domainname.com with your domain, then uncomment to enable.
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-XXXXXX-XX', 'domainname.com');
      ga('send', 'pageview');

    </script>
    -->
  </body>
</html>