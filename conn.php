<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "jurnal";

$conn = mysqli_connect($servername, $username, $password, $db);

if(!$conn){
	die("Connection failed:".mysqli_connect_error());
}

if(isset($_POST['submit'])){
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$tgl_lhr = $_POST['tgl_lhr'];
	$j_kelamin = $_POST['j_kelamin'];
	$p_studi = $_POST['p_studi'];
	$fakultas = $_POST['fakultas'];
	$asal = $_POST['asal'];
	$moto_hidup = $_POST['moto_hidup'];

	$query = "INSERT INTO tbl_mhs VALUES('$nama', $nim, '$tgl_lhr', '$j_kelamin', '$p_studi', '$fakultas', '$asal', '$moto_hidup')";
	$sql = mysqli_query($conn,$query);
	
	if($sql){
		echo "<script>
				alert('Data berhasil di tambah');
			</script>";
			header("Location:awal.php");
	}else {
		echo "Gagal menambah data";
	}

}


?>