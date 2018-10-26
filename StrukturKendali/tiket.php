<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="#" method="POST" enctype="multipart/form-data">
		<fieldset>
			<legend>Ticket Online</legend>
			<table>
			<?php
			if ($_POST) {echo $_POST['nama1'];

				foreach  ($nama1 as $value) {	
				echo "============<br/>";		
				echo "Tujuan: ".$_POST['tujuan']."<br/>";
				echo "Jam: ".$_POST['jam']."<br/>";
				echo "Nama Penumpang: ".$_POST['nama1']."<br/>";
				}
			}
				
			?>
			</table>
		</fieldset>
</form>
</body>
</html>