<?php session_start();
session_destroy(); ?>
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
    require_once('dbcon.php');

    $sql = 'SELECT event.dato, event.tidsinterval, event.gaster, event.adresse, event.postnr, event.knavn, 
                   event.ktelefon, event.information, profil.navn, profil.email, profil.telefon
            FROM event, profil
            WHERE profil.id=event.profil_id
            ORDER BY dato ASC';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->bind_result($dato, $tidsinterval, $gaster, $adresse, $postnr, $knavn, $ktelefon, $information, $navn, $email, $telefon);

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


    
    <?php
      if(empty($_SESSION['bid'])) { ?>
        <div class="container" style="justify-content: center;">
          <div class="bg-faded p-4 my-4 col-lg-4">
            <script>window.open('admin.php','_self')</script>
          </div>
        </div>
      <?php }


      else {?>
        <div class="container" style="justify-content: center;">
          <div class="bg-faded p-4 my-4 col-lg-12">
            <hr class="divider">
              <h2 class="text-center text-lg text-uppercase my-0">
                <strong>Events</strong>
              </h2>
            <hr class="divider">
            <table>
              <tr>
                <th>DATO</th>
                <th>NAVN</th>
                <th>EMAIL</th>
                <th>TELEFON</th>
                <th>TIDSPUNKT</th>
                <th>GÆSTER</th>
                <th>ADRESSE</th>
                <th style="width: 20%;">INFORMATION</th>
                <th>KONTAKT PERSON</th>
              </tr>
            <?php
            while($stmt->fetch()) { 
            ?>
              <tr>
                <td style="text-align: center;"><?=$dato?></td>
                <td><?=$navn?></td>
                <td><?=$email?></td>
                <td style="text-align: center;"><?=$telefon?></td>
                <td style="text-align: center;"><?=$tidsinterval?></td>
                <td style="text-align: center;"><?=$gaster?></td>
                <td><?=$adresse.'<br>'.$postnr?></td>
                <td><?=$information?></td>
                <td><?=$knavn.'<br>'.$ktelefon?></td>
              </tr>
            <?php
            }
            ?>
            </table>
          </div>
        </div>
      <?php }
    ?>











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