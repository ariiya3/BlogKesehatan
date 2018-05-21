
<?php
  include '../koneksi.php';

  $username = $_POST['username'];
  $pass = $_POST['password'];
  $ul_pass = $_POST['ul_password'];

  $query = 'SELECT * FROM tb_login WHERE username = '.$username;
  $hasil = mysqli_query($con, $query);

  if (mysqli_num_rows($hasil) > 0) {
    echo "Username Sudah Digunakan<br>";
    echo '<a href="'.base_url('admin/tambah_admin.php').'">Kembali</a>';
  }
  else {
    if ($pass == $ul_pass) {
      $hash_md5 = md5($pass);

      $bcrypt = password_hash($hash_md5, PASSWORD_DEFAULT);

      $query = "INSERT INTO tb_login VALUES (NULL,'".$username."','".$bcrypt."')";
      $input = mysqli_query($con, $query);

      if ($input) {
        header(base_url('admin/kel_admin.php'));
      } else {
        echo "Terjadi Kesalahan!<br>";
        echo '<a href="'.base_url('admin/tambah_admin.php').'">Kembali</a>';
      }

    } else {
      echo "Password dan Ulangi Password tidak sama<br>";
      echo '<a href="'.base_url('admin/tambah_admin.php').'">Kembali</a>';
    }

  }



 ?>
