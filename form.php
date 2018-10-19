<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
<center>
	<form action="conn.php" method="POST">
		<h1>Input Data Mahasiswa Baru</h1>
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="tgl_lhr"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<select name="j_kelamin">
						<option>Laki-laki</option>
						<option>Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td>
					<select name="p_studi">
						<option>D3 Sistem Informasi</option>
						<option>D3 Teknik Komputer</option>
						<option>D3 Teknkik Informatika</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<input type="Radio" name="fakultas" value="fit">FIT
					<input type="Radio" name="fakultas" value="fik">FIK
					<input type="Radio" name="fakultas" value="fkb">FKB
				</td>
			</tr>
			<tr>
				<td>Asal</td>
				<td>:</td>
				<td><input type="text" name="asal"></td>
			</tr>
			<tr>
				<td>Moto Hidup</td>
				<td>:</td>
				<td><input type="Textarea" name="moto_hidup"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>