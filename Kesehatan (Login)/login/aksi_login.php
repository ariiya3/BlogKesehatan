<?php
  include 'koneksi.php';

  $username = $_POST['username'];
  $pass = $_POST['password'];

  $query = "SELECT * FROM akun WHERE username = '".$username."'";
  $hasil = mysqli_query($koneksi, $query);

  if ($akun = mysqli_fetch_assoc($hasil)) {
    // code...
    $pass_db = $akun['password'];

    $hash_md5 = md5($pass);

    $cek_bcyrpt = password_verify($hash_md5, $pass_db);

    if ($cek_bcyrpt) {
      session_start();
      $_SESSION['id_user'] = $akun['id'];
      $_SESSION['username'] = $akun['username'];

      header('location:index.php');
    } else {
      echo "maaf, username tidak ditemukan<br>";
      echo '<a href="login.php">Kembali</a>';
    }

  }
  else {
    echo "maaf, username tidak ditemukan<br>";
    echo '<a href="login.php">Kembali</a>';
  }

 ?>
