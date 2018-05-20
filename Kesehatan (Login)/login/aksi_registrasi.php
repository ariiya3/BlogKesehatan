<?php
  include 'koneksi.php';

  $username = $_POST['user'];
  $pass = $_POST['pass'];
  $ul_pass = $_POST['pasul'];

  if ($pass == $ul_pass) {
    $hash_md5 = md5($pass);

    $bcrypt = password_hash($hash_md5, PASSWORD_DEFAULT);

    $query = "INSERT INTO akun VALUES (NULL,'".$username."','".$bcrypt."')";
    $input = mysqli_query($koneksi, $query);

    if ($input) {
      header('location:login.php');
    } else {
      echo "Terjadi Kesalahan!<br>";
      echo '<a href="registrasi.php">Kembali</a>';
    }

  } else {
    echo "Password dan Ulangi Password tidak sama<br>";
    echo '<a href="registrasi.php">Kembali</a>';
  }


 ?>
