<?php 

include("../../../wp-load.php");

global $order;

$order_id = 120;

$order = new WC_Order( $order_id );

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php do_action( 'woocommerce_email_header', $email_heading ); ?>

<p><?php printf( __( "Hi there. Your recent order on %s has been completed. Your order details are shown below for your reference:", 'woocommerce' ), get_option( 'blogname' ) ); ?></p>

<?php do_action( 'woocommerce_email_before_order_table', $order, $sent_to_admin, $plain_text ); ?>

<h2><?php printf( __( 'Order #%s', 'woocommerce' ), $order->get_order_number() ); ?></h2>

<table cellspacing="0" cellpadding="6" style="width: 100%; border: 1px solid #eee;" border="1" bordercolor="#eee">
	<thead>
		<tr>
			<th scope="col" style="text-align:left; border: 1px solid #eee;"><?php _e( 'Product', 'woocommerce' ); ?></th>
			<th scope="col" style="text-align:left; border: 1px solid #eee;"><?php _e( 'Quantity', 'woocommerce' ); ?></th>
			<th scope="col" style="text-align:left; border: 1px solid #eee;"><?php _e( 'Price', 'woocommerce' ); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php echo $order->email_order_items_table( true, false, true ); ?>
	</tbody>
	<tfoot>
		<?php
			if ( $totals = $order->get_order_item_totals() ) {
				$i = 0;
				foreach ( $totals as $total ) {
					$i++;
					?><tr>
						<th scope="row" colspan="2" style="text-align:left; border: 1px solid #eee; <?php if ( $i == 1 ) echo 'border-top-width: 4px;'; ?>"><?php echo $total['label']; ?></th>
						<td style="text-align:left; border: 1px solid #eee; <?php if ( $i == 1 ) echo 'border-top-width: 4px;'; ?>"><?php echo $total['value']; ?></td>
					</tr><?php
				}
			}
		?>
	</tfoot>
</table>

<?php do_action( 'woocommerce_email_after_order_table', $order, $sent_to_admin, $plain_text ); ?>

<?php do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text ); ?>

<?php
$items = $order->get_items();

foreach ( $items as $item ) {
	$product = new WC_Product($item['product_id']);
    $sku_ticket = $product->get_sku();
    // $url = "http://ticketapi.marketingrelacional.co/api/getCodigoQuemar/1/VALLENEVADO/0/" . $sku_ticket . "/JSON";

	// $result = file_get_contents($url);
	// var_dump(json_decode($result, true));
    // $data = json_decode($result, true);
    // $code = data[];

    // Temporal!!!
    $code = rand(1000000000000, 9999999999999);

	$titulo = $item['name'];
	$desc = get_post($item['product_id'])->post_content;

	$url = get_template_directory_uri() . '/send_ticket.php';

	$fields_string = "";

	$fields = array(
		'code' => urlencode($code),
		'titulo' => urlencode($titulo),
		'desc' => urlencode($desc),
		'url' => urlencode(get_template_directory_uri())
	);

	//url-ify the data for the POST
	foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
	rtrim($fields_string, '&');

	//open connection
	$ch = curl_init();

	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST, count($fields));
	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

	//execute post
	$result = curl_exec($ch);

	//close connection
	curl_close($ch);
} ?>

<?php do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text ); ?>

<?php do_action( 'woocommerce_email_footer' ); ?>

<?php
// $code = rand(1000000000000, 9999999999999);
// $titulo = "Ticket Día Adulto (12-65 años)";
// $desc = "Voucher válido por 1 ticket día Adulto (Entre 12 y 65 años) para temporada BAJA 2015.";

// $url = get_template_directory_uri() . '/send_ticket.php';

// $fields_string = "";

// $fields = array(
// 	'code' 		=> urlencode($code),
// 	'titulo' 	=> urlencode($titulo),
// 	'desc' 		=> urlencode($desc),
// 	'url' 		=> urlencode(get_template_directory_uri())
// );

// //url-ify the data for the POST
// foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
// rtrim($fields_string, '&');

// //open connection
// $ch = curl_init();

// //set the url, number of POST vars, POST data
// curl_setopt($ch,CURLOPT_URL, $url);
// curl_setopt($ch,CURLOPT_POST, count($fields));
// curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

// //execute post
// $result = curl_exec($ch);

// //close connection
// curl_close($ch);
?>