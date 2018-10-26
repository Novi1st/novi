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
		<input type="radio" name="program" value="reguler">Reguler
		<input type="radio" name="program" value="premium">Premium<br><br>
		<input type="submit" name="submit" value="Submit" >	
		<input type="submit" name="clickme" value="Click Me">
		<input type="reset" name="reset" value="Reset" >	
	</form>
	<?php
		if(isset($_POST['submit'])){
			echo "Username : ".$_POST['username']."<br>";
			echo "Email : ".$_POST['email']."<br>";
			echo "Password : ".$_POST['password']."<br>";
			echo "Program : ".$_POST['program']."<br>";
		}
	?>

</body>
</html>