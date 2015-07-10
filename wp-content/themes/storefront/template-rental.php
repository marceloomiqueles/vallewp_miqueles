<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Rental
 *
 * @package storefront
 */

$nombre;
$apellido;
$edad;
$estatura;
$fecha;
$fecha_rental;
$peso;
$sexo;
$sexo_text = array( 0 => "", 1 => "MASCULINO", 2 => "FEMENINO" );
$aparato;
$aparato_text = array( 0 => "", 1 => "Ski", 2 => "Snowboard" );
$tipo;
$tipo_text = array( 0 => "", 1 => "Tipo 1: Esquia sin tomar riesgos, prefiere velocidades bajas y elige pendientes suaves.", 2 => "Tipo 2: Esquiador medio, prefiere velocidades variadas y terrenos de todo tipo.", 3 => "Tipo 3: Esqui de forma agresiva y a  alta velocidad. SE desenvuelve a la perfección en pendientes medias y fuertes y tiene tendencias a llevar regulaciones mas altas de  lo normal." );
$zapato;
$producto;

// print_r($array);die();

if (isset($_POST["nombre"])) $nombre = $_POST["nombre"];
if (isset($_POST["apellido"])) $apellido = $_POST["apellido"];
if (isset($_POST["edad"])) $edad = $_POST["edad"];
if (isset($_POST["estatura"])) $estatura = $_POST["estatura"];
if (isset($_POST["fecha"])) $fecha = $_POST["fecha"];
if (isset($_POST["peso"])) $peso = $_POST["peso"];
if (isset($_POST["sexo"])) $sexo = $_POST["sexo"];
if (isset($_POST["producto"])) $producto = $_POST["producto"];
if (isset($_POST["ski"])) $aparato = $_POST["ski"];
if (isset($_POST["tipo"])) $tipo = $_POST["tipo"];
if (isset($_POST["talla"])) $zapato = $_POST["talla"];
if (isset($_POST["fecha_rental"])) $fecha_rental = $_POST["fecha_rental"];

if ( count($nombre) > 0 && count($apellido) > 0 && count($edad) > 0 && count($estatura) > 0 && count($fecha) > 0 && count($peso) > 0 && count($sexo) > 0 && count($producto) > 0 && count($aparato) > 0 && count($tipo) > 0 && count($zapato) > 0) { 
// if ( count($producto) > 0 ) { 
    // echo count($producto);die();
    for ($i = 0; $i < count($producto); $i++) {
        $product = get_product( $producto[$i] );
        $array_carro = Array ( 
            "addons" => Array ( 
                Array ( 
                    "name" => "Rental - Nombre", 
                    "value" => $nombre[$i], 
                    "price" => "",
                ), 
                Array ( 
                    "name" => "Rental - Apellido", 
                    "value" => $apellido[$i], 
                    "price" => "",
                ), 
                Array ( 
                    "name" => "Rental - Edad", 
                    "value" => $edad[$i], 
                    "price" => "",
                ), 
                Array ( 
                    "name" => "Rental - Estatura", 
                    "value" => $estatura[$i], 
                    "price" => "",
                ), 
                Array ( 
                    "name" => "Rental - Fecha Nacimiento", 
                    "value" => $fecha[$i], 
                    "price" => "",
                ), 
                Array ( 
                    "name" => "Rental - Peso", 
                    "value" => $peso[$i], 
                    "price" => "",
                ), 
                Array ( 
                    "name" => "Rental - Sexo", 
                    "value" => $sexo_text[$sexo[$i]], 
                    "price" => "",
                ), 
                Array ( 
                    "name" => "Rental - Set", 
                    "value" => $product->post->post_title, 
                    "price" => "",
                ), 
                Array ( 
                    "name" => "Rental - Aparato", 
                    "value" => $aparato_text[$aparato[$i]], 
                    "price" => "",
                ), 
                Array ( 
                    "name" => "Rental - Tipo", 
                    "value" => $tipo_text[$tipo[$i]], 
                    "price" => "",
                ), 
                Array ( 
                    "name" => "Rental - Zapato", 
                    "value" => $zapato[$i], 
                    "price" => "",
                ), 
                Array ( 
                    "name" => "Rental - Fecha Rental", 
                    "value" => $fecha_rental[$i], 
                    "price" => "",
                ), 
            ), 
            "product_id" => $producto[$i], 
            "variation_id" => "",
            "variation" => Array ( ), 
            "quantity" => "1", 
            "data" => new WC_Product_Simple( $producto[$i] ) 
        );
        
        $array_carro["data"]->sold_individually = "no";
        $array_carro["data"]->price = $product->get_price();
        $array_carro["data"]->stock_status = "instock";
        // print_r($array_carro);die();
        $woocommerce->cart->add_to_cart( $producto[$i], 1, null, null, $array_carro );
        // $woocommerce->cart->add_to_cart( $value );
    }
}
// die("salimos");
get_header(); ?>
    <script type="text/javascript">
        $(document).ready(function(){
            cargaCalendario();
        });

        function valida_form () {
            var pasa = true;
            var mensaje = "";
            var nombre =  document.getElementsByName("nombre[]");
            var apellido =  document.getElementsByName("apellido[]");
            var edad =  document.getElementsByName("edad[]");
            var estatura =  document.getElementsByName("estatura[]");
            var fecha =  document.getElementsByName("fecha[]");
            var peso =  document.getElementsByName("peso[]");
            var sexo =  document.getElementsByName("sexo[]");
            var producto =  document.getElementsByName("producto[]");
            var aparato =  document.getElementsByName("ski[]");
            var tipo =  document.getElementsByName("tipo[]");
            var zapato =  document.getElementsByName("talla[]");
            var fecha_rental =  document.getElementsByName("fecha_rental[]");
            // console.log(document.getElementsByName("nombre[]"));
            for (var i = 0; i < nombre.length; i++) {
                mensaje += "Pase " + (i + 1) + "\n";
                if (nombre[i].value.trim().length < 1) {
                    mensaje += "Debes ingresar un nombre!\n";
                    pasa = false;
                }
                if (apellido[i].value.trim().length < 1) {
                    mensaje += "Debes ingresar un apellido!\n";
                    pasa = false;
                }
                if (edad[i].value.trim().length < 1) {
                    mensaje += "Debes ingresar una edad!\n";
                    pasa = false;
                }
                if (estatura[i].value.trim().length < 1) {
                    mensaje += "Debes ingresar una estatura!\n";
                    pasa = false;
                }
                if (fecha[i].value.trim().length < 1) {
                    mensaje += "Debes seleccionar una fecha!\n";
                    pasa = false;
                }
                if (peso[i].value.trim().length < 1) {
                    mensaje += "Debes ingresar un peso!\n";
                    pasa = false;
                }
                if (sexo[i].value.trim().length < 1) {
                    mensaje += "Debes seleccionar un sexo!\n";
                    pasa = false;
                }
                if (producto[i].value.trim().length < 1) {
                    mensaje += "Debes seleccionar un producto!\n";
                    pasa = false;
                }
                if (aparato[i].value.trim().length < 1) {
                    mensaje += "Debes seleccionar un aparato!\n";
                    pasa = false;
                }
                if (tipo[i].value.trim().length < 1) {
                    mensaje += "Debes seleccionar un tipo!\n";
                    pasa = false;
                }
                if (zapato[i].value.trim().length < 1) {
                    mensaje += "Debes seleccionar una talla!\n";
                    pasa = false;
                }
                if (fecha_rental[i].value.trim().length < 1) {
                    mensaje += "Debes seleccionar una fecha de arriendo!\n";
                    pasa = false;
                }
            }

            if (!pasa) {
                alert(mensaje);
                return false;
            }
        }


        function comprueba_extension(archivo) {
            var extensiones_permitidas = new Array(".gif", ".jpg", ".jpeg", ".png");
            var mierror = "";
            var resul = true;
            if (!archivo) {
                resul = false;
            } else {
                extension = (archivo.substring(archivo.lastIndexOf("."))).toLowerCase();
                permitida = false;
                for (var i = 0; i < extensiones_permitidas.length; i++) {
                    if (extensiones_permitidas[i] == extension) {
                        permitida = true;
                        break;
                    }
                }
                if (!permitida) {
                    mierror = "Comprueba la extensión de los archivos a subir. \nSólo se pueden subir archivos con extensiones: " + extensiones_permitidas.join();
                    resul = false;
                }
            }
            // alert (mierror); 
            return resul; 
        }

        function validateEmail(email) {
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
    </script>
    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>

            <header>
                <h1 class="page-title">
                    Rental
                </h1>

                <?php the_archive_description(); ?>
            </header><!-- .page-header -->
            <div class="row">
                <div class="col-md-12">
                    <hr style="width:100%; float:left; border:1px solid #033d5a !important; position:relative; ">
                </div>
            </div>
            <form method="post" name='form_data' action="<?php the_permalink() ?>" enctype="multipart/form-data" onsubmit='return valida_form();'>
                <div id="form-rental">
                    <div id="caja-nro-1">
                        <div class="row">
                            <div class='col-md-12'>
                                <p align=='center'></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <img data-src="holder.js/140x140" class="img-rounded" alt="140x140" src="<?php echo get_template_directory_uri(); ?>/images/ski.png" data-holder-rendered="true" style="width: 121px; height: 114px;">
                            </div>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="form-group col-md-3 form-group-sm">
                                        <input type="text" class="form-control input-sm" name='nombre[]' placeholder="NOMBRE">
                                    </div>
                                    <div class="form-group col-md-3 form-group-sm">
                                        <input type="text" class="form-control input-sm" name='apellido[]' placeholder="APELLIDO">
                                    </div>
                                    <div class="form-group col-md-3 form-group-sm">
                                        <input type="text" class="form-control input-sm" name="edad[]" placeholder="EDAD">
                                    </div>
                                    <div class="form-group col-md-3 form-group-sm">
                                        <input type="text" class="form-control input-sm" name="estatura[]" placeholder="ESTATURA">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3 form-group-sm date">
                                        <input type="text" class="form-control input-sm" name="fecha[]" readonly placeholder="FECHA NACIMIENTO">
                                    </div>
                                    <div class="form-group col-md-3 form-group-sm">
                                        <input type="text" class="form-control input-sm" name="peso[]" placeholder="PESO">
                                    </div>
                                    <div class="form-group col-md-3 form-group-sm">
                                        <select class="form-control input-sm" name="sexo[]" id="sexo1" onchange="cambiaTalla(1);">
                                            <option value="2">FEMENINO</option>
                                            <option value="1">MASCULINO</option>
                                        </select>
                                    </div>
                                     <div class="form-group col-md-3 form-group-sm">
                                        <select id="descr1" class="form-control input-sm" name="producto[]" onchange="cambiaInfoTextRental(1)">
                                            <?php
                                            $args = array( 'post_type' => 'product', 'posts_per_page' => 10, 'product_cat' => 'rental');
                                            $loop = new WP_Query( $args );
                                            // print_r($loop);die();
                                            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                                            <option value="<?php the_ID(); ?>"><?php echo $product->get_price_html(); ?> - <?php the_title(); ?></option>
                                            <?php endwhile; ?>
                                            <?php wp_reset_query(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3 form-group-sm">
                                        <select id="skisnow1" class="form-control input-sm" name="ski[]" onchange="cambiaDetalle(1);">
                                            <option value="1">Ski</option>
                                            <option value="2">Snowboard</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 form-group-sm">
                                        <select id="skisnowval1" class="form-control input-sm" name="tipo[]">
                                            <option value="1">Tipo 1: Esquia sin tomar riesgos, prefiere velocidades bajas y elige pendientes suaves.</option>
                                            <option value="2">Tipo 2: Esquiador medio, prefiere velocidades variadas y terrenos de todo tipo.</option>
                                            <option value="3">Tipo 3: Esqui de forma agresiva y a  alta velocidad. SE desenvuelve a la perfección en pendientes medias y fuertes y tiene tendencias a llevar regulaciones mas altas de  lo normal.</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 form-group-sm">
                                        <select id="zapatoval1" class="form-control input-sm" onchange="cambiaTalla(1);">
                                            <option value="0">Talla Zapato: 27</option>
                                            <option value="1">Talla Zapato: 28</option>
                                            <option value="2">Talla Zapato: 29</option>
                                            <option value="3">Talla Zapato: 30,5</option>
                                            <option value="4">Talla Zapato: 31,5</option>
                                            <option value="5">Talla Zapato: 33</option>
                                            <option value="6">Talla Zapato: 34</option>
                                            <option value="7">Talla Zapato: 35</option>
                                            <option value="8">Talla Zapato: 36</option>
                                            <option value="9">Talla Zapato: 36,5</option>
                                            <option value="10">Talla Zapato: 37</option>
                                            <option value="11">Talla Zapato: 38</option>
                                            <option value="12">Talla Zapato: 39</option>
                                            <option value="13">Talla Zapato: 40</option>
                                            <option value="14">Talla Zapato: 40,5</option>
                                            <option value="15">Talla Zapato: 41</option>
                                            <option value="16">Talla Zapato: 41,5</option>
                                            <option value="17">Talla Zapato: 42</option>
                                            <option value="18">Talla Zapato: 42,5</option>
                                            <option value="19">Talla Zapato: 43</option>
                                            <option value="20">Talla Zapato: 43,5</option>
                                            <option value="21">Talla Zapato: 44</option>
                                            <option value="22">Talla Zapato: 45</option>
                                            <option value="23">Talla Zapato: 46</option>
                                            <option value="24">Talla Zapato: 46,5</option>
                                            <option value="25">Talla Zapato: 48</option>
                                            <option value="26">Talla Zapato: 49</option>
                                            <option value="27">Talla Zapato: 50</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 form-group-sm">
                                        <input type="text" class="form-control input-sm" id="converttalla1" name="talla[]" readonly placeholder="Talla Equipo" value="Talla Ski: 16,5">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3 form-group-sm date">
                                        <input type="text" class="form-control input-sm" name="fecha_rental[]" readonly placeholder="FECHA RENTAL">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12 form-group-sm has-error">
                                        <p id="textoinf1" class="help-block">Voucher válido por 1 arriendo Set Ski/Snowboard Prestige Adulto (Entre 12 y 65 años) para cualquier día de la temporada de ski 2015. Set Ski: Ski + Bastones + Botas. Set Snowboard: Snowboard + Botas. Acércate a cualquier rental de Valle Nevado y canjea tu voucher</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <hr style="width:100%; float:left; border:1px solid #033d5a !important; position:relative; ">
                            </div>
                            <div class="col-md-2 text-right">
                                <button type="button" class="single_add_to_cart_button button alt" onclick="elimina_caja('nro-1');">
                                    <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Eliminar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contenedor_btn_amigo">
                    <div id="btn-add-amigos" class="btn_amigos"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group col-md-12 text-right">
                                <button type="submit" class="single_add_to_cart_button button alt">Añadir al carro</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        <?php else : ?>

            <?php get_template_part( 'content', 'none' ); ?>

        <?php endif; ?>
        
        </main><!-- #main -->
    </section><!-- #primary -->

<?php do_action( 'storefront_sidebar' ); ?>
<?php get_footer(); ?>