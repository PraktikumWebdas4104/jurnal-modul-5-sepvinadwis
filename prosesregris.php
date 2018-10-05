
<form method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<TD>:</TD>
			<TD><input type="text" name="nim"></TD>
		</tr>
		<tr>
		<td>NAMA</td>
			<TD>:</TD>
			<TD><input type="text" name="nama"></TD>
		</tr>
		<tr>
		<td>EMAIL</td>
			<TD>:</TD>
			<TD><input type="email" name="email"></TD>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="MASUK"></td>
		</tr>
	</table>
</form>


<?php 
	if(isset($_POST['submit'])){
		include ("koneksibd1.php");

		$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$email=$_POST['email'];
		$status=true;
		echo $nama;


		if(!is_int($nim) and  (strlen($nim)<10 or strlen($nim)>10) ){
			echo "NIM harus angka dan 10 karakter";
			$status=false;
		}

		if(!is_string($nama) and strlen($nama)>25){
			echo "Nama harus dengan huruf dan maksimal 25 karacter";
			$status=false;
		}

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo "E-mail is not valid";
			$status=false;
		}

		if($status){
			$sql=mysqli_query($koneksi,"INSERT INTO db_mahasiswa
			VALUES ($nim, '$nama', '$email')");
		}


	}


 ?>
