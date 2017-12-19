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
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase" href="galleri.php">Galleri</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div id="job">
      <p><a href="#">English</a> | <a href="admin.php">Admin</a> | <a href="job.php">Job?</a></p>
    </div>


    <div class="container">

    <div class="bg-faded p-4 my-4">
      <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">
          <strong>Galleri</strong>
        </h2>
        <hr class="divider">
      <div class="galleri">

          <div class="column">
            <img alt="empty" src="img/bil.jpg" style="width:100%">
          </div>
          
          <div class="column">
            <img alt="empty" src="img/juice.jpg" style="width:100%; margin-bottom:28px;">
            <img src="img/croissant.jpg" style="width:100%;">
          </div>

          <div class="column">
            <img alt="empty" src="img/events.jpg" style="width:100%; margin-bottom:28px;">
            <img alt="empty" src="img/øllet.jpg" style="width:100%; margin-bottom:28px;">
            <img src="img/mælken.jpg" style="width: 100%">
          </div>

          <div class="column">
            <img alt="empty" src="img/kallestand.jpg" style="width:100%">
          </div>

          <div class="column">
            <img alt="empty" src="img/issen1.jpg" style="width:100%">
          </div>

          <div class="column">
            <img alt="empty" src="img/ingefær.jpg" style="width:100%">
          </div>
      </div>
    </div>

    </div>




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