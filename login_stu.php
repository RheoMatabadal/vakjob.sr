<?php
  session_start();
  require 'backend/database.php';

  // User session
  $add_vacature = '<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="active">Registreren <b class="caret"></b></a>
 <ul class="dropdown-menu">
<li><a href="registreer_stu.php">Registreer bedrijf</a></li>
<li><a href="registreer_stu.php">Registreer student</a></li>
   

</ul>
<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="active">Inloggen <b class="caret"></b></a>
 <ul class="dropdown-menu">
<li><a href="login_bed.php">Bedrijf login</a></li>
<li><a href="login_stu.php">Student login</a></li>
</ul>';
  if($_SESSION['user_id'] != "") {
    $add_vacature = '<li role="presentation"><a href="backend/logout.php">Uitloggen</a></li>';
    if($_SESSION['user_type'] == 'employer') {
      
    }
  }

  // Report submit
  if(isset($_POST['report_submit'])) {
    require 'backend/database.php'; // Require database

    // Get POST request vars
    $email  = $_POST['email'];
    $description = $_POST['description'];

    $sql = "INSERT INTO messages (email, bericht) VALUES ('$email', '$description')";
    if($conn->query($sql)) {
      // This is only text. Change this later!!
      echo "Report verzonden!";
      header("Location: login_stu.php");
    }
  }
  $loginError = '';
  // Login
  if(isset($_POST['login_submit'])) {
    // Input
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $user_type = $_POST['user_type'];
    $user_type_stock = $_POST['user_type'];

    /**
     * Determine user_type
     * @return user_type
     */
    switch($user_type) {
      case 'student':
        $user_type = 'students';
        break;
      
      case 'employer':
        $user_type = 'employers';
        break;

      default:
        $user_type = 'students';
    }

    $sql = "SELECT id FROM $user_type WHERE (gebruikersnaam = '$email' AND wachtwoord = '$password') OR (email = '$email' AND wachtwoord = '$password')";
    $query = $conn->query($sql);


    if($query->num_rows == 1) {
      $result = $query->fetch_assoc();
      $_SESSION['user_id'] = $result['id'];
      $_SESSION['user_type'] = $user_type_stock;
      if($user_type_stock == "employer") {
        header("Location: vacatures_reg.html");
      }
      header("Location: index.php");
    } else {
      $loginError = '<p style="color:black">Fout bij het inloggen</p>';
    }
    
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VAKJOB.SR| student login</title>

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
                <li role="presentation"><a href="vacatures.html">Vacatures</a></li>
                <li role="presentation"><a href="contact.html" >Contact</a></li>
                <?php echo $add_vacature; ?>
                
          
        </li>
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

       <h2>Login</h2>
       
      </div>
      <div class="row contact-wrap">
        <div class="status alert alert-success" style="display: none"></div>
        <div class="col-md-6 col-md-offset-3">
          <div id="sendmessage">ingelogd</div>
          <div id="errormessage"></div>
          <div class="well well-lg">
            <form class="form-inline" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="form-group">
                <label for="email" class="text-success">Gebruikersnaam:</label>
                <input type="text" class="form-control" name="email" id="email">
              </div>
              <div class="form-group">
                <label for="pwd" class="text-success">Wachtwoord:</label>
                <input type="password" class="form-control" name="pwd" id="pwd">
              </div>

                <br><br>

              <div class="form-group">
                <p style="color: black">Inloggen als:</p>
                <input type="radio" name="user_type" value="student" checked><span style="color: black"> Student</span><br>
                <input type="radio" name="user_type" value="employer"><span style="color: black"> Bedrijf</span><br>
              </div>

              <br><br>
            
              <button type="submit" name="login_submit" class="btn btn-primary">Inloggen</button>
              <br>
              <?php echo $loginError; ?>
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
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="horizontal">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Meld uw probleem</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <div class="col-lg-14">
                <input type="email" class="form-control" name="email" id="email" placeholder="email@adres.com">
            </div>
            <div class="form-group">
              <div class="col-lg-14">
                <textarea class="form-control" name="description" placeholder="voer uw bericht hier in"></textarea>
            </div>

          </div>
          <div class="modal-footer">
            <button type="submit" name="report_submit" class="btn btn-success">Versturen</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
          </div>
    </form class = "horizontal">
      </div>
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
