<?php
include '../koneksi.php';

if (!isset($_SESSION['username'])) {
  header('location:'.base_url('login/login.php'));
}
else {
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Blog Administrator</a>
        </div>
        <ul class="nav navbar-nav navbar-left">
          <li><a href="admin.php"><b class="text-primary">Home</b></a></li>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><b class="text-primary">Logout</b></a></li>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="row" style="padding:7%;">
    <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
      <form class="" action="aksi_tambah_admin.php" method="post">
        <table class="table table-hover">
          <tr>
            <td><label for="username">Username</label></td>
            <td><input type="text" class="form-control" name="username" value="" required></td>
          </tr>
          <tr>
            <td><label for="password">Password</label></td>
            <td><input type="password" class="form-control" name="password" value="" required></td>
          </tr>
          <tr>
            <td><label for="ul_password">Ulangi Password</label></td>
            <td><input type="password" class="form-control" name="ul_password" value="" required></td>
          </tr>
        </table>
        <div class="text-center">
          <button type="submit" class="btn btn-primary" style="align:center;" name="button">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>

  <?php
}
 ?>
