<?php
include 'koneksi.php';
$username = $_POST['username'];
$password= $_POST['password'];
$query = "select * from akun where username ='".$username."'";
$hasil= mysqli_query($koneksi,$query);
if($akun=mysqli_fetch_assoc($hasil)){
	$password_db=$akun['password'];
	$hash_md5=md5($password);
	$cek_bcyrpt = password_verify($hash_md5, $password);

	if ($cek_bcyrpt) {
		session_start();
		$_SESSION['id_user'] = $akun['id'];
		$_SESSION['username'] = $akun['username'];

		header('location:index.php');
		}else{
			echo "Maaf, Username yang Anda Masukkan Tidak Ditemukan<br>";
			echo '<a href="login.php">Kembali</a>';	}
	}
else{
	echo "Maaf, Username Tidak Ditemukan<br>";
	echo '<a href="login.php">Kembali</a>';
}
?>
