<?php
  date_default_timezone_set('Asia/Jakarta');
  session_start();

  $server = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'db_artikel';

  $con = mysqli_connect($server,$user,$pass,$db);

  if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
  }

  function base_url($url = null){
    $base_url = 'http://localhost/Kesehatan';
    if ($url != null) {
      return $base_url.'/'.$url;
    }
    else {
      return $base_url;
    }
  }
 ?>
