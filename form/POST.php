<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="#" >
		<h2>Form Register</h2>
		Masukan Username : <input type="text" name="username" value=""><br><br>
		Masukan Email : <input type="email" name="email" value=""><br><br>
		Masukan Password : <input type="Password" name="password" value=""><br><br>
		<input type="submit" name="submit" value="Submit">	
	</form>
	<?php
		if($_POST){
			echo "Username : ".$_POST['username']."<br>";
			echo "Email : ".$_POST['email']."<br>";
			echo "Password : ".$_POST['password']."<br>";
		}
	?>

</body>
</html>