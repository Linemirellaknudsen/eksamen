<?php session_start(); ?>
<!DOCTYPE html>
<html lang="da">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Kalles Kaffe</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  </head>

  <body>

     <?php
      /*require_once('dbcon.php');
      
      if(isset($_POST['opret'])){
      $brugernavn = filter_input(INPUT_POST, 'brugernavn', FILTER_SANITIZE_STRING) or die('missing bnavn');
      $pw = filter_input(INPUT_POST, 'pw', FILTER_SANITIZE_STRING) or die('missing password');

      $pw =password_hash($pw, PASSWORD_DEFAULT);
    
      $sql = "INSERT INTO admin(brugernavn, pwhash) VALUES(?,?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('ss', $brugernavn, $pw);
      $stmt->execute();
   }*/
 ?>



     <?php
      require_once('dbcon.php');
      
      if(isset($_POST['login'])){
      $brugernavn = filter_input(INPUT_POST, 'brugernavn', FILTER_SANITIZE_STRING) or die('missing bnavn');
      $pw = filter_input(INPUT_POST, 'pw', FILTER_SANITIZE_STRING) or die('missing password');

    
      $sql = "SELECT id, pwhash FROM admin WHERE brugernavn=?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('s', $brugernavn);
      $stmt->execute();
      $stmt->bind_result($bid, $pwhash);

      while($stmt->fetch()) { }

      if (password_verify($pw, $pwhash)){
        $_SESSION['bid'] = $bid;
        $_SESSION['brugernavn'] = $brugernavn;
          echo "<script>window.open('events.php','_self')</script>";
      }

      else {
      echo "<script type='text/javascript'>alert('Kunne ikke logge på');</script>";
      }

   }
 ?>













   <div class="wrapper">
      <div class="text-center"><a id="logo" href="index.php"><img src="img/logo.png"></a></div>

      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-light py-lg-4">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index.php">KALLES KAFFE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase" href="arrangement.php">Arragementer</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase" href="kaffevogne.php">Kaffevogne</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase" href="udvidetsortiment.php">Udvidet sortiment</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase" href="ravare.php">Råvare</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase" href="forespørgsel.php">Forespørgsel</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase" href="omos.php">Om os</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase" href="galleri.php">Galleri</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div id="job">
      <p><a href="#">English</a> | <a href="admin.php">Admin</a> | <a href="job.php">Job?</a></p>
    </div>


    <div class="container" style="justify-content: center;">
      <div class="bg-faded p-4 my-4 col-lg-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">
          <strong>Admin login</strong>
        </h2>
        <hr class="divider">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
          <div class="row">
            <div class="form-group col-lg-12">
              <label class="text-heading">Brugernavn</label>
              <input type="text" name="brugernavn" required class="form-control">
            </div>
            <div class="form-group col-lg-12">
              <label class="text-heading">Password</label>
              <input type="password" name="pw" required class="form-control">
            </div>
            <div class="form-group col-lg-12">
              <button type="submit" name="login" class="btn btn-secondary col-lg-12">LOGIN</button>
            </div>
          </div>
        </form>
      </div>

    </div>

<!--Opretelse af admin. Skal ikke vises da alle ikke skal kunne oprettes som admin. Den skulle bare bruges til at oprette en admin

    <div class="container" style="justify-content: center;">
      <div class="bg-faded p-4 my-4 col-lg-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">
          <strong>Admin Opret</strong>
        </h2>
        <hr class="divider">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
          <div class="row">
            <div class="form-group col-lg-12">
              <label class="text-heading">Brugernavn</label>
              <input type="text" name="brugernavn" required class="form-control">
            </div>
            <div class="form-group col-lg-12">
              <label class="text-heading">Password</label>
              <input type="text" name="pw" required class="form-control">
            </div>
            <div class="form-group col-lg-12">
              <button type="submit" name="opret" class="btn btn-secondary col-lg-12">OPRET</button>
            </div>
          </div>
        </form>
      </div>

    </div>
-->
  






    <footer class="bg-faded text-center py-5">
      <div class="container">
        <div class="footer-div1">
          <h4>Kontakt</h4>
          <p>Hovedkontor - Kalles Kaffe<br>Krimsvej 29<br>2300 København S<br><br>+45 ?? ?? ?? ??<br>kalle@kalle.dk</p>
        </div>
        <div class="footer-div" id="map" style="border: 1px solid #7F7F7F;">
          
        </div>
        <div class="footer-div">
          <div class="social">
            <a href="#"><img src="img/rapport.png" style="width:90%; padding-bottom: 50px;"></a>
            <a href="https://www.facebook.com/KallesKaffe/" target="blank"><img src="img/facebook_logo.png"></a>
            <a href="https://www.instagram.com/kalleskaffe/?hl=da" target="blank"><img src="img/instagram_logo.png"></a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGEY99kDW0EDzj0GHsND1Piag4A9fr4zo&callback=initMap">
    </script>
    <script type="text/javascript" src="script.js"></script>
  </body>

</html>