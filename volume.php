<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
define("phi", 3.14);

function volume_bola($d){
	$r=$d/2;
	$volume=4/3 * phi *$r*$r*$r;
	echo "Diameter : $d <br>";
	printf("Volume bola : %.2f", $volume);
};

volume_bola(14);

?>

</body>
</html>