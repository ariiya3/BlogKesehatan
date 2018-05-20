<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Daftar</title>
  </head>
  <body>
    <form class="container" action="aksi_registrasi.php" method="post">
      <h3 class="text-center">Daftar</h3>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="user" placeholder="Username" required>
        </div>
        <div class="col-md-3"></div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <input class="form-control" type="password" name="pass" placeholder="Password" required>
        </div>
        <div class="col-md-3"></div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <input class="form-control" type="password" name="pasul" id="passul" placeholder="Confirm Password" required>
        </div>
        <div class="col-md-3"></div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <!-- <button type="submit" class="btn btn-primary">Login</button> -->
          <input type="submit" class="btn btn-block btn-default" value="Simpan"/>
        </div>
        <div class="col-md-3"></div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <a class="btn btn-block btn-default" href="login.php">Kembali</a>
        </div>
        <div class="col-md-3"></div>
      </div>
    </form>

    <script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
  	<script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
