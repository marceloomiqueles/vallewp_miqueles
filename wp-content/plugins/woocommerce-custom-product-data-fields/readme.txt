=== WooCommerce Custom Product Data Fields ===
Contributors: Kharis Sulistiyono
Tags: ecommerce, e-commerce, commerce, woocommerce, extension, product, tab, framework
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=ACYNA5XNUGBUL
Requires at least: 3.1
Tested up to: 3.9.1
Stable tag: 1.0.2
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

WooCommerce extension which will help you to build extra product data fields easily.

== Description ==

WooCommerce Custom Product Data Fields is a simple framework which will help you to build extra product data fields easily, e.g. secondary product title, vendor info, custom message for individual product, etc.

You can use this framework as a library of your ‘brand-new’ WooCommerce Extension.

= Available Fields =

* text
* number
* textarea
* checkbox
* select
* radio
* hidden

= Defining Your Fields =

To make your own fields as seen on the [screenshot](https://wordpress.org/plugins/woocommerce-custom-product-data-fields/screenshots/), put this example fields in functions.php of your theme.

<code>
/**
 * (Example) Setting Up The Custom Product Data Fields.
 * Copy this function to your theme functions.php file.
 * Do not rename the function name, otherwise your fields won't be read.
 **/

if(!function_exists('wc_custom_product_data_fields')){

  function wc_custom_product_data_fields(){


    $custom_product_data_fields = array();

    $custom_product_data_fields[] = array(
          'tab_name'    => __('Custom Data', 'wc_cpdf'),
    );

    $custom_product_data_fields[] = array(
          'id'          => '_mytext',
          'type'        => 'text',
          'label'       => __('Text', 'wc_cpdf'),
          'placeholder' => __('A placeholder text goes here.', 'wc_cpdf'),
          'class'       => 'large',
          'description' => __('Field description.', 'wc_cpdf'),
          'desc_tip'    => true,
    );

    $custom_product_data_fields[] = array(
          'id'          => '_mynumber',
          'type'        => 'number',
          'label'       => __('Number', 'wc_cpdf'),
          'placeholder' => __('Number.', 'wc_cpdf'),
          'class'       => 'short',
          'description' => __('Field description.', 'wc_cpdf'),
          'desc_tip'    => true,
    );

    $custom_product_data_fields[] = array(
          'id'          => '_mytextarea',
          'type'        => 'textarea',
          'label'       => __('Textarea', 'wc_cpdf'),
          'placeholder' => __('A placeholder text goes here.', 'wc_cpdf'),
          'style'       => 'width:70%;height:140px;',
          'description' => __('Field description.', 'wc_cpdf'),
          'desc_tip'    => true,
    );

    $custom_product_data_fields[] = array(
          'id'          => '_mycheckbox',
          'type'        => 'checkbox',
          'label'       => __('Checkbox', 'wc_cpdf'),
          'description' => __('Field description.', 'wc_cpdf'),
          'desc_tip'    => true,
    );

    $custom_product_data_fields[] = array(
          'id'          => '_myselect',
          'type'        => 'select',
          'label'       => __('Select', 'wc_cpdf'),
          'options'     => array(
              'option_1'  => 'Option 1',
              'option_2'  => 'Option 2',
              'option_3'  => 'Option 3'
          ),
          'description' => __('Field description.', 'wc_cpdf'),
          'desc_tip'    => true,
    );

    $custom_product_data_fields[] = array(
          'id'          => '_myradio',
          'type'        => 'radio',
          'label'       => __('Radio', 'wc_cpdf'),
          'options'     => array(
                'radio_1' => 'Radio 1',
                'radio_2' => 'Radio 2',
                'radio_3' => 'Radio 3'
          ),
          'description' => __('Field description.', 'wc_cpdf'),
          'desc_tip'    => true,
    );

    $custom_product_data_fields[] = array(
          'id'         => '_myhidden',
          'type'       => 'hidden',
          'value'      => 'Hidden Value',
    );


    return $custom_product_data_fields;


  }



}
</code>


= Getting The Field Value =

<code>
/**
*
* $wc_cpdf->get_value($post_id, $field_id);
* $post_id = (integer) post ID
* $field_id = (string) unique field ID
*
*/

global $wc_cpdf;

echo $wc_cpdf->get_value(get_the_ID(), '_mytext');
</code>

This project is also available on [Github](https://github.com/kharissulistiyo/WooCommerce-Custom-Product-Data-Fields).

= More info =

Send me your question to my contacts below:

Mail: [kharisulistiyo(at)gmail(dot)com](mailto:kharisulistiyo@gmail.com)
Twitter:  [@kharissulistiyo](http://twitter.com/kharissulistiyo)

P.S: Don't be worry, I always reply. :)


== Installation ==

1. Upload this plugin to the /wp-content/plugins/ directory.
2. Activate the plugin through the Plugins menu in WordPress.
3. Define your custom product data fields in your theme `functions.php` file. See `fields-init.php` inside this plugin folder.

== Screenshots ==

1. WooCommerce Custom Product Data Fields

== Changelog ==

= 1.0 =
* Initial release
