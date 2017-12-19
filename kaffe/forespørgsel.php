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
      
      if(isset($_POST['cmd'])){
      $navn = filter_input(INPUT_POST, 'navn', FILTER_SANITIZE_STRING) or die('missing navn');
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) or die('missing email');
      $telefon = filter_input(INPUT_POST, 'telefon', FILTER_VALIDATE_INT) or die('missing telfon');
      $dato = filter_input(INPUT_POST, 'dato', FILTER_SANITIZE_STRING) or die('missing dato');
      $tidsinterval = filter_input(INPUT_POST, 'tidsinterval', FILTER_SANITIZE_STRING) or die('missing tidinterval');
      $gaster = filter_input(INPUT_POST, 'gaster', FILTER_VALIDATE_INT) or die('missing gaster');
      $adresse = filter_input(INPUT_POST, 'adresse', FILTER_SANITIZE_STRING) or die('missing adresser');
      $postnr = filter_input(INPUT_POST, 'postnr', FILTER_SANITIZE_STRING) or die('missing postnr');
      $knavn = filter_input(INPUT_POST, 'knavn', FILTER_SANITIZE_STRING) or die('missing knavn');
      $ktelefon = filter_input(INPUT_POST, 'ktelefon', FILTER_VALIDATE_INT) or die('missing ktelefon');
      $information = filter_input(INPUT_POST, 'information', FILTER_SANITIZE_STRING) or die('missing information');
      
    
      $sql = "INSERT INTO profil(navn, email, telefon) VALUES(?,?,?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('ssi', $navn, $email, $telefon);
      $stmt->execute();

      $profil_id = $stmt->insert_id;

      $sql2 = "INSERT INTO event(dato, tidsinterval, gaster, adresse, postnr, knavn, ktelefon, information, profil_id) VALUES(?,?,?,?,?,?,?,?,?)";
      $stmt2 = $conn->prepare($sql2);
      $stmt2->bind_param('ssisssisi', $dato, $tidsinterval, $gaster, $adresse, $postnr, $knavn, $ktelefon, $information, $profil_id);
      $stmt2->execute();
        if ($stmt2->affected_rows > 0){
            echo "<script type='text/javascript'>alert('Tak for din forespørgsel');</script>";
          }
        else {
            echo "<script type='text/javascript'>alert('Der skette en fejl prøv igen senere');</script>";
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
            <li class="nav-item active px-lg-4">
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


    <div class="container">

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">
          <strong>Forespørgelse</strong>
        </h2>
        <hr class="divider">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
          <div class="row">
            <div class="form-group col-lg-4">
              <label class="text-heading">Navn</label>
              <input type="text" name="navn" required class="form-control">
            </div>
            <div class="form-group col-lg-4">
              <label class="text-heading">Email</label>
              <input type="email" name="email" required class="form-control">
            </div>
            <div class="form-group col-lg-4">
              <label class="text-heading">Telefon nr.</label>
              <input type="tel" name="telefon" required class="form-control">
            </div>

            <div class="clearfix"></div>

            <div class="form-group col-lg-4">
              <label class="text-heading">Dato</label>
              <input type="date" name="dato" required class="form-control">
            </div>
            <div class="form-group col-lg-4">
              <label class="text-heading">Tidsinterval (Eks. 20-22)</label>
              <input type="text" name="tidsinterval" required class="form-control">
            </div>
            <div class="form-group col-lg-4">
              <label class="text-heading">Forventet antal gæster</label>
              <input type="number" name="gaster" required class="form-control">
            </div>

            <div class="clearfix"></div>

            <div class="form-group col-lg-6">
              <label class="text-heading">Adresse</label>
              <input type="text" name="adresse" required name="email" required class="form-control">
            </div>
            <div class="form-group col-lg-6">
              <label class="text-heading">Post nr. og by</label>
              <input type="text" name="postnr" required class="form-control">
            </div>

            <div class="clearfix"></div>

            <div class="form-group col-lg-6">
              <label class="text-heading">Navn (Kontakt person)</label>
              <input type="text" name="knavn" required class="form-control">
            </div>
            <div class="form-group col-lg-6">
              <label class="text-heading">Telefon nr. (Kontakt person)</label>
              <input type="tel" name="ktelefon" required class="form-control">
            </div>

            <div class="clearfix"></div>

            <div class="form-group col-lg-12">
              <label class="text-heading">Informationer (Kaffe? Øl? Indedørs? Udedørs? osv.)</label>
              <textarea class="form-control" name="information" required rows="6"></textarea>
            </div>
            <div class="form-group col-lg-12">
              <button type="submit" name="cmd" class="btn btn-secondary">Send forespørgelse</button>
            </div>
          </div>
        </form>
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