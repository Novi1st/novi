<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="#" enctype="multipart/form-data" >
		<h2>Form Upload</h2>
		Pilih file : <input type="file" name="berkas" value=""><br><br>
		<input type="submit" name="submit" value="Submit">	
		<input type="reset" name="reset" value="Reset">
	</form>
	<?php
		if(isset($_POST['submit'])){
			echo "<pre>";
			print_r($_FILES);
			echo "</pre>";

			//ambil data file
			$namaFile = $_FILES['berkas']['name'];
			$namaSementara = $_FILES['berkas']['tmp_name'];

			//tentukan lokasi file akan dipindahkan
			$dirUpload = "uploads/";

			//pindahkan file
			$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

			if ($terupload) {
				echo "Upload berhasil!<br/>";
				echo "Link : <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
			} else {
				echo "Upload Gagal!";
			}
		}
	?>

</body>
</html>