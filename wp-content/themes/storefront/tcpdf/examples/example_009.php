<?php
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

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

// Creating the image
$code = 1749950728075;
$url = 'http://store.vallenevado.com/tienda_wp/wp-content/themes/storefront/barcodegen/html/image.php?filetype=JPEG&dpi=300&scale=3&rotation=0&font_family=Arial.ttf&font_size=20&text=' . $code . '&thickness=40&code=BCGcode128';
$size = getimagesize($url);
$width = $size[0];
$height = $size[1];

$cupon = 'cupon.jpg';

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

$html = "<p><b>Ticket Día Adulto (12-65 años)<br>Voucher válido por 1 ticket día Adulto (Entre 12 y 65 años) para temporada BAJA 2015.<br>Acércate a cualquier boletería de Valle Nevado y canjea tu voucher</b></p>";

// set color for background
$pdf->SetFillColor(255, 255, 255);

// set color for text
$pdf->SetTextColor(0, 0, 0);

// set JPEG quality
$pdf->setJPEGQuality(100);

// Image example with resizing
$pdf->Image($cupon, 10, 10, 261, 70, 'JPG', '', '', true, 300, '', false, false, 0, false, false, false);
$pdf->Image($url, 143, 51, 55, 20, 'JPG', '', '', true, 300, '', false, false, 0, false, false, false);

// output the HTML content
$pdf->writeHTMLCell(140, 80, 100, 16, $html, 0, 0, 0, true, 'J', true);

//Close and output PDF document
$pdf->Output(getcwd() . '/pdf/ticket-' . $code . '.pdf', 'FI');

//============================================================+
// END OF FILE
//============================================================+
