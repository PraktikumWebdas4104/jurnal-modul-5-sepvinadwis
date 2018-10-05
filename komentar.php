<form method="POST">
	<table>
		<tr>
			<td>KOMENTAR</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<td><input type="submit" name="submit" value="enter"></td>
		</tr>
	</table>
</form>

<?php
if (isset($_POST['submit'])) {
	$komentar = $_POST['komentar'];
	if (strlen($komentar)!=5 ){
		echo "komentar yang anda masukan kurang";
	}
}
?>
