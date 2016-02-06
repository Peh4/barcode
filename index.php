<?php

$bcode 		= $_GET['BCODE'];
$scanType 	= $_GET['SCAN_TYPE'];
$scanMeta 	= $_GET['SCAN_META'];
$scanRaw 	= $_GET['SCAN_RAW'];
$bcodes 	= Array();	
array_push($bcodes,$bcode);
$goScan 	= '"zxing://scan/?ret='.urlencode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?BCODE={CODE}&SCAN_TYPE={TYPE}&SCAN_META={META}&SCAN_RAW={RAWCODE}').'&SCAN_FORMATS={FORMAT}"';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TestBarcode</title>
</head>
<body>

Intallez <a href="https://play.google.com/store/apps/details?id=com.google.zxing.client.android&hl=fr"> Barcode Scanner</a> sur votre téléphone Android 
Puis ouvrez cette page depuis votre téléphone, vous serez re-dirigé vers l'application.
Scannez un article, vous serez re-dirigez sur cette page, les paramètres du code barre sont alors récupérées, puis vous serez à nouveau re-dirigé vers l'application pour scanner un nouveau code-barre.


<?php print_r ($bcodes); ?>
	<script>
		window.location.href = <?php echo $goScan ?>;
	</script>
</body>
</html>