<?php

$bcode = $_GET['bcode'];
$bcodes = Array();	
array_push($bcodes,$bcode);
$goScan = '"zxing://scan/?ret='.urlencode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?bcode={CODE}').'&SCAN_FORMATS=UPC_A,EAN_13"'

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TestBarcode</title>
</head>
<body>

Intallez <a href="https://play.google.com/store/apps/details?id=com.google.zxing.client.android&hl=fr" Barcode Scanner</a> sur votre téléphone Android 
Puis ouvrez cette page depuis votre téléphone, vous serez re-dirigé vers l'application.
Scannez un article, vous serez re-dirigez sur cette page, les paramètres du code barre sont alors récupérées, puis vous serez à nouveau re-dirigé vers l'application pour scanner un nouveau code-barre.


<?php print_r ($bcodes); ?>
	<script>
		window.location.href = <?php echo $goScan ?>;
	</script>
</body>
</html>