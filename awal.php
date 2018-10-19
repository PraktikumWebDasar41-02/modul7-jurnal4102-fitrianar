<?php 
	$queri1 = "SELECT * FROM tbl_mhs";
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "jurnal";

	$conn = mysqli_connect($servername, $username, $password, $db);

	$sql = mysqli_query($conn,$queri1);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>awal</title>
</head>
<body>
<center>
	<form>
		<h1>Data Mahasiswa</h1>
		<table border="1">
			<tr>
				<td>Nama</td>
				<td>NIM</td>
				<td>Tanggal Lahir</td>
				<td>Jenis Kelamin</td>
				<td>Program Studi</td>
				<td>Fakultas</td>
				<td>Asal</td>
				<td>Moto Hidup</td>
			</tr>
			
				<?php
					while ($data = mysqli_fetch_array($sql)) {
						echo "<tr>";
						echo "<td>".$data['nama']."</td>";
						echo "<td>".$data['nim']."</td>";
						echo "<td>".$data['tgl_lhr']."</td>";
						echo "<td>".$data['j_kelamin']."</td>";
						echo "<td>".$data['p_studi']."</td>";
						echo "<td>".$data['fakultas']."</td>";
						echo "<td>".$data['asal']."</td>";
						echo "<td>".$data['moto_hidup']."</td>";
						echo "</tr>";
					}
				?>
			
		</table>
	</form>
	<a href="form.php">Input Data Baru</a>
</center>
</body>
</html>

<?php


?>