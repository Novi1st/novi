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
<form action="tiket.php" method="POST" enctype="multipart/form-data">
		<fieldset>
			<legend>Ticket Online</legend>
			<table>
			<?php
			if ($_POST) {
				for ($i=0; $i <$_POST['jumlah'] ; $i++) {			
				echo "<tr>
					<td><label for='nama1'>Nama Penumpang</label> </td>
					<td><input type='text' name='nama1[]' value=''></td></td>
				</tr>";
				}
			}
				
			?>
				<tr>
					<td>
					<input type="submit" value="Submit" name="submit">
					<input type="reset" value="Reset" name="reset">
					</td>
				</tr>
			</table>
		</fieldset>
</form>


</body>
</html>