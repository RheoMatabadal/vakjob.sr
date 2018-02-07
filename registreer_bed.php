<?php
  // if(isset($_POST['submit'])) {
  //   require 'backend/database.php'; // Require database

  //   // Get POST request vars
  //   $gebruikersnaam = $_POST['gebruikersnaam'];
  //   $email  = $_POST['email'];
  //   $bedrijfsnaam = $_POST['bedrijfsnaam'];
  //   $adres  = $_POST['adres'];
  //   $wachtwoord = $_POST['wachtwoord'];
  //   $wachtwoordConfirm = $_POST['wachtwoordConfirm'];
    

  //   $sql = "INSERT INTO employers (gebruikersnaam, email, bedrijfsnaam, adres, wachtwoord) VALUES ('$gebruikersnaam', '$email', '$bedrijfsnaam', '$adres', '$wachtwoord')";
  //   if($conn->query($sql)) {
  //     echo "Bedrijf toegevoegd!";
  //     header("Location: vacatures.php");
  //   }

    
  //     // Verify if password fields are equal
  //     // Or else
  //     // @return false
     
  //   if($wachtwoord != $wachtwoordConfirm) {
  //      //Change this structure code for later cuz it will display only a text
  //     echo "Password fields are not equal!";
      
  //   } else {
      
  //    }


  // }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VAKJOB.SR</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <!-- =======================================================
    Theme Name: Company
    Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
            <div class="navbar-brand">
              <a href="index.php"><h1><span>VAKJOB</span>.SR</h1></a>
            </div>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="index.php">Home</a></li>
                <li role="presentation"><a href="vacatures.php">Vacatures</a></li>
                <li role="presentation"><a href="contact.php" >Contact</a></li>
                 <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="active">Registreren <b class="caret"></b></a>
               <ul class="dropdown-menu">
            <li><a href="registreer_bed.php">Registreer bedrijf</a></li>
            <li><a href="registreer_stu.php">Registreer student</a></li>
          </ul>
        </li>
                      <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="active">Inloggen <b class="caret"></b></a>
               <ul class="dropdown-menu">
            <li><a href="login_bed.php">Bedrijf login</a></li>
            <li><a href="login_stu.php">Student login</a></li>
          </ul>
        </li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>Contact</li>
      </div>
    </div>
  </div>
  <section id="contact-page">
    <div class="container">
      <div class="center">

       <h2>Maak nu een account aan</h2>
       
      </div>
      <div class="row contact-wrap">
        <div class="status alert alert-success" style="display: none"></div>
        <div class="col-md-6 col-md-offset-3">
          <div id="sendmessage">ingelogd</div>
          <div id="errormessage"></div>
          <div class="well well-lg">
          <form action="backend/regbed.php" method="POST" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="gebruikersnaam" class="form-control" id="gebruikersnaam" placeholder="gebruikersnaam" data-rule="minlen:4" data-msg="voer aub meer dan 4 karakters in" />
              <div class="validation"></div>
            </div>
            <div class="form-group"> 
              <input type="email" class="form-control" id="email" name="email" placeholder="voer email address in" data-rule="email" data-msg="voer een geldig email adres in">
            </div>
            
            <!-- date picker -->
            <div class="form-group">
              <input type="text" class="form-control" name="bedrijfsnaam" id="bedrijfsnaam" placeholder="bedrijfsnaam" data-msg="voer een geldige bedrijfsnaam in" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="adres" id="adres" placeholder="adres" data-msg="voer een geldig adres in" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="wachtwoord" id="wachtwoord" placeholder="wachtwoord" data-rule="minlen:8" data-msg="voer minimaal 8 karakters in" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="password" class="form-control"  name= "wachtwoordConfirm" id="wachtwoordConfirm" placeholder="wachtwoord" data-match="#wachtwoord" data-match-error="wachtwoorden komen niet overeen" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <label>upload foto</label>
              input
                <input type="file" name="foto" accept="image/*">
          </div>
            <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Verstuur bericht</button></div>
          </form>
  </div>
        </div>
      </div>
      <!--/.row-->


    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->

  <footer>
    <div class="footer">
      <div class="container">
        <div class="social-icon">
          <div class="col-md-4">
            <ul class="social-network">
              <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
              <li><a data-toggle="modal" data-target="#myModal" title="probleem"><i class="fa fa-exclamation-triangle" aria-hidden="false"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-4 col-md-offset-4">
          <div class="copyright">
            &copy;VAKJOB.SR. Alle Rechten Voorbehouden.
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
              -->
              
            </div>
          </div>
        </div>
      </div>
      <div class="pull-right">
        <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
      </div>
    </div>
  </footer>
    
     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form class="horizontal">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Meld uw probleem</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <div class="col-lg-14">
                <input type="email" class="form-control" id="email" placeholder="email@adres.com">
            </div>
            <div class="form-group">
              <div class="col-lg-14">
                <textarea class="form-control" placeholder="voer uw bericht hier in"></textarea>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success">Versturen</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
          </div>
    </form class = "horizontal">
      </div>
    </div>
  </div>  
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY">
  </script>
  <script src="js/functions.js"></script>
  <script src="contactform/contactform.js"></script>

 

</body>

</html>
