<?php
if ( !isset($_POST["code"]) && !isset($_POST["titulo"]) && !isset($_POST["desc"]) && !isset($_POST["url"]) && !isset($_POST["fecha"]) ) die("error");

require_once("../../../wp-load.php");
require_once('tcpdf/examples/tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Valle Store');
$pdf->SetTitle('Ticket Día');
$pdf->SetSubject('Ticket Día');
$pdf->SetKeywords('Ticket, Valle, Store, Día');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);


// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

$code = $_POST["code"];
$titulo = $_POST["titulo"];
$desc = $_POST["desc"];
$url_download = $_POST["url"];
$fecha = $_POST["fecha"];

// $code = 1749950728075;
// $titulo = "Ticket Día Adulto (12-65 años)";
// $desc = "Voucher válido por 1 ticket día Adulto (Entre 12 y 65 años) para temporada BAJA 2015.";

$url = 'http://store.vallenevado.com/tienda_wp/wp-content/themes/storefront/barcodegen/html/image.php?filetype=JPEG&dpi=300&scale=3&rotation=0&font_family=Arial.ttf&font_size=20&text=' . $code . '&thickness=40&code=BCGcode128';

$cupon = 'tcpdf/examples/cupon.jpg';

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// set font
$pdf->SetFont('helvetica', '', 10);

// add a page
$pdf->AddPage();

$html = "<h1>" . $titulo . "</h1><h4>" . $desc . "</h4><h4>" . $fecha . "</h4>";

// set color for background
$pdf->SetFillColor(255, 255, 255);

// set color for text
$pdf->SetTextColor(22, 45, 86);

// set JPEG quality
$pdf->setJPEGQuality(100);

// Image example with resizing
$pdf->Image($cupon, 35, 10, 250, 422, 'JPG', '', '', true, 300, '', false, false, 0, false, false, false);
$pdf->Image($url, 81, 150, 54, 19, 'JPG', '', '', true, 300, '', false, false, 0, false, false, false);

// output the HTML content
$pdf->writeHTMLCell(110, 200, 50, 80, $html, 0, 0, 0, true, 'J', true);

//Close and output PDF document
$pdf->Output(getcwd() . '/tcpdf/examples/pdf/ticket-' . $code . '.pdf', 'F');
?>
<?php //echo $titulo; ?><a href='<?php echo $url_download; ?>/tcpdf/examples/pdf/ticket-<?php echo $code ?>.pdf' target='_blank' class='button'>Abrir Ticket</a><br><br>
<?php
//============================================================+
// END OF FILE
//============================================================+
