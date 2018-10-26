<!DOCTYPE html>
<html>
<head>
<title>Belajar Membuat Form </title>
<style>
	*{
		background: #e2e6b5;
	}
	form{
		width: 50%;
	}
	
</style>
</head>
<body>
<center>
<form action="#" method="POST" enctype="multipart/form-data">
	<fieldset>
		<legend>FORM BIODATA </legend>
		<table>
		<tr>
			<td><label for="username">Nama Lengkap</label> </td>
			<td><input type="text" name="username" value=""></td>
		</tr>
		<tr>
			<td><label for="alamat">Alamat  </label></td>
			<td><textarea name="alamat" cols="50px" rows="4px"></textarea></td>
		</tr>
		<tr>
			<td><label for="tempatlahir">Tempat Lahir</label></td>
			<td><input type="text" name="tempatlahir" value=""></td>
		</tr>
		<tr>
			<td><label for="ttl">Tanggal Lahir  </label></td>
			<td><input type="date" name="ttl" value=""></td>
		</tr>
		<tr>
			<td><label for="hp">No HP  </label></td>
			<td><input type="text" name="hp" value=""></td>
		</tr>
		<tr>
			<td><label for="jk">Jenis Kelamin </label></td>
			<td><input type="radio" name="jk" value="Laki-Laki"> Laki-Laki 
			<input type="radio" name="jk" value="Perempuan">Perempuan</td>
		</tr>
		<tr>
			<td><label for="agama">Agama</label></td>
			<td><select name="agama">
				<option value="Islam">Islam</option>
				<option value="Kristen">Kristen</option>
				<option value="Katolik">Katolik</option>
				<option value="Hindu">Hindu</option>
				<option value="Budha">Budha</option></select>
			</td>
		</tr>
		<tr>
			<td><label for="hobi">Hobi</label></td>
			<td>
				<input type="checkbox" name="hobi" value="memasak"/>Memasak
				<input type="checkbox" name="hobi" value="membaca"/>Membaca
				<input type="checkbox" name="hobi" value="renang"/>Berenang
			</td>
		</tr>
		<tr>
			<td><label for="berkas">Pilih File</td>
			<td><input type="file" name="berkas" value=""></td>
		</tr>
		<tr>
			<td>
			<input type="submit" value="Submit" name="submit">
			<input type="reset" value="Reset" name="reset">
			</td>
		</tr>
		</table>
	</form>
	
	<?php
		if(isset($_POST['submit'])){
			
			//ambil data file
			$namaFile = $_FILES['berkas']['name'];
			$namaSementara = $_FILES['berkas']['tmp_name'];
			
			//tentukan lokasi file akan dipindahkan
			$dirUpload = "";
			
			//pindahkan file
			$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
			
			if($terupload){
				echo "Upload berhasil!<br/>";
				echo "<img src='".$dirUpload."/".$namaFile."' width='220' height='280'><br/>";
				echo "Nama: ".$_POST['username']."<br/>";
				echo "Alamat: ".$_POST['alamat']."<br/>";
				echo "Tempat Lahir: ".$_POST['tempatlahir']."<br/>";
				echo "Tanggal Lahir: ".$_POST['ttl']."<br/>";
				echo "No HP: ".$_POST['hp']."<br/>";
				echo "Jenis Kelamin: ".$_POST['jk']."<br/>";
				echo "Hobi: ".$_POST['hobi']."<br/>";
			} 
			else {
				echo "Upload Gagal!"."<br/>";
			}
			
		}
	?>
	</center>
</body>
</html>