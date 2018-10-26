<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  
	$DaftarNilai =[
				 ["PWL" => ["nama"=>"Toni","Dewi", "Nina", "Reza"],["nilaiPWL" =>80, 90, 75, 60]],
				 	//value PWL
				 ["AI" =>["nama"=>"Toni","Dewi", "Nina", "Reza"],["nilaiAI" =>60, 70, 95, 50]],//value AI
				 ["SBD" =>["nama"=>"Toni","Dewi", "Nina", "Reza"],["nilaiAI" =>75, 75, 80, 70]],//value SBD
				 ];
	echo $DaftarNilai[0]["PWL"]["nama"];
	echo $DaftarNilai[0]["AI"]["nama"];
?>

</body>
</html>