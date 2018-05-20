<<<<<<< HEAD
<?php
  include '../koneksi.php';

  header('location:'.base_url('UnderMaintenance.php'));

  $username = $_POST['username'];
  $pass_l = $_POST['password_l'];
  $pass = $_POST['password'];
  $ul_pass = $_POST['ul_password'];
  $hash_md5 = md5($pass_l);

  $query = 'SELECT * FROM tb_login WHERE username = '.$username.' AND pass = '.$hash_md5;
  $hasil = mysqli_query($con, $query);

  if (mysqli_num_rows($hasil) > 0) {
    echo "Password Lama Tidak Sesuai<br>";
    echo '<a href="'.base_url('admin/ubah_admin.php').'">Kembali</a>';
  }
  else {
    if ($pass == $ul_pass) {
      $hash_md5 = md5($pass);

      $bcrypt = password_hash($hash_md5, PASSWORD_DEFAULT);

      $query = 'UPDATE tb_login SET pass = '.$bcrypt.' WHERE username = '.$username;
      $update = mysqli_query($con, $query);

      if ($update) {
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
=======
<!-- <?php
  // include '../koneksi.php';
  //
  // $username = $_POST['username'];
  // $pass_l = $_POST['password_l'];
  // $pass = $_POST['password'];
  // $ul_pass = $_POST['ul_password'];
  // $hash_md5 = md5($pass_l);
  //
  // $query = "SELECT * FROM tb_login WHERE username = '".$username."' AND pass = '".$hash_md5"'";
  // $hasil = mysqli_query($con, $query);
  //
  // if (mysqli_num_rows($hasil) > 0) {
  //   echo "Password Lama Tidak Sesuai<br>";
  //   echo '<a href="'.base_url('admin/ubah_admin.php').'">Kembali</a>';
  // }
  // else {
  //   if ($pass == $ul_pass) {
  //     $hash_md5 = md5($pass);
  //
  //     $bcrypt = password_hash($hash_md5, PASSWORD_DEFAULT);
  //
  //     $query = 'UPDATE tb_login SET pass = '.$bcrypt.' WHERE username = '.$username;
  //     $update = mysqli_query($con, $query);
  //
  //     if ($update) {
  //       header(base_url('admin/kel_admin.php'));
  //     } else {
  //       echo "Terjadi Kesalahan!<br>";
  //       echo '<a href="'.base_url('admin/tambah_admin.php').'">Kembali</a>';
  //     }
  //
  //   } else {
  //     echo "Password dan Ulangi Password tidak sama<br>";
  //     echo '<a href="'.base_url('admin/tambah_admin.php').'">Kembali</a>';
  //   }
  //
  // }



 ?> -->
>>>>>>> 7f90a2147674b81bc5f919b9f1eec12419b5f2bd
