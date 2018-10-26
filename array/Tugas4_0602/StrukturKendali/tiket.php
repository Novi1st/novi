<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style>
		form{
			width: 40%;
		}
		
	</style>
</head>
<body>
	<form action="#" method="POST" enctype="multipart/form-data">
		<fieldset>
			<legend>Ticket Online</legend>
			<?php
			$name = $_POST['nama'];
				
				foreach ($name as $value) {
					echo "Tujuan :".$_POST['Tujuan']."<br>";
					echo "Jam :".$_POST['Jam']."<br>";
					printf("Nama Penumpang :".$value."<br>");
					echo "==============================<br>";
				}
				
			?>
		</fieldset>
	</form>
</body>
</html>