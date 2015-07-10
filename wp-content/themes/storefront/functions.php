<?php
/**
 * storefront engine room
 *
 * @package storefront
 */

/**
 * Initialize all the things.
 */
require get_template_directory() . '/inc/init.php';

/**
 * Show all categories!
 */

add_filter( 'woocommerce_product_subcategories_hide_empty', 'show_empty_categories', 10, 1 );
function show_empty_categories ( $show_empty ) {
    $show_empty  =  true;
    // You can add other logic here too
    return $show_empty;
}

add_filter( 'show_admin_bar' , 'quitar_barra_administracion');
function quitar_barra_administracion(){
    return false;
}

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'yourtheme'),
    'secondary' => __( 'Secondary Menu', 'yourtheme' ),
 ) );

/**
 * Note: Do not add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * http://codex.wordpress.org/Child_Themes
 */