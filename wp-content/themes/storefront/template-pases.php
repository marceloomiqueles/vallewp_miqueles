<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Pases
 *
 * @package storefront
 */

$nombre;
$apellido;
$rut;
$fecha;
$mail;
$producto;
$foto;

$filename = md5(mt_rand());

if (isset($_POST["nombre"])) $nombre = $_POST["nombre"];
if (isset($_POST["apellido"])) $apellido = $_POST["apellido"];
if (isset($_POST["rut"])) $rut = $_POST["rut"];
if (isset($_POST["fecha"])) $fecha = $_POST["fecha"];
if (isset($_POST["mail"])) $mail = $_POST["mail"];
if (isset($_POST["producto"])) $producto = $_POST["producto"];
if (isset($_FILES["foto"])) $foto = $_FILES["foto"];

if (count($nombre) > 0 && count($apellido) > 0 && count($rut) > 0 && count($fecha) > 0 && count($mail) > 0 && count($producto) > 0 && count($foto) > 0) { 
    for ($i = 0; $i < count($producto); $i++) {
        $product = get_product( $producto[$i] );
        // var_dump($producto[$i]);die();
        $uploaddir = 'wp-content/themes/storefront/img_up/' . $filename . "/";
        if (!is_dir($uploaddir) && !mkdir($uploaddir)){
            die("Error creating folder $uploaddir");
        }
        $uploadfile = $uploaddir . $foto['name'][$i];
        $target_dir = get_template_directory_uri() . '/img_up/' . $filename . "/" .  $foto['name'][$i];
        if (move_uploaded_file($foto['tmp_name'][$i], $uploadfile)) {
            $array_carro = Array ( 
                "addons" => Array ( 
                    Array ( 
                        "name" => "Pases - Nombre", 
                        "value" => $nombre[$i], 
                        "price" => "",
                    ), 
                    Array ( 
                        "name" => "Pases - Apellido", 
                        "value" => $apellido[$i], 
                        "price" => "",
                    ), 
                    Array ( 
                        "name" => "Pases - Rut", 
                        "value" => $rut[$i], 
                        "price" => "",
                    ), 
                    Array ( 
                        "name" => "Pases - Fecha Nacimiento", 
                        "value" => $fecha[$i], 
                        "price" => "",
                    ), 
                    Array ( 
                        "name" => "Pases - Email", 
                        "value" => $mail[$i], 
                        "price" => "",
                    ), 
                    Array ( 
                        "name" => "Pases - Pase", 
                        "value" => $product->post->post_title, 
                        "price" => "",
                    ), 
                    Array ( 
                        "name" => "Pases - Foto", 
                        "value" => "<a href='" . $target_dir . "' target='_blank'>Foto</a>", 
                        "price" => "",
                    ) 
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
        } else {
            die("algo pasó");
        }
    }
}

get_header(); ?>
    <script type="text/javascript">
        $(document).ready(function(){
            cargaCalendario();
        });

        function valida_form () {
            var pasa = true;
            var mensaje = "";
            var ruta = "";
            var nombre =  document.getElementsByName("nombre[]");
            var apellido =  document.getElementsByName("apellido[]");
            var rut =  document.getElementsByName("rut[]");
            var fecha =  document.getElementsByName("fecha[]");
            var mail =  document.getElementsByName("mail[]");
            var producto = document.getElementsByName("producto[]");
            var foto =  document.getElementsByName("foto[]");
            // console.log(document.getElementsByName("nombre[]"));
            for (var i = 0; i < nombre.length; i++) {
                mensaje += "Pase " + (i + 1) + "\n";
                if (nombre[i].value.trim().length < 1) {
                    mensaje += "Debes ingresar tu nombre!\n";
                    pasa = false;
                }
                if (apellido[i].value.trim().length < 1) {
                    mensaje += "Debes ingresar tu apellido!\n";
                    pasa = false;
                }
                if (rut[i].value.trim().length < 1) {
                    mensaje += "Debes ingresar un Rut!\n";
                    pasa = false;
                }
                if (fecha[i].value.trim().length < 1) {
                    mensaje += "Debes seleccionar una fecha!\n";
                    pasa = false;
                }
                if (!validateEmail(mail[i].value)) {
                    mensaje += "Debes ingresar un correo válido!\n";
                    pasa = false;
                }
                if (producto[i].value.trim().length < 1) {
                    mensaje += "Debes seleccionar un producto!\n";
                    pasa = false;
                }
                if (foto[i].value.trim().length < 1) {
                    mensaje += "Debes adjuntar una foto!\n";
                    pasa = false;
                } else {
                    if (!comprueba_extension(foto[i].value)) {
                        mensaje += "Debes adjuntar una foto válida!\n";
                        pasa = false;
                    }
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
                    Pase Temporada
                </h1>

                <?php the_archive_description(); ?>
            </header><!-- .page-header -->
            <div class="row">
                <div class="col-md-12">
                    <hr style="width:100%; float:left; border:1px solid #033d5a !important; position:relative; ">
                </div>
            </div>
            <form method="post" name='form_data' id="form-pases" action="<?php the_permalink() ?>" enctype="multipart/form-data" onsubmit='return valida_form();'>
                <div id="form-pase">
                    <div id="caja-nro-1">
                        <div class="row">
                            <div class="col-md-2">
                                <img data-src="holder.js/140x140" class="img-rounded" alt="140x140" src="<?php echo get_template_directory_uri(); ?>/images/ski.png" data-holder-rendered="true" style="width: 121px; height: 114px;">
                            </div>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="form-group col-md-3 form-group-sm">
                                        <input type="text" class="form-control input-sm" name="nombre[]" placeholder="NOMBRE">
                                    </div>
                                    <div class="form-group col-md-3 form-group-sm">
                                        <input type="text" class="form-control input-sm" name="apellido[]" placeholder="APELLIDO">
                                    </div>
                                    <div class="form-group col-md-3 form-group-sm">
                                        <input type="text" class="form-control input-sm" name="rut[]" placeholder="RUT">
                                    </div>
                                    <div class="form-group col-md-3 form-group-sm date">
                                        <input type="text" class="form-control input-sm" name="fecha[]" readonly placeholder="FECHA NACIMIENTO">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3 form-group-sm">
                                        <input type="text" class="form-control input-sm" name="mail[]" placeholder="EMAIL">
                                    </div>
                                    <div class="form-group col-md-3 form-group-sm">
                                        <select id="descr1" class="form-control input-sm producto" name="producto[]" onchange="cambiaInfoText(1)">
                                            <?php 
                                            $args = array( 'post_type' => 'product', 'posts_per_page' => 10, 'product_cat' => 'pases');
                                            $loop = new WP_Query( $args );
                                            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                                            <option value="<?php the_ID(); ?>"><?php echo $product->get_price_html(); ?> - <?php the_title(); ?></option>
                                            <?php endwhile; ?>
                                            <?php wp_reset_query(); ?>
                                        </select>
                                        <input type='hidden' name="precio[]">
                                        <input type='hidden' name="set[]">
                                    </div>
                                    <div class="form-group col-md-6 form-group-sm">
                                        <p class="help-block">Sube tu foto: </p><input type="file" name="foto[]" value="Abrir" id="exampleInputFile">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12 form-group-sm has-error">
                                        <p id="textoinf1" class="help-block">PASE DE TEMPORADA Adulto (Entre 12 y 65 años) Voucher válido por 1 pase de temporada Adulto (Entre 12 y 65 años). Favor contactarse con <a href="mailto:boleteria@vallenevado.com">boleteria@vallenevado.com</a> para retirar tu pase de temporada</p>
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
                    <div id="btn-add-pase" class="btn_pases"></div>
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