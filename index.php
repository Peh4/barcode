<?php

$bcode = $_GET['bcode'];
$bcodes = Array();	
array_push($bcodes,$bcode);
$goScan = '"zxing://scan/?ret='.urlencode('http://foo.bar/?bcode={CODE}').'&SCAN_FORMATS=UPC_A,EAN_13"'

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TestBarcode</title>
</head>
<body>
<?php print_r ($bcodes); ?>
	<script>
		window.location.href = <?php echo $goScan ?>;
	</script>
</body>
</html>