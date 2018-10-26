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
	<form action="nama.php" method="POST" enctype="multipart/form-data">
		<fieldset>
			<legend>Ticket Online</legend>
			<table>
				<tr>
					<td><label for="tujuan">Tujuan</label></td>
					<td><select name="tujuan">
					<option value="Jakarta-Semarang">Jakarta-Semarang</option>
					<option value="Yogyakarta-Solo">Yogyakarta-Solo</option>
					<option value="Surabaya-Jakarta">Surabaya-Jakarta</option>
					<option value="Purworejo-Bandung">Purworejo-Bandung</option>
					</td>
				</tr>

				<tr>
					<td><label for="jam">Jenis Kelamin </label></td>
					<td><input type="radio" name="jam" value="8.00">8.00
					<input type="radio" name="jam" value="9.00">9.00
					<input type="radio" name="jam" value="10.00">10.00</td>
				</tr>

				<tr>
					<td><label for="jumlah">Jumlah Penumpang  </label></td>
					<td><input type="number" name="jumlah" value=""></td>
				</tr>

				<tr>
					<td>
					<input type="submit" value="Next" name="next">
					<input type="reset" value="Reset" name="reset">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>