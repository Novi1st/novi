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
					<td><label for='nama'>Nama Penumpang</label> </td>
					<td><input type='text' name='nama[]' value=''></td>
				</tr>";
				echo "<tr>
					<td><input type='hidden'  name='Tujuan' value=' ".$_POST['tujuan']." '></td>
					<td><input type='hidden'  name='Jam' value=' ".$_POST['jam']." '></td>
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