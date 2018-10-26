<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="GET" action="#" >
		<h2>Form Register</h2>
		Masukan Username : <input type="text" name="username" value=""><br><br>
		Masukan Email : <input type="email" name="email" value=""><br><br>
		Masukan Password : <input type="Password" name="password" value=""><br><br>
		<input type="submit" name="submit" value="submit">	
	</form>
	<?php
		if($_GET){
			echo "Username : ".$_GET['username']."<br>";
			echo "Email : ".$_GET['email']."<br>";
			echo "Password : ".$_GET['password']."<br>";
		}
	?>

</body>
</html>