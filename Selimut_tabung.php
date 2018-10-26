<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$phi = 3.14; //global variabel

function Selimut_tabung($d, $t){
	global $phi;
	$r = $d/2;
	$L = 2*$phi*$r*$t;
	printf("Diameter : %d<br>", $t);
	printf("Selimut tabung : %.2f", $L);
}

Selimut_tabung(14, 8);
?>

</body>
</html>