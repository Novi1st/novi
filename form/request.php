<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="?action=edit" >
		<h2>Form Register</h2>
		Masukan Username : <input type="text" name="username" value=""><br><br>
		Masukan Email : <input type="email" name="email" value=""><br><br>
		Masukan Password : <input type="Password" name="password" value=""><br><br>
		<input type="hidden" name="action" value="insert">
		<input type="submit" name="submit" value="Submit" >	
	</form>
	<?php
		if($_POST){
			print_r($_GET);
			echo "<br>";echo "<br>";
			print_r($_POST);
			echo "<br>";echo "<br>";
			print_r($_REQUEST);
		}
	?>

</body>
</html>