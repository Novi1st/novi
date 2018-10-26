<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

function statik($a,$b,$c,$d){
	static $bakso = 12000;
	static $soto = 9000;
	static $teh = 2000;
	static $jeruk = 3000;

	$bayar = ($a*$bakso)+($b*$soto)+($c*$teh)+($d*$jeruk);

	printf("Bakso : %d<br>", $a);
	printf("Soto : %d<br>", $b);
	printf("Teh : %d<br>", $c);
	printf("Jeruk : %d<br>", $d);
	printf("Total Bayar : %.2f", $bayar);
}
statik(1,2,3,4);

?>

</body>
</html>