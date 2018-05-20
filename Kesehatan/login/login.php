<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Login</title>
  </head>
  <body>
    <form class="container" action="aksi_login.php" method="post">
      <h3 class="text-center">Login</h3>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="username" id="username" placeholder="Username" required>
        </div>
        <div class="col-md-3"></div>
      </div>

      <br>

      <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <input class="form-control" type="text" name="password" id="password" placeholder="Password" required>
      </div>
      <div class="col-md-3"></div>
      </div>

      <br>

      <div class="row">
     <div class="col-md-3"></div>
     <div class="col-md-6">
          <!-- <button type="submit" class="btn btn-primary">Login</button> -->
          <input type="submit" class="btn btn-block btn-default" value="Masuk"/>
        </div>
        <div class="col-md-3"></div>
      </div>
      <br>
    </form>
    <script src="../js/jquery-3.3.1.min.js" charset="utf-8"></script>
  	<script src="../js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
