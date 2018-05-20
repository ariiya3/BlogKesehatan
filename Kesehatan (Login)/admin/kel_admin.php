<<<<<<< HEAD
<?php
require_once "../koneksi.php";

$query = 'select * from tb_login';
$hasil = mysqli_query($con, $query);
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
  <div class="row">
    <a href="tambah_admin.php"><button type="button" class="btn btn-primary text-right" name="button">Tambah</button></a>
  </div>
  <div class="" style="padding-top:2%;">
    <form class="" action="edit_admin.php" method="post">
      <table class="table table-hovers table-bordered">
        <tr class="text-center">
          <td><b>Username</b></td>
          <td width="10%"><b>Aksi</b></td>
        </tr>

        <?php
        while ($data =mysqli_fetch_assoc($hasil)) {
          ?>
          <tr>
            <td>
              <?php echo $data['username'] ?>
              <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            </td>
            <td class="text-center"> <button type="submit" class="btn btn-primary" name="button">Edit</button> </td>
          </tr>
          <?php
        }
        ?>
      </table>
    </form>
  </div>
</div>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
=======
<?php
require_once "../koneksi.php";

$query = 'select * from tb_login';
$hasil = mysqli_query($con, $query);
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
  <div class="row">
    <a href="tambah_admin.php"><button type="button" class="btn btn-primary text-right" name="button">Tambah</button></a>
  </div>
  <div class="" style="padding-top:2%;">
    <form class="" action="edit_admin.php" method="post">
      <table class="table table-hovers table-bordered">
        <tr class="text-center">
          <td><b>Username</b></td>
          <td width="10%"><b>Aksi</b></td>
        </tr>

        <?php
        while ($data =mysqli_fetch_assoc($hasil)) {
          ?>
          <tr>
            <td>
              <?php echo $data['username'] ?>
              <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            </td>
            <td class="text-center"> <button type="submit" class="btn btn-primary" name="button">Edit</button> </td>
          </tr>
          <?php
        }
        ?>
      </table>
    </form>
  </div>
</div>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
>>>>>>> 7f90a2147674b81bc5f919b9f1eec12419b5f2bd
